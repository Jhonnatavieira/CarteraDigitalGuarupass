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
                    <div id="qrcodeContent" class="mx-auto my-auto" style="width: 200px; height: 200px;">
                        <div class="initialState">
                            <img src="../img/QRCode.png" style="height: 195px;" alt="">
                        </div>
                    </div>
                </div>

                <!-- Botões de ação do modal -->
                <div class="d-flex w-100">
                    <div class="row w-100 ">
                        <div class="col d-flex justify-content-end">
                            <button id="readQrButton" class="action-btn px-5">
                                Ler
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== MODAL COMPRAR QR CODE ===== -->
<!-- Modal de Compra -->
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

                        <!-- Seletor de Quantidade -->
                        <div class="mb-3">
                            <label class="form-label">Quantidade de QR Codes</label>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-outline-secondary" id="decreaseBtn" onclick="changeQuantity(-1)">-</button>
                                <input type="number" class="form-control mx-2 text-center" id="quantityInput" value="1" min="1" max="10" readonly style="max-width: 80px;">
                                <button type="button" class="btn btn-outline-secondary" id="increaseBtn" onclick="changeQuantity(1)">+</button>
                            </div>
                        </div>

                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>QR Code (x<span id="qrQuantityDisplay">1</span>)</span>
                                    <strong id="qrSubTotal">R$ 5,30</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Taxa de serviço</span>
                                    <strong id="serviceFee">R$ 1,30</strong>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span><strong>Total</strong></span>
                                    <strong id="totalPrice" style="color: #22c55e;">R$ 6,60</strong>
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
                <button type="button" class="btn" style="background-color: #22c55e; color: white;" onclick="finalizePurchase()">
                    <i class="bi bi-credit-card me-2"></i>Finalizar Compra
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de compra realizada com Sucesso -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center p-5">
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #22c55e;"></i>
                </div>
                <h3 class="mb-3" style="color: #22c55e;">Compra Realizada com Sucesso!</h3>
                <p class="text-muted mb-4">Seu pagamento foi processado e seus QR Codes foram gerados.</p>

                <!-- Resumo da compra -->
                <div class="card bg-light mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-3">Resumo da Compra</h6>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Quantidade:</span>
                            <strong><span id="successQuantity">1</span> QR Code(s)</strong>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Valor Total:</span>
                            <strong style="color: #22c55e;" id="successTotal">R$ 6,60</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Método de Pagamento:</span>
                            <strong id="successPaymentMethod">PIX</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn" style="background-color: #22c55e; color: white;" data-bs-dismiss="modal">
                    <i class="bi bi-check me-2"></i>Concluído
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

