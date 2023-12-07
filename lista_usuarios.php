<?php
session_start();

if ($_SESSION['autenticado'] != 'SIM') {
    header('Location: login.php?login=erro3');
}

try {
    $dns = 'mysql:host=localhost;dbname=db_form';
    $root = 'root';
    $password = '';

    $query = '
            select id_usuario, nome, email from usuarios
        ';

    $conexao = new PDO($dns, $root, $password);
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Erro: ' . $e->getCode() . ' / Mensagem: ' . $e->getMessage();
}
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
        <nav class="navbar navbar-expand-sm bg-dark bg-gradient navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Lista de Usuários</a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="encerrar_sessao.php" class="nav-link">
                            Sair
                        </a>
                    </li>
                </ul>
            </div>


        </nav>
    </header>

    <main>
        <div class="container" style="padding-bottom: 50px;">
            <table class="table table-bordered" style="margin-top: 50px;">
                <thead>
                    <tr class="bg-dark text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_usuarios as $index => $value) { ?>
                        <tr>
                            <th scope="row">
                                <?= $value['id_usuario'] ?>
                            </th>
                            <td>
                                <?= $value['nome'] ?>
                            </td>
                            <td>
                                <?= $value['email'] ?>
                            </td>
                            <td class="text-center">
                                <a href="opcoes/editar_usuario.php?usuario=<?= $value['id_usuario'] ?>" class="btn btn-warning">Editar</a>
                                <a href="opcoes/remover_usuario.php?usuario=<?= $value['id_usuario'] ?>" class="btn btn-danger">Remover</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>