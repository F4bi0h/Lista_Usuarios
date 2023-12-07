<?php

    session_start();

    try {
        $dns = 'mysql:host=localhost;dbname=db_form';
        $root = 'root';
        $password = '';

        $conexao = new PDO($dns, $root, $password);

        $query = "select * from usuarios";

        echo $_GET['usuario'];

    } catch(PDOException $e) {
        echo 'Erro: ' . $e->getCode() . ' / Mensagem: ' . $e->getMessage();
    }

?>