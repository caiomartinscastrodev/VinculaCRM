<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinculaCRM - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-primary">

    <form method="post" class="container bg-light p-3 mt-5 rounded">
        <h1>ADM - Login</h1>
        <div class="input-group w-75 mx-auto my-3">
            <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email...">
        </div>
        <div class="input-group w-75 mx-auto my-3">
            <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua senha...">
        </div>
        <div class="d-flex w-75 mx-auto my-3 justify-content-around">
            <button class="d-block mx-2 btn btn-outline-primary w-50" type="submit">Login</button>
            <a class="d-block mx-2 btn btn-outline-primary w-50" href="./views/cadastro.php">Cadastrar</a>
        </div>
        <div class="w-75 mx-auto my-3">
            <a href="./views/loginFuncionario.php">É funcionario?</a>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>