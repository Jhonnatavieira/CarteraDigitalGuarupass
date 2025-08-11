<!-- Container principal -->

<!-- ===== HEADER ===== -->


<!-- ===== CONTEÚDO PRINCIPAL ===== -->
<div id="qrcodeContainer">
    <div class="header">
        QrCode
    </div>

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
                    <div class="col-12 col-md-6">
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