<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira Digital</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        /* ===== ESTILOS PERSONALIZADOS ===== */
        
        /* Estilo geral do body */
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Container principal da aplicação */
        .main-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: white;
            min-height: 100vh;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        /* Header da carteira */
        .wallet-header {
            background: linear-gradient(135deg, #ff9800, #f57c00);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 20px 20px;
        }
        
        /* Estilo do carrossel de cartões */
        .card-carousel {
            padding: 30px 20px;
        }
        
        /* Cartão individual no carrossel */
        .wallet-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            overflow: hidden;
            margin: 0 10px;
        }
        
        /* Imagem do cartão */
        .card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        /* Container dos botões de ação */
        .action-buttons {
            padding: 0 20px 20px;
            display: flex;
            gap: 15px;
        }
        
        /* Estilo dos botões NFC e Ver Saldo */
        .action-btn {
            flex: 1;
            padding: 12px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
            transition: all 0.3s ease;
        }
        
        /* Botão NFC específico */
        .btn-nfc {
            background: linear-gradient(135deg, #2196f3, #1976d2);
            color: white;
        }
        
        .btn-nfc:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(33, 150, 243, 0.4);
        }
        
        /* Botão Ver Saldo específico */
        .btn-saldo {
            background: linear-gradient(135deg, #ff9800, #f57c00);
            color: white;
        }
        
        .btn-saldo:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 152, 0, 0.4);
        }
        
        /* Seção de transações */
        .transactions-section {
            padding: 20px;
        }
        
        /* Título da seção */
        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }
        
        /* Item individual de transação */
        .transaction-item {
            background: white;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        /* Ícone da transação */
        .transaction-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #ff9800, #f57c00);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }
        
        /* Detalhes da transação */
        .transaction-details {
            flex: 1;
            margin-left: 15px;
        }
        
        .transaction-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 2px;
        }
        
        .transaction-date {
            font-size: 12px;
            color: #666;
        }
        
        /* Valor da transação */
        .transaction-amount {
            font-weight: 700;
            color: #4caf50;
            font-size: 16px;
        }
        
        /* Customização do carrossel */
        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            height: 30px;
            background-color: rgba(0,0,0,0.5);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }
        
        .carousel-control-prev {
            left: 10px;
        }
        
        .carousel-control-next {
            right: 10px;
        }
        
        /* Indicadores do carrossel */
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ff9800;
        }
        
        /* Estilo dos modais */
        .modal-header {
            background: linear-gradient(135deg, #ff9800, #f57c00);
            color: white;
            border-radius: 10px 10px 0 0;
        }
        
        .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <!-- Container principal da aplicação -->
    <div class="main-container">
        
        <!-- ===== HEADER DA CARTEIRA ===== -->
        <div class="wallet-header">
            <h1 class="h4 mb-0">Carteira</h1>
        </div>
        
        <!-- ===== CARROSSEL DE CARTÕES ===== -->
        <div class="card-carousel">
            <!-- Carrossel Bootstrap para os diferentes tipos de cartão -->
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                
                <!-- Indicadores do carrossel (pontinhos na parte inferior) -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="2"></button>
                </div>
                
                <!-- Container dos slides do carrossel -->
                <div class="carousel-inner">
                    <!-- Slide 1: Cartão Escolar Aluno -->
                    <div class="carousel-item active">
                        <div class="wallet-card">
                            <img src="Escolar-Aluno.jpg" class="card-image" alt="Cartão Escolar Aluno">
                        </div>
                    </div>
                    
                    <!-- Slide 2: Cartão Cidadão -->
                    <div class="carousel-item">
                        <div class="wallet-card">
                            <img src="Cidadao.jpg" class="card-image" alt="Cartão Cidadão">
                        </div>
                    </div>
                    
                    <!-- Slide 3: Cartão Vale-transporte -->
                    <div class="carousel-item">
                        <div class="wallet-card">
                            <img src="Vale-Transporte.jpg" class="card-image" alt="Cartão Vale-transporte">
                        </div>
                    </div>
                </div>
                
                <!-- Botões de navegação do carrossel (setas esquerda e direita) -->
                <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        
        <!-- ===== BOTÕES DE AÇÃO ===== -->
        <div class="action-buttons">
            <!-- Botão NFC que abre modal -->
            <button class="action-btn btn-nfc" data-bs-toggle="modal" data-bs-target="#nfcModal">
                <i class="bi bi-broadcast me-2"></i>NFC
            </button>
            
            <!-- Botão Ver Saldo que abre modal -->
            <button class="action-btn btn-saldo" data-bs-toggle="modal" data-bs-target="#saldoModal">
                <i class="bi bi-wallet2 me-2"></i>Ver Saldo
            </button>
        </div>
        
        <!-- ===== SEÇÃO DE ÚLTIMAS TRANSAÇÕES ===== -->
        <div class="transactions-section">
            <h2 class="section-title">Últimas Transações</h2>
            
            <!-- Transação 1: Cartão -->
            <div class="transaction-item">
                <div class="transaction-icon">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="transaction-details">
                    <div class="transaction-name">Cartão</div>
                    <div class="transaction-date">05/08/2025 às 14:30</div>
                </div>
                <div class="transaction-amount">R$ 20,00</div>
            </div>
            
            <!-- Transação 2: Pix -->
            <div class="transaction-item">
                <div class="transaction-icon">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <div class="transaction-details">
                    <div class="transaction-name">Pix</div>
                    <div class="transaction-date">22/07/2025 às 17:30</div>
                </div>
                <div class="transaction-amount">R$ 100,00</div>
            </div>
        </div>
    </div>
    
    <!-- ===== MODAL NFC ===== -->
    <div class="modal fade" id="nfcModal" tabindex="-1" aria-labelledby="nfcModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h5 class="modal-title" id="nfcModalLabel">
                        <i class="bi bi-broadcast me-2"></i>Conexão NFC
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <!-- Corpo do modal -->
                <div class="modal-body text-center py-4">
                    <div class="mb-4">
                        <i class="bi bi-broadcast display-1 text-primary"></i>
                    </div>
                    <h6 class="mb-3">Aproxime seu cartão do leitor NFC</h6>
                    <p class="text-muted">Posicione o cartão próximo ao sensor do seu dispositivo para realizar a leitura.</p>
                    
                    <!-- Simulação de status da conexão -->
                    <div class="alert alert-info mt-3">
                        <i class="bi bi-info-circle me-2"></i>
                        Aguardando aproximação do cartão...
                    </div>
                </div>
                
                <!-- Rodapé do modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-arrow-clockwise me-2"></i>Tentar Novamente
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ===== MODAL VER SALDO ===== -->
    <div class="modal fade" id="saldoModal" tabindex="-1" aria-labelledby="saldoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h5 class="modal-title" id="saldoModalLabel">
                        <i class="bi bi-wallet2 me-2"></i>Saldo Atual
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <!-- Corpo do modal -->
                <div class="modal-body text-center py-4">
                    <div class="mb-4">
                        <i class="bi bi-wallet2 display-1 text-success"></i>
                    </div>
                    
                    <!-- Informações do saldo -->
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="card-title text-muted mb-1">Saldo Disponível</h6>
                                    <h3 class="text-success mb-0">R$ 245,67</h3>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h6 class="card-title text-muted mb-1">Última Recarga</h6>
                                    <p class="mb-0 fw-bold">R$ 100,00</p>
                                    <small class="text-muted">22/07/2025</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h6 class="card-title text-muted mb-1">Gastos do Mês</h6>
                                    <p class="mb-0 fw-bold">R$ 120,00</p>
                                    <small class="text-muted">Agosto</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Rodapé do modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary">
                        <i class="bi bi-plus-circle me-2"></i>Recarregar
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        <i class="bi bi-check-circle me-2"></i>Entendi
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
