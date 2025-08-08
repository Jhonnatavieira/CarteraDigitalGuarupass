<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QrCode - Sistema</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        /* ===== ESTILOS PERSONALIZADOS ===== */
        
        /* Configuração geral */
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        /* Container principal */
        .main-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        /* Header verde */
        .header {
            background-color: #22c55e;
            color: white;
            padding: 15px 25px;
            font-size: 18px;
            font-weight: 600;
        }
        
        /* Conteúdo principal */
        .main-content {
            padding: 30px;
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }
        
        /* Seção esquerda - QR Code */
        .qr-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        /* Container do QR Code */
        .qr-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        /* QR Code simulado */
        .qr-code {
            width: 200px;
            height: 200px;
            background: white;
            border: 10px solid #000;
            position: relative;
            margin: 0 auto;
        }
        
        /* Padrão do QR Code simulado */
        .qr-pattern {
            position: absolute;
            background: #000;
        }
        
        .qr-corner {
            width: 60px;
            height: 60px;
            border: 8px solid #000;
            background: white;
            position: absolute;
        }
        
        .qr-corner::after {
            content: '';
            position: absolute;
            top: 12px;
            left: 12px;
            width: 20px;
            height: 20px;
            background: #000;
        }
        
        .qr-corner.top-left {
            top: 10px;
            left: 10px;
        }
        
        .qr-corner.top-right {
            top: 10px;
            right: 10px;
        }
        
        .qr-corner.bottom-left {
            bottom: 10px;
            left: 10px;
        }
        
        /* Botões de ação */
        .action-buttons {
            display: flex;
            gap: 12px;
        }
        
        .action-btn {
            background-color: #22c55e;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .action-btn:hover {
            background-color: #16a34a;
            transform: translateY(-1px);
        }
        
        /* Seção direita - Pagamento */
        .payment-section {
            width: 280px;
        }
        
        /* Card de pagamento */
        .payment-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        /* Header do card */
        .payment-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .payment-title {
            font-size: 16px;
            font-weight: 600;
            color: #374151;
            margin: 0;
            flex-grow: 1;
        }
        
        /* Botão Mudar */
        .change-btn {
            background: #f9fafb;
            border: 1px solid #d1d5db;
            color: #6b7280;
            padding: 6px 16px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .change-btn:hover {
            background: #f3f4f6;
            border-color: #9ca3af;
        }
        
        /* Método de pagamento */
        .payment-method {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        /* Ícone PIX */
        .pix-icon {
            width: 40px;
            height: 40px;
            background: #00d4aa;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        
        .payment-name {
            font-size: 16px;
            font-weight: 600;
            color: #374151;
        }
        
        /* Estilos dos modais */
        .modal-content {
            border-radius: 12px;
            border: none;
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
        }
        
        .modal-header {
            background-color: #22c55e;
            color: white;
            border-radius: 12px 12px 0 0;
            padding: 20px 25px;
            border-bottom: none;
        }
        
        .modal-title {
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        /* Opções de pagamento no modal */
        .payment-option {
            padding: 16px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            margin-bottom: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .payment-option:hover {
            border-color: #22c55e;
            background-color: #f0f9ff;
        }
        
        .payment-option.selected {
            border-color: #22c55e;
            background-color: #ecfdf5;
        }
        
        .payment-option-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }
        
        .pix-option {
            background-color: #00d4aa;
        }
        
        .debit-option {
            background-color: #3b82f6;
        }
        
        .payment-option-details h6 {
            margin: 0 0 4px 0;
            font-size: 16px;
            font-weight: 600;
        }
        
        .payment-option-details small {
            color: #6b7280;
        }
    </style>
</head>
<body>
    <!-- Container principal -->
    <div class="main-container">
        
        <!-- ===== HEADER ===== -->
        <div class="header">
            QrCode
        </div>
        
        <!-- ===== CONTEÚDO PRINCIPAL ===== -->
        <div class="main-content">
            
            <!-- ===== SEÇÃO QR CODE (ESQUERDA) ===== -->
            <div class="qr-section">
                <div class="qr-container">
                    <!-- QR Code simulado com padrão visual -->
                    <div class="qr-code">
                        <div class="qr-corner top-left"></div>
                        <div class="qr-corner top-right"></div>
                        <div class="qr-corner bottom-left"></div>
                        <!-- Padrão de dados simulado -->
                        <div class="qr-pattern" style="width: 20px; height: 20px; top: 90px; left: 50px;"></div>
                        <div class="qr-pattern" style="width: 15px; height: 15px; top: 120px; left: 80px;"></div>
                        <div class="qr-pattern" style="width: 25px; height: 10px; top: 100px; right: 60px;"></div>
                        <div class="qr-pattern" style="width: 10px; height: 30px; bottom: 80px; left: 70px;"></div>
                        <div class="qr-pattern" style="width: 18px; height: 18px; bottom: 90px; right: 50px;"></div>
                    </div>
                </div>
                
                <!-- Botões de ação -->
                <div class="action-buttons">
                    <button class="action-btn" data-bs-toggle="modal" data-bs-target="#qrModal">
                        Mostrar QRCode
                    </button>
                    <button class="action-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                        Comprar QRCode
                    </button>
                </div>
            </div>
            
            <!-- ===== SEÇÃO PAGAMENTO (DIREITA) ===== -->
            <div class="payment-section">
                <div class="payment-card">
                    <!-- Header do card -->
                    <div class="payment-header">
                        <h3 class="payment-title">Forma de pagamento</h3>
                        <button class="change-btn" data-bs-toggle="modal" data-bs-target="#paymentModal">
                            Mudar
                        </button>
                    </div>
                    
                    <!-- Método selecionado -->
                    <div class="payment-method">
                        <div class="pix-icon">
                            <i class="bi bi-lightning-fill"></i>
                        </div>
                        <span class="payment-name">Pix</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ===== MODAL MOSTRAR QR CODE ===== -->
    <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="qrModalLabel">
                        <i class="bi bi-qr-code"></i>
                        Mostrar QR Code
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <div class="mb-4">
                        <div class="qr-code mx-auto" style="width: 200px; height: 200px;">
                            <div class="qr-corner top-left"></div>
                            <div class="qr-corner top-right"></div>
                            <div class="qr-corner bottom-left"></div>
                            <div class="qr-pattern" style="width: 20px; height: 20px; top: 90px; left: 50px;"></div>
                            <div class="qr-pattern" style="width: 15px; height: 15px; top: 120px; left: 80px;"></div>
                            <div class="qr-pattern" style="width: 25px; height: 10px; top: 100px; right: 60px;"></div>
                            <div class="qr-pattern" style="width: 10px; height: 30px; bottom: 80px; left: 70px;"></div>
                            <div class="qr-pattern" style="width: 18px; height: 18px; bottom: 90px; right: 50px;"></div>
                        </div>
                    </div>
                    <h6 class="mb-3">QR Code gerado com sucesso</h6>
                    <p class="text-muted">Utilize este código para realizar pagamentos</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn" style="background-color: #22c55e; color: white;">
                        <i class="bi bi-download me-2"></i>Baixar QR Code
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ===== MODAL COMPRAR QR CODE ===== -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">
                        <i class="bi bi-cart-plus"></i>
                        Comprar QR Code
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-3">Detalhes da Compra</h6>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>QR Code Premium</span>
                                        <strong>R$ 15,00</strong>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Taxa de processamento</span>
                                        <strong>R$ 1,50</strong>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span><strong>Total</strong></span>
                                        <strong style="color: #22c55e;">R$ 16,50</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-3">Forma de Pagamento</h6>
                            <div class="payment-method p-3 border rounded">
                                <div class="pix-icon me-3">
                                    <i class="bi bi-lightning-fill"></i>
                                </div>
                                <span class="payment-name">PIX</span>
                            </div>
                            <small class="text-muted mt-2 d-block">Pagamento instantâneo e seguro</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn" style="background-color: #22c55e; color: white;">
                        <i class="bi bi-credit-card me-2"></i>Finalizar Compra
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ===== MODAL FORMAS DE PAGAMENTO ===== -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">
                        <i class="bi bi-credit-card"></i>
                        Formas de Pagamento
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-4">Selecione sua forma de pagamento:</p>
                    
                    <!-- PIX -->
                    <div class="payment-option selected" onclick="selectPayment(this, 'PIX')">
                        <div class="payment-option-icon pix-option">
                            <i class="bi bi-lightning-fill"></i>
                        </div>
                        <div class="payment-option-details">
                            <h6>PIX</h6>
                            <small>Pagamento instantâneo e gratuito</small>
                        </div>
                        <div class="ms-auto">
                            <i class="bi bi-check-circle" style="color: #22c55e;"></i>
                        </div>
                    </div>
                    
                    <!-- Cartão de Débito -->
                    <div class="payment-option" onclick="selectPayment(this, 'Cartão de Débito')">
                        <div class="payment-option-icon debit-option">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <div class="payment-option-details">
                            <h6>Cartão de Débito</h6>
                            <small>Débito na conta corrente</small>
                        </div>
                        <div class="ms-auto">
                            <i class="bi bi-circle" style="color: #d1d5db;"></i>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn" style="background-color: #22c55e; color: white;" data-bs-dismiss="modal" onclick="updatePaymentMethod()">
                        <i class="bi bi-check me-2"></i>Confirmar
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        /* ===== JAVASCRIPT PARA FUNCIONALIDADES ===== */
        
        let selectedPaymentMethod = 'PIX';
        
        // Função para selecionar método de pagamento
        function selectPayment(element, method) {
            // Remove seleção de todos
            document.querySelectorAll('.payment-option').forEach(option => {
                option.classList.remove('selected');
                const icon = option.querySelector('.ms-auto i');
                icon.className = 'bi bi-circle';
                icon.style.color = '#d1d5db';
            });
            
            // Adiciona seleção ao clicado
            element.classList.add('selected');
            const selectedIcon = element.querySelector('.ms-auto i');
            selectedIcon.className = 'bi bi-check-circle';
            selectedIcon.style.color = '#22c55e';
            
            selectedPaymentMethod = method;
        }
        
        // Função para atualizar método na interface
        function updatePaymentMethod() {
            const paymentName = document.querySelector('.payment-name');
            const pixIcon = document.querySelector('.pix-icon i');
            
            paymentName.textContent = selectedPaymentMethod;
            
            if (selectedPaymentMethod === 'PIX') {
                pixIcon.className = 'bi bi-lightning-fill';
            } else {
                pixIcon.className = 'bi bi-credit-card';
            }
            
            // Toast de confirmação
            showToast(`Forma de pagamento alterada para ${selectedPaymentMethod}`);
        }
        
        // Função para mostrar toast
        function showToast(message) {
            // Cria elemento toast
            const toastHtml = `
                <div class="toast position-fixed top-0 end-0 m-3" role="alert">
                    <div class="toast-header" style="background-color: #22c55e; color: white;">
                        <i class="bi bi-check-circle me-2"></i>
                        <strong class="me-auto">Sucesso</strong>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                        ${message}
                    </div>
                </div>
            `;
            
            // Adiciona ao DOM
            document.body.insertAdjacentHTML('beforeend', toastHtml);
            
            // Mostra toast
            const toastElement = document.querySelector('.toast:last-child');
            const toast = new bootstrap.Toast(toastElement);
            toast.show();
            
            // Remove após ocultar
            toastElement.addEventListener('hidden.bs.toast', () => {
                toastElement.remove();
            });
        }
        
        // Animações hover nos botões
        document.querySelectorAll('.action-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 4px 12px rgba(34, 197, 94, 0.3)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });
    </script>
</body>
</html>
