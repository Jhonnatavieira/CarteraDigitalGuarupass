<?php 

session_start();

require_once '../DataAcess/conexao.php';
require_once '../Models/usuario.php';

if ($_POST) {
    $identificador = $_POST['identificador'] ?? '';
    $senha_pura = $_POST['senha'] ?? '';

    try {
        $usuario_obj = Usuario::buscarPorUsuarioOuEmail($identificador, $pdo);

        
    } catch (\Throwable $e) {
        # code...
    }
}

?>