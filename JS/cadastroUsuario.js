document.addEventListener('DOMContentLoaded', function () {
    
    // ===== SELEÇÃO DE ELEMENTOS =====
    const form = document.getElementById('cadastroForm');
    const nomeInput = document.getElementById('nome');
    const senhaInput = document.getElementById('senha');
    const emailInput = document.getElementById('email');
    const usuarioInput = document.getElementById('usuario');
    const telefoneInput = document.getElementById('telefone');
    const cpfInput = document.getElementById('cpf');

    // ===== FUNÇÕES DE MÁSCARA =====
    function aplicarMascaraCPF(input) {
      let valor = input.value.replace(/\D/g, '');
      valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
      valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
      valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
      input.value = valor;
    }

    function aplicarMascaraTelefone(input) {
      let valor = input.value.replace(/\D/g, '');
      valor = valor.replace(/^(\d{2})(\d)/g, '($1) $2');
      valor = valor.replace(/(\d)(\d{4})$/, '$1-$2');
      input.value = valor;
    }

    // ===== FUNÇÃO GENÉRICA DE VALIDAÇÃO EM TEMPO REAL =====
    // Esta função será usada por todos os campos
    function validarInput(input) {
      // `checkValidity()` verifica as regras do HTML (required, minlength, type, etc.)
      if (input.checkValidity()) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
      } else {
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
      }
    }
    
    // ===== ADICIONANDO OS EVENTOS DE VALIDAÇÃO =====

    // Para cada campo, chamamos a função 'validarInput' sempre que o usuário digita
    nomeInput.addEventListener('input', () => validarInput(nomeInput));
    senhaInput.addEventListener('input', () => validarInput(senhaInput));
    emailInput.addEventListener('input', () => validarInput(emailInput));
    usuarioInput.addEventListener('input', () => validarInput(usuarioInput));
    
    // Para CPF e Telefone, aplicamos a máscara e depois validamos
    telefoneInput.addEventListener('input', function(e) {
      aplicarMascaraTelefone(e.target);
      validarInput(e.target);
    });

    cpfInput.addEventListener('input', function(e) {
      aplicarMascaraCPF(e.target);
      validarInput(e.target);
    });

    // ===== VALIDAÇÃO FINAL NO ENVIO DO FORMULÁRIO =====
    form.addEventListener('submit', function (event) {
      // Se o formulário não for válido, impede o envio
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      // Adiciona a classe para mostrar os feedbacks de todos os campos
      form.classList.add('was-validated');
    }, false);

  });