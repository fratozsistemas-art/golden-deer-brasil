<!-- Hero Section -->
<section class="hero" style="background: linear-gradient(135deg, rgba(47, 82, 51, 0.95) 0%, rgba(212, 175, 55, 0.95) 100%); padding: 3rem 0;">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="animate-fade-in"><?php echo t('contact_title'); ?></h1>
            <p class="lead animate-fade-in"><?php echo t('contact_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8">
                <div class="contact-form-section">
                    <h2 class="mb-4">Solicite Informações</h2>
                    <p class="mb-4">
                        Preencha o formulário abaixo e nossa equipe de especialistas entrará em contato em até 24 horas.
                    </p>
                    
                    <form id="contactForm" method="POST" action="<?php echo get_url(); ?>">
                        <input type="hidden" name="form_type" value="contact">
                        <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                        
                        <!-- Contact Type Selection -->
                        <div class="form-group">
                            <label class="form-label">Tipo de Solicitação</label>
                            <div class="contact-type-buttons">
                                <button type="button" class="btn btn-outline-primary contact-type-btn active" data-type="general">
                                    <i class="fas fa-info-circle"></i>
                                    Informações Gerais
                                </button>
                                <button type="button" class="btn btn-outline-secondary contact-type-btn" data-type="demo">
                                    <i class="fas fa-presentation"></i>
                                    Solicitar Demonstração
                                </button>
                                <button type="button" class="btn btn-outline-success contact-type-btn" data-type="quote">
                                    <i class="fas fa-calculator"></i>
                                    Solicitar Orçamento
                                </button>
                                <button type="button" class="btn btn-outline-info contact-type-btn" data-type="partnership">
                                    <i class="fas fa-handshake"></i>
                                    Parceria Comercial
                                </button>
                            </div>
                            <input type="hidden" name="contact_type" id="contact-type-input" value="general">
                        </div>
                        
                        <!-- Organization Type -->
                        <div class="form-group">
                            <label class="form-label">Tipo de Organização</label>
                            <div class="organization-buttons">
                                <button type="button" class="btn btn-outline-primary org-btn" data-org="municipality">
                                    <i class="fas fa-city"></i>
                                    Município/Governo
                                </button>
                                <button type="button" class="btn btn-outline-secondary org-btn" data-org="airport">
                                    <i class="fas fa-plane"></i>
                                    Aeroporto
                                </button>
                                <button type="button" class="btn btn-outline-success org-btn" data-org="corporation">
                                    <i class="fas fa-building"></i>
                                    Empresa Privada
                                </button>
                                <button type="button" class="btn btn-outline-info org-btn" data-org="other">
                                    <i class="fas fa-ellipsis-h"></i>
                                    Outro
                                </button>
                            </div>
                            <input type="hidden" name="organization_type" id="org-type-input">
                        </div>
                        
                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-name" class="form-label"><?php echo t('form_name'); ?> *</label>
                                    <input type="text" class="form-control" id="contact-name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-email" class="form-label"><?php echo t('form_email'); ?> *</label>
                                    <input type="email" class="form-control" id="contact-email" name="email" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-phone" class="form-label"><?php echo t('form_phone'); ?></label>
                                    <input type="tel" class="form-control" id="contact-phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-company" class="form-label"><?php echo t('form_company'); ?> *</label>
                                    <input type="text" class="form-control" id="contact-company" name="company" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-position" class="form-label"><?php echo t('form_position'); ?></label>
                                    <input type="text" class="form-control" id="contact-position" name="position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-city" class="form-label">Cidade/Estado</label>
                                    <input type="text" class="form-control" id="contact-city" name="city_state" placeholder="Ex: São Paulo/SP">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Details -->
                        <div class="project-details">
                            <h4 class="mb-3">Detalhes do Projeto</h4>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact-tons" class="form-label">Volume de Resíduos Orgânicos</label>
                                        <select class="form-control" id="contact-tons" name="waste_volume">
                                            <option value="">Selecione</option>
                                            <option value="0-1">Menos de 1 ton/dia</option>
                                            <option value="1-5">1 a 5 tons/dia</option>
                                            <option value="5-20">5 a 20 tons/dia</option>
                                            <option value="20-100">20 a 100 tons/dia</option>
                                            <option value="100-500">100 a 500 tons/dia</option>
                                            <option value="500-1000">500 a 1.000 tons/dia</option>
                                            <option value="1000+">Mais de 1.000 tons/dia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact-timeline" class="form-label">Cronograma Desejado</label>
                                        <select class="form-control" id="contact-timeline" name="timeline">
                                            <option value="">Selecione</option>
                                            <option value="immediate">Imediato (até 3 meses)</option>
                                            <option value="short">Curto prazo (3-6 meses)</option>
                                            <option value="medium">Médio prazo (6-12 meses)</option>
                                            <option value="long">Longo prazo (mais de 1 ano)</option>
                                            <option value="planning">Ainda estamos planejando</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="contact-budget" class="form-label">Orçamento Estimado</label>
                                <select class="form-control" id="contact-budget" name="budget_range">
                                    <option value="">Selecione</option>
                                    <option value="0-500k">Até R$ 500 mil</option>
                                    <option value="500k-1M">R$ 500 mil a R$ 1 milhão</option>
                                    <option value="1M-5M">R$ 1 milhão a R$ 5 milhões</option>
                                    <option value="5M-10M">R$ 5 milhões a R$ 10 milhões</option>
                                    <option value="10M+">Mais de R$ 10 milhões</option>
                                    <option value="undefined">Ainda não definido</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Message -->
                        <div class="form-group">
                            <label for="contact-message" class="form-label"><?php echo t('form_message'); ?> *</label>
                            <textarea class="form-control" id="contact-message" name="message" rows="5" required placeholder="Descreva suas necessidades, desafios atuais e objetivos com a implementação da nossa tecnologia..."></textarea>
                        </div>
                        
                        <!-- Additional Options -->
                        <div class="form-options">
                            <div class="checkbox-group mb-3">
                                <input type="checkbox" id="contact-newsletter" name="newsletter" value="1">
                                <label for="contact-newsletter">Receber newsletter com atualizações sobre tecnologia e cases de sucesso</label>
                            </div>
                            
                            <div class="checkbox-group mb-3">
                                <input type="checkbox" id="contact-whitepapers" name="whitepapers" value="1">
                                <label for="contact-whitepapers">Receber whitepapers exclusivos sobre gestão de resíduos orgânicos</label>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane"></i>
                                Enviar Solicitação
                            </button>
                            <p class="mt-3 text-muted">
                                <i class="fas fa-clock"></i>
                                Nossa equipe responderá em até 24 horas
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="col-md-4">
                <div class="contact-info-section">
                    <h3 class="mb-4">Informações de Contato</h3>
                    
                    <!-- Direct Contact -->
                    <div class="contact-method mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Telefone</h5>
                            <p><a href="tel:<?php echo str_replace([' ', '-', '(', ')'], '', SITE_PHONE); ?>"><?php echo SITE_PHONE; ?></a></p>
                            <small class="text-muted">Segunda a Sexta: 9h às 18h</small>
                        </div>
                    </div>
                    
                    <div class="contact-method mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h5>E-mail</h5>
                            <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                            <small class="text-muted">Resposta em até 4 horas</small>
                        </div>
                    </div>
                    
                    <div class="contact-method mb-4">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Escritório</h5>
                            <p><?php echo COMPANY_ADDRESS; ?></p>
                            <small class="text-muted">Atendimento presencial com agendamento</small>
                        </div>
                    </div>
                    
                    <!-- Specialized Contacts -->
                    <div class="specialized-contacts mb-4">
                        <h5 class="mb-3">Contatos Especializados</h5>
                        
                        <div class="specialist-contact mb-3">
                            <div class="specialist-icon">
                                <i class="fas fa-city text-primary"></i>
                            </div>
                            <div>
                                <strong>Soluções Municipais</strong>
                                <p><a href="mailto:municipios@goldendeer.com.br">municipios@goldendeer.com.br</a></p>
                            </div>
                        </div>
                        
                        <div class="specialist-contact mb-3">
                            <div class="specialist-icon">
                                <i class="fas fa-plane text-secondary"></i>
                            </div>
                            <div>
                                <strong>Soluções Aeroportuárias</strong>
                                <p><a href="mailto:aeroportos@goldendeer.com.br">aeroportos@goldendeer.com.br</a></p>
                            </div>
                        </div>
                        
                        <div class="specialist-contact mb-3">
                            <div class="specialist-icon">
                                <i class="fas fa-building text-success"></i>
                            </div>
                            <div>
                                <strong>Soluções Corporativas</strong>
                                <p><a href="mailto:corporativo@goldendeer.com.br">corporativo@goldendeer.com.br</a></p>
                            </div>
                        </div>
                        
                        <div class="specialist-contact">
                            <div class="specialist-icon">
                                <i class="fas fa-handshake text-info"></i>
                            </div>
                            <div>
                                <strong>Parcerias & Representação</strong>
                                <p><a href="mailto:parcerias@goldendeer.com.br">parcerias@goldendeer.com.br</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="social-media">
                        <h5 class="mb-3">Redes Sociais</h5>
                        <div class="social-links">
                            <?php if (defined('LINKEDIN_URL') && !empty(LINKEDIN_URL)): ?>
                            <a href="<?php echo LINKEDIN_URL; ?>" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-linkedin-in"></i>
                                <span>LinkedIn</span>
                            </a>
                            <?php endif; ?>
                            
                            <?php if (defined('YOUTUBE_URL') && !empty(YOUTUBE_URL)): ?>
                            <a href="<?php echo YOUTUBE_URL; ?>" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-youtube"></i>
                                <span>YouTube</span>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="quick-actions mt-4">
                    <h5 class="mb-3">Ações Rápidas</h5>
                    
                    <div class="quick-action mb-3">
                        <a href="<?php echo get_url('financing'); ?>" class="btn btn-outline-primary btn-block">
                            <i class="fas fa-calculator"></i>
                            Calculadora ROI
                        </a>
                    </div>
                    
                    <div class="quick-action mb-3">
                        <a href="<?php echo get_url('resources'); ?>" class="btn btn-outline-secondary btn-block">
                            <i class="fas fa-download"></i>
                            Downloads & Recursos
                        </a>
                    </div>
                    
                    <div class="quick-action mb-3">
                        <a href="<?php echo get_url('projects'); ?>" class="btn btn-outline-success btn-block">
                            <i class="fas fa-eye"></i>
                            Ver Cases de Sucesso
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Perguntas Frequentes</h2>
            <p class="lead">Respostas às dúvidas mais comuns sobre nossa tecnologia</p>
        </div>
        
        <div class="faq-section">
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-category mb-4">
                        <h4 class="mb-3"><i class="fas fa-cog text-primary"></i> Tecnologia</h4>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>Quanto tempo leva o processamento?</strong>
                            </div>
                            <div class="faq-answer">
                                Apenas 24 horas para processar completamente os resíduos orgânicos, versus 3-6 meses da compostagem tradicional.
                            </div>
                        </div>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>A tecnologia gera odores?</strong>
                            </div>
                            <div class="faq-answer">
                                Não. O processo é 100% livre de odores pois ocorre em sistema completamente selado com controle de temperatura e aeração.
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <strong>Qual a capacidade de processamento?</strong>
                            </div>
                            <div class="faq-answer">
                                Nossas soluções atendem desde 1kg/dia até 1.000 toneladas/dia, adaptáveis conforme a necessidade.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="faq-category mb-4">
                        <h4 class="mb-3"><i class="fas fa-dollar-sign text-success"></i> Financeiro</h4>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>Qual o investimento necessário?</strong>
                            </div>
                            <div class="faq-answer">
                                O investimento varia conforme a capacidade: R$ 267.000 por tonelada/dia de capacidade. Oferecemos modelos PPP para municípios.
                            </div>
                        </div>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>Quanto tempo para retorno do investimento?</strong>
                            </div>
                            <div class="faq-answer">
                                O payback típico é de 2-4 anos, considerando economia na destinação e receita com venda do fertilizante produzido.
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <strong>Existem opções de financiamento?</strong>
                            </div>
                            <div class="faq-answer">
                                Sim, trabalhamos com modelos PPP, leasing operacional e temos parcerias com bancos para linhas de crédito verde.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-category">
                        <h4 class="mb-3"><i class="fas fa-gavel text-warning"></i> Regulatório</h4>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>A tecnologia atende à PNRS?</strong>
                            </div>
                            <div class="faq-answer">
                                Sim, nossa solução atende integralmente à Política Nacional de Resíduos Sólidos (Lei 12.305/2010) e normas correlatas.
                            </div>
                        </div>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>Precisa de licença ambiental?</strong>
                            </div>
                            <div class="faq-answer">
                                Sim, mas nosso processo facilita a obtenção pois é limpo, sem odores e com baixo impacto ambiental.
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <strong>Atende normas ANVISA?</strong>
                            </div>
                            <div class="faq-answer">
                                Perfeitamente. Especialmente importante para aeroportos, nossa tecnologia elimina resíduos em 24h atendendo controle fitossanitário.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="faq-category">
                        <h4 class="mb-3"><i class="fas fa-tools text-info"></i> Implementação</h4>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>Quanto tempo para instalação?</strong>
                            </div>
                            <div class="faq-answer">
                                De 4-6 meses desde aprovação do projeto até operação plena, incluindo licenciamento, instalação e testes.
                            </div>
                        </div>
                        
                        <div class="faq-item mb-3">
                            <div class="faq-question">
                                <strong>Precisa de equipe especializada?</strong>
                            </div>
                            <div class="faq-answer">
                                Fornecemos treinamento completo. A operação é simples, requerendo apenas 1-2 pessoas por turno.
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <strong>Há suporte pós-instalação?</strong>
                            </div>
                            <div class="faq-answer">
                                Sim, oferecemos suporte técnico 24/7, manutenção preventiva e monitoramento remoto via IoT.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Hours & Support -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Horários de Atendimento</h2>
        </div>
        
        <div class="office-hours-grid grid-3">
            <div class="hours-card">
                <div class="hours-icon mb-3">
                    <i class="fas fa-phone"></i>
                </div>
                <h4>Atendimento Telefônico</h4>
                <div class="hours-info">
                    <div class="hours-item">
                        <span class="day">Segunda a Sexta:</span>
                        <span class="time">9h às 18h</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Sábados:</span>
                        <span class="time">9h às 12h</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Emergências:</span>
                        <span class="time">24/7</span>
                    </div>
                </div>
            </div>
            
            <div class="hours-card">
                <div class="hours-icon mb-3" style="color: var(--accent-blue);">
                    <i class="fas fa-envelope"></i>
                </div>
                <h4>E-mail & Digital</h4>
                <div class="hours-info">
                    <div class="hours-item">
                        <span class="day">Resposta padrão:</span>
                        <span class="time">Até 4 horas</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Propostas técnicas:</span>
                        <span class="time">Até 24 horas</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Relatórios técnicos:</span>
                        <span class="time">2-3 dias úteis</span>
                    </div>
                </div>
            </div>
            
            <div class="hours-card">
                <div class="hours-icon mb-3" style="color: var(--secondary-green);">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h4>Atendimento Presencial</h4>
                <div class="hours-info">
                    <div class="hours-item">
                        <span class="day">Agendamento:</span>
                        <span class="time">Obrigatório</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Reuniões técnicas:</span>
                        <span class="time">Seg a Sex</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Apresentações:</span>
                        <span class="time">Flexível</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact page specific styles */
.contact-type-buttons,
.organization-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.contact-type-btn,
.org-btn {
    flex: 1;
    min-width: 160px;
    padding: 0.75rem;
    font-size: 0.875rem;
}

.contact-type-btn.active,
.org-btn.active {
    background: var(--primary-gold);
    border-color: var(--primary-gold);
    color: white;
}

.contact-method {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
}

.contact-method:last-child {
    border-bottom: none;
}

.contact-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    background: var(--primary-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
}

.specialist-contact {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.specialist-icon {
    flex-shrink: 0;
    font-size: 1.25rem;
}

.social-links {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.social-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 0;
    color: var(--dark-gray);
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: var(--primary-gold);
}

.faq-item {
    background: white;
    padding: 1rem;
    border-radius: 0.5rem;
    border-left: 3px solid var(--primary-gold);
}

.faq-question {
    margin-bottom: 0.5rem;
}

.faq-answer {
    color: var(--medium-gray);
    line-height: 1.5;
}

.hours-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.hours-icon {
    font-size: 3rem;
    color: var(--primary-gold);
}

.hours-item {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px solid #eee;
}

.hours-item:last-child {
    border-bottom: none;
}

.day {
    font-weight: 500;
}

.time {
    color: var(--primary-gold);
    font-weight: 600;
}

@media (max-width: 768px) {
    .contact-type-buttons,
    .organization-buttons {
        flex-direction: column;
    }
    
    .contact-type-btn,
    .org-btn {
        min-width: auto;
        width: 100%;
    }
    
    .hours-item {
        flex-direction: column;
        gap: 0.25rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Contact type selection
    document.querySelectorAll('.contact-type-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.contact-type-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('contact-type-input').value = this.getAttribute('data-type');
        });
    });
    
    // Organization type selection
    document.querySelectorAll('.org-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.org-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('org-type-input').value = this.getAttribute('data-org');
        });
    });
    
    // Auto-populate from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    
    if (urlParams.get('type')) {
        const typeBtn = document.querySelector(`[data-type="${urlParams.get('type')}"]`);
        if (typeBtn) typeBtn.click();
    }
    
    if (urlParams.get('audience')) {
        const audienceMap = {
            'municipality': 'municipality',
            'airport': 'airport',
            'b2b': 'corporation'
        };
        const orgType = audienceMap[urlParams.get('audience')];
        if (orgType) {
            const orgBtn = document.querySelector(`[data-org="${orgType}"]`);
            if (orgBtn) orgBtn.click();
        }
    }
});
</script>