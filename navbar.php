<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm d-flex aligh-items-center justify-items-center justify-content-start" style="background-color: #1d405c">
        <a class="navbar-brand mx-3" href="#">
            <img src="./images/logo-certa.png" alt="" style="width:40px;" class="rounded-pill ">
        </a>
        <button class="navbar-toggler" type="button" id="navbarNav" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-bs-theme="dark">
            <span class="navbar-toggler-icon"></span>
        </button>    
        <div class="collapse navbar-collapse" tabindex="-1" id="navbarNav" >
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link active link-light" href="index.php">Painel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link-light" href="produtos.php">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link-light" href="funcionarios.php">Funcionários</a>
                </li>
            </ul>
            <div class="d-grid gap-4 d-sm-flex justify-content-sm-end collapse navbar-collapse" id="navbarNav">
                <button class="btn me-sm-4" type="button" style="background: #87CEEB;">
                    <a class="text-decoration-none link-dark" href="./verificador/logout.php">Logout</a>
                </button>
            </div>
        </div>
    </nav>
</body>
</html>