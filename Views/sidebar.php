<?php 
    $telaAtual = $_GET['tela'] ?? 'dashboard';
?>
<!-- sidebar -->

<div class="sidebar-logo">
    <a href="" class="img-thumbnail border-0 bg-transparent"><img src="../img/loog-site-tamanho-2.png" alt="" style="height: 50px;"></a>
</div>

<!-- navegação da sidebar -->
<ul class="sidebar-nav p-0">
    <!-- topo da navegação -->
    <li class="sidebar-header">
    </li>
    <!-- itens da navegação -->
    <li class="sidebar-item">
        <a href="?tela=dashboard" class="sidebar-link <?= $telaAtual === 'dashboard' ? 'active-dashboard text-white' : ''?>">
            <i class="fa-solid fa-house me-1"></i>
            <span >Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="?tela=carteira" class="sidebar-link <?= $telaAtual === 'carteira' ? 'active-wallet text-white' : ''?>">
            <i class="fa-solid fa-wallet"></i>
            <span >Carteirinhas</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="?tela=qrcode" class="sidebar-link <?= $telaAtual === 'qrcode' ? 'active-qrcode text-white' : ''?>">
            <i class="fa-solid fa-qrcode"></i>
            <span >Qrcode</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="?tela=agendamento" class="sidebar-link <?= $telaAtual === 'agendamento' ? 'active-calendar text-white' : ''?>">
            <i class="fa-solid fa-calendar-days"></i>
            <span >Agendamento</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="http://10.37.45.47/rotaconsultas/mobile/login.php" target="_blank" class="sidebar-link <?= $telaAtual === 'onibus' ? 'active-bus text-white' : ''?>">
            <i class="fa-solid fa-bus"></i>
            <span >Rota</span>
        </a>
    </li>
</ul>
<!-- fim da navegação -->
<!-- footer da navegação -->
<div class="sidebar-footer">
    <a href="" class="sidebar-link">
        <span>Sair</span>
    </a>
</div>