<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="animate-fade-in"><?php echo t('hero_title'); ?></h1>
            <p class="lead animate-fade-in"><?php echo t('hero_subtitle'); ?></p>
            
            <!-- Hero CTAs -->
            <div class="hero-cta animate-fade-in">
                <button class="btn btn-primary btn-lg" onclick="openLeadModal('b2g')">
                    <i class="fas fa-city"></i>
                    <?php echo t('hero_cta_b2g'); ?>
                </button>
                <button class="btn btn-outline-secondary btn-lg" onclick="openLeadModal('b2b')">
                    <i class="fas fa-building"></i>
                    <?php echo t('hero_cta_b2b'); ?>
                </button>
            </div>
            
            <!-- Video Placeholder -->
            <div class="hero-video mt-5 animate-fade-in">
                <div class="video-container" style="background: rgba(255,255,255,0.1); padding: 3rem; border-radius: 1rem; backdrop-filter: blur(10px);">
                    <i class="fas fa-play-circle" style="font-size: 4rem; color: var(--primary-gold); cursor: pointer;" onclick="playHeroVideo()"></i>
                    <p class="mt-2 text-white"><?php echo t('hero_video_alt'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Bar -->
<section class="trust-bar">
    <div class="container">
        <div class="trust-items">
            <div class="trust-item">
                <span class="trust-number"><?php echo t('trust_installations'); ?></span>
                <span class="trust-text">Na China</span>
            </div>
            <div class="trust-item">
                <span class="trust-number"><?php echo PROCESSING_TIME; ?>h</span>
                <span class="trust-text"><?php echo t('trust_processing'); ?></span>
            </div>
            <div class="trust-item">
                <span class="trust-number"><?php echo WASTE_REDUCTION; ?></span>
                <span class="trust-text"><?php echo t('trust_reduction'); ?></span>
            </div>
            <div class="trust-item">
                <span class="trust-number" style="font-size: 1rem;"><?php echo t('trust_clients'); ?></span>
                <span class="trust-text">Clientes Principais</span>
            </div>
        </div>
    </div>
</section>

<!-- Problem Section -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2><?php echo t('problem_title'); ?></h2>
            <p class="lead"><?php echo t('problem_description'); ?></p>
        </div>
        
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number"><?php echo t('problem_stat1'); ?></span>
                <div class="stat-label"><?php echo t('problem_stat1_desc'); ?></div>
                <div class="stat-description">Volume anual no Brasil</div>
            </div>
            <div class="stat-item">
                <span class="stat-number"><?php echo t('problem_stat2'); ?></span>
                <div class="stat-label"><?php echo t('problem_stat2_desc'); ?></div>
                <div class="stat-description">Oportunidade de mercado</div>
            </div>
            <div class="stat-item">
                <span class="stat-number"><?php echo t('problem_stat3'); ?></span>
                <div class="stat-label"><?php echo t('problem_stat3_desc'); ?></div>
                <div class="stat-description">Compliance PNRS necessário</div>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2><?php echo t('solution_title'); ?></h2>
        </div>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h4 class="feature-title"><?php echo t('solution_feature1'); ?></h4>
                <p class="feature-description"><?php echo t('solution_feature1_desc'); ?></p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-compress-arrows-alt"></i>
                </div>
                <h4 class="feature-title"><?php echo t('solution_feature2'); ?></h4>
                <p class="feature-description"><?php echo t('solution_feature2_desc'); ?></p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h4 class="feature-title"><?php echo t('solution_feature3'); ?></h4>
                <p class="feature-description"><?php echo t('solution_feature3_desc'); ?></p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-expand-arrows-alt"></i>
                </div>
                <h4 class="feature-title"><?php echo t('solution_feature4'); ?></h4>
                <p class="feature-description"><?php echo t('solution_feature4_desc'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Target Audiences Section -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2><?php echo t('audiences_title'); ?></h2>
        </div>
        
        <div class="grid-3">
            <!-- Municipalities -->
            <div class="card">
                <div class="card-body text-center">
                    <div class="feature-icon mb-4">
                        <i class="fas fa-city"></i>
                    </div>
                    <h4><?php echo t('audience_municipalities'); ?></h4>
                    <p class="mb-4"><?php echo t('audience_municipalities_desc'); ?></p>
                    <ul class="text-left mb-4" style="list-style: none; padding: 0;">
                        <?php 
                        $benefits = explode(' • ', t('audience_municipalities_benefits'));
                        foreach ($benefits as $benefit): ?>
                        <li class="mb-2">
                            <i class="fas fa-check text-primary"></i>
                            <span class="ml-2"><?php echo trim($benefit); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo get_url('solutions-municipalities'); ?>" class="btn btn-primary">
                        <?php echo t('cta_learn_more'); ?>
                    </a>
                </div>
            </div>
            
            <!-- Airports -->
            <div class="card">
                <div class="card-body text-center">
                    <div class="feature-icon mb-4" style="background: var(--gradient-secondary);">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h4><?php echo t('audience_airports'); ?></h4>
                    <p class="mb-4"><?php echo t('audience_airports_desc'); ?></p>
                    <ul class="text-left mb-4" style="list-style: none; padding: 0;">
                        <?php 
                        $benefits = explode(' • ', t('audience_airports_benefits'));
                        foreach ($benefits as $benefit): ?>
                        <li class="mb-2">
                            <i class="fas fa-check text-primary"></i>
                            <span class="ml-2"><?php echo trim($benefit); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo get_url('solutions-airports'); ?>" class="btn btn-secondary">
                        <?php echo t('cta_learn_more'); ?>
                    </a>
                </div>
            </div>
            
            <!-- Corporations -->
            <div class="card">
                <div class="card-body text-center">
                    <div class="feature-icon mb-4" style="background: var(--accent-blue);">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4><?php echo t('audience_corporations'); ?></h4>
                    <p class="mb-4"><?php echo t('audience_corporations_desc'); ?></p>
                    <ul class="text-left mb-4" style="list-style: none; padding: 0;">
                        <?php 
                        $benefits = explode(' • ', t('audience_corporations_benefits'));
                        foreach ($benefits as $benefit): ?>
                        <li class="mb-2">
                            <i class="fas fa-check text-primary"></i>
                            <span class="ml-2"><?php echo trim($benefit); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo get_url('solutions-corporations'); ?>" class="btn btn-outline-primary">
                        <?php echo t('cta_learn_more'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Proof Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2><?php echo t('social_proof_title'); ?></h2>
            <p class="lead"><?php echo t('social_proof_subtitle'); ?></p>
        </div>
        
        <!-- Client Logos Carousel -->
        <div class="client-logos mb-5">
            <div class="logos-container">
                <?php 
                $clients = [
                    ['name' => 'Sinopec', 'logo' => 'sinopec-logo.png'],
                    ['name' => 'Baowu Steel', 'logo' => 'baowu-logo.png'],
                    ['name' => 'Luneng Group', 'logo' => 'luneng-logo.png'],
                    ['name' => 'Shanghai Municipality', 'logo' => 'shanghai-logo.png'],
                    ['name' => 'Dongjing Town', 'logo' => 'dongjing-logo.png'],
                    ['name' => 'Badong County', 'logo' => 'badong-logo.png']
                ];
                
                foreach ($clients as $client): ?>
                <div class="client-logo">
                    <div style="width: 120px; height: 80px; background: #f8f9fa; border: 2px solid #e9ecef; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #6c757d; font-size: 0.875rem; text-align: center;">
                        <?php echo $client['name']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Success Stories Highlights -->
        <div class="grid-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="text-primary mb-3">Dongjing Town</h5>
                    <div class="stat-number text-secondary">9 sites</div>
                    <div class="stat-description">20 tons/dia • 100K+ residentes</div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="text-primary mb-3">Baowu Building</h5>
                    <div class="stat-number text-secondary">1 ton/dia</div>
                    <div class="stat-description">Sede corporativa • Zero odor</div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="text-primary mb-3">Shanghai Market</h5>
                    <div class="stat-number text-secondary">20 tons/dia</div>
                    <div class="stat-description">Mercado municipal • Operação 24/7</div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="<?php echo get_url('projects'); ?>" class="btn btn-primary btn-lg">
                Ver Todos os Casos de Sucesso
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section bg-secondary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-white"><?php echo t('benefits_title'); ?></h2>
        </div>
        
        <div class="grid-2">
            <div class="benefit-item d-flex mb-4">
                <div class="benefit-icon mr-4">
                    <i class="fas fa-certificate" style="font-size: 2rem; color: var(--primary-gold);"></i>
                </div>
                <div>
                    <h4 class="text-white"><?php echo t('benefit1_title'); ?></h4>
                    <p class="text-white opacity-90"><?php echo t('benefit1_desc'); ?></p>
                </div>
            </div>
            
            <div class="benefit-item d-flex mb-4">
                <div class="benefit-icon mr-4">
                    <i class="fas fa-gavel" style="font-size: 2rem; color: var(--primary-gold);"></i>
                </div>
                <div>
                    <h4 class="text-white"><?php echo t('benefit2_title'); ?></h4>
                    <p class="text-white opacity-90"><?php echo t('benefit2_desc'); ?></p>
                </div>
            </div>
            
            <div class="benefit-item d-flex mb-4">
                <div class="benefit-icon mr-4">
                    <i class="fas fa-handshake" style="font-size: 2rem; color: var(--primary-gold);"></i>
                </div>
                <div>
                    <h4 class="text-white"><?php echo t('benefit3_title'); ?></h4>
                    <p class="text-white opacity-90"><?php echo t('benefit3_desc'); ?></p>
                </div>
            </div>
            
            <div class="benefit-item d-flex mb-4">
                <div class="benefit-icon mr-4">
                    <i class="fas fa-headset" style="font-size: 2rem; color: var(--primary-gold);"></i>
                </div>
                <div>
                    <h4 class="text-white"><?php echo t('benefit4_title'); ?></h4>
                    <p class="text-white opacity-90"><?php echo t('benefit4_desc'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Depoimentos de Clientes</h2>
            <p class="lead">Veja o que nossos clientes na China falam sobre nossa tecnologia</p>
        </div>
        
        <div class="testimonial-carousel">
            <?php $testimonials = get_testimonials(); ?>
            <div class="grid-3">
                <?php foreach ($testimonials as $testimonial): ?>
                <div class="testimonial-item">
                    <div class="testimonial-quote">
                        <?php echo $testimonial['quote']; ?>
                    </div>
                    <div class="testimonial-author"><?php echo $testimonial['client']; ?></div>
                    <div class="testimonial-company">
                        <?php echo $testimonial['project']; ?> • <?php echo $testimonial['capacity']; ?>
                    </div>
                    <div class="mt-3 text-muted">
                        <i class="fas fa-chart-line text-primary"></i>
                        <?php echo $testimonial['results']; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="section bg-light">
    <div class="container text-center">
        <h2>Pronto para Transformar Seus Resíduos?</h2>
        <p class="lead mb-5">
            Junte-se a mais de 100 instalações que já transformam resíduos orgânicos em recursos valiosos
        </p>
        
        <div class="cta-buttons">
            <button class="btn btn-primary btn-lg mr-3" onclick="openLeadModal('b2g')">
                <i class="fas fa-city"></i>
                <?php echo t('cta_municipalities'); ?>
            </button>
            <button class="btn btn-secondary btn-lg mr-3" onclick="openLeadModal('b2b')">
                <i class="fas fa-building"></i>
                <?php echo t('cta_corporations'); ?>
            </button>
            <a href="<?php echo get_url('contact'); ?>" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-calendar-alt"></i>
                <?php echo t('cta_schedule_demo'); ?>
            </a>
        </div>
        
        <!-- Trust indicators -->
        <div class="final-trust mt-5">
            <div class="trust-indicators d-flex justify-center align-center flex-wrap gap-4">
                <div class="trust-badge">
                    <i class="fas fa-shield-alt text-primary"></i>
                    <span class="ml-2">ISO9001 Certified</span>
                </div>
                <div class="trust-badge">
                    <i class="fas fa-award text-primary"></i>
                    <span class="ml-2">High-Tech Enterprise</span>
                </div>
                <div class="trust-badge">
                    <i class="fas fa-leaf text-primary"></i>
                    <span class="ml-2">Tecnologia Verde</span>
                </div>
                <div class="trust-badge">
                    <i class="fas fa-users text-primary"></i>
                    <span class="ml-2">50+ Municípios Atendidos</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Page-specific styles for homepage */
.client-logos {
    overflow: hidden;
    padding: 2rem 0;
}

.logos-container {
    display: flex;
    gap: 2rem;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.client-logo {
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

.client-logo:hover {
    opacity: 1;
}

.benefit-item .benefit-icon {
    flex-shrink: 0;
}

.trust-indicators {
    gap: 2rem;
}

.trust-badge {
    display: flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: rgba(212, 175, 55, 0.1);
    border-radius: 2rem;
    font-size: 0.875rem;
}

.video-container:hover {
    background: rgba(255,255,255,0.15) !important;
    transform: scale(1.02);
    transition: all 0.3s ease;
}

@media (max-width: 768px) {
    .hero-cta {
        flex-direction: column;
        gap: 1rem;
    }
    
    .cta-buttons .btn {
        display: block;
        margin: 0.5rem 0;
        width: 100%;
        max-width: 300px;
    }
    
    .logos-container {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .trust-indicators {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>