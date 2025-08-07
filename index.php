<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guarupass Login</title>
    
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* ===== ESTILIZAÇÃO GERAL DA PÁGINA ===== */
        body {
            /* Fundo com gradiente diagonal do roxo claro ao verde claro */
            background: linear-gradient(135deg, #e8d5f2 0%, #a8e6cf 100%);
            min-height: 100vh; /* Altura mínima da tela inteira */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* ===== CONTAINER PRINCIPAL ===== */
        .main-container {
            min-height: 100vh; /* Ocupa toda a altura da tela */
            display: flex; /* Usa flexbox para centralizar */
            align-items: center; /* Centraliza verticalmente */
            justify-content: center; /* Centraliza horizontalmente */
            padding: 20px; /* Espaçamento interno */
        }

        /* ===== CARD DE LOGIN ===== */
        .login-card {
            background: white; /* Fundo branco */
            border-radius: 20px; /* Bordas bem arredondadas */
            padding: 40px; /* Espaçamento interno generoso */
            box-shadow: 0 10px 30px rgba(0,0,0,0.1); /* Sombra suave */
            max-width: 800px; /* Largura máxima */
            width: 100%; /* Ocupa toda a largura disponível */
        }

        /* ===== LOGO ===== */
        .logo {
            width: 200px; /* Largura fixa da logo */
            margin-bottom: 30px; /* Espaçamento abaixo */
        }

        /* ===== ESTILIZAÇÃO DO FORMULÁRIO ===== */
        .form-label {
            color: #333; /* Cor do texto dos rótulos */
            font-weight: 500; /* Peso da fonte médio */
            margin-bottom: 8px; /* Espaçamento abaixo */
        }

        .form-control {
            border: 2px solid #ddd; /* Borda cinza clara */
            border-radius: 8px; /* Bordas arredondadas */
            padding: 12px 15px; /* Espaçamento interno */
            font-size: 16px; /* Tamanho da fonte */
            margin-bottom: 20px; /* Espaçamento abaixo */
        }

        /* Estado de foco dos campos de entrada */
        .form-control:focus {
            border-color: #007bff; /* Borda azul quando focado */
            box-shadow: none; /* Remove sombra padrão do Bootstrap */
        }

        /* ===== BOTÃO DE LOGIN ===== */
        .btn-login {
            /* Gradiente azul no botão */
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            border: none; /* Remove borda */
            border-radius: 8px; /* Bordas arredondadas */
            padding: 12px 30px; /* Espaçamento interno */
            font-size: 16px; /* Tamanho da fonte */
            font-weight: 600; /* Peso da fonte mais forte */
            color: white; /* Texto branco */
            width: 100%; /* Largura total */
            margin-bottom: 15px; /* Espaçamento abaixo */
        }

        /* Efeito hover no botão */
        .btn-login:hover {
            background: linear-gradient(135deg, #0056b3 0%, #004085 100%);
        }

        /* ===== LINK "ESQUECEU A SENHA" ===== */
        .forgot-password {
            color: #666; /* Cor cinza */
            text-decoration: none; /* Remove sublinhado */
            font-size: 14px; /* Fonte menor */
        }

        /* Efeito hover no link */
        .forgot-password:hover {
            color: #007bff; /* Cor azul no hover */
            text-decoration: underline; /* Adiciona sublinhado */
        }

        /* ===== CONTAINER DA ILUSTRAÇÃO ===== */
        .illustration-container {
            position: relative; /* Permite posicionamento absoluto dos filhos */
            display: flex; /* Usa flexbox */
            align-items: center; /* Centraliza verticalmente */
            justify-content: center; /* Centraliza horizontalmente */
        }

        /* ===== RESPONSIVIDADE ===== */
        /* Estilos para dispositivos móveis */
        @media (max-width: 768px) {
            .login-card {
                padding: 30px 20px; /* Padding reduzido */
            }
            
            .illustration-container {
                margin-top: 30px; /* Margem superior */
            }
            
            .card-item {
                width: 60px; /* Cartões menores */
                height: 40px; /* Altura reduzida */
            }
        }
    </style>
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
                            <a href="frm_cadastroUsuario.php" class="forgot-password">Criar conta</a>
                        </div>
                    </form>
                </div>
                
                <!-- COLUNA DIREITA: ILUSTRAÇÃO -->
                <div class="col-lg-6">
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
