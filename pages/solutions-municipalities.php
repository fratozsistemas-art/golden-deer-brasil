<!-- Hero Section -->
<section class="hero" style="background: linear-gradient(135deg, rgba(47, 82, 51, 0.95) 0%, rgba(212, 175, 55, 0.95) 100%);">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="animate-fade-in">Soluções PNRS para Municípios</h1>
            <p class="lead animate-fade-in">
                Conformidade com a Lei 12.305/2010 através de tecnologia comprovada e modelos PPP inovadores
            </p>
            
            <div class="hero-stats mt-5 animate-fade-in">
                <div class="stats-row d-flex justify-center gap-4 flex-wrap">
                    <div class="stat-badge">
                        <div class="stat-number">5.570</div>
                        <div class="stat-label">Municípios Brasileiros</div>
                        <div class="stat-desc">Precisam de conformidade PNRS</div>
                    </div>
                    <div class="stat-badge">
                        <div class="stat-number">48%</div>
                        <div class="stat-label">Meta de Reciclagem</div>
                        <div class="stat-desc">Exigida até 2040</div>
                    </div>
                    <div class="stat-badge">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Municípios na China</div>
                        <div class="stat-desc">Já utilizam nossa tecnologia</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-cta mt-5">
                <button class="btn btn-primary btn-lg" onclick="openLeadModal('b2g')">
                    <i class="fas fa-calculator"></i>
                    Calcular Economia para Meu Município
                </button>
                <a href="<?php echo get_url('contact', ['type' => 'demo', 'audience' => 'municipality']); ?>" class="btn btn-outline-secondary btn-lg">
                    <i class="fas fa-calendar-alt"></i>
                    Agendar Apresentação Técnica
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PNRS Challenge Section -->
<section class="section">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-6">
                <h2>O Desafio PNRS no Brasil</h2>
                <p class="lead">
                    A Política Nacional de Resíduos Sólidos (Lei 12.305/2010) estabelece metas ambiciosas, 
                    mas a maioria dos municípios brasileiros ainda enfrenta desafios significativos.
                </p>
                
                <div class="challenge-points">
                    <div class="challenge-point mb-4">
                        <div class="challenge-icon">
                            <i class="fas fa-exclamation-triangle text-warning"></i>
                        </div>
                        <div class="challenge-content">
                            <h4>32,8 milhões de toneladas/ano</h4>
                            <p>Resíduos orgânicos gerados sem destinação adequada</p>
                        </div>
                    </div>
                    
                    <div class="challenge-point mb-4">
                        <div class="challenge-icon">
                            <i class="fas fa-chart-line text-danger"></i>
                        </div>
                        <div class="challenge-content">
                            <h4>R$ 97 bilhões/ano</h4>
                            <p>Custo atual de gerenciamento de resíduos no Brasil</p>
                        </div>
                    </div>
                    
                    <div class="challenge-point mb-4">
                        <div class="challenge-icon">
                            <i class="fas fa-clock text-primary"></i>
                        </div>
                        <div class="challenge-content">
                            <h4>3-6 meses</h4>
                            <p>Tempo necessário para compostagem tradicional</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <!-- Infographic placeholder -->
                <div class="infographic-container">
                    <div class="infographic-card bg-light p-4 rounded">
                        <h4 class="text-center mb-4">Situação Atual dos Municípios</h4>
                        
                        <div class="progress-item mb-3">
                            <div class="d-flex justify-between mb-1">
                                <span>Com coleta seletiva</span>
                                <span>74%</span>
                            </div>
                            <div class="progress-bar bg-primary" style="width: 74%;"></div>
                        </div>
                        
                        <div class="progress-item mb-3">
                            <div class="d-flex justify-between mb-1">
                                <span>Com processamento orgânico adequado</span>
                                <span>15%</span>
                            </div>
                            <div class="progress-bar bg-warning" style="width: 15%;"></div>
                        </div>
                        
                        <div class="progress-item mb-3">
                            <div class="d-flex justify-between mb-1">
                                <span>Cumprindo metas PNRS</span>
                                <span>8%</span>
                            </div>
                            <div class="progress-bar bg-danger" style="width: 8%;"></div>
                        </div>
                        
                        <div class="alert alert-info mt-4">
                            <i class="fas fa-lightbulb"></i>
                            <strong>Oportunidade:</strong> 85% dos municípios ainda precisam de soluções para processamento de orgânicos
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Golden Deer Solution -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>A Solução Golden Deer</h2>
            <p class="lead">Tecnologia comprovada que transforma o desafio PNRS em oportunidade de sustentabilidade e economia</p>
        </div>
        
        <div class="solution-comparison">
            <div class="row">
                <div class="col-md-6">
                    <div class="solution-card traditional">
                        <div class="card-header bg-danger text-white text-center">
                            <h4><i class="fas fa-times-circle"></i> Métodos Tradicionais</h4>
                        </div>
                        <div class="card-body">
                            <ul class="solution-list">
                                <li><i class="fas fa-clock text-danger"></i> 3-6 meses para compostagem</li>
                                <li><i class="fas fa-nose text-danger"></i> Odores desagradáveis</li>
                                <li><i class="fas fa-bug text-danger"></i> Atração de pragas</li>
                                <li><i class="fas fa-map-marker-alt text-danger"></i> Grandes áreas necessárias</li>
                                <li><i class="fas fa-thermometer-half text-danger"></i> Dependente de clima</li>
                                <li><i class="fas fa-users text-danger"></i> Resistência da população</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="solution-card golden-deer">
                        <div class="card-header text-white text-center" style="background: var(--gradient-primary);">
                            <h4><i class="fas fa-check-circle"></i> Tecnologia Golden Deer</h4>
                        </div>
                        <div class="card-body">
                            <ul class="solution-list">
                                <li><i class="fas fa-clock text-success"></i> 24 horas para processamento</li>
                                <li><i class="fas fa-leaf text-success"></i> 100% sem odor</li>
                                <li><i class="fas fa-shield-alt text-success"></i> Processo selado e limpo</li>
                                <li><i class="fas fa-compress text-success"></i> Área mínima necessária</li>
                                <li><i class="fas fa-cog text-success"></i> Operação controlada 24/7</li>
                                <li><i class="fas fa-thumbs-up text-success"></i> Aceito pela população</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Technology Benefits -->
        <div class="benefits-grid mt-5">
            <div class="grid-4">
                <div class="benefit-card text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-compress-arrows-alt"></i>
                    </div>
                    <h5>80-90% Redução</h5>
                    <p>Volume de resíduos transformado em fertilizante</p>
                </div>
                
                <div class="benefit-card text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h5>30-40% Economia</h5>
                    <p>Redução nos custos de destinação</p>
                </div>
                
                <div class="benefit-card text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h5>Receita Adicional</h5>
                    <p>Venda do fertilizante orgânico produzido</p>
                </div>
                
                <div class="benefit-card text-center">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h5>Compliance PNRS</h5>
                    <p>Atendimento completo à legislação</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PPP Models Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Modelos de Parceria Público-Privada (PPP)</h2>
            <p class="lead">Flexibilidade de investimento para atender diferentes perfis de município</p>
        </div>
        
        <div class="ppp-models">
            <?php foreach ($ppp_models as $key => $model): ?>
            <div class="ppp-model-card mb-4">
                <div class="row align-center">
                    <div class="col-md-4">
                        <div class="model-icon text-center">
                            <?php 
                            $icons = [
                                'classic' => 'handshake',
                                'bot' => 'industry',
                                'consortium' => 'users'
                            ];
                            ?>
                            <i class="fas fa-<?php echo $icons[$key]; ?>" style="font-size: 3rem; color: var(--primary-gold);"></i>
                            <h4 class="mt-3"><?php echo $model['name']; ?></h4>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="model-details">
                            <p class="lead mb-4"><?php echo $model['description']; ?></p>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="detail-item">
                                        <strong>Duração:</strong> <?php echo $model['duration']; ?>
                                    </div>
                                    <div class="detail-item mt-2">
                                        <strong>Investimento Público:</strong><br>
                                        <?php echo $model['government_investment']; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="detail-item">
                                        <strong>Investimento Privado:</strong><br>
                                        <?php echo $model['private_investment']; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <a href="<?php echo get_url('financing', ['model' => $key]); ?>" class="btn btn-outline-primary">
                                    Ver Detalhes do Modelo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ABC Paulista Case Study -->
