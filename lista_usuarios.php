<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

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

<body class="bg-white">
    <header>
        <nav class="navbar navbar-expand-sm bg-dark bg-gradient navbar-dark fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand">Lista de Usuários</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <table class="table table-secondary table-bordered">
                <thead>
                    <tr class="bg-dark text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Henrique</td>
                        <td>henrique@gmail.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>