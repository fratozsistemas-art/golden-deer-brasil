<!-- Hero Section -->
<section class="hero" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.95) 0%, rgba(47, 82, 51, 0.95) 100%);">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="animate-fade-in">Soluções ESG para Empresas</h1>
            <p class="lead animate-fade-in">
                Transforme seus resíduos orgânicos em vantagem competitiva ESG com tecnologia comprovada pelas maiores corporações da China
            </p>
            
            <div class="hero-stats mt-5 animate-fade-in">
                <div class="stats-row d-flex justify-center gap-4 flex-wrap">
                    <div class="stat-badge">
                        <div class="stat-number">90%</div>
                        <div class="stat-label">Redução de Custos</div>
                        <div class="stat-desc">Destinação de resíduos</div>
                    </div>
                    <div class="stat-badge">
                        <div class="stat-number">50%</div>
                        <div class="stat-label">Redução CO2e</div>
                        <div class="stat-desc">Pegada de carbono</div>
                    </div>
                    <div class="stat-badge">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Compliance ESG</div>
                        <div class="stat-desc">Relatórios sustentabilidade</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-cta mt-5">
                <button class="btn btn-primary btn-lg" onclick="openLeadModal('b2b')">
                    <i class="fas fa-chart-line"></i>
                    Calcular Impacto ESG
                </button>
                <a href="<?php echo get_url('contact', ['type' => 'esg-assessment']); ?>" class="btn btn-outline-secondary btn-lg">
                    <i class="fas fa-clipboard-list"></i>
                    Assessment ESG Gratuito
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ESG Challenge Section -->
<section class="section">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-6">
                <h2>Desafios ESG Corporativos</h2>
                <p class="lead">
                    As empresas enfrentam pressão crescente de investidores, reguladores e consumidores por práticas sustentáveis mensuráveis.
                </p>
                
                <div class="esg-challenges">
                    <div class="challenge-item mb-4">
                        <div class="challenge-icon">
                            <i class="fas fa-chart-bar text-danger"></i>
                        </div>
                        <div class="challenge-content">
                            <h4>Métricas ESG Obrigatórias</h4>
                            <p>CVM exige relatórios ESG detalhados de empresas abertas até 2026</p>
                        </div>
                    </div>
                    
                    <div class="challenge-item mb-4">
                        <div class="challenge-icon">
                            <i class="fas fa-dollar-sign text-warning"></i>
                        </div>
                        <div class="challenge-content">
                            <h4>Pressão de Investidores</h4>
                            <p>R$ 3,2 trilhões em investimentos ESG globais buscam empresas sustentáveis</p>
                        </div>
                    </div>
                    
                    <div class="challenge-item mb-4">
                        <div class="challenge-icon">
                            <i class="fas fa-leaf text-success"></i>
                        </div>
                        <div class="challenge-content">
                            <h4>Net Zero 2030</h4>
                            <p>Compromissos públicos de neutralidade de carbono exigem ações concretas</p>
                        </div>
                    </div>
                    
                    <div class="challenge-item">
                        <div class="challenge-icon">
                            <i class="fas fa-users text-info"></i>
                        </div>
                        <div class="challenge-content">
                            <h4>Expectativa dos Stakeholders</h4>
                            <p>Funcionários e consumidores avaliam empresas por impacto ambiental</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="esg-metrics-card">
                    <div class="card bg-light p-4">
                        <h4 class="text-center mb-4">Impacto ESG da Golden Deer</h4>
                        
                        <!-- Environmental -->
                        <div class="esg-category mb-4">
                            <h5 class="text-success"><i class="fas fa-leaf"></i> Environmental</h5>
                            <div class="metric-item mb-2">
                                <span>Redução CO2e/ano:</span>
                                <strong class="text-success">2,4 tons por ton processada</strong>
                            </div>
                            <div class="metric-item mb-2">
                                <span>Desvio de aterro:</span>
                                <strong class="text-success">90% dos resíduos orgânicos</strong>
                            </div>
                            <div class="metric-item">
                                <span>Economia circular:</span>
                                <strong class="text-success">Fertilizante orgânico produzido</strong>
                            </div>
                        </div>
                        
                        <!-- Social -->
                        <div class="esg-category mb-4">
                            <h5 class="text-primary"><i class="fas fa-users"></i> Social</h5>
                            <div class="metric-item mb-2">
                                <span>Geração de empregos:</span>
                                <strong class="text-primary">3-5 por instalação</strong>
                            </div>
                            <div class="metric-item mb-2">
                                <span>Capacitação técnica:</span>
                                <strong class="text-primary">100% das equipes treinadas</strong>
                            </div>
                            <div class="metric-item">
                                <span>Saúde ocupacional:</span>
                                <strong class="text-primary">Zero odores, ambiente limpo</strong>
                            </div>
                        </div>
                        
                        <!-- Governance -->
                        <div class="esg-category">
                            <h5 class="text-warning"><i class="fas fa-gavel"></i> Governance</h5>
                            <div class="metric-item mb-2">
                                <span>Transparência:</span>
                                <strong class="text-warning">Dashboard em tempo real</strong>
                            </div>
                            <div class="metric-item mb-2">
                                <span>Compliance:</span>
                                <strong class="text-warning">100% conformidade regulatória</strong>
                            </div>
                            <div class="metric-item">
                                <span>Auditoria:</span>
                                <strong class="text-warning">Rastreabilidade completa</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Corporate Success Stories -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Grandes Corporações que Confiam na Nossa Tecnologia</h2>
            <p class="lead">Cases de sucesso com as maiores empresas industriais da China</p>
        </div>
        
        <div class="corporate-cases grid-3">
            <!-- Sinopec Case -->
            <div class="case-card">
                <div class="case-header">
                    <div class="company-logo mb-3">
                        <div class="logo-placeholder bg-primary text-white">
                            <i class="fas fa-industry"></i>
                        </div>
                    </div>
                    <h4>Sinopec Group</h4>
                    <span class="company-sector">Petroquímica • Fortune Global 500 #1</span>
                </div>
                
                <div class="case-implementation">
                    <div class="impl-detail mb-2">
                        <span class="detail-label">Instalações:</span>
                        <span class="detail-value">15 complexos industriais</span>
                    </div>
                    <div class="impl-detail mb-2">
                        <span class="detail-label">Capacidade total:</span>
                        <span class="detail-value">200 tons/dia</span>
                    </div>
                    <div class="impl-detail mb-3">
                        <span class="detail-label">Funcionários impactados:</span>
                        <span class="detail-value">50.000+</span>
                    </div>
                </div>
                
                <div class="esg-results">
                    <div class="result-metric mb-2">
                        <i class="fas fa-leaf text-success"></i>
                        <span>480 tons CO2e reduzidas/ano</span>
                    </div>
                    <div class="result-metric mb-2">
                        <i class="fas fa-award text-primary"></i>
                        <span>Prêmio Nacional Empresa Verde</span>
                    </div>
                    <div class="result-metric">
                        <i class="fas fa-chart-line text-warning"></i>
                        <span>ESG Score: AAA (MSCI)</span>
                    </div>
                </div>
            </div>
            
            <!-- Baowu Steel Case -->
            <div class="case-card">
                <div class="case-header">
                    <div class="company-logo mb-3">
                        <div class="logo-placeholder bg-secondary text-white">
                            <i class="fas fa-hammer"></i>
                        </div>
                    </div>
                    <h4>Baowu Steel Group</h4>
                    <span class="company-sector">Siderurgia • Maior produtora mundial</span>
                </div>
                
                <div class="case-implementation">
                    <div class="impl-detail mb-2">
                        <span class="detail-label">Instalações:</span>
                        <span class="detail-value">8 sedes corporativas</span>
                    </div>
                    <div class="impl-detail mb-2">
                        <span class="detail-label">Capacidade total:</span>
                        <span class="detail-value">50 tons/dia</span>
                    </div>
                    <div class="impl-detail mb-3">
                        <span class="detail-label">Funcionários impactados:</span>
                        <span class="detail-value">180.000+</span>
                    </div>
                </div>
                
                <div class="esg-results">
                    <div class="result-metric mb-2">
                        <i class="fas fa-recycle text-success"></i>
                        <span>95% desvio de aterro sanitário</span>
                    </div>
                    <div class="result-metric mb-2">
                        <i class="fas fa-certificate text-primary"></i>
                        <span>ISO 14001 mantido com excelência</span>
                    </div>
                    <div class="result-metric">
                        <i class="fas fa-coins text-warning"></i>
                        <span>R$ 2.4M economia anual</span>
                    </div>
                </div>
            </div>
            
            <!-- Luneng Group Case -->
            <div class="case-card">
                <div class="case-header">
                    <div class="company-logo mb-3">
                        <div class="logo-placeholder bg-success text-white">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <h4>Luneng Group</h4>
                    <span class="company-sector">Energia • Conglomerado estatal</span>
                </div>
                
                <div class="case-implementation">
                    <div class="impl-detail mb-2">
                        <span class="detail-label">Instalações:</span>
                        <span class="detail-value">12 usinas e escritórios</span>
                    </div>
                    <div class="impl-detail mb-2">
                        <span class="detail-label">Capacidade total:</span>
                        <span class="detail-value">80 tons/dia</span>
                    </div>
                    <div class="impl-detail mb-3">
                        <span class="detail-label">Funcionários impactados:</span>
                        <span class="detail-value">25.000+</span>
                    </div>
                </div>
                
                <div class="esg-results">
                    <div class="result-metric mb-2">
                        <i class="fas fa-seedling text-success"></i>
                        <span>Carbon Neutral até 2025</span>
                    </div>
                    <div class="result-metric mb-2">
                        <i class="fas fa-trophy text-primary"></i>
                        <span>Top 10 Empresas Sustentáveis China</span>
                    </div>
                    <div class="result-metric">
                        <i class="fas fa-handshake text-warning"></i>
                        <span>Benchmark setorial ESG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ESG Solution Benefits -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Como Nossa Solução Impacta Seus KPIs ESG</h2>
            <p class="lead">Métricas mensuráveis e auditáveis para seus relatórios de sustentabilidade</p>
        </div>
        
        <div class="esg-impact-grid">
            <!-- Environmental Impact -->
            <div class="impact-category">
                <div class="category-header mb-4">
                    <div class="category-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Environmental (E)</h3>
                </div>
                
                <div class="impact-metrics">
                    <div class="metric-card mb-3">
                        <div class="metric-icon">
                            <i class="fas fa-smog text-danger"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Redução de Emissões</h5>
                            <div class="metric-value">2,4 tons CO2e por tonelada processada</div>
                            <div class="metric-description">Evita emissões de metano em aterros</div>
                        </div>
                    </div>
                    
                    <div class="metric-card mb-3">
                        <div class="metric-icon">
                            <i class="fas fa-recycle text-success"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Economia Circular</h5>
                            <div class="metric-value">90% dos resíduos viram fertilizante</div>
                            <div class="metric-description">Zero waste to landfill para orgânicos</div>
                        </div>
                    </div>
                    
                    <div class="metric-card">
                        <div class="metric-icon">
                            <i class="fas fa-water text-primary"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Gestão de Recursos</h5>
                            <div class="metric-value">60% redução uso de água</div>
                            <div class="metric-description">vs. compostagem tradicional</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Social Impact -->
            <div class="impact-category">
                <div class="category-header mb-4">
                    <div class="category-icon" style="background: var(--accent-blue);">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Social (S)</h3>
                </div>
                
                <div class="impact-metrics">
                    <div class="metric-card mb-3">
                        <div class="metric-icon">
                            <i class="fas fa-hard-hat text-warning"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Saúde e Segurança</h5>
                            <div class="metric-value">100% ambiente livre de odores</div>
                            <div class="metric-description">Melhora condições de trabalho</div>
                        </div>
                    </div>
                    
                    <div class="metric-card mb-3">
                        <div class="metric-icon">
                            <i class="fas fa-graduation-cap text-info"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Desenvolvimento</h5>
                            <div class="metric-value">3-5 empregos verdes por instalação</div>
                            <div class="metric-description">Capacitação em tecnologia limpa</div>
                        </div>
                    </div>
                    
                    <div class="metric-card">
                        <div class="metric-icon">
                            <i class="fas fa-heart text-danger"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Bem-estar</h5>
                            <div class="metric-value">Zero reclamações de odor</div>
                            <div class="metric-description">Melhora satisfação dos funcionários</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Governance Impact -->
            <div class="impact-category">
                <div class="category-header mb-4">
                    <div class="category-icon" style="background: var(--secondary-green);">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Governance (G)</h3>
                </div>
                
                <div class="impact-metrics">
                    <div class="metric-card mb-3">
                        <div class="metric-icon">
                            <i class="fas fa-chart-line text-success"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Transparência</h5>
                            <div class="metric-value">Dashboard em tempo real</div>
                            <div class="metric-description">Métricas auditáveis 24/7</div>
                        </div>
                    </div>
                    
                    <div class="metric-card mb-3">
                        <div class="metric-icon">
                            <i class="fas fa-shield-check text-primary"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Compliance</h5>
                            <div class="metric-value">100% conformidade regulatória</div>
                            <div class="metric-description">ANVISA, licenças ambientais</div>
                        </div>
                    </div>
                    
                    <div class="metric-card">
                        <div class="metric-icon">
                            <i class="fas fa-search text-info"></i>
                        </div>
                        <div class="metric-content">
                            <h5>Auditabilidade</h5>
                            <div class="metric-value">Rastreabilidade completa</div>
                            <div class="metric-description">Relatórios automáticos GRI</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ROI and Business Case -->
