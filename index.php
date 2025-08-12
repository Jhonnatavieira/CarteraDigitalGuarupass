<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guarupass Login</title>
    
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/frm_Login.css">
    
</head>
<body>
    <!-- CONTAINER PRINCIPAL QUE CENTRALIZA TODO O CONTEÚDO -->
    <div class="main-container">
        <!-- CARD PRINCIPAL DE LOGIN -->
        <div class="login-card">
            <!-- SISTEMA DE GRID DO BOOTSTRAP: 2 COLUNAS -->
            <div class="row align-items-center">
                
                <!-- COLUNA ESQUERDA: FORMULÁRIO DE LOGIN -->
                <div class="col-lg-6">
                    <!-- LOGO DA EMPRESA -->
                    <div class="mb-4">
                       <img src="./img/loog-site-tamanho-2.png" alt="">
                    </div>

                    <!-- FORMULÁRIO DE LOGIN -->
                    <form>
                        <!-- CAMPO DE E-MAIL/USUÁRIO -->
                        <div class="mb-3">
                            <label class="form-label">E-mail ou usuário</label>
                            <input type="text" class="form-control">
                        </div>
                        
                        <!-- CAMPO DE SENHA -->
                        <div class="mb-4">
                            <label class="form-label">Senha:</label>
                            <input type="password" class="form-control">
                        </div>
                        
                        <!-- BOTÃO DE LOGIN -->
                        <button type="submit" class="btn btn-login">Login</button>
                        
                        <!-- LINK ESQUECEU A SENHA -->
                        <div class="text-center d-flex justify-content-center align-items-center flex-column">
                            <a href="#" class="forgot-password">Esqueceu a senha?</a>
                            <a href="Views/frm_cadastroUsuario.php" class="forgot-password">Criar conta</a>
                        </div>
                    </form>
                </div>
                
                <!-- COLUNA DIREITA: ILUSTRAÇÃO -->
                <div class="col-lg-6 d-none d-md-none d-lg-block">
                    <div class="illustration-container">
                        <img src="img/FotoLoginSemFundo.png" alt="" style="height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT DO BOOTSTRAP PARA FUNCIONALIDADES INTERATIVAS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
