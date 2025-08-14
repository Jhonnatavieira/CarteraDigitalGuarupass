<?php include_once("../Controllers/usuario_controller.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Guarupass</title>

  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- BOOTSTRAP ICONS (para ícones nos campos) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/frm_cadastroUsuario.css">

</head>

<body>
  <!-- CONTAINER PRINCIPAL BOOTSTRAP -->
  <div class="container-fluid vh-100 d-flex align-items-center justify-content-center py-4 flex-column">
    <div class="row mb-4">
      <div class="col">
        <!-- LOGO CENTRALIZADA -->
        <img src="../img/loog-site-tamanho-2.png" alt="">
      </div>
    </div>
    <!-- ROW PARA CENTRALIZAÇÃO -->
    <div class="row justify-content-center w-100">
      <!-- COLUNA RESPONSIVA USANDO BOOTSTRAP GRID -->
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 w-100 d-flex justify-content-center align-items-center">

        <!-- CARD BOOTSTRAP CUSTOMIZADO -->
        <div class="card card-custom" style="width: 50rem;">
          <div class="card-body p-4 p-md-5">


            <!-- FORMULÁRIO COM BOOTSTRAP -->
            <form id="cadastroForm" action="usuario_controller.html" method="POST" novalidate>

              <!-- PRIMEIRA LINHA: NOME E SENHA (BOOTSTRAP GRID) -->
              <div class="row g-3 mb-3">
                <!-- CAMPO NOME (COLUNA BOOTSTRAP) -->
                <div class="col-md-6">
                  <label for="nome" class="form-label">Nome:</label>
                  <div class="input-group">
                    <input type="text" class="form-control rounded-4" id="nome" name="nome" placeholder="Nome completo"
                      required>
                    <!-- FEEDBACK DE VALIDAÇÃO BOOTSTRAP -->
                    <div class="invalid-feedback">
                      Por favor, informe seu nome.
                    </div>
                  </div>
                </div>

                <!-- CAMPO SENHA (COLUNA BOOTSTRAP) -->
                <div class="col-md-6">
                  <label for="senha" class="form-label">Senha:</label>
                  <div class="input-group">
                    <input type="password" class="form-control  rounded-4" id="senha" name="senha" placeholder="Senha"
                      required minlength="6">
                    <div class="invalid-feedback">
                      Senha deve ter pelo menos 6 caracteres.
                    </div>
                  </div>
                </div>
              </div>

              <!-- SEGUNDA LINHA: E-MAIL E USUÁRIO -->
              <div class="row g-3 mb-3">
                <!-- CAMPO E-MAIL -->
                <div class="col-md-6">
                  <label for="email" class="form-label">E-mail:</label>
                  <div class="input-group">
                    <input type="email" class="form-control  rounded-4" id="email" name="email"
                      placeholder="seu@email.com" required>
                    <div class="invalid-feedback">
                      Por favor, informe um e-mail válido.
                    </div>
                  </div>
                </div>

                <!-- CAMPO USUÁRIO -->
                <div class="col-md-6">
                  <label for="usuario" class="form-label">Usuário:</label>
                  <div class="input-group">
                    <input type="text" class="form-control  rounded-4" id="usuario" name="usuario"
                      placeholder="Nome de usuário" required minlength="3">
                    <div class="invalid-feedback">
                      Usuário deve ter pelo menos 3 caracteres.
                    </div>
                  </div>
                </div>
              </div>

              <!-- TERCEIRA LINHA: TELEFONE E CPF -->
              <div class="row g-3 mb-4">
                <!-- CAMPO TELEFONE (COLUNA MAIOR) -->
                <div class="col-md-7">
                  <label for="telefone" class="form-label">Telefone:</label>
                  <div class="input-group">
                    <input type="tel" class="form-control  rounded-4" id="telefone" name="telefone"
                      placeholder="(11) 99999-9999" maxlength="15" required>
                    <div class="invalid-feedback">
                      Por favor, informe um telefone válido.
                    </div>
                  </div>
                </div>

                <!-- CAMPO CPF (COLUNA MENOR) -->
                <div class="col-md-5">
                  <label for="cpf" class="form-label">CPF:</label>
                  <div class="input-group">
                    <input type="text" class="form-control  rounded-4" id="cpf" name="cpf" placeholder="000.000.000-00"
                      maxlength="14" required>
                    <div class="invalid-feedback">
                      Por favor, informe um CPF válido.
                    </div>
                  </div>
                </div>
              </div>

              <!-- BOTÃO DE CADASTRO COM BOOTSTRAP -->
              <div class="d-grid d-md-flex justify-content-md-end">
                <button formaction="../Controllers/usuario_controller.php" class="btn btn-custom btn-lg text-white px-4">
                  <i class="bi bi-person-plus me-2"></i>
                  Cadastrar
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="../JS/cadastroUsuario.js"></script>
</body>

</html>