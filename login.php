<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="bg-secondary">
    <header>
        <nav class="navbar navbar-expand-sm bg-dark bg-gradient navbar-dark fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand">Login</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container container-form">
            <div class="area-form-login">
                <form action="/validacoes/validar_login.php" method="post" class="bg-dark bg-gradient text-dark">
                    <h4>Login</h4>
                    <div class="form-group">
                        <input id="email" type="text" name="email" class="form-control" placeholder="E-mail" required>
                    </div>

                    <div class="form-group">
                        <input id="senha" type="password" name="senha" class="form-control" placeholder="Senha" required>
                    </div>

                    <?php  if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                        <div class="text-danger">Login ou senha incorreta!</div>
                    <?php  } ?>

                    <?php  if(isset($_GET['login']) && $_GET['login'] == 'erro3') { ?>
                        <div class="text-danger">Faça login primeiro!</div>
                    <?php  } ?>

                    <button type="submit" class="btn btn-success btn-block">Entrar</button>

                    <a href="index.php">Cadastra-se</a>
                </form>
            </div>
        </div>
    </main>
</body>

</html>