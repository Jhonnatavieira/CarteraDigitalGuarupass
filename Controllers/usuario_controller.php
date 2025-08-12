<?php
session_start();

require_once '../DataAcess/conexao.php';
require_once '../Models/Usuario.php';;

if ($_POST) {
    //instancia usuario
$usuario = new Usuario($pdo);


try {
    $usuario->setNome($_POST['nome']);
    $usuario->setUsuario($_POST['usuario']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setCpf($_POST['cpf']);
    $usuario->setTelefone($_POST['telefone']);
    $usuario->setSaldo(300.00);
    $usuario->setStatus(StatusUsuario::Ativo);
    $usuario->setData(new DateTimeImmutable());

    if ($usuario->salvar()) {
        // Se salvar() retornar true, a operação foi um sucesso.
        $_SESSION['msg_sucesso'] = "Usuário '" . htmlspecialchars($_POST['nome']) . "' cadastrado com sucesso! Faça o login.";
        header('Location: ../index.php');
        exit();
    }
} catch (InvalidArgumentException | Exception $e) {
    // FALHA! Captura qualquer exceção lançada pelos setters ou pelo método salvar().
    $_SESSION['msg_erro'] = $e->getMessage(); // Pega a mensagem de erro da exceção.
    $_SESSION['dados_formulario'] = $_POST; // Guarda os dados para repreencher o formulário.
    header('Location: ../index.php');
    exit();
}
}
?>
