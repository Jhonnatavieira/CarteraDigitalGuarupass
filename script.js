document.addEventListener('DOMContentLoaded', function() {

    const toggler = document.querySelector(".toggler-btn");
    const overlay = document.querySelector("#overlay");
    

    if (window.innerWidth <= 1170) {
        sidebar.classList.add('collapsed');
    }

    toggler.addEventListener("click", function(){
        document.querySelector("#sidebar").classList.toggle("collapsed");
        console.log()
    })

    // --- PEQUENA ADIÇÃO ---
    // Adiciona um listener para o clique no overlay
    overlay.addEventListener("click", function() {
        // Garante que ele sempre feche, adicionando a classe
        sidebar.classList.add("collapsed");
    });
    // --- FIM DA ADIÇÃO ---
});