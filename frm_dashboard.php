<!-- Botão Dashboard -->
<button class="dashboard-btn">Dashboard</button>

<div class="row">
    <!-- Coluna Esquerda - Cartões e Histórico -->
    <div class="col-lg-8">
        <!-- Seção de Cartões -->
        <div class="row justify-content-center align-items-center gap-5 mb-4">
            <!-- Cartão Físico -->
            <div class="col-md-5">
                <div class="custom-card">
                    <h6 class="mb-2 text-start">Cartões</h6>
                    <div
                        class="card-section d-flex justify-content-center align-items-center flex-column">

                        <img class="img-fluid" src="./img/Cartão-png/Cidadão.png"
                            alt="Cartão Cidadão">
                    </div>
                </div>
            </div>

            <!-- Informações do Cartão -->
            <div class="col-md-5">
                <div class="custom-card">
                    <div
                        class="card-info d-flex justify-content-center align-items-center flex-column">
                        <h6 class="mb-3">Card Info</h6>
                        <div class="row w-100">
                            <div class="col-6 col-md-6">
                                <div class="mb-3">
                                    <div class="card-number">Titular:</div>
                                    <div class="mb-2">Andressa Santiago</div>
                                    
                                    <p class="card-number">Data emissão: 02/02/2025</p>  
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="mb-3">
                                    <div class="card-number">Nº Cartão:</div>
                                    <div class="mb-2">0030330122</div>
                                    
                                    <p class="card-number">Status: <span class="status-active">Ativo</span></p>
                                </div>
                            </div>
                        </div>
                        <button class="details-btn">Mais detalhes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Histórico de Atividade -->
            <div class="custom-card">
                <div class="activity-section" style="max-height: 415.19px;">
                    <div>
                        <h6 class="mb-3">Histórico de Atividade</h6>
                    </div>

                    <!-- Item 1 - Linha 552 -->
                    <div class="activity-item">
                        <div class="row w-100">
                            <div class="col-8 col-md-9">
                                <div class="d-flex align-items-center flex-grow-1 gap-2">
                                    <div class="activity-icon">
                                        <i class="fa-solid fa-bus" style="color: #fafafa;"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h6 class="text-start">Linha: 552</h6>
                                        <p>22/07/2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-3 d-flex justify-content-end align-items-center">
                                <div class="activity-value value-negative">R$ 8,20</div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 - Pix -->
                    <div class="activity-item">
                        <div class="row w-100">
                            <div class="col-8 col-md-9">
                                <div class="d-flex align-items-center flex-grow-1 gap-2">
                                    <div class="activity-icon pix-icon">
                                        <i class="fa-brands fa-pix" style="color: #fafafa;"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h6 class="text-start">Pix:</h6>
                                        <p>22/07/2025 às 17:30</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-3 d-flex justify-content-end align-items-center">
                                <div class="activity-value value-positive">R$ 100,00</div>
                            </div>
                        </div>
                    </div>


                    <!-- Item 3 - Linha 498 -->
                    <div class="activity-item">
                        <div class="row w-100">
                            <div class="col-8 col-md-9">
                                <div class="d-flex align-items-center flex-grow-1 gap-2">
                                    <div class="activity-icon bus-icon">
                                       <i class="fa-solid fa-bus" style="color: #fafafa;"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h6 class="text-start">Linha: 552</h6>
                                        <p>22/07/2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-3 d-flex justify-content-end align-items-center">
                                <div class="activity-value value-negative">R$ 8,20</div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 - Linha 498 -->
                    <div class="activity-item">
                        <div class="row w-100">
                            <div class="col-8 col-md-9">
                                <div class="d-flex align-items-center flex-grow-1 gap-2">
                                    <div class="activity-icon bus-icon">
                                        <i class="fa-solid fa-bus" style="color: #fafafa;"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h6 class="text-start">Linha: 552</h6>
                                        <p>22/07/2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-3 d-flex justify-content-end align-items-center">
                                <div class="activity-value value-negative">R$ 8,20</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Coluna Direita - Espaço para futuras funcionalidades e Gráfico -->
    <div class="col-lg-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12 d-flex justify-content-center align-items-center mb-lg-3">
                <!-- Card vazio para futuras funcionalidades -->
                <div class="custom-card" style="height: 225px; width: 25.75rem;">
                    <!-- Espaço reservado para futuras funcionalidades -->
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-12 d-flex justify-content-center align-items-center">
                <!-- Gráfico Circular -->
                <div class="custom-card" style="height: 395px; width: 25.75rem;">
                    <div class="chart-container">
                        <div class="circular-chart">
                            <svg viewBox="0 0 100 100">
                                <!-- Círculo de fundo -->
                                <circle class="circle-bg" cx="50" cy="50" r="40"></circle>
                                <!-- Círculo de progresso -->
                                <circle class="circle" cx="50" cy="50" r="40"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>