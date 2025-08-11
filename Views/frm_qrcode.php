<!-- Container principal -->
<div class="container-fluid p-0">

    <!-- ===== HEADER ===== -->
    <!-- Botão Dashboard -->
    <button class="qrcode-btn">QRCode</button>

    <!-- ===== CONTEÚDO PRINCIPAL ===== -->
    <div class="container">
        <div class="row justify-content-center">

            <!-- ===== QR CODE CARD ===== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="qr-card text-center">
                    <!-- QR Code simulado -->
                    <div class="qr-code">
                        <img src="../img/QRCode.png" style="height: 145px;" alt="">
                    </div>

                    <!-- Botões de ação -->
                    <div class="d-flex flex-column gap-2">
                        <button class="action-btn" data-bs-toggle="modal" data-bs-target="#qrModal">
                            Mostrar QRCode
                        </button>
                        <button class="action-btn" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                            Comprar QRCode
                        </button>
                    </div>
                </div>
            </div>

            <!-- ===== PAYMENT CARD ===== -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="payment-card">
                    <!-- Header do card -->
                    <div class="payment-header d-flex justify-content-center align-items-center">
                        <h3 class="payment-title fs-4"><b>Forma de pagamento</b></h3>
                    </div>

                    <!-- Método selecionado -->
                    <div class="payment-method">
                        <div class="container">
                            <div class="row">
                                <div class="col-7 d-flex gap-2 align-items-center">
                                    <div class="pix-icon">
                                        <i class="fa-brands fa-pix fa-2xl" style="color: #14ae5c;"></i>
                                    </div>
                                    <span class="payment-name">Pix</span>
                                </div>
                                <div class="col-5 d-flex justify-content-end">
                                    <button class="change-btn" data-bs-toggle="modal" ms- data-bs-target="#paymentModal">
                                        Mudar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <i class="bi bi-qr-code me-2"></i>
                    QrCode
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center py-4">
                <div class="mb-4">
                    <div class="qr-code mx-auto" style="width: 200px; height: 200px;">
                        <img src="../img/QRCode.png" style="height: 195px;" alt="">
                    </div>
                </div>

                <!-- Botões de ação do modal -->
                <div class="d-flex flex-column gap-2">
                    <button class="action-btn w-100">
                        Mostrar QRCode
                    </button>
                    <button class="action-btn w-100">
                        Comprar QRCode
                    </button>
                </div>

                <!-- Forma de pagamento no modal -->
                <div class="mt-4">
                    <p class="mb-2 text-start small">Forma de pagamento</p>
                    <div class="d-flex align-items-center justify-content-between p-2 border rounded">
                        <div class="d-flex align-items-center gap-2">
                            <div class="pix-icon" style="width: 30px; height: 30px;">
                                <i class="fa-brands fa-pix fa-2xl"></i>
                            </div>
                            <span class="payment-name">Pix</span>
                        </div>
                        <button class="change-btn btn btn-sm" data-bs-toggle="modal" data-bs-target="#paymentModal">
                            Mudar
                        </button>
                    </div>
                </div>
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
                    <i class="bi bi-cart-plus me-2"></i>
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
                                <i class="fa-brands fa-pix fa-2xl" style="color: #14ae5c;"></i>
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
                    <i class="bi bi-credit-card me-2"></i>
                    Formas de Pagamento
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-4">Selecione sua forma de pagamento:</p>

                <!-- PIX -->
                <div class="payment-option selected" onclick="selectPayment(this, 'PIX')">
                    <div class="payment-option-icon pix-option">
                        <i class="fa-brands fa-pix fa-2xl" style="color: #14ae5c;"></i>
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
                        <i class="fa-solid fa-credit-card fa-2xl" style="color: #14ae5c;"></i>
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
        const paymentNames = document.querySelectorAll('.payment-name');
        const pixIcons = document.querySelectorAll('.pix-icon i');

        paymentNames.forEach(name => {
            name.textContent = selectedPaymentMethod;
        });

        pixIcons.forEach(icon => {
            if (selectedPaymentMethod === 'PIX') {
                icon.className = 'fa-brands fa-pix fa-2xl';
            } else {
                icon.className = 'fa-solid fa-credit-card fa-2xl';
            }
        });
    }
</script>