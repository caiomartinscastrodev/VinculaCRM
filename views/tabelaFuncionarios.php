<?php
    require_once('../models/Adm.php');

    $data = $adm->getFuncionario();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinculaCRM - Tabela de funcionarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/global.css">
</head>
<body>
    <header class="bg-primary p-3">
        <div class="container">
            <nav class="navbar">
                <h1 class="navbar-brand text-light">VinculaCRM</h1>

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="homeAdm.php">Olá <?php echo $_SESSION['name'];?> |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cadastroFuncionario.php">Cadastros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="tabelaFuncionarios.php">Funcionarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="tabelaClientes.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../controllers/logout.php">Logout</a>
                    </li>
                </ul>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>

            <ul class="navbar-nav collapse">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="homeAdm.php">Olá <?php echo $_SESSION['name'];?> |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="cadastroFuncionario.php">Cadastros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="tabelaFuncionarios.php">Funcionarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="tabelaClientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="../controllers/logout.php">Logout</a>
                </li>
            </ul>

        </div>
    </header>

    <main class="container mt-5">
        <h1>Olá <?php echo $_SESSION['name'];?></h1>

        <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum libero, quasi, eaque cum doloribus facere sint officia assumenda maiores ex inventore asperiores illum eius iusto nesciunt odio tempore consectetur amet!</p>
        
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col"> </th>
                <th scope="col">Opções</th>
            </tr>
        </thead>

            <?php
                foreach($data as $user){
            ?>
                <tr>
                    <th scope="row"><?php echo $user['ID'];?></th>
                    <td><?php echo $user['NAME'];?></td>
                    <td><?php echo $user['EMAIL'];?></td>
                    <td><?php echo $user['PASSWORD'];?></td>
                    <td><button class="btn btn-success">Atualizar</button></td>
                    <td><a href="../controllers/deletarFuncionario.php?id=<?php echo $user['ID'];?>" class="btn btn-danger">Deletar</a></td>
                    
                </tr>
            <?php
                }
            ?>
        </table>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>