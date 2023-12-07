<?php
    session_start();

    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        try {
            $dns = 'mysql:host=localhost;dbname=db_form';
            $root = 'root';
            $password = '';

            $conexao = new PDO($dns, $root, $password);

            $query = "
                insert into usuarios(nome, email, senha)
                    values
                (:user_name, :user_email, :user_senha);
            ";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':user_name', $_POST['nome']);
            $stmt->bindValue(':user_email', $_POST['email']);
            $stmt->bindValue(':user_senha', $_POST['senha']);

            $stmt->execute();

            header('Location: ../login.php?cadastro=SIM');

        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getCode() . ' / Mensagem: ' . $e->getMessage();
        }
    }

?>