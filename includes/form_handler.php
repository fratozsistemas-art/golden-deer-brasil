<?php
/**
 * Form submission handler for Golden Deer Brasil website
 */

function handleFormSubmission($data) {
    // Verify CSRF token
    if (!verify_csrf_token($data['csrf_token'] ?? '')) {
        return [
            'type' => 'error',
            'message' => 'Token de segurança inválido. Tente novamente.'
        ];
    }
    
    $form_type = $data['form_type'] ?? '';
    
    switch ($form_type) {
        case 'lead':
            return handleLeadForm($data);
        case 'newsletter':
            return handleNewsletterForm($data);
        case 'contact':
            return handleContactForm($data);
        default:
            return [
                'type' => 'error',
                'message' => 'Tipo de formulário inválido.'
            ];
    }
}

/**
 * Handle lead generation form
 */
function handleLeadForm($data) {
    // Validate required fields
    $required_fields = ['name', 'email', 'company', 'audience_type'];
    foreach ($required_fields as $field) {
        if (empty($data[$field])) {
            return [
                'type' => 'error',
                'message' => 'Por favor, preencha todos os campos obrigatórios.'
            ];
        }
    }
    
    // Validate email
    if (!validate_email($data['email'])) {
        return [
            'type' => 'error',
            'message' => 'E-mail inválido.'
        ];
    }
    
    // Validate phone if provided
    if (!empty($data['phone']) && !validate_phone($data['phone'])) {
        return [
            'type' => 'error',
            'message' => 'Telefone inválido.'
        ];
    }
    
    // Sanitize input data
    $lead_data = [
        'name' => sanitize_input($data['name']),
        'email' => sanitize_input($data['email']),
        'phone' => sanitize_input($data['phone'] ?? ''),
        'company' => sanitize_input($data['company']),
        'position' => sanitize_input($data['position'] ?? ''),
        'city' => sanitize_input($data['city'] ?? ''),
        'state' => sanitize_input($data['state'] ?? ''),
        'tons_per_day' => sanitize_input($data['tons_per_day'] ?? ''),
        'current_solution' => sanitize_input($data['current_solution'] ?? ''),
        'message' => sanitize_input($data['message'] ?? ''),
        'audience_type' => sanitize_input($data['audience_type']),
        'source_page' => sanitize_input($data['source_page'] ?? ''),
        'newsletter' => !empty($data['newsletter']),
        'created_at' => date('Y-m-d H:i:s'),
        'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? ''
    ];
    
    // Save to database/file (simple file storage for now)
    $success = saveLeadData($lead_data);
    
    if ($success) {
        // Send notification email
        sendLeadNotification($lead_data);
        
        // Send autoresponder to lead
        sendLeadAutoresponder($lead_data);
        
        // Log activity
        log_activity('Lead generated', "Email: {$lead_data['email']}, Type: {$lead_data['audience_type']}");
        
        return [
            'type' => 'success',
            'message' => 'Obrigado! Recebemos sua solicitação e entraremos em contato em breve.'
        ];
    } else {
        return [
            'type' => 'error',
            'message' => 'Erro interno. Tente novamente ou entre em contato conosco diretamente.'
        ];
    }
}

/**
 * Handle newsletter subscription
 */
function handleNewsletterForm($data) {
    if (empty($data['email']) || !validate_email($data['email'])) {
        return [
            'type' => 'error',
            'message' => 'E-mail inválido.'
        ];
    }
    
    $email = sanitize_input($data['email']);
    
    // Check if already subscribed
    if (isEmailSubscribed($email)) {
        return [
            'type' => 'info',
            'message' => 'Este e-mail já está inscrito na nossa newsletter.'
        ];
    }
    
    // Save subscription
    $success = saveNewsletterSubscription($email);
    
    if ($success) {
        log_activity('Newsletter subscription', "Email: {$email}");
        
        return [
            'type' => 'success',
            'message' => 'Inscrição realizada com sucesso! Você receberá nossas atualizações.'
        ];
    } else {
        return [
            'type' => 'error',
            'message' => 'Erro ao processar inscrição. Tente novamente.'
        ];
    }
}

/**
 * Handle contact form
 */
