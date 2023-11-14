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
                <a href="#" class="navbar-brand">Formulário de cadastro</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container container-form">
            <div class="area-form">
                <form action="/validacoes/validar_cadastro.php" method="post" class="bg-dark bg-gradient text-dark">
                    <h4>Cadastrar</h4>
                    <div class="form-group">
                        <input id="nome" type="text" name="nome" class="form-control" placeholder="Nome" required>
                    </div>

                    <div class="form-group">
                        <input id="email" type="text" name="email" class="form-control" placeholder="E-mail" required>
                    </div>

                    <div class="form-group">
                        <input id="senha" type="password" name="senha" class="form-control" placeholder="Senha" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
                </form>
            </div>

            <div class="background-form">
            </div>

            <!-- <div class="form">
                <form action="index.php" method="post" class="bg-warning bg-gradient text-dark">
                    <h4>Cadastrar</h4>
                    <div class="form-group">
                        <input id="nome" type="text" name="nome" class="form-control" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <input id="email" type="text" name="email" class="form-control" placeholder="E-mail">
                    </div>

                    <div class="form-group">
                        <input id="senha" type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
                </form>
            </div>

            <div class="background-form">
            </div> -->
        </div>
    </main>
</body>

</html>