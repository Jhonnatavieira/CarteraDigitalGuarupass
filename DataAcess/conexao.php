<?php

    declare(strict_types=1);

    $db_host = 'localhost';
    $db_name = 'DB_Guarupass';
    $db_user = 'root';
    $db_pass = 'root';

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);

        // Configura o PDO para lançar exceções em caso de erro
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // Em caso de falha, exibe uma mensagem de erro genérica e encerra o script
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }
?>
