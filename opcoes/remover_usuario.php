<?php

    session_start();

    try {
        $dns = 'mysql:host=localhost;dbname=db_form';
        $root = 'root';
        $password = '';

        $conexao = new PDO($dns, $root, $password);

        $query = "delete from usuarios where id_usuario = :user_id";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':user_id', $_GET['usuario']);
        $stmt->execute();

        header('Location: ../login.php?usuario=removido');

    } catch(PDOException $e) {
        echo 'Erro: ' . $e->getCode() . ' / Mensagem: ' . $e->getMessage();
    }

?>