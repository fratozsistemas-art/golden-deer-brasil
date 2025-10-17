    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Footer Content -->
            <div class="footer-content">
                <!-- Company Information -->
                <div class="footer-section">
                    <div class="navbar-brand mb-4">
                        <i class="fas fa-leaf"></i>
                        <?php echo t('footer_company'); ?>
                    </div>
                    <p class="mb-4"><?php echo t('footer_description'); ?></p>
                    
                    <!-- Trust Badges -->
                    <div class="trust-badges">
                        <div class="trust-badge">
                            <i class="fas fa-check-circle text-primary"></i>
                            <span><?php echo CHINA_INSTALLATIONS; ?> Instalações</span>
                        </div>
                        <div class="trust-badge mt-2">
                            <i class="fas fa-award text-primary"></i>
                            <span>ISO9001 Certified</span>
                        </div>
                        <div class="trust-badge mt-2">
                            <i class="fas fa-leaf text-primary"></i>
                            <span>Tecnologia Verde</span>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="footer-section">
                    <h4><?php echo t('footer_quick_links'); ?></h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo get_url(); ?>"><?php echo t('nav_home'); ?></a></li>
                        <li><a href="<?php echo get_url('about'); ?>"><?php echo t('nav_about'); ?></a></li>
                        <li><a href="<?php echo get_url('technology'); ?>"><?php echo t('nav_technology'); ?></a></li>
                        <li><a href="<?php echo get_url('projects'); ?>"><?php echo t('nav_projects'); ?></a></li>
                        <li><a href="<?php echo get_url('financing'); ?>"><?php echo t('nav_financing'); ?></a></li>
                        <li><a href="<?php echo get_url('resources'); ?>"><?php echo t('nav_resources'); ?></a></li>
                    </ul>
                </div>
                
                <!-- Solutions -->
                <div class="footer-section">
                    <h4><?php echo t('footer_solutions'); ?></h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo get_url('solutions-municipalities'); ?>"><?php echo t('nav_solutions_municipalities'); ?></a></li>
                        <li><a href="<?php echo get_url('solutions-airports'); ?>"><?php echo t('nav_solutions_airports'); ?></a></li>
                        <li><a href="<?php echo get_url('solutions-corporations'); ?>"><?php echo t('nav_solutions_corporations'); ?></a></li>
                        <li><a href="<?php echo get_url('contact'); ?>">Solicitar Proposta</a></li>
                        <li><a href="<?php echo get_url('contact', ['type' => 'demo']); ?>">Agendar Demo</a></li>
                    </ul>
                </div>
                
                <!-- Contact Information -->
                <div class="footer-section">
                    <h4><?php echo t('footer_contact_info'); ?></h4>
                    <div class="contact-info">
                        <div class="contact-item mb-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <div class="ml-3">
                                <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                            </div>
                        </div>
                        <div class="contact-item mb-3">
                            <i class="fas fa-phone text-primary"></i>
                            <div class="ml-3">
                                <a href="tel:<?php echo str_replace([' ', '-', '(', ')'], '', SITE_PHONE); ?>"><?php echo SITE_PHONE; ?></a>
                            </div>
                        </div>
                        <div class="contact-item mb-3">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <div class="ml-3">
                                <span><?php echo COMPANY_ADDRESS; ?></span>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock text-primary"></i>
                            <div class="ml-3">
                                <span><?php echo t('contact_hours_time'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Newsletter Signup -->
                    <div class="newsletter-signup mt-4">
                        <h5>Newsletter</h5>
                        <form class="newsletter-form" method="POST" action="<?php echo get_url(); ?>">
                            <input type="hidden" name="form_type" value="newsletter">
                            <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                            <div class="d-flex">
                                <input type="email" name="email" placeholder="Seu e-mail" class="form-control" required>
                                <button type="submit" class="btn btn-primary ml-2">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <!-- Social Links -->
                <div class="social-links">
                    <?php if (defined('LINKEDIN_URL') && !empty(LINKEDIN_URL)): ?>
                    <a href="<?php echo LINKEDIN_URL; ?>" class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <?php endif; ?>
                    
                    <?php if (defined('YOUTUBE_URL') && !empty(YOUTUBE_URL)): ?>
                    <a href="<?php echo YOUTUBE_URL; ?>" class="social-link" target="_blank" rel="noopener" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <?php endif; ?>
                    
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" class="social-link" aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                    
                    <a href="tel:<?php echo str_replace([' ', '-', '(', ')'], '', SITE_PHONE); ?>" class="social-link" aria-label="Telefone">
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
                
                <!-- Copyright -->
                <p class="mt-4">
                    &copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. <?php echo t('footer_copyright'); ?>
                    <br>
                    <small>
                        CNPJ: <?php echo COMPANY_CNPJ; ?> | 
                        <a href="<?php echo get_url('resources', ['doc' => 'privacy']); ?>">Política de Privacidade</a> | 
                        <a href="<?php echo get_url('resources', ['doc' => 'terms']); ?>">Termos de Uso</a>
                    </small>
                </p>
                
                <!-- Made with badge -->
                <div class="made-with mt-3">
                    <small class="text-muted">
                        <i class="fas fa-leaf text-primary"></i>
                        Construído com tecnologia sustentável para um Brasil mais verde
                    </small>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Lead Generation Modal -->
    <div class="modal fade" id="leadModal" tabindex="-1" role="dialog" aria-labelledby="leadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="leadModalLabel">Solicitar Informações</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Fechar">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="leadForm" method="POST" action="<?php echo get_url(); ?>">
                        <input type="hidden" name="form_type" value="lead">
                        <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                        <input type="hidden" name="audience_type" id="modal-audience-type" value="">
                        <input type="hidden" name="source_page" value="<?php echo get_current_page(); ?>">
                        
                        <!-- Audience Selection -->
                        <div class="form-group" id="audience-selection">
                            <label class="form-label"><?php echo t('form_audience_type'); ?></label>
                            <div class="audience-buttons">
                                <button type="button" class="btn btn-outline-primary audience-btn" data-audience="b2g">
                                    <i class="fas fa-city"></i>
                                    <?php echo t('form_audience_b2g'); ?>
                                </button>
                                <button type="button" class="btn btn-outline-secondary audience-btn" data-audience="b2b">
                                    <i class="fas fa-building"></i>
                                    <?php echo t('form_audience_b2b'); ?>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Form Fields -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modal-name" class="form-label"><?php echo t('form_name'); ?> *</label>
                                    <input type="text" class="form-control" id="modal-name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modal-email" class="form-label"><?php echo t('form_email'); ?> *</label>
                                    <input type="email" class="form-control" id="modal-email" name="email" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modal-phone" class="form-label"><?php echo t('form_phone'); ?></label>
                                    <input type="tel" class="form-control" id="modal-phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modal-company" class="form-label"><?php echo t('form_company'); ?> *</label>
                                    <input type="text" class="form-control" id="modal-company" name="company" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modal-position" class="form-label"><?php echo t('form_position'); ?></label>
                                    <input type="text" class="form-control" id="modal-position" name="position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modal-tons" class="form-label"><?php echo t('form_tons_per_day'); ?></label>
                                    <select class="form-control" id="modal-tons" name="tons_per_day">
                                        <option value="">Selecione</option>
                                        <option value="0-1">Menos de 1 ton/dia</option>
                                        <option value="1-5">1 a 5 tons/dia</option>
                                        <option value="5-20">5 a 20 tons/dia</option>
                                        <option value="20-100">20 a 100 tons/dia</option>
                                        <option value="100-500">100 a 500 tons/dia</option>
                                        <option value="500+">Mais de 500 tons/dia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="modal-message" class="form-label"><?php echo t('form_message'); ?></label>
                            <textarea class="form-control" id="modal-message" name="message" rows="4" placeholder="Descreva suas necessidades e objetivos..."></textarea>
                        </div>
                        
                        <div class="form-group">
                            <div class="checkbox-group">
                                <input type="checkbox" id="modal-newsletter" name="newsletter" value="1">
                                <label for="modal-newsletter"><?php echo t('form_newsletter'); ?></label>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                                <?php echo t('form_submit'); ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    
    <!-- Additional Scripts for Current Page -->
    <?php
    $page_scripts = [
        'home' => 'home.js',
        'financing' => 'roi-calculator.js',
        'contact' => 'contact.js'
    ];
    
    if (isset($page_scripts[get_current_page()])):
    ?>
    <script src="assets/js/<?php echo $page_scripts[get_current_page()]; ?>"></script>
    <?php endif; ?>
    
    <!-- Schema.org structured data for current page -->
    <?php if (get_current_page() === 'home'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Processamento de Resíduos Orgânicos",
        "description": "Tecnologia comprovada para processamento de resíduos orgânicos em 24 horas",
        "provider": {
            "@type": "Organization",
            "name": "<?php echo COMPANY_NAME; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "Soluções para municípios, aeroportos e empresas"
        }
    }
    </script>
    <?php endif; ?>
    
</body>
</html>