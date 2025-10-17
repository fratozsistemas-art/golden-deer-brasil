<!DOCTYPE html>
<html lang="<?php echo $_SESSION['language'] ?? 'pt'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    // Dynamic page titles and descriptions
    $page_meta = [
        'home' => [
            'title' => t('hero_title') . ' | ' . SITE_NAME,
            'description' => t('hero_subtitle'),
            'keywords' => 'resíduos orgânicos, PNRS, sustentabilidade, tecnologia chinesa, municípios, aeroportos'
        ],
        'solutions-municipalities' => [
            'title' => t('nav_solutions_municipalities') . ' | ' . SITE_NAME,
            'description' => 'Soluções PNRS para municípios com tecnologia comprovada da China',
            'keywords' => 'PNRS, municípios, PPP, resíduos orgânicos, compostagem'
        ],
        'solutions-airports' => [
            'title' => t('nav_solutions_airports') . ' | ' . SITE_NAME,
            'description' => 'Processamento eficiente de resíduos aeroportuários',
            'keywords' => 'aeroportos, resíduos, sustentabilidade, processamento 24h'
        ],
        'solutions-corporations' => [
            'title' => t('nav_solutions_corporations') . ' | ' . SITE_NAME,
            'description' => 'Compliance ESG e sustentabilidade corporativa',
            'keywords' => 'ESG, sustentabilidade, empresas, compliance ambiental'
        ],
        'technology' => [
            'title' => t('nav_technology') . ' | ' . SITE_NAME,
            'description' => 'Tecnologia microbiana avançada para processamento de resíduos orgânicos',
            'keywords' => 'tecnologia, microbiologia, fermentação aeróbica, processamento'
        ],
        'projects' => [
            'title' => t('nav_projects') . ' | ' . SITE_NAME,
            'description' => 'Casos de sucesso na China: Sinopec, Baowu Steel, municípios',
            'keywords' => 'casos de sucesso, China, Sinopec, Baowu, projetos'
        ],
        'about' => [
            'title' => t('nav_about') . ' | ' . SITE_NAME,
            'description' => 'Sobre Golden Deer Brasil - Transferência de tecnologia China-Brasil',
            'keywords' => 'sobre, empresa, tecnologia chinesa, Brasil'
        ],
        'financing' => [
            'title' => t('nav_financing') . ' | ' . SITE_NAME,
            'description' => 'Modelos PPP e financiamento para projetos de resíduos orgânicos',
            'keywords' => 'PPP, financiamento, BOT, consórcio municipal'
        ],
        'resources' => [
            'title' => t('nav_resources') . ' | ' . SITE_NAME,
            'description' => 'Recursos e materiais sobre processamento de resíduos orgânicos',
            'keywords' => 'recursos, downloads, materiais, documentos'
        ],
        'contact' => [
            'title' => t('nav_contact') . ' | ' . SITE_NAME,
            'description' => 'Entre em contato para soluções de resíduos orgânicos',
            'keywords' => 'contato, orçamento, proposta, demonstração'
        ]
    ];
    
    $current_page = get_current_page();
    $meta = $page_meta[$current_page] ?? $page_meta['home'];
    ?>
    
    <title><?php echo htmlspecialchars($meta['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta['keywords']); ?>">
    <meta name="author" content="<?php echo COMPANY_NAME; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo SITE_URL . get_url($current_page); ?>">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($meta['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta property="og:url" content="<?php echo SITE_URL . get_url($current_page); ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($meta['title']); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo COMPANY_NAME; ?>",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>/assets/images/logo.png",
        "description": "<?php echo htmlspecialchars($meta['description']); ?>",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "BR",
            "addressLocality": "São Paulo",
            "addressRegion": "SP"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?php echo SITE_PHONE; ?>",
            "contactType": "customer service",
            "email": "<?php echo SITE_EMAIL; ?>"
        },
        "sameAs": [
            "<?php echo LINKEDIN_URL; ?>",
            "<?php echo YOUTUBE_URL; ?>"
        ]
    }
    </script>
    
    <?php if (defined('GA_TRACKING_ID') && !empty(GA_TRACKING_ID)): ?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA_TRACKING_ID; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo GA_TRACKING_ID; ?>');
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- Skip Navigation Link for Accessibility -->
    <a href="#main-content" class="skip-link"><?php echo $_SESSION['language'] === 'en' ? 'Skip to main content' : 'Pular para conteúdo principal'; ?></a>
    
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="d-flex justify-between align-center">
                <!-- Brand -->
                <a href="<?php echo get_url(); ?>" class="navbar-brand">
                    <i class="fas fa-leaf"></i>
                    Golden Deer Brasil
                </a>
                
                <!-- Desktop Navigation -->
                <ul class="navbar-nav" id="navbar-nav">
                    <li>
                        <a href="<?php echo get_url(); ?>" class="nav-link <?php echo is_current_page('home') ? 'active' : ''; ?>">
                            <?php echo t('nav_home'); ?>
                        </a>
                    </li>
                    
                    <!-- Solutions Dropdown -->
                    <li class="dropdown">
                        <a href="#" class="nav-link <?php echo in_array(get_current_page(), ['solutions-municipalities', 'solutions-airports', 'solutions-corporations']) ? 'active' : ''; ?>">
                            <?php echo t('nav_solutions'); ?> <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="<?php echo get_url('solutions-municipalities'); ?>" class="dropdown-item">
                                <i class="fas fa-city"></i> <?php echo t('nav_solutions_municipalities'); ?>
                            </a>
                            <a href="<?php echo get_url('solutions-airports'); ?>" class="dropdown-item">
                                <i class="fas fa-plane"></i> <?php echo t('nav_solutions_airports'); ?>
                            </a>
                            <a href="<?php echo get_url('solutions-corporations'); ?>" class="dropdown-item">
                                <i class="fas fa-building"></i> <?php echo t('nav_solutions_corporations'); ?>
                            </a>
                        </div>
                    </li>
                    
                    <li>
                        <a href="<?php echo get_url('technology'); ?>" class="nav-link <?php echo is_current_page('technology') ? 'active' : ''; ?>">
                            <?php echo t('nav_technology'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo get_url('projects'); ?>" class="nav-link <?php echo is_current_page('projects') ? 'active' : ''; ?>">
                            <?php echo t('nav_projects'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo get_url('about'); ?>" class="nav-link <?php echo is_current_page('about') ? 'active' : ''; ?>">
                            <?php echo t('nav_about'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo get_url('financing'); ?>" class="nav-link <?php echo is_current_page('financing') ? 'active' : ''; ?>">
                            <?php echo t('nav_financing'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo get_url('resources'); ?>" class="nav-link <?php echo is_current_page('resources') ? 'active' : ''; ?>">
                            <?php echo t('nav_resources'); ?>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo get_url('contact'); ?>" class="nav-link <?php echo is_current_page('contact') ? 'active' : ''; ?>">
                            <?php echo t('nav_contact'); ?>
                        </a>
                    </li>
                    
                    <!-- Language Switcher -->
                    <li class="dropdown">
                        <a href="#" class="nav-link">
                            <i class="fas fa-globe"></i> <?php echo strtoupper($_SESSION['language'] ?? 'pt'); ?>
                        </a>
                        <div class="dropdown-menu">
                            <a href="<?php echo get_url(get_current_page(), ['lang' => 'pt']); ?>" class="dropdown-item">
                                🇧🇷 Português
                            </a>
                            <a href="<?php echo get_url(get_current_page(), ['lang' => 'en']); ?>" class="dropdown-item">
                                🇺🇸 English
                            </a>
                        </div>
                    </li>
                    
                    <!-- CTA Button -->
                    <li>
                        <a href="<?php echo get_url('contact'); ?>" class="btn btn-primary btn-sm">
                            <?php echo t('cta_get_quote'); ?>
                        </a>
                    </li>
                </ul>
                
                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main id="main-content"><?php
    
    // Show form submission result if exists
    if (isset($form_result) && !empty($form_result)): ?>
        <div class="alert alert-<?php echo $form_result['type']; ?>" id="form-alert">
            <div class="container">
                <p><?php echo $form_result['message']; ?></p>
            </div>
        </div>
    <?php endif; ?>