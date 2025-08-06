<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>

<body>
    <div class="d-flex">
        <!-- sidebar -->
        <aside id="sidebar" class="sidebar-toggle rounded-4">
            <?php include_once 'sidebar.php'; ?>
        </aside>
        <div id="overlay"></div>
        <!-- fim da sidebar -->
        <!-- conteudo -->
        <div class="main rounded-4">
            <nav class="navbar navbar-expand border-bottom d-flex justify-content-between">
                <button class="toggler-btn" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user fa-2xl"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                </div>
            </nav>
            <main class="p-3">
                <div class="container-fluid">
                    <div class="main-container">
                        <!-- Botão Dashboard -->
                        <button class="dashboard-btn">Dashboard</button>

                        <div class="row">
                            <!-- Coluna Esquerda - Cartões e Histórico -->
                            <div class="col-lg-8">
                                <!-- Seção de Cartões -->
                                <div class="row justify-content-center align-items-center gap-5">
                                    <!-- Cartão Físico -->
                                    <div class="col-md-5">
                                        <div class="custom-card p-3">
                                            <h6 class="mb-2 text-start">Cartões</h6>
                                            <div class="card-section d-flex justify-content-center align-items-center flex-column">
                                                
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
                                                <div class="mb-3">
                                                    <div class="card-number">Nº Cartão</div>
                                                    <div>000003033 - 0122</div>
                                                </div>
                                                <div
                                                    class="mb-3 d-flex justify-content-center align-items-center gap-3">
                                                    <p class="card-number fs-5">Status:</p>
                                                    <span class="status-active">● Ativo</span>
                                                </div>
                                                <button class="details-btn">Mais detalhes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Histórico de Atividade -->
                                <div class="custom-card mt-md-5">
                                    <div class="activity-section" style="max-height: 315.19px;">
                                        <div>
                                            <h6 class="mb-3">Histórico de Atividade</h6>
                                        </div>

                                        <!-- Item 1 - Linha 552 -->
                                        <div class="activity-item">
                                            <div class="row w-100">
                                                <div class="col-8 col-md-10">
                                                    <div class="d-flex align-items-center flex-grow-1 gap-2">
                                                        <div class="activity-icon bus-icon">
                                                            <i class="bi bi-bus-front"></i>
                                                        </div>
                                                        <div class="activity-details">
                                                            <h6 class="text-start" >Linha: 552</h6>
                                                            <p>22/07/2025</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-2 d-flex justify-content-end">
                                                    <div class="activity-value value-negative">R$ 8,20</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 2 - Pix -->
                                        <div class="activity-item">
                                            <div class="row w-100">
                                                <div class="col-8 col-md-10">
                                                    <div class="d-flex align-items-center flex-grow-1 gap-2">
                                                        <div class="activity-icon pix-icon">
                                                            <i class="bi bi-plus-lg"></i>
                                                        </div>
                                                        <div class="activity-details">
                                                            <h6 class="text-start">Pix:</h6>
                                                            <p>22/07/2025 às 17:30</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-2 d-flex justify-content-end">
                                                    <div class="activity-value value-positive">R$ 100,00</div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Item 3 - Linha 498 -->
                                        <div class="activity-item">
                                            <div class="row w-100">
                                                <div class="col-8 col-md-10">
                                                    <div class="d-flex align-items-center flex-grow-1 gap-2">
                                                        <div class="activity-icon bus-icon">
                                                            <i class="bi bi-bus-front"></i>
                                                        </div>
                                                        <div class="activity-details">
                                                            <h6 class="text-start" >Linha: 552</h6>
                                                            <p>22/07/2025</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-2 d-flex justify-content-end">
                                                    <div class="activity-value value-negative">R$ 8,20</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 4 - Linha 498 -->
                                        <div class="activity-item">
                                            <div class="row w-100">
                                                <div class="col-8 col-md-10">
                                                    <div class="d-flex align-items-center flex-grow-1 gap-2">
                                                        <div class="activity-icon bus-icon">
                                                            <i class="bi bi-bus-front"></i>
                                                        </div>
                                                        <div class="activity-details">
                                                            <h6 class="text-start" >Linha: 552</h6>
                                                            <p>22/07/2025</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-2 d-flex justify-content-end">
                                                    <div class="activity-value value-negative">R$ 8,20</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- Coluna Direita - Espaço para futuras funcionalidades e Gráfico -->
                            <div class="col-lg-4 d-flex justify-content-center align-items-center flex-column gap-5">
                                <!-- Card vazio para futuras funcionalidades -->
                                <div class="custom-card mb-3 w-50" style="height: 200px;">
                                    <!-- Espaço reservado para futuras funcionalidades -->
                                </div>

                                <!-- Gráfico Circular -->
                                <div class="custom-card w-50" style="height: 200px;">
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
        </div>
        </main>
    </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>