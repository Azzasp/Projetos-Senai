<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\style-index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Admin Painel</title>
</head>
<body class="text-center">
    <main class="form-login">
        <form action="logar.php" method="POST">
            <img src="../images/painel-de-controle.png" alt="logo" class="mb-4" width="70" height="70">
            <h3 class="h3">Painel Administrativo</h3>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Login</label>
                <input type="text" name="login" class="form-control" id="formGroupExampleInput" placeholder="Login">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="formGroupExampleInput2" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>