<section class="section bg-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-6">
                <h2>Business Case Convincente</h2>
                <p class="lead">
                    Além do impacto ESG, nossa solução oferece retorno financeiro robusto que justifica o investimento.
                </p>
                
                <div class="business-benefits">
                    <div class="benefit-item mb-4">
                        <div class="benefit-icon">
                            <i class="fas fa-coins text-success"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Economia Operacional</h4>
                            <p>Redução de 60-80% nos custos de destinação de resíduos orgânicos</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item mb-4">
                        <div class="benefit-icon">
                            <i class="fas fa-seedling text-primary"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Receita Adicional</h4>
                            <p>Venda do fertilizante orgânico produzido (R$ 800-1.200/ton)</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item mb-4">
                        <div class="benefit-icon">
                            <i class="fas fa-trending-up text-warning"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Valorização ESG</h4>
                            <p>Premium de 10-20% no valuation por melhores métricas ESG</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-percent text-info"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Incentivos Fiscais</h4>
                            <p>Acesso a linhas de crédito verde e benefícios tributários</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="roi-calculator-preview">
                    <div class="card p-4">
                        <h4 class="text-center mb-4">Calculadora ROI Corporativo</h4>
                        
                        <div class="calculator-input mb-3">
                            <label>Resíduos orgânicos (tons/dia):</label>
                            <input type="range" class="form-range" min="0.1" max="50" step="0.1" value="5" id="corp-tons">
                            <div class="range-value"><span id="tons-value">5</span> tons/dia</div>
                        </div>
                        
                        <div class="calculator-input mb-4">
                            <label>Custo atual destinação (R$/ton):</label>
                            <input type="range" class="form-range" min="100" max="500" step="10" value="250" id="corp-cost">
                            <div class="range-value">R$ <span id="cost-value">250</span>/ton</div>
                        </div>
                        
                        <div class="roi-results">
                            <div class="result-item mb-2">
                                <span>Investimento:</span>
                                <strong id="investment-result">R$ 1.335.000</strong>
                            </div>
                            <div class="result-item mb-2">
                                <span>Economia anual:</span>
                                <strong id="savings-result" class="text-success">R$ 319.500</strong>
                            </div>
                            <div class="result-item mb-2">
                                <span>Receita fertilizante:</span>
                                <strong id="revenue-result" class="text-info">R$ 146.000</strong>
                            </div>
                            <div class="result-item mb-3">
                                <span>Payback:</span>
                                <strong id="payback-result" class="text-primary">2.9 anos</strong>
                            </div>
                            
                            <div class="esg-metrics pt-3 border-top">
                                <div class="esg-metric mb-1">
                                    <i class="fas fa-leaf text-success"></i>
                                    <span id="co2-reduction">4.380</span> tons CO2e reduzidas/ano
                                </div>
                                <div class="esg-metric">
                                    <i class="fas fa-recycle text-primary"></i>
                                    <span id="waste-diverted">1.643</span> tons desviadas de aterro/ano
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <button class="btn btn-primary btn-block" onclick="openLeadModal('b2b')">
                                Solicitar Análise Detalhada
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation for Corporations -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Implementação Corporativa</h2>
            <p class="lead">Processo estruturado com mínimo impacto nas operações existentes</p>
        </div>
        
        <div class="implementation-process">
            <div class="process-steps grid-4">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Assessment ESG</h4>
                    <p><strong>Semana 1-2:</strong> Auditoria completa dos resíduos orgânicos e baseline de métricas ESG atuais</p>
                    <ul class="step-deliverables">
                        <li>Diagnóstico de resíduos</li>
                        <li>Gap analysis ESG</li>
                        <li>Business case personalizado</li>
                    </ul>
                </div>
                
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Projeto & Aprovações</h4>
                    <p><strong>Semana 3-6:</strong> Desenvolvimento do projeto executivo e obtenção de licenças necessárias</p>
                    <ul class="step-deliverables">
                        <li>Projeto técnico detalhado</li>
                        <li>Licenciamento ambiental</li>
                        <li>Aprovação do board</li>
                    </ul>
                </div>
                
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Instalação</h4>
                    <p><strong>Semana 7-12:</strong> Instalação dos equipamentos com cronograma que minimiza impacto operacional</p>
                    <ul class="step-deliverables">
                        <li>Instalação equipamentos</li>
                        <li>Integração com sistemas</li>
                        <li>Treinamento de equipes</li>
                    </ul>
                </div>
                
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h4>Go-Live & Monitoramento</h4>
                    <p><strong>Semana 13+:</strong> Início da operação com dashboard ESG em tempo real e suporte contínuo</p>
                    <ul class="step-deliverables">
                        <li>Dashboard ESG ativo</li>
                        <li>Relatórios automáticos</li>
                        <li>Suporte 24/7</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Solutions -->