<section class="section bg-primary text-white">
    <div class="container">
        <div class="case-study-header text-center mb-5">
            <h2 class="text-white">Caso de Sucesso: Consórcio ABC Paulista</h2>
            <p class="lead text-white opacity-90">
                Modelo de consórcio intermunicipal para processamento de 1.000 toneladas/dia
            </p>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="case-details">
                    <h3 class="text-white mb-4">Visão Geral do Projeto</h3>
                    
                    <div class="case-stat mb-3">
                        <div class="stat-icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <div class="stat-content">
                            <strong>7 Municípios Participantes</strong>
                            <p>Santo André, São Bernardo, São Caetano, Diadema, Mauá, Ribeirão Pires, Rio Grande da Serra</p>
                        </div>
                    </div>
                    
                    <div class="case-stat mb-3">
                        <div class="stat-icon">
                            <i class="fas fa-weight"></i>
                        </div>
                        <div class="stat-content">
                            <strong>1.000 toneladas/dia</strong>
                            <p>Capacidade total de processamento</p>
                        </div>
                    </div>
                    
                    <div class="case-stat mb-3">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <strong>2,8 milhões de habitantes</strong>
                            <p>População atendida pelo consórcio</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="financial-summary bg-white text-dark p-4 rounded">
                    <h4 class="mb-4">Resumo Financeiro (25 anos)</h4>
                    
                    <div class="financial-item mb-3">
                        <div class="d-flex justify-between">
                            <span>Investimento Total:</span>
                            <strong class="text-primary">R$ 489 milhões</strong>
                        </div>
                    </div>
                    
                    <div class="financial-item mb-3">
                        <div class="d-flex justify-between">
                            <span>Economia Anual:</span>
                            <strong class="text-success">R$ 36 milhões</strong>
                        </div>
                    </div>
                    
                    <div class="financial-item mb-3">
                        <div class="d-flex justify-between">
                            <span>ROI Total:</span>
                            <strong class="text-primary">143,8%</strong>
                        </div>
                    </div>
                    
                    <div class="financial-item mb-3">
                        <div class="d-flex justify-between">
                            <span>Payback:</span>
                            <strong>13,6 anos</strong>
                        </div>
                    </div>
                    
                    <div class="environmental-impact mt-4 pt-3 border-top">
                        <h5>Impacto Ambiental</h5>
                        <div class="d-flex justify-between mb-2">
                            <span>Redução CO2e/ano:</span>
                            <strong class="text-success">50.000+ tons</strong>
                        </div>
                        <div class="d-flex justify-between mb-2">
                            <span>Fertilizante produzido/ano:</span>
                            <strong>36.500 tons</strong>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="<?php echo get_url('financing', ['case' => 'abc-paulista']); ?>" class="btn btn-primary btn-block">
                            Ver Estudo Completo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Timeline -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Cronograma de Implementação</h2>
            <p class="lead">Da análise inicial à operação plena em 18-24 meses</p>
        </div>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker">1</div>
                <div class="timeline-content">
                    <h4>Análise e Viabilidade</h4>
                    <p><strong>Meses 1-3:</strong> Diagnóstico, dimensionamento, estudo de viabilidade econômica e modelo PPP</p>
                    <ul>
                        <li>Levantamento de dados de resíduos</li>
                        <li>Análise de custos atuais</li>
                        <li>Definição do modelo PPP</li>
                        <li>Estudo de impacto ambiental</li>
                    </ul>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-marker">2</div>
                <div class="timeline-content">
                    <h4>Estruturação Jurídica</h4>
                    <p><strong>Meses 4-6:</strong> Elaboração de contratos, licitação e aprovações regulatórias</p>
                    <ul>
                        <li>Minuta de contrato PPP</li>
                        <li>Processo licitatório</li>
                        <li>Licenciamento ambiental</li>
                        <li>Aprovação em câmaras municipais</li>
                    </ul>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-marker">3</div>
                <div class="timeline-content">
                    <h4>Implantação</h4>
                    <p><strong>Meses 7-12:</strong> Construção, instalação de equipamentos e testes</p>
                    <ul>
                        <li>Preparação do terreno</li>
                        <li>Instalação dos equipamentos</li>
                        <li>Testes de operação</li>
                        <li>Treinamento de equipes</li>
                    </ul>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-marker">4</div>
                <div class="timeline-content">
                    <h4>Operação Plena</h4>
                    <p><strong>Mês 13+:</strong> Início da operação comercial e monitoramento contínuo</p>
                    <ul>
                        <li>Operação 24/7</li>
                        <li>Monitoramento de performance</li>
                        <li>Relatórios de conformidade PNRS</li>
                        <li>Otimização contínua</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Regulatory Compliance -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Conformidade Regulatória Completa</h2>
                <p class="lead mb-4">
                    Nossa solução atende integralmente à legislação brasileira de resíduos sólidos
                </p>
                
                <div class="compliance-items">
                    <div class="compliance-item mb-4">
                        <div class="compliance-header">
                            <i class="fas fa-gavel text-primary"></i>
                            <h4>Lei PNRS 12.305/2010</h4>
                        </div>
                        <p>Atendimento integral aos princípios de hierarquia de resíduos: não geração, redução, reutilização, reciclagem e tratamento adequado.</p>
                    </div>
                    
                    <div class="compliance-item mb-4">
                        <div class="compliance-header">
                            <i class="fas fa-leaf text-success"></i>
                            <h4>Resolução CONAMA</h4>
                        </div>
                        <p>Conformidade com as resoluções do Conselho Nacional do Meio Ambiente para processamento de resíduos orgânicos.</p>
                    </div>
                    
                    <div class="compliance-item mb-4">
                        <div class="compliance-header">
                            <i class="fas fa-certificate text-warning"></i>
                            <h4>NBR e Normas Técnicas</h4>
                        </div>
                        <p>Atendimento às normas técnicas brasileiras para equipamentos e processos de tratamento de resíduos.</p>
                    </div>
                    
                    <div class="compliance-item">
                        <div class="compliance-header">
                            <i class="fas fa-chart-line text-info"></i>
                            <h4>Relatórios SINIR</h4>
                        </div>
                        <p>Integração com o Sistema Nacional de Informações sobre a Gestão dos Resíduos Sólidos para relatórios obrigatórios.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="certification-badges">
                    <div class="badge-card text-center mb-3">
                        <i class="fas fa-award" style="font-size: 2rem; color: var(--primary-gold);"></i>
                        <h5 class="mt-2">ISO 9001</h5>
                        <p>Sistema de Gestão da Qualidade</p>
                    </div>
                    
                    <div class="badge-card text-center mb-3">
                        <i class="fas fa-leaf" style="font-size: 2rem; color: var(--secondary-green);"></i>
                        <h5 class="mt-2">ISO 14001</h5>
                        <p>Sistema de Gestão Ambiental</p>
                    </div>
                    
                    <div class="badge-card text-center mb-3">
                        <i class="fas fa-shield-alt" style="font-size: 2rem; color: var(--accent-blue);"></i>
                        <h5 class="mt-2">Licença Ambiental</h5>
                        <p>Aprovação dos órgãos competentes</p>
                    </div>
                    
                    <div class="badge-card text-center">
                        <i class="fas fa-microscope" style="font-size: 2rem; color: var(--primary-gold);"></i>
                        <h5 class="mt-2">Tecnologia Patenteada</h5>
                        <p>8 gerações de desenvolvimento</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- China Municipal Success Stories -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Municípios na China que Confiam em Nossa Tecnologia</h2>
            <p class="lead">Mais de 50 municípios chineses já transformaram sua gestão de resíduos orgânicos</p>
        </div>
        
        <div class="success-stories grid-3">
            <div class="story-card">
                <div class="story-header">
                    <h4>Dongjing Town</h4>
                    <span class="story-location">Shanghai, China</span>
                </div>
                <div class="story-stats">
                    <div class="stat-row">
                        <span class="stat-label">Instalações:</span>
                        <span class="stat-value">9 sites</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Capacidade:</span>
                        <span class="stat-value">20 tons/dia</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">População:</span>
                        <span class="stat-value">100.000+ habitantes</span>
                    </div>
                </div>
                <div class="story-result">
                    <i class="fas fa-check-circle text-success"></i>
                    <span>Primeira cidade carbono neutro da região</span>
                </div>
            </div>
            
            <div class="story-card">
                <div class="story-header">
                    <h4>Badong County</h4>
                    <span class="story-location">Hubei, China</span>
                </div>
                <div class="story-stats">
                    <div class="stat-row">
                        <span class="stat-label">Instalações:</span>
                        <span class="stat-value">1 central</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Capacidade:</span>
                        <span class="stat-value">20 tons/dia</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">População:</span>
                        <span class="stat-value">480.000 habitantes</span>
                    </div>
                </div>
                <div class="story-result">
                    <i class="fas fa-award text-primary"></i>
                    <span>Prêmio Nacional de Gestão de Resíduos</span>
                </div>
            </div>
            
            <div class="story-card">
                <div class="story-header">
                    <h4>Xinjiang Maigaiti</h4>
                    <span class="story-location">Xinjiang, China</span>
                </div>
                <div class="story-stats">
                    <div class="stat-row">
                        <span class="stat-label">Instalações:</span>
                        <span class="stat-value">2 sites</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Capacidade:</span>
                        <span class="stat-value">20 tons/dia</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">População:</span>
                        <span class="stat-value">250.000 habitantes</span>
                    </div>
                </div>
                <div class="story-result">
                    <i class="fas fa-seedling text-success"></i>
                    <span>60% redução nos custos de destinação</span>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="<?php echo get_url('projects', ['filter' => 'municipal']); ?>" class="btn btn-primary btn-lg">
                Ver Todos os Casos Municipais
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-secondary text-white">
    <div class="container text-center">
        <h2 class="text-white">Pronto para Transformar a Gestão de Resíduos do Seu Município?</h2>
        <p class="lead text-white opacity-90 mb-5">
            Junte-se aos 50+ municípios que já escolheram a tecnologia Golden Deer para conformidade PNRS
        </p>
        
        <div class="cta-actions">
            <button class="btn btn-primary btn-lg mr-3" onclick="openLeadModal('b2g')">
                <i class="fas fa-calculator"></i>
                Calcular ROI para Meu Município
            </button>
            <a href="<?php echo get_url('contact', ['type' => 'demo', 'audience' => 'municipality']); ?>" class="btn btn-outline-primary btn-lg mr-3">
                <i class="fas fa-presentation"></i>
                Solicitar Apresentação Técnica
            </a>
            <a href="<?php echo get_url('financing'); ?>" class="btn btn-outline-secondary btn-lg">
                <i class="fas fa-handshake"></i>
                Conhecer Modelos PPP
            </a>
        </div>
        
        <div class="contact-info mt-5 pt-4 border-top border-light">
            <h4 class="text-white mb-3">Fale com Nossos Especialistas</h4>
            <div class="contact-details d-flex justify-center flex-wrap gap-4">
                <div class="contact-item">
                    <i class="fas fa-phone text-primary"></i>
                    <a href="tel:<?php echo str_replace([' ', '-', '(', ')'], '', SITE_PHONE); ?>" class="text-white ml-2"><?php echo SITE_PHONE; ?></a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope text-primary"></i>
                    <a href="mailto:municipios@goldendeer.com.br" class="text-white ml-2">municipios@goldendeer.com.br</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Page-specific styles */
