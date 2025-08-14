document.addEventListener('DOMContentLoaded', function () {

    const toggler = document.querySelector(".toggler-btn");
    const overlay = document.querySelector("#overlay");


    function sidebarRezise() {
        if (window.innerWidth <= 1280) {
            document.querySelector("#sidebar").classList.add("collapsed");
        } else { 
            document.querySelector("#sidebar").classList.remove("collapsed");
        }
    }

    toggler.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("collapsed");
        console.log()
    })


    // Adiciona um listener para o clique no overlay
    overlay.addEventListener("click", function () {
        // Garante que ele sempre feche, adicionando a classe
        document.querySelector("#sidebar").classList.toggle("collapsed");
    });

    // Listener para o redimensionamento da tela
    window.addEventListener('resize', sidebarRezise);

    // Executa a verificação de tela no carregamento inicial da página
    sidebarRezise();


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
});