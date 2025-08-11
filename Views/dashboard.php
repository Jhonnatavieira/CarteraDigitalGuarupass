<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guarupass Wallet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>

<body>
    <div class="d-flex">
        <!-- sidebar -->
        <aside id="sidebar" class="sidebar-toggle rounded-4">
            <?php include_once 'sidebar.php'; ?>
        </aside>
        <div id="overlay"></div>
        <!-- fim da sidebar -->
        <!-- conteudo -->
        <div class="main rounded-4">
            <nav class="navbar navbar-expand border-bottom d-flex justify-content-between">
                <button class="toggler-btn" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user fa-2xl"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                </div>
            </nav>
            <main class="p-3">
                <div class="container-fluid">
                    <div id="main-container" class="main-container">
                        <?php 
                            $tela = isset($_GET['tela']) ? $_GET['tela'] : 'dashboard';

                            if ($tela == 'dashboard') {
                                include_once 'frm_dashboard.php';
                            }elseif ($tela == 'carteira') {
                                include_once 'frm_carteira.php';
                            } elseif ($tela == 'qrcode') {
                                include_once 'frm_qrcode.php';
                            } elseif ($tela == 'agendamento') {
                                include_once 'frm_agendamento.php';
                            }
                        ?>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>