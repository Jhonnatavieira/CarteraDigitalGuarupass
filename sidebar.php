<?php 
    $telaAtual = $_GET['tela'] ?? 'dashboard';
?>
<!-- sidebar -->

<div class="sidebar-logo">
    <a href="" class="img-thumbnail"><img src="./img/loog-site-tamanho-2.png" alt="" style="height: 50px;"></a>
</div>

<!-- navegação da sidebar -->
<ul class="sidebar-nav p-0">
    <!-- topo da navegação -->
    <li class="sidebar-header">
    </li>
    <!-- itens da navegação -->
    <li class="sidebar-item">
        <a href="?tela=dashboard" class="sidebar-link" data-page="frm_dashboard">
            <span class=" <?= $telaAtual === 'dashboard' ? 'active-dashboard' : ''?>"><i class="fa-solid fa-house"></i> Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="?tela=carteira" class="sidebar-link" data-page="frm_carteira">
            <span class=" <?= $telaAtual === 'carteira' ? 'active-wallet' : ''?>"><i class="fa-solid fa-house"></i> Carteira</span>
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