<script>
    // Constantes de preço
    const QR_CODE_PRICE = 5.30;
    const SERVICE_FEE = 1.30;

    // Variável para método de pagamento selecionado
    let selectedPaymentMethod = 'PIX';

    // Função para selecionar método de pagamento
    function selectPayment(element, method) {
        // Remove seleção de todos
        document.querySelectorAll('.payment-option').forEach(option => {
            option.classList.remove('selected');
            const icon = option.querySelector('.ms-auto i');
            if (icon) {
                icon.className = 'bi bi-circle';
                icon.style.color = '#d1d5db';
            }
        });

        // Adiciona seleção ao clicado
        element.classList.add('selected');
        const selectedIcon = element.querySelector('.ms-auto i');
        if (selectedIcon) {
            selectedIcon.className = 'bi bi-check-circle';
            selectedIcon.style.color = '#22c55e';
        }

        selectedPaymentMethod = method;
        updatePaymentMethodDisplay();
    }

    // Função para atualizar método na interface (renomeada para evitar conflito)
    function updatePaymentMethodDisplay() {
        const paymentNames = document.querySelectorAll('.payment-name');
        const pixIcons = document.querySelectorAll('.pix-icon i');

        paymentNames.forEach(name => {
            if (name) {
                name.textContent = selectedPaymentMethod;
            }
        });

        pixIcons.forEach(icon => {
            if (icon) {
                if (selectedPaymentMethod === 'PIX') {
                    icon.className = 'fa-brands fa-pix fa-2xl';
                } else {
                    icon.className = 'fa-solid fa-credit-card fa-2xl';
                }
            }
        });
    }

    // Função para atualizar método de pagamento no modal de sucesso
    function updatePaymentMethodInSuccessModal(method) {
        const paymentElement = document.getElementById('successPaymentMethod');
        if (paymentElement) {
            paymentElement.textContent = method; // 'PIX' ou 'Débito'
        }
    }

    // Função para alterar quantidade
    function changeQuantity(change) {
        const quantityInput = document.getElementById('quantityInput');
        const decreaseBtn = document.getElementById('decreaseBtn');
        const increaseBtn = document.getElementById('increaseBtn');

        if (!quantityInput) return;

        let currentQuantity = parseInt(quantityInput.value);
        let newQuantity = currentQuantity + change;

        // Limitar entre 1 e 10
        if (newQuantity < 1) newQuantity = 1;
        if (newQuantity > 10) newQuantity = 10;

        quantityInput.value = newQuantity;

        // Desabilitar botões quando nos limites
        if (decreaseBtn) decreaseBtn.disabled = newQuantity === 1;
        if (increaseBtn) increaseBtn.disabled = newQuantity === 10;

        updatePrices(newQuantity);
    }

    // Função para atualizar preços
    function updatePrices(quantity) {
        const qrSubTotal = QR_CODE_PRICE * quantity;
        const totalPrice = qrSubTotal + SERVICE_FEE;

        // Atualizar elementos na tela
        const qrQuantityDisplay = document.getElementById('qrQuantityDisplay');
        const qrSubTotalElement = document.getElementById('qrSubTotal');
        const serviceFeeElement = document.getElementById('serviceFee');
        const totalPriceElement = document.getElementById('totalPrice');

        if (qrQuantityDisplay) qrQuantityDisplay.textContent = quantity;
        if (qrSubTotalElement) qrSubTotalElement.textContent = `R$ ${qrSubTotal.toFixed(2).replace('.', ',')}`;
        if (serviceFeeElement) serviceFeeElement.textContent = `R$ ${SERVICE_FEE.toFixed(2).replace('.', ',')}`;
        if (totalPriceElement) totalPriceElement.textContent = `R$ ${totalPrice.toFixed(2).replace('.', ',')}`;
    }

    // Função para finalizar compra
    function finalizePurchase() {
        const quantityInput = document.getElementById('quantityInput');
        if (!quantityInput) return;

        const quantity = parseInt(quantityInput.value);
        const totalPrice = (QR_CODE_PRICE * quantity) + SERVICE_FEE;

        // Atualizar dados no modal de sucesso
        const successQuantity = document.getElementById('successQuantity');
        const successTotal = document.getElementById('successTotal');

        if (successQuantity) successQuantity.textContent = quantity;
        if (successTotal) successTotal.textContent = `R$ ${totalPrice.toFixed(2).replace('.', ',')}`;

        // Atualizar método de pagamento no modal de sucesso
        updatePaymentMethodInSuccessModal(selectedPaymentMethod);

        // Fechar modal de compra e abrir modal de sucesso
        const purchaseModalElement = document.getElementById('purchaseModal');
        if (purchaseModalElement) {
            const purchaseModal = bootstrap.Modal.getInstance(purchaseModalElement);
            if (purchaseModal) purchaseModal.hide();

            // Aguardar um momento para a animação do modal anterior
            setTimeout(() => {
                const successModalElement = document.getElementById('successModal');
                if (successModalElement) {
                    const successModal = new bootstrap.Modal(successModalElement);
                    successModal.show();
                }
            }, 300);
        }
    }

    // Inicializar quando o DOM estiver carregado
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializar estado dos botões de quantidade
        const decreaseBtn = document.getElementById('decreaseBtn');
        if (decreaseBtn) {
            decreaseBtn.disabled = true; // Começar com 1 QR code, então - deve estar desabilitado
        }

        // Inicializar preços com quantidade 1
        updatePrices(1);

        // Inicializar método de pagamento
        updatePaymentMethodDisplay();
    });
</script>