<?php
/**
 * Configuration file for Golden Deer Brasil website
 */

// Site configuration
define('SITE_NAME', 'Golden Deer Brasil');
define('SITE_URL', 'https://goldendeer.com.br');
define('SITE_EMAIL', 'contato@goldendeer.com.br');
define('SITE_PHONE', '+55 11 9999-9999');

// Company information
define('COMPANY_NAME', 'Golden Deer Brasil Ltda.');
define('COMPANY_CNPJ', 'xx.xxx.xxx/0001-xx');
define('COMPANY_ADDRESS', 'São Paulo, SP, Brasil');

// Social media links
define('LINKEDIN_URL', 'https://linkedin.com/company/golden-deer-brasil');
define('YOUTUBE_URL', 'https://youtube.com/@goldendeer');

// Email configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'contato@goldendeer.com.br');
define('SMTP_PASSWORD', ''); // Set in production

// Google Analytics
define('GA_TRACKING_ID', 'G-XXXXXXXXXX'); // Set in production

// reCAPTCHA (for production)
define('RECAPTCHA_SITE_KEY', '');
define('RECAPTCHA_SECRET_KEY', '');

// Database connection (if needed for advanced features)
define('DB_HOST', 'localhost');
define('DB_NAME', 'goldendeer');
define('DB_USER', 'root');
define('DB_PASS', '');

// Security settings
define('CSRF_TOKEN_NAME', 'csrf_token');
define('SESSION_TIMEOUT', 3600); // 1 hour

// File upload settings
define('MAX_UPLOAD_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_EXTENSIONS', ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png']);

// Company statistics (for display)
define('CHINA_INSTALLATIONS', '100+');
define('PROCESSING_TIME', '24');
define('WASTE_REDUCTION', '80-90%');
define('MUNICIPALITIES_SERVED', '50+');

// Technology specifications
$tech_specs = [
    'processing_time' => '24 hours',
    'reduction_rate' => '80-90%',
    'capacity_min' => '1kg/day',
    'capacity_max' => '1,000 tons/day',
    'output' => 'Organic fertilizer raw material',
    'energy_efficient' => true,
    'odorless' => true,
    'no_pollution' => true
];

// Major clients
$major_clients = [
    'Sinopec',
    'Baowu Steel',
    'Luneng Group',
    'Shanghai Municipal Government',
    'Dongjing Town',
    'Badong County'
];

// PPP Models
$ppp_models = [
    'classic' => [
        'name' => 'Classic PPP',
        'description' => 'Government provides land, Golden Deer builds/operates',
        'duration' => '20-25 years',
        'government_investment' => 'Land + utilities',
        'private_investment' => 'Equipment + operations'
    ],
    'bot' => [
        'name' => 'BOT (Build-Operate-Transfer)',
        'description' => 'Golden Deer builds/operates, then transfers to government',
        'duration' => '15 years',
        'government_investment' => 'Minimal',
        'private_investment' => 'Full investment + operations'
    ],
    'consortium' => [
        'name' => 'Municipal Consortium',
        'description' => 'Multiple cities share costs and benefits',
        'duration' => '25 years',
        'government_investment' => 'Shared among municipalities',
        'private_investment' => 'Equipment + technical management'
    ]
];
?>