<section class="section bg-secondary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-white">Soluções por Setor</h2>
            <p class="lead text-white opacity-90">Adaptamos nossa tecnologia às especificidades de cada indústria</p>
        </div>
        
        <div class="industry-solutions grid-3">
            <!-- Manufacturing -->
            <div class="industry-card">
                <div class="industry-icon mb-3">
                    <i class="fas fa-industry"></i>
                </div>
                <h4 class="text-white">Manufatura</h4>
                <ul class="industry-benefits text-white opacity-90">
                    <li>Processamento de resíduos de cantinas industriais</li>
                    <li>Eliminação de odores em áreas de produção</li>
                    <li>Contribuição para ISO 14001 e LEED</li>
                    <li>Fertilizante para paisagismo corporativo</li>
                </ul>
                <div class="industry-stats mt-3">
                    <div class="stat-badge-sm">
                        <span class="text-primary">ROI médio: 240%</span>
                    </div>
                </div>
            </div>
            
            <!-- Corporate Offices -->
            <div class="industry-card">
                <div class="industry-icon mb-3" style="color: var(--accent-blue);">
                    <i class="fas fa-building"></i>
                </div>
                <h4 class="text-white">Escritórios Corporativos</h4>
                <ul class="industry-benefits text-white opacity-90">
                    <li>Processamento discreto sem impacto visual</li>
                    <li>Zero odores em ambientes corporativos</li>
                    <li>Melhora índices de satisfação dos funcionários</li>
                    <li>Diferencial competitivo para atrair talentos</li>
                </ul>
                <div class="industry-stats mt-3">
                    <div class="stat-badge-sm">
                        <span class="text-primary">Payback médio: 2.1 anos</span>
                    </div>
                </div>
            </div>
            
            <!-- Retail & Shopping -->
            <div class="industry-card">
                <div class="industry-icon mb-3" style="color: var(--primary-gold);">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h4 class="text-white">Varejo & Shopping Centers</h4>
                <ul class="industry-benefits text-white opacity-90">
                    <li>Processamento de resíduos de praças de alimentação</li>
                    <li>Operação silenciosa compatível com horário comercial</li>
                    <li>Contribuição para certificações de sustentabilidade</li>
                    <li>Marketing verde para consumidores conscientes</li>
                </ul>
                <div class="industry-stats mt-3">
                    <div class="stat-badge-sm">
                        <span class="text-primary">Economia: 70% custos destinação</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-light">
    <div class="container text-center">
        <h2>Transforme Seus Resíduos em Vantagem Competitiva ESG</h2>
        <p class="lead mb-5">
            Junte-se às grandes corporações que já descobriram como a sustentabilidade pode gerar valor real
        </p>
        
        <div class="cta-actions">
            <button class="btn btn-primary btn-lg mr-3" onclick="openLeadModal('b2b')">
                <i class="fas fa-calculator"></i>
                Calcular ROI + Impacto ESG
            </button>
            <a href="<?php echo get_url('contact', ['type' => 'esg-assessment']); ?>" class="btn btn-secondary btn-lg mr-3">
                <i class="fas fa-clipboard-check"></i>
                Assessment ESG Gratuito
            </a>
            <a href="<?php echo get_url('projects', ['filter' => 'corporate']); ?>" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-eye"></i>
                Ver Cases Corporativos
            </a>
        </div>
        
        <!-- Corporate Credentials -->
        <div class="corporate-credentials mt-5">
            <h4 class="mb-4">Credenciais Corporativas</h4>
            <div class="credentials-grid d-flex justify-center flex-wrap gap-4">
                <div class="credential-item">
                    <i class="fas fa-award text-primary"></i>
                    <div>
                        <strong>Fortune 500</strong>
                        <small class="d-block text-muted">Clientes na China</small>
                    </div>
                </div>
                <div class="credential-item">
                    <i class="fas fa-certificate text-success"></i>
                    <div>
                        <strong>ISO 9001</strong>
                        <small class="d-block text-muted">Gestão da Qualidade</small>
                    </div>
                </div>
                <div class="credential-item">
                    <i class="fas fa-leaf text-warning"></i>
                    <div>
                        <strong>ISO 14001</strong>
                        <small class="d-block text-muted">Gestão Ambiental</small>
                    </div>
                </div>
                <div class="credential-item">
                    <i class="fas fa-handshake text-info"></i>
                    <div>
                        <strong>GRI Standards</strong>
                        <small class="d-block text-muted">Relatórios Compatíveis</small>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact-info mt-5 pt-4 border-top">
            <h4 class="mb-3">Especialistas em ESG Corporativo</h4>
            <div class="contact-details d-flex justify-center flex-wrap gap-4">
                <div class="contact-item">
                    <i class="fas fa-phone text-primary"></i>
                    <a href="tel:<?php echo str_replace([' ', '-', '(', ')'], '', SITE_PHONE); ?>" class="ml-2"><?php echo SITE_PHONE; ?></a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope text-primary"></i>
                    <a href="mailto:corporativo@goldendeer.com.br" class="ml-2">corporativo@goldendeer.com.br</a>
                </div>
                <div class="contact-item">
                    <i class="fab fa-linkedin text-primary"></i>
                    <a href="<?php echo LINKEDIN_URL; ?>" class="ml-2" target="_blank">LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Page-specific styles for corporations */
.challenge-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
}

.challenge-item:last-child {
    border-bottom: none;
}

.challenge-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.esg-category h5 {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.metric-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.metric-item:last-child {
    border-bottom: none;
}

.case-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.case-card:hover {
    transform: translateY(-5px);
}

.logo-placeholder {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin: 0 auto;
}

.company-sector {
    color: var(--medium-gray);
    font-size: 0.875rem;
}

.impl-detail {
    display: flex;
    justify-content: space-between;
    padding: 0.25rem 0;
    font-size: 0.875rem;
}

.detail-label {
    color: var(--medium-gray);
}

.result-metric {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
    padding: 0.25rem 0;
}

.esg-impact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.category-header {
    text-align: center;
}

.category-icon {
    width: 80px;
    height: 80px;
    background: var(--primary-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: white;
    margin: 0 auto 1rem;
}

.metric-card {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.metric-icon {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
}

.metric-value {
    font-weight: 600;
    color: var(--dark-gray);
    font-size: 0.875rem;
}

.metric-description {
    font-size: 0.75rem;
    color: var(--medium-gray);
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.benefit-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.roi-calculator-preview .form-range {
    width: 100%;
    margin: 0.5rem 0;
}

.range-value {
    text-align: center;
    font-weight: 600;
    color: var(--primary-gold);
}

.result-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
}

.esg-metric {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.875rem;
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.step-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    position: relative;
}

.step-number {
    width: 50px;
    height: 50px;
    background: var(--primary-gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
    margin: 0 auto 1rem;
}

.step-deliverables {
    list-style: none;
    padding: 0;
    text-align: left;
    margin-top: 1rem;
}

.step-deliverables li {
    padding: 0.25rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.step-deliverables li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-gold);
    font-weight: bold;
}

.industry-solutions {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.industry-card {
    background: rgba(255, 255, 255, 0.1);
    padding: 2rem;
    border-radius: 1rem;
    text-align: center;
    backdrop-filter: blur(10px);
}

.industry-icon {
    font-size: 3rem;
    color: var(--primary-gold);
}

.industry-benefits {
    list-style: none;
    padding: 0;
    text-align: left;
}

.industry-benefits li {
    padding: 0.5rem 0;
    position: relative;
    padding-left: 1.5rem;
}

.industry-benefits li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-gold);
    font-weight: bold;
}

.stat-badge-sm {
    background: rgba(255, 255, 255, 0.2);
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.875rem;
}

.credentials-grid {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
}

.credential-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.credential-item i {
    font-size: 1.5rem;
}

@media (max-width: 768px) {
    .stats-row {
        flex-direction: column;
        gap: 1rem;
    }
    
    .esg-impact-grid {
        grid-template-columns: 1fr;
    }
    
    .process-steps {
        grid-template-columns: 1fr;
    }
    
    .industry-solutions {
        grid-template-columns: 1fr;
    }
    
    .credentials-grid {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-actions .btn {
        display: block;
        margin: 0.5rem 0;
        width: 100%;
        max-width: 300px;
    }
}

/* ROI Calculator Interactivity */
.calculator-input {
    position: relative;
}

.form-range {
    -webkit-appearance: none;
    appearance: none;
    background: transparent;
    cursor: pointer;
}

.form-range::-webkit-slider-track {
    background: #ddd;
    height: 6px;
    border-radius: 3px;
}

.form-range::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    background: var(--primary-gold);
    height: 20px;
    width: 20px;
    border-radius: 50%;
    cursor: pointer;
}

.form-range::-moz-range-track {
    background: #ddd;
    height: 6px;
    border-radius: 3px;
}

.form-range::-moz-range-thumb {
    background: var(--primary-gold);
    height: 20px;
    width: 20px;
    border-radius: 50%;
    cursor: pointer;
    border: none;
}
</style>

<script>
// ROI Calculator functionality
document.addEventListener('DOMContentLoaded', function() {
    const tonsSlider = document.getElementById('corp-tons');
    const costSlider = document.getElementById('corp-cost');
    
    if (tonsSlider && costSlider) {
        function updateCalculator() {
            const tons = parseFloat(tonsSlider.value);
            const cost = parseFloat(costSlider.value);
            
            // Update display values
            document.getElementById('tons-value').textContent = tons;
            document.getElementById('cost-value').textContent = cost;
            
            // Calculate ROI using global function
            const roi = goldenDeer.calculateROI(tons, cost);
            
            // Update results
            document.getElementById('investment-result').textContent = goldenDeer.formatCurrency(roi.equipmentCost);
            document.getElementById('savings-result').textContent = goldenDeer.formatCurrency(roi.annualSavings);
            document.getElementById('revenue-result').textContent = goldenDeer.formatCurrency(roi.fertilizerRevenue);
            document.getElementById('payback-result').textContent = goldenDeer.formatNumber(roi.paybackYears, 1) + ' anos';
            
            // Environmental metrics
            const co2Reduction = tons * 365 * 2.4; // 2.4 tons CO2e per ton processed
            const wasteDiv erted = tons * 365 * 0.9; // 90% diverted
            
            document.getElementById('co2-reduction').textContent = goldenDeer.formatNumber(co2Reduction);
            document.getElementById('waste-diverted').textContent = goldenDeer.formatNumber(wasteDiverted);
        }
        
        tonsSlider.addEventListener('input', updateCalculator);
        costSlider.addEventListener('input', updateCalculator);
        
        // Initial calculation
        updateCalculator();
    }
});
</script>