function handleContactForm($data) {
    $required_fields = ['name', 'email', 'message'];
    foreach ($required_fields as $field) {
        if (empty($data[$field])) {
            return [
                'type' => 'error',
                'message' => 'Por favor, preencha todos os campos obrigatórios.'
            ];
        }
    }
    
    if (!validate_email($data['email'])) {
        return [
            'type' => 'error',
            'message' => 'E-mail inválido.'
        ];
    }
    
    $contact_data = [
        'name' => sanitize_input($data['name']),
        'email' => sanitize_input($data['email']),
        'phone' => sanitize_input($data['phone'] ?? ''),
        'subject' => sanitize_input($data['subject'] ?? 'Contato via website'),
        'message' => sanitize_input($data['message']),
        'created_at' => date('Y-m-d H:i:s'),
        'ip_address' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];
    
    $success = saveContactMessage($contact_data);
    
    if ($success) {
        sendContactNotification($contact_data);
        log_activity('Contact form submitted', "Email: {$contact_data['email']}");
        
        return [
            'type' => 'success',
            'message' => 'Mensagem enviada com sucesso! Responderemos em breve.'
        ];
    } else {
        return [
            'type' => 'error',
            'message' => 'Erro ao enviar mensagem. Tente novamente.'
        ];
    }
}

/**
 * Save lead data to file
 */
function saveLeadData($data) {
    $leads_dir = 'data/leads';
    if (!is_dir($leads_dir)) {
        mkdir($leads_dir, 0755, true);
    }
    
    $filename = $leads_dir . '/' . date('Y-m-d') . '_leads.json';
    $leads = [];
    
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $leads = json_decode($content, true) ?: [];
    }
    
    $leads[] = $data;
    
    return file_put_contents($filename, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false;
}

/**
 * Save newsletter subscription
 */
function saveNewsletterSubscription($email) {
    $newsletter_file = 'data/newsletter.json';
    $subscribers = [];
    
    if (file_exists($newsletter_file)) {
        $content = file_get_contents($newsletter_file);
        $subscribers = json_decode($content, true) ?: [];
    }
    
    if (!in_array($email, $subscribers)) {
        $subscribers[] = $email;
        return file_put_contents($newsletter_file, json_encode($subscribers, JSON_PRETTY_PRINT)) !== false;
    }
    
    return true; // Already subscribed
}

/**
 * Check if email is already subscribed
 */
function isEmailSubscribed($email) {
    $newsletter_file = 'data/newsletter.json';
    
    if (file_exists($newsletter_file)) {
        $content = file_get_contents($newsletter_file);
        $subscribers = json_decode($content, true) ?: [];
        return in_array($email, $subscribers);
    }
    
    return false;
}

/**
 * Save contact message
 */
function saveContactMessage($data) {
    $contacts_dir = 'data/contacts';
    if (!is_dir($contacts_dir)) {
        mkdir($contacts_dir, 0755, true);
    }
    
    $filename = $contacts_dir . '/' . date('Y-m-d') . '_contacts.json';
    $contacts = [];
    
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $contacts = json_decode($content, true) ?: [];
    }
    
    $contacts[] = $data;
    
    return file_put_contents($filename, json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) !== false;
}

/**
 * Send lead notification email
 */
function sendLeadNotification($data) {
    $to = SITE_EMAIL;
    $subject = 'Novo Lead - ' . ucfirst($data['audience_type']) . ' - Golden Deer Brasil';
    
    $audience_labels = [
        'b2g' => 'Governo/Município',
        'b2b' => 'Empresa Privada'
    ];
    
    $message = "
    <h2>Novo Lead Gerado</h2>
    
    <h3>Informações do Lead:</h3>
    <ul>
        <li><strong>Nome:</strong> {$data['name']}</li>
        <li><strong>E-mail:</strong> {$data['email']}</li>
        <li><strong>Telefone:</strong> {$data['phone']}</li>
        <li><strong>Empresa/Órgão:</strong> {$data['company']}</li>
        <li><strong>Cargo:</strong> {$data['position']}</li>
        <li><strong>Cidade:</strong> {$data['city']}</li>
        <li><strong>Estado:</strong> {$data['state']}</li>
        <li><strong>Tipo:</strong> {$audience_labels[$data['audience_type']] ?? $data['audience_type']}</li>
        <li><strong>Toneladas/dia:</strong> {$data['tons_per_day']}</li>
        <li><strong>Solução atual:</strong> {$data['current_solution']}</li>
        <li><strong>Newsletter:</strong> " . ($data['newsletter'] ? 'Sim' : 'Não') . "</li>
        <li><strong>Página de origem:</strong> {$data['source_page']}</li>
        <li><strong>Data:</strong> {$data['created_at']}</li>
    </ul>
    
    <h3>Mensagem:</h3>
    <p>{$data['message']}</p>
    
    <h3>Dados técnicos:</h3>
    <ul>
        <li><strong>IP:</strong> {$data['ip_address']}</li>
        <li><strong>User Agent:</strong> {$data['user_agent']}</li>
    </ul>
    ";
    
    return send_email($to, $subject, $message);
}

