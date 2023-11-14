<?php

    if(!empty($_POST['email']) && !empty($_POST['senha'])) {
        try {
            $dsn = 'mysql:host=localhost;dbname=db_form';
            $root = 'root';
            $password = '';

            $conexao = new PDO($dsn, $root, $password);

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $query = '
                select * from usuarios where email = :useremail AND senha = :usersenha;
            ';

            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':useremail', $email);
            $stmt->bindValue(':usersenha', $senha);
            $stmt->execute();

            if($stmt->rowCount() == 1) {
                header('Location: ../lista_usuarios.php');
            } else {
                header('Location: ../login.php?login=erro');
            }

        } catch(PDOException $e) {
            echo 'Erro: ' . $e->getCode() . ' /  Mensagem: ' . $e->getMessage();
        }
    }
    
?>