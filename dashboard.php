<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>

<body>
    <div class="d-flex">
        <!-- sidebar -->
        <aside id="sidebar" class="sidebar-toggle">
            <?php include_once 'sidebar.php'; ?>
        </aside>
        <!-- fim da sidebar -->
        <!-- conteudo -->
        <div class="main">
            <nav class="navbar navbar-expand border-bottom d-flex justify-content-between">
                <button class="toggler-btn" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>

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
                    <div class="mb-3 text-center">
                        <h1>sidebar demo</h1>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>