.stat-badge {
    background: rgba(255, 255, 255, 0.2);
    padding: 1.5rem;
    border-radius: 1rem;
    text-align: center;
    backdrop-filter: blur(10px);
    min-width: 200px;
}

.stat-badge .stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-gold);
    display: block;
}

.stat-badge .stat-label {
    font-weight: 600;
    color: white;
    margin: 0.5rem 0 0.25rem;
}

.stat-badge .stat-desc {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.9);
}

.challenge-point {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.challenge-icon {
    flex-shrink: 0;
    font-size: 1.5rem;
}

.progress-bar {
    height: 8px;
    background: #ddd;
    border-radius: 4px;
    position: relative;
}

.progress-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    border-radius: 4px;
}

.progress-bar.bg-primary::after {
    background: var(--primary-gold);
    width: inherit;
}

.progress-bar.bg-warning::after {
    background: #ffc107;
    width: inherit;
}

.progress-bar.bg-danger::after {
    background: #dc3545;
    width: inherit;
}

.solution-card {
    height: 100%;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.solution-list {
    list-style: none;
    padding: 0;
}

.solution-list li {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.benefit-card {
    padding: 1.5rem;
    background: white;
    border-radius: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
}

.benefit-icon i {
    font-size: 2.5rem;
    color: var(--primary-gold);
}

.ppp-model-card {
    background: white;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.ppp-model-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.timeline {
    position: relative;
    padding-left: 2rem;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 1rem;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--primary-gold);
}

.timeline-item {
    position: relative;
    margin-bottom: 3rem;
}

.timeline-marker {
    position: absolute;
    left: -2rem;
    top: 0;
    width: 2rem;
    height: 2rem;
    background: var(--primary-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: white;
    font-size: 0.875rem;
}

.timeline-content {
    background: white;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-left: 1rem;
}

.case-stat {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.stat-icon {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.compliance-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.badge-card {
    background: white;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.story-card {
    background: white;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.story-card:hover {
    transform: translateY(-5px);
}

.story-header h4 {
    color: var(--primary-gold);
    margin-bottom: 0.5rem;
}

.story-location {
    color: var(--medium-gray);
    font-size: 0.875rem;
}

.stat-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #eee;
}

.story-result {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #eee;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 500;
}

@media (max-width: 768px) {
    .stats-row {
        flex-direction: column;
        gap: 1rem;
    }
    
    .stat-badge {
        min-width: auto;
    }
    
    .cta-actions .btn {
        display: block;
        margin: 0.5rem 0;
        width: 100%;
        max-width: 300px;
    }
    
    .timeline {
        padding-left: 1rem;
    }
    
    .timeline-marker {
        left: -1rem;
    }
    
    .timeline-content {
        margin-left: 0.5rem;
    }
    
    .contact-details {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>