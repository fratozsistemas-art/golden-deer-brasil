<!-- 404 Error Page -->
<section class="section text-center" style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div class="error-content">
            <div class="error-icon mb-4">
                <i class="fas fa-exclamation-triangle" style="font-size: 4rem; color: var(--primary-gold);"></i>
            </div>
            
            <h1 class="display-1 mb-3" style="color: var(--primary-gold);">404</h1>
            <h2 class="mb-4">Página Não Encontrada</h2>
            <p class="lead mb-5">
                Desculpe, a página que você está procurando não existe ou foi movida.
            </p>
            
            <div class="error-actions">
                <a href="<?php echo get_url(); ?>" class="btn btn-primary btn-lg mr-3">
                    <i class="fas fa-home"></i>
                    Voltar ao Início
                </a>
                <a href="<?php echo get_url('contact'); ?>" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Entre em Contato
                </a>
            </div>
            
            <!-- Helpful Links -->
            <div class="helpful-links mt-5">
                <h4 class="mb-3">Páginas Úteis</h4>
                <div class="links-grid d-flex justify-center flex-wrap gap-3">
                    <a href="<?php echo get_url('solutions-municipalities'); ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-city"></i> Soluções para Municípios
                    </a>
                    <a href="<?php echo get_url('solutions-airports'); ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-plane"></i> Soluções para Aeroportos
                    </a>
                    <a href="<?php echo get_url('solutions-corporations'); ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-building"></i> Soluções Corporativas
                    </a>
                    <a href="<?php echo get_url('technology'); ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-cogs"></i> Tecnologia
                    </a>
                    <a href="<?php echo get_url('projects'); ?>" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-eye"></i> Casos de Sucesso
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.error-content {
    max-width: 600px;
    margin: 0 auto;
}

.links-grid {
    gap: 0.5rem;
}

@media (max-width: 768px) {
    .error-actions .btn {
        display: block;
        margin: 0.5rem 0;
        width: 100%;
        max-width: 250px;
    }
    
    .links-grid {
        flex-direction: column;
        align-items: center;
    }
    
    .links-grid .btn {
        width: 100%;
        max-width: 250px;
    }
}
</style>