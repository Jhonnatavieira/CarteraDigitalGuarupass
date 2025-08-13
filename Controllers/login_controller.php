<?php

session_start();

require_once '../DataAcess/conexao.php';
require_once '../Models/usuario.php';

if ($_POST) {
    $identificador = $_POST['identificador'] ?? '';
    $senha_pura = $_POST['senha'] ?? '';

    try {
        $usuario_obj = Usuario::buscarPorUsuarioOuEmail($identificador, $pdo);

        if ($usuario_obj && $usuario_obj->verificarSenha($senha_pura)) {
            // SUCESSO!
            session_regenerate_id(true);
            $_SESSION['logado'] = true;
            $_SESSION['usuario_id'] = $usuario_obj->getIdUsuario();
            $_SESSION['usuario_nome'] = $usuario_obj->getNome();
            $_SESSION['usuario_cpf'] = $usuario_obj->getCpf();

            header('Location: ../Views/dashboard.php');
            exit();
        } else {
            // FALHA!
            $_SESSION['msg_erro_login'] = "Usuário/E-mail ou senha inválidos.";
            header('Location: ../index.php');
            exit();
        }
    } catch (Exception $e) {
        error_log("Erro no login: " . $e->getMessage());
        $_SESSION['msg_erro_login'] = "Ocorreu um erro inesperado. Tente novamente.";
        header('Location: ../public/login.php');
        exit();
    }
}
