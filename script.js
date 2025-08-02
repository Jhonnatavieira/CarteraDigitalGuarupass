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
});