/**
 * Send autoresponder to lead
 */
function sendLeadAutoresponder($data) {
    $to = $data['email'];
    $name = $data['name'];
    $audience_type = $data['audience_type'];
    
    if ($audience_type === 'b2g') {
        $subject = 'Obrigado pelo interesse em nossas soluções para municípios - Golden Deer Brasil';
        $content = getB2GAutoresponderContent($name);
    } else {
        $subject = 'Obrigado pelo interesse em nossas soluções corporativas - Golden Deer Brasil';
        $content = getB2BAutoresponderContent($name);
    }
    
    return send_email($to, $subject, $content);
}

/**
 * Get B2G autoresponder content
 */
function getB2GAutoresponderContent($name) {
    return "
    <h2>Olá, {$name}!</h2>
    
    <p>Obrigado pelo interesse nas soluções Golden Deer Brasil para seu município.</p>
    
    <p>Recebemos sua solicitação e nossa equipe de especialistas em soluções municipais entrará em contato em até 24 horas para:</p>
    
    <ul>
        <li>Apresentar nossa tecnologia comprovada (100+ instalações na China)</li>
        <li>Discutir modelos PPP adequados ao seu município</li>
        <li>Calcular o ROI específico para sua realidade</li>
        <li>Explicar como nossa solução garante compliance PNRS</li>
    </ul>
    
    <h3>Enquanto isso, confira:</h3>
    <ul>
        <li><a href='" . SITE_URL . "/index.php?page=solutions-municipalities'>Soluções completas para municípios</a></li>
        <li><a href='" . SITE_URL . "/index.php?page=financing'>Modelos de financiamento PPP</a></li>
        <li><a href='" . SITE_URL . "/index.php?page=projects'>Casos de sucesso na China</a></li>
    </ul>
    
    <p>Estamos ansiosos para ajudar seu município a transformar resíduos em recursos!</p>
    
    <p><strong>Equipe Golden Deer Brasil</strong><br>
    Especialistas em Gestão de Resíduos Orgânicos<br>
    📧 municipios@goldendeer.com.br<br>
    📱 " . SITE_PHONE . "</p>
    ";
}

/**
 * Get B2B autoresponder content  
 */
function getB2BAutoresponderContent($name) {
    return "
    <h2>Olá, {$name}!</h2>
    
    <p>Obrigado pelo interesse nas soluções Golden Deer Brasil para sua empresa.</p>
    
    <p>Recebemos sua solicitação e nossa equipe comercial entrará em contato em até 24 horas para:</p>
    
    <ul>
        <li>Apresentar nossa tecnologia de processamento em 24h</li>
        <li>Mostrar como pode impactar positivamente seus relatórios ESG</li>
        <li>Calcular economia operacional para sua empresa</li>
        <li>Demonstrar cases de sucesso (Sinopec, Baowu Steel)</li>
    </ul>
    
    <h3>Recursos úteis:</h3>
    <ul>
        <li><a href='" . SITE_URL . "/index.php?page=solutions-corporations'>Soluções para empresas</a></li>
        <li><a href='" . SITE_URL . "/index.php?page=technology'>Especificações técnicas</a></li>
        <li><a href='" . SITE_URL . "/index.php?page=projects&filter=corporate'>Cases corporativos</a></li>
    </ul>
    
    <p>Vamos juntos transformar os resíduos da sua empresa em vantagem competitiva!</p>
    
    <p><strong>Equipe Golden Deer Brasil</strong><br>
    Especialistas em Sustentabilidade Corporativa<br>
    📧 empresas@goldendeer.com.br<br>
    📱 " . SITE_PHONE . "</p>
    ";
}

/**
 * Send contact notification
 */
function sendContactNotification($data) {
    $to = SITE_EMAIL;
    $subject = 'Nova mensagem de contato - Golden Deer Brasil';
    
    $message = "
    <h2>Nova Mensagem de Contato</h2>
    
    <ul>
        <li><strong>Nome:</strong> {$data['name']}</li>
        <li><strong>E-mail:</strong> {$data['email']}</li>
        <li><strong>Telefone:</strong> {$data['phone']}</li>
        <li><strong>Assunto:</strong> {$data['subject']}</li>
        <li><strong>Data:</strong> {$data['created_at']}</li>
    </ul>
    
    <h3>Mensagem:</h3>
    <p>{$data['message']}</p>
    
    <p><strong>IP:</strong> {$data['ip_address']}</p>
    ";
    
    return send_email($to, $subject, $message);
}
?>