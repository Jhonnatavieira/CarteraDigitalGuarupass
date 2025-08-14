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

    //=============== QRCODE =======================

    const readButton = document.getElementById('readQrButton');
    const qrCodeContent = document.getElementById('qrcodeContent');
    const initialStateHTML = qrCodeContent.innerHTML; // Salva o estado inicial (imagem do QR Code)

    // Adiciona o "ouvinte" de evento ao botão "Ler"
    readButton.addEventListener('click', () => {
        // 1. Mostra a animação de "carregando"
        qrCodeContent.innerHTML = `
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem; margin-top: 50px;">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-3">Processando pagamento...</p>
        `;
        
        // Desabilita o botão para evitar múltiplos cliques
        readButton.disabled = true;

        // 2. Simula um tempo de espera (ex: 2.5 segundos)
        setTimeout(() => {
            // 3. Mostra a mensagem de "pagamento aprovado"
            qrCodeContent.innerHTML = `
                <i class="fa-solid fa-check fa-2xl mb-4" style="color: #44df30; margin-top: 50%;"></i>
                <h5>Pagamento Aprovado!</h5>
            `;

        }, 2500); // 2500 milissegundos = 2.5 segundos
    });

    // Opcional: Reseta o modal quando ele é fechado
    const qrModal = document.getElementById('qrModal');
    qrModal.addEventListener('hidden.bs.modal', () => {
        qrCodeContent.innerHTML = initialStateHTML;
        readButton.disabled = false; // Habilita o botão novamente
    });

    //=============== FIM QRCODE =======================