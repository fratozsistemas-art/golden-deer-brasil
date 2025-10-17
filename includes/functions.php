<?php
/**
 * Utility functions for Golden Deer Brasil website
 */

/**
 * Sanitize user input
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Generate CSRF token
 */
function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF token
 */
function verify_csrf_token($token) {
    return hash_equals($_SESSION['csrf_token'] ?? '', $token);
}

/**
 * Get current page for navigation highlighting
 */
function get_current_page() {
    return $_GET['page'] ?? 'home';
}

/**
 * Check if current page matches given page
 */
function is_current_page($page) {
    return get_current_page() === $page;
}

/**
 * Get language-specific URL
 */
function get_url($page = '', $params = []) {
    $url = 'index.php';
    $query_params = [];
    
    if (!empty($page)) {
        $query_params['page'] = $page;
    }
    
    if (!empty($_SESSION['language']) && $_SESSION['language'] !== 'pt') {
        $query_params['lang'] = $_SESSION['language'];
    }
    
    $query_params = array_merge($query_params, $params);
    
    if (!empty($query_params)) {
        $url .= '?' . http_build_query($query_params);
    }
    
    return $url;
}

/**
 * Get language text
 */
function t($key) {
    global $lang;
    return $lang[$key] ?? $key;
}

/**
 * Format number with locale
 */
function format_number($number, $decimals = 0) {
    $locale = $_SESSION['language'] === 'en' ? 'en_US' : 'pt_BR';
    return number_format($number, $decimals, '.', ',');
}

/**
 * Format currency
 */
function format_currency($amount, $currency = 'BRL') {
    if ($currency === 'USD') {
        return '$' . number_format($amount, 2, '.', ',');
    } else {
        return 'R$ ' . number_format($amount, 2, ',', '.');
    }
}

/**
 * Validate email address
 */
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Validate phone number (basic)
 */
function validate_phone($phone) {
    $phone = preg_replace('/[^0-9]/', '', $phone);
    return strlen($phone) >= 10 && strlen($phone) <= 15;
}

/**
 * Send email (simple version, use PHPMailer in production)
 */
function send_email($to, $subject, $message, $from = SITE_EMAIL) {
    $headers = [
        'From' => $from,
        'Reply-To' => $from,
        'Content-Type' => 'text/html; charset=UTF-8',
        'X-Mailer' => 'PHP/' . phpversion()
    ];
    
    $header_string = '';
    foreach ($headers as $key => $value) {
        $header_string .= $key . ': ' . $value . "\r\n";
    }
    
    return mail($to, $subject, $message, $header_string);
}

/**
 * Log activity (for production monitoring)
 */
function log_activity($action, $details = '') {
    $log_entry = date('Y-m-d H:i:s') . " - {$action}";
    if (!empty($details)) {
        $log_entry .= " - {$details}";
    }
    $log_entry .= " - IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
    
    error_log($log_entry, 3, 'logs/activity.log');
}

/**
 * Calculate ROI for waste processing
 */
function calculate_roi($tons_per_day, $current_cost_per_ton, $years = 10) {
    // Equipment cost calculation (BRL 267,000 per ton/day capacity)
    $equipment_cost = $tons_per_day * 267000;
    
    // Annual processing volume
    $annual_tons = $tons_per_day * 365;
    
    // Current annual disposal cost
    $current_annual_cost = $annual_tons * $current_cost_per_ton;
    
    // Estimated new cost (30% of current for processing + fertilizer revenue)
    $new_annual_cost = $current_annual_cost * 0.30;
    
    // Annual savings
    $annual_savings = $current_annual_cost - $new_annual_cost;
    
    // ROI calculation
    $total_savings = $annual_savings * $years;
    $roi_percentage = (($total_savings - $equipment_cost) / $equipment_cost) * 100;
    
    // Payback period
    $payback_years = $equipment_cost / $annual_savings;
    
    return [
        'equipment_cost' => $equipment_cost,
        'annual_savings' => $annual_savings,
        'total_savings' => $total_savings,
        'roi_percentage' => $roi_percentage,
        'payback_years' => $payback_years,
        'annual_tons' => $annual_tons
    ];
}

/**
 * Get client testimonials
 */
function get_testimonials() {
    return [
        [
            'client' => 'Shanghai Municipal Government',
            'project' => 'Dongjing Town Project',
            'capacity' => '20 tons/day',
            'quote' => 'Revolutionary technology that solved our organic waste crisis in record time.',
            'results' => '9 installation sites serving 100,000+ residents'
        ],
        [
            'client' => 'Baowu Steel Group',
            'project' => 'Corporate Headquarters',
            'capacity' => '1 ton/day',
            'quote' => 'Impressive efficiency and zero odor. Perfect for our headquarters facility.',
            'results' => '90% waste reduction, employee satisfaction increased'
        ],
        [
            'client' => 'Sinopec',
            'project' => 'Industrial Complex',
            'capacity' => '5 tons/day',
            'quote' => 'Reliable technology that meets our strict environmental standards.',
            'results' => 'ISO compliance maintained, operational costs reduced 40%'
        ]
    ];
}
?>