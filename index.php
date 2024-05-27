<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
?>
<!--<a href="verificador/logout.php">Sair da conta</a>
<h1>Seja Bem Vindo <?php /*echo $_SESSION['nome'] */?></h1>-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
<!--CSS-->
    <link rel="stylesheet" href="./CSS/painel.css">
<!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container container-bg p-0">
<!--NAVBAR-->
        <nav class="navbar navbar-expand-sm d-flex aligh-items-center justify-items-center justify-content-start" style="background-color: #1d405c">
            <a class="navbar-brand mx-3" href="#">
                <img src="./images/logo-certa.png" alt="" style="width:40px;" class="rounded-pill ">
            </a>
            <button class="navbar-toggler" type="button" id="navbarNav" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-bs-theme="light">
                <span class="navbar-toggler-icon"></span>
            </button>    
            <div class="collapse navbar-collapse" tabindex="-1" id="navbarNav" >
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link active link-light" href="#">Painel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active link-light" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active link-light" href="#">Funcionários</a>
                    </li>
                </ul>
                <div class="d-grid gap-4 d-sm-flex justify-content-sm-end collapse navbar-collapse" id="navbarNav">
                    <button class="btn me-sm-4" type="button" style="background: #87CEEB;">
                        <a class="text-decoration-none link-dark" href="./verificador/logout.php">Logout</a>
                    </button>
                </div>
            </div>
        </nav>
<!--DASHBOARD-->
        <div class="d-flex">
            <h1 class=" pt-3 mx-4 px-1">Bem-vindo, Usuário!</h1>
        </div>
        <hr>
        <div class="d-flex flex-wrap aligh-items-center justify-content-around pt-5" >
            <button id="produtos" class="btn btn-alt shadow-lg rounded m-3 text-light" style="background-color: #1d405c;">
                <h3>Produtos</h3>
                <h5>38 produtos cadastrados</h5>
            </button>
            <button id="valores" class="btn btn-alt shadow-lg p-3 rounded m-3 text-light" style="background-color: #1d405c;">
                <h3>Valor Total</h3>
                <h5>R$17.680,30</h5>
            </button>
            <button id="funcionarios" class="btn btn-alt shadow-lg p-3 rounded m-3 text-light" style="background-color: #1d405c;">
                <h3>Funcionários</h3>
                <h5>17 funcionários cadastrados</h5>
            </button>
            <div class="d-flex flex-wrap aligh-items-center justify-content-around">
            <button id="relatorio" class="btn btn-alt shadow-lg p-3 rounded m-3 text-light" style="background-color: #1d405c;">
                <h3>Relatório</h3>
                <h5>Categoria de produtos mais cadastradas</h5>
            </button>
            </div>
        </div>
    </div>
<!--JS-BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>