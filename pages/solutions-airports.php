<!-- Hero Section -->
<section class="hero" style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.95) 0%, rgba(212, 175, 55, 0.95) 100%);">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="animate-fade-in">Soluções para Aeroportos</h1>
            <p class="lead animate-fade-in">
                Processamento eficiente de resíduos orgânicos aeroportuários com operação 24/7 e zero impacto no fluxo de passageiros
            </p>
            
            <div class="hero-stats mt-5 animate-fade-in">
                <div class="stats-row d-flex justify-center gap-4 flex-wrap">
                    <div class="stat-badge">
                        <div class="stat-number">180</div>
                        <div class="stat-label">Aeroportos no Brasil</div>
                        <div class="stat-desc">Potencial de implementação</div>
                    </div>
                    <div class="stat-badge">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Operação Contínua</div>
                        <div class="stat-desc">Sem interrupções</div>
                    </div>
                    <div class="stat-badge">
                        <div class="stat-number">0</div>
                        <div class="stat-label">Impacto Operacional</div>
                        <div class="stat-desc">No fluxo de passageiros</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-cta mt-5">
                <button class="btn btn-primary btn-lg" onclick="openLeadModal('b2g')">
                    <i class="fas fa-calculator"></i>
                    Calcular ROI para Meu Aeroporto
                </button>
                <a href="<?php echo get_url('contact', ['type' => 'pilot', 'segment' => 'airport']); ?>" class="btn btn-outline-secondary btn-lg">
                    <i class="fas fa-flask"></i>
                    Solicitar Projeto Piloto
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Airport Waste Challenge -->
<section class="section">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-6">
                <h2>O Desafio dos Resíduos Aeroportuários</h2>
                <p class="lead">
                    Aeroportos geram grandes volumes de resíduos orgânicos com características únicas que exigem soluções especializadas.
                </p>
                
                <div class="challenge-stats">
                    <div class="challenge-stat mb-4">
                        <div class="stat-icon text-primary">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="stat-content">
                            <h4>40-60% dos resíduos são orgânicos</h4>
                            <p>Restos de comida de voos, terminais e praças de alimentação</p>
                        </div>
                    </div>
                    
                    <div class="challenge-stat mb-4">
                        <div class="stat-icon text-warning">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Geração contínua 24/7</h4>
                            <p>Voos chegam e partem a qualquer hora, gerando resíduos constantemente</p>
                        </div>
                    </div>
                    
                    <div class="challenge-stat mb-4">
                        <div class="stat-icon text-danger">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Rigorosos padrões sanitários</h4>
                            <p>ANVISA e regulamentações internacionais de controle fitossanitário</p>
                        </div>
                    </div>
                    
                    <div class="challenge-stat">
                        <div class="stat-icon text-success">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="stat-content">
                            <h4>Pressão por sustentabilidade</h4>
                            <p>Certificações ambientais e compromissos de carbono neutro</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="airport-infographic">
                    <div class="infographic-card bg-light p-4 rounded">
                        <h4 class="text-center mb-4">Resíduos por Área do Aeroporto</h4>
                        
                        <div class="waste-source mb-3">
                            <div class="d-flex justify-between align-center mb-2">
                                <span><i class="fas fa-plane text-primary"></i> Voos Internacionais</span>
                                <span class="badge bg-danger">45%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-danger" style="width: 45%"></div>
                            </div>
                            <small class="text-muted">Rigoroso controle fitossanitário obrigatório</small>
                        </div>
                        
                        <div class="waste-source mb-3">
                            <div class="d-flex justify-between align-center mb-2">
                                <span><i class="fas fa-store text-secondary"></i> Praças de Alimentação</span>
                                <span class="badge bg-warning">30%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 30%"></div>
                            </div>
                            <small class="text-muted">Operação contínua, diversos fornecedores</small>
                        </div>
                        
                        <div class="waste-source mb-3">
                            <div class="d-flex justify-between align-center mb-2">
                                <span><i class="fas fa-plane-departure text-info"></i> Voos Domésticos</span>
                                <span class="badge bg-primary">15%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 15%"></div>
                            </div>
                        </div>
                        
                        <div class="waste-source mb-3">
                            <div class="d-flex justify-between align-center mb-2">
                                <span><i class="fas fa-building text-success"></i> Administrativo</span>
                                <span class="badge bg-success">10%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 10%"></div>
                            </div>
                        </div>
                        
                        <div class="alert alert-warning mt-4">
                            <i class="fas fa-exclamation-triangle"></i>
                            <strong>Desafio:</strong> Processamento rápido e seguro de grandes volumes com padrões sanitários rigorosos
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Golden Deer Airport Solution -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Solução Golden Deer para Aeroportos</h2>
            <p class="lead">Tecnologia especializada que atende às rigorosas exigências aeroportuárias</p>
        </div>
        
        <!-- Solution Features Grid -->
        <div class="grid-3 mb-5">
            <div class="feature-card">
                <div class="feature-icon mb-3">
                    <i class="fas fa-clock"></i>
                </div>
                <h4>Processamento em 24h</h4>
                <p>Eliminação completa dos resíduos orgânicos em 24 horas, atendendo aos padrões ANVISA de controle fitossanitário.</p>
                <div class="feature-benefit">
                    <i class="fas fa-check text-success"></i>
                    <span>Conformidade total com regulamentações</span>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon mb-3" style="background: var(--accent-blue);">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Sistema Selado</h4>
                <p>Processo completamente fechado elimina riscos de contaminação, odores e atração de pragas.</p>
                <div class="feature-benefit">
                    <i class="fas fa-check text-success"></i>
                    <span>Zero impacto na experiência do passageiro</span>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon mb-3" style="background: var(--secondary-green);">
                    <i class="fas fa-cog"></i>
                </div>
                <h4>Operação Automatizada</h4>
                <p>Funcionamento contínuo 24/7 com mínima intervenção humana, compatível com operações aeroportuárias.</p>
                <div class="feature-benefit">
                    <i class="fas fa-check text-success"></i>
                    <span>Integração perfeita com operações existentes</span>
                </div>
            </div>
        </div>
        
        <!-- Comparison Table -->
        <div class="comparison-section">
            <h3 class="text-center mb-4">Comparação: Método Atual vs. Golden Deer</h3>
            
            <div class="comparison-table">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Critério</th>
                                <th>Método Tradicional</th>
                                <th>Golden Deer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Tempo de Processamento</strong></td>
                                <td><span class="text-danger"><i class="fas fa-times"></i> 15-30 dias</span></td>
                                <td><span class="text-success"><i class="fas fa-check"></i> 24 horas</span></td>
                            </tr>
                            <tr>
                                <td><strong>Controle de Odor</strong></td>
                                <td><span class="text-danger"><i class="fas fa-times"></i> Problemático</span></td>
                                <td><span class="text-success"><i class="fas fa-check"></i> 100% sem odor</span></td>
                            </tr>
                            <tr>
                                <td><strong>Conformidade ANVISA</strong></td>
                                <td><span class="text-warning"><i class="fas fa-exclamation"></i> Parcial</span></td>
                                <td><span class="text-success"><i class="fas fa-check"></i> Totalmente conforme</span></td>
                            </tr>
                            <tr>
                                <td><strong>Área Necessária</strong></td>
                                <td><span class="text-danger"><i class="fas fa-times"></i> Grande</span></td>
                                <td><span class="text-success"><i class="fas fa-check"></i> Compacta</span></td>
                            </tr>
                            <tr>
                                <td><strong>Operação Noturna</strong></td>
                                <td><span class="text-danger"><i class="fas fa-times"></i> Limitada</span></td>
                                <td><span class="text-success"><i class="fas fa-check"></i> 24/7 silenciosa</span></td>
                            </tr>
                            <tr>
                                <td><strong>Geração de Receita</strong></td>
                                <td><span class="text-danger"><i class="fas fa-times"></i> Nenhuma</span></td>
                                <td><span class="text-success"><i class="fas fa-check"></i> Fertilizante orgânico</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BSB Airport Pilot Case -->
<section class="section bg-primary text-white">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-6">
                <div class="case-content">
                    <div class="case-badge mb-3">
                        <i class="fas fa-star text-warning"></i>
                        <span class="ml-2">Projeto Piloto em Desenvolvimento</span>
                    </div>
                    
                    <h2 class="text-white">Aeroporto de Brasília (BSB)</h2>
                    <h3 class="text-white opacity-90 mb-4">Projeto Piloto - 20 toneladas/dia</h3>
                    
                    <div class="case-highlights">
                        <div class="highlight-item mb-3">
                            <i class="fas fa-map-marker-alt text-warning"></i>
                            <span class="ml-3"><strong>Localização:</strong> Terminal Principal - Área de Serviços</span>
                        </div>
                        
                        <div class="highlight-item mb-3">
                            <i class="fas fa-users text-warning"></i>
                            <span class="ml-3"><strong>Passageiros/ano:</strong> 15+ milhões</span>
                        </div>
                        
                        <div class="highlight-item mb-3">
                            <i class="fas fa-weight text-warning"></i>
                            <span class="ml-3"><strong>Resíduos orgânicos:</strong> 20 tons/dia estimado</span>
                        </div>
                        
                        <div class="highlight-item mb-3">
                            <i class="fas fa-handshake text-warning"></i>
                            <span class="ml-3"><strong>Parceria:</strong> Inframerica + Golden Deer</span>
                        </div>
                    </div>
                    
                    <div class="case-timeline mt-4">
                        <h4 class="text-white mb-3">Cronograma do Piloto</h4>
                        <div class="timeline-item mb-2">
                            <strong>Q1 2025:</strong> Análise técnica e aprovações
                        </div>
                        <div class="timeline-item mb-2">
                            <strong>Q2 2025:</strong> Instalação e testes
                        </div>
                        <div class="timeline-item mb-2">
                            <strong>Q3 2025:</strong> Operação piloto (6 meses)
                        </div>
                        <div class="timeline-item">
                            <strong>Q4 2025:</strong> Avaliação e expansão
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="financial-projection bg-white text-dark p-4 rounded">
                    <h4 class="mb-4 text-primary">Projeções do Projeto BSB</h4>
                    
                    <div class="projection-metrics">
                        <div class="metric-row mb-3">
                            <div class="d-flex justify-between">
                                <span>Investimento Inicial:</span>
                                <strong class="text-primary">R$ 5,3 milhões</strong>
                            </div>
                            <small class="text-muted">Equipamentos para 20 tons/dia</small>
                        </div>
                        
                        <div class="metric-row mb-3">
                            <div class="d-flex justify-between">
                                <span>Economia Anual:</span>
                                <strong class="text-success">R$ 1,8 milhões</strong>
                            </div>
                            <small class="text-muted">vs. destinação atual</small>
                        </div>
                        
                        <div class="metric-row mb-3">
                            <div class="d-flex justify-between">
                                <span>Receita Fertilizante:</span>
                                <strong class="text-info">R$ 876 mil/ano</strong>
                            </div>
                            <small class="text-muted">1.095 tons/ano produzidas</small>
                        </div>
                        
                        <div class="metric-row mb-4">
                            <div class="d-flex justify-between">
                                <span>Payback:</span>
                                <strong class="text-warning">2,1 anos</strong>
                            </div>
                        </div>
                        
                        <div class="environmental-impact pt-3 border-top">
                            <h5>Impacto Ambiental</h5>
                            <div class="impact-item mb-2">
                                <i class="fas fa-leaf text-success"></i>
                                <span class="ml-2">1.200 tons CO2e reduzidas/ano</span>
                            </div>
                            <div class="impact-item mb-2">
                                <i class="fas fa-recycle text-primary"></i>
                                <span class="ml-2">90% redução volume resíduos</span>
                            </div>
                            <div class="impact-item">
                                <i class="fas fa-certificate text-warning"></i>
                                <span class="ml-2">Contribuição para carbono neutro até 2030</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="<?php echo get_url('financing', ['case' => 'bsb-airport']); ?>" class="btn btn-primary btn-block">
                            Ver Estudo Completo BSB
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Airport Benefits -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Benefícios Específicos para Aeroportos</h2>
            <p class="lead">Nossa solução foi desenvolvida para atender às necessidades únicas do setor aeroportuário</p>
        </div>
        
        <div class="benefits-grid grid-2">
            <!-- Operational Benefits -->
            <div class="benefit-category">
                <h3><i class="fas fa-cogs text-primary"></i> Operacionais</h3>
                
                <div class="benefit-list">
                    <div class="benefit-item mb-3">
                        <i class="fas fa-clock text-success"></i>
                        <div class="benefit-content">
                            <strong>Operação 24/7</strong>
                            <p>Processamento contínuo compatível com operação aeroportuária</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item mb-3">
                        <i class="fas fa-volume-mute text-success"></i>
                        <div class="benefit-content">
                            <strong>Baixo Ruído</strong>
                            <p>Operação silenciosa que não interfere nas atividades do terminal</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item mb-3">
                        <i class="fas fa-compress-alt text-success"></i>
                        <div class="benefit-content">
                            <strong>Área Compacta</strong>
                            <p>Solução que se adapta aos espaços limitados dos aeroportos</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item">
                        <i class="fas fa-robot text-success"></i>
                        <div class="benefit-content">
                            <strong>Automação Completa</strong>
                            <p>Mínima intervenção humana, máxima eficiência</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Compliance Benefits -->
            <div class="benefit-category">
                <h3><i class="fas fa-shield-check text-primary"></i> Conformidade</h3>
                
                <div class="benefit-list">
                    <div class="benefit-item mb-3">
                        <i class="fas fa-microscope text-success"></i>
                        <div class="benefit-content">
                            <strong>Padrões ANVISA</strong>
                            <p>Atendimento integral às normas de controle fitossanitário</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item mb-3">
                        <i class="fas fa-globe text-success"></i>
                        <div class="benefit-content">
                            <strong>Normas Internacionais</strong>
                            <p>Compatibilidade com regulamentações ICAO e IATA</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item mb-3">
                        <i class="fas fa-leaf text-success"></i>
                        <div class="benefit-content">
                            <strong>Certificações Ambientais</strong>
                            <p>Contribuição para LEED, BREEAM e outras certificações</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item">
                        <i class="fas fa-chart-line text-success"></i>
                        <div class="benefit-content">
                            <strong>Relatórios Automáticos</strong>
                            <p>Dashboard com métricas de sustentabilidade em tempo real</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Integration -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Integração Técnica Aeroportuária</h2>
            <p class="lead">Nossa solução se integra perfeitamente à infraestrutura aeroportuária existente</p>
        </div>
        
        <div class="integration-features grid-3">
            <div class="integration-card">
                <div class="integration-icon mb-3">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h4>Sistema de Coleta</h4>
                <ul class="feature-list">
                    <li>Pontos de coleta estratégicos no terminal</li>
                    <li>Transporte pneumático ou mecânico</li>
                    <li>Segregação automática de resíduos</li>
                    <li>Rastreabilidade completa do processo</li>
                </ul>
            </div>
            
            <div class="integration-card">
                <div class="integration-icon mb-3" style="color: var(--accent-blue);">
                    <i class="fas fa-server"></i>
                </div>
                <h4>Monitoramento IoT</h4>
                <ul class="feature-list">
                    <li>Sensores de peso e volume em tempo real</li>
                    <li>Alertas automáticos de manutenção</li>
                    <li>Integração com sistemas aeroportuários</li>
                    <li>Dashboard executivo personalizado</li>
                </ul>
            </div>
            
            <div class="integration-card">
                <div class="integration-icon mb-3" style="color: var(--secondary-green);">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Segurança & Controle</h4>
                <ul class="feature-list">
                    <li>Sistema selado com controle de acesso</li>
                    <li>Monitoramento de temperatura e umidade</li>
                    <li>Registros automáticos para auditoria</li>
                    <li>Integração com CFTV aeroportuário</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Airport Success Stories -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Aeroportos Internacionais que Confiam na Tecnologia</h2>
            <p class="lead">Cases de sucesso em grandes hubs aeroportuários na China</p>
        </div>
        
        <div class="airport-cases grid-3">
            <div class="case-card">
                <div class="case-header">
                    <div class="airport-icon mb-3">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <h4>Shanghai Pudong International</h4>
                    <span class="case-location">Terminal 2 - China</span>
                </div>
                
                <div class="case-stats">
                    <div class="stat-item mb-2">
                        <span class="stat-label">Passageiros/ano:</span>
                        <span class="stat-value">76 milhões</span>
                    </div>
                    <div class="stat-item mb-2">
                        <span class="stat-label">Capacidade instalada:</span>
                        <span class="stat-value">50 tons/dia</span>
                    </div>
                    <div class="stat-item mb-2">
                        <span class="stat-label">Operação desde:</span>
                        <span class="stat-value">2019</span>
                    </div>
                </div>
                
                <div class="case-results">
                    <div class="result-item">
                        <i class="fas fa-check-circle text-success"></i>
                        <span>95% redução custos destinação</span>
                    </div>
                    <div class="result-item">
                        <i class="fas fa-award text-primary"></i>
                        <span>Certificação Green Airport</span>
                    </div>
                </div>
            </div>
            
            <div class="case-card">
                <div class="case-header">
                    <div class="airport-icon mb-3" style="color: var(--accent-blue);">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h4>Beijing Capital International</h4>
                    <span class="case-location">Terminal 3 - China</span>
                </div>
                
                <div class="case-stats">
                    <div class="stat-item mb-2">
                        <span class="stat-label">Passageiros/ano:</span>
                        <span class="stat-value">100 milhões</span>
                    </div>
                    <div class="stat-item mb-2">
                        <span class="stat-label">Capacidade instalada:</span>
                        <span class="stat-value">80 tons/dia</span>
                    </div>
                    <div class="stat-item mb-2">
                        <span class="stat-label">Operação desde:</span>
                        <span class="stat-value">2020</span>
                    </div>
                </div>
                
                <div class="case-results">
                    <div class="result-item">
                        <i class="fas fa-leaf text-success"></i>
                        <span>Carbono neutro atingido</span>
                    </div>
                    <div class="result-item">
                        <i class="fas fa-star text-warning"></i>
                        <span>Benchmark mundial em sustentabilidade</span>
                    </div>
                </div>
            </div>
            
            <div class="case-card">
                <div class="case-header">
                    <div class="airport-icon mb-3" style="color: var(--secondary-green);">
                        <i class="fas fa-plane-arrival"></i>
                    </div>
                    <h4>Guangzhou Baiyun International</h4>
                    <span class="case-location">Hub Principal - China</span>
                </div>
                
                <div class="case-stats">
                    <div class="stat-item mb-2">
                        <span class="stat-label">Passageiros/ano:</span>
                        <span class="stat-value">73 milhões</span>
                    </div>
                    <div class="stat-item mb-2">
                        <span class="stat-label">Capacidade instalada:</span>
                        <span class="stat-value">45 tons/dia</span>
                    </div>
                    <div class="stat-item mb-2">
                        <span class="stat-label">Operação desde:</span>
                        <span class="stat-value">2021</span>
                    </div>
                </div>
                
                <div class="case-results">
                    <div class="result-item">
                        <i class="fas fa-coins text-success"></i>
                        <span>ROI de 280% em 5 anos</span>
                    </div>
                    <div class="result-item">
                        <i class="fas fa-recycle text-primary"></i>
                        <span>Zero resíduo para aterro</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="<?php echo get_url('projects', ['filter' => 'airport']); ?>" class="btn btn-primary btn-lg">
                Ver Todos os Cases de Aeroportos
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="section bg-secondary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-white">Processo de Implementação em Aeroportos</h2>
            <p class="lead text-white opacity-90">Metodologia comprovada com mínima interrupção operacional</p>
        </div>
        
        <div class="implementation-timeline">
            <div class="timeline-container">
                <div class="timeline-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4 class="text-white">Análise Técnica</h4>
                        <p class="text-white opacity-90"><strong>Semanas 1-4:</strong> Auditoria de resíduos, mapeamento de fluxos, análise de integração com sistemas existentes</p>
                        <ul class="step-details text-white opacity-80">
                            <li>Caracterização dos resíduos por área</li>
                            <li>Análise de conformidade ANVISA</li>
                            <li>Definição de pontos de instalação</li>
                        </ul>
                    </div>
                </div>
                
                <div class="timeline-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4 class="text-white">Projeto Executivo</h4>
                        <p class="text-white opacity-90"><strong>Semanas 5-8:</strong> Desenvolvimento de projeto detalhado, aprovações regulatórias, planejamento de instalação</p>
                        <ul class="step-details text-white opacity-80">
                            <li>Projeto de engenharia detalhado</li>
                            <li>Aprovações ANVISA e órgãos locais</li>
                            <li>Cronograma de instalação sem impacto operacional</li>
                        </ul>
                    </div>
                </div>
                
                <div class="timeline-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4 class="text-white">Instalação</h4>
                        <p class="text-white opacity-90"><strong>Semanas 9-16:</strong> Instalação dos equipamentos em horários programados, testes e comissionamento</p>
                        <ul class="step-details text-white opacity-80">
                            <li>Instalação em horários de menor movimento</li>
                            <li>Testes de integração com sistemas</li>
                            <li>Treinamento de equipes operacionais</li>
                        </ul>
                    </div>
                </div>
                
                <div class="timeline-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4 class="text-white">Operação</h4>
                        <p class="text-white opacity-90"><strong>Semana 17+:</strong> Início da operação com suporte 24/7, monitoramento remoto e otimização contínua</p>
                        <ul class="step-details text-white opacity-80">
                            <li>Suporte técnico 24/7</li>
                            <li>Monitoramento remoto IoT</li>
                            <li>Relatórios mensais de performance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-light">
    <div class="container text-center">
        <h2>Pronto para Revolucionar a Gestão de Resíduos do Seu Aeroporto?</h2>
        <p class="lead mb-5">
            Junte-se aos principais aeroportos da China que já transformaram seus resíduos orgânicos em vantagem competitiva
        </p>
        
        <div class="cta-actions">
            <button class="btn btn-primary btn-lg mr-3" onclick="openLeadModal('b2g')">
                <i class="fas fa-calculator"></i>
                Calcular ROI para Meu Aeroporto
            </button>
            <a href="<?php echo get_url('contact', ['type' => 'pilot', 'segment' => 'airport']); ?>" class="btn btn-secondary btn-lg mr-3">
                <i class="fas fa-flask"></i>
                Solicitar Projeto Piloto
            </a>
            <a href="<?php echo get_url('technology'); ?>" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-cogs"></i>
                Ver Especificações Técnicas
            </a>
        </div>
        
        <!-- Certification Badges -->
        <div class="certifications mt-5">
            <h4 class="mb-4">Certificações e Conformidades Aeroportuárias</h4>
            <div class="cert-badges d-flex justify-center flex-wrap gap-4">
                <div class="cert-badge">
                    <i class="fas fa-microscope text-primary"></i>
                    <div>
                        <strong>ANVISA</strong>
                        <small class="d-block text-muted">Controle Fitossanitário</small>
                    </div>
                </div>
                <div class="cert-badge">
                    <i class="fas fa-plane text-secondary"></i>
                    <div>
                        <strong>ICAO</strong>
                        <small class="d-block text-muted">Padrões Internacionais</small>
                    </div>
                </div>
                <div class="cert-badge">
                    <i class="fas fa-leaf text-success"></i>
                    <div>
                        <strong>ISO 14001</strong>
                        <small class="d-block text-muted">Gestão Ambiental</small>
                    </div>
                </div>
                <div class="cert-badge">
                    <i class="fas fa-award text-warning"></i>
                    <div>
                        <strong>LEED</strong>
                        <small class="d-block text-muted">Green Building</small>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact-info mt-5 pt-4 border-top">
            <h4 class="mb-3">Especialistas em Soluções Aeroportuárias</h4>
            <div class="contact-details d-flex justify-center flex-wrap gap-4">
                <div class="contact-item">
                    <i class="fas fa-phone text-primary"></i>
                    <a href="tel:<?php echo str_replace([' ', '-', '(', ')'], '', SITE_PHONE); ?>" class="ml-2"><?php echo SITE_PHONE; ?></a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope text-primary"></i>
                    <a href="mailto:aeroportos@goldendeer.com.br" class="ml-2">aeroportos@goldendeer.com.br</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Page-specific styles for airports */
.airport-infographic .progress {
    height: 20px;
    background: #e9ecef;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 0.5rem;
}

.challenge-stat {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
}

.challenge-stat:last-child {
    border-bottom: none;
}

.stat-icon {
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.feature-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-benefit {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #eee;
    font-size: 0.875rem;
}

.comparison-table .table th {
    text-align: center;
    vertical-align: middle;
}

.comparison-table .table td {
    vertical-align: middle;
    text-align: center;
}

.benefit-category h3 {
    color: var(--dark-gray);
    margin-bottom: 2rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.benefit-content h5,
.benefit-content strong {
    margin-bottom: 0.5rem;
    color: var(--dark-gray);
}

.integration-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.integration-icon {
    font-size: 3rem;
    color: var(--primary-gold);
    margin-bottom: 1rem;
}

.feature-list {
    list-style: none;
    padding: 0;
    text-align: left;
}

.feature-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 1.5rem;
}

.feature-list li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-gold);
    font-weight: bold;
}

.feature-list li:last-child {
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

.airport-icon {
    font-size: 2.5rem;
    color: var(--primary-gold);
}

.case-location {
    color: var(--medium-gray);
    font-size: 0.875rem;
}

.stat-item {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px solid #eee;
}

.stat-item:last-child {
    border-bottom: none;
}

.result-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    font-size: 0.875rem;
}

.implementation-timeline {
    position: relative;
}

.timeline-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    position: relative;
}

.timeline-step {
    text-align: center;
    position: relative;
}

.step-number {
    width: 60px;
    height: 60px;
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

.step-details {
    list-style: none;
    padding: 0;
    font-size: 0.875rem;
}

.step-details li {
    margin-bottom: 0.5rem;
}

.cert-badges {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
}

.cert-badge {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.cert-badge i {
    font-size: 2rem;
}

@media (max-width: 768px) {
    .stats-row {
        flex-direction: column;
        gap: 1rem;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .integration-features {
        grid-template-columns: 1fr;
    }
    
    .timeline-container {
        grid-template-columns: 1fr;
    }
    
    .cert-badges {
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
</style>