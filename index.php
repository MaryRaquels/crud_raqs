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
<body style="background-color: #ADD8E6">
<!--NAVBAR-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-info d-flex">
        <div class="container-fluid d-flex justify-content-start">
            <a class="navbar-brand" href="#">
                <img src="./images/logo-certa.png" alt="" style="width:40px;" class="rounded-pill ">
            </a>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active link-light" href="#">Painel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link-light" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active link-light" href="#">Funcionários</a>
                </li>
            </ul>
        </div>
        <div class="btn px-4">
            <button type="button" class="btn  " data-toggle="dropdown" style="background-color: #ADD8E6">
                <a href="./verificador/logout.php" class="text-decoration-none link-dark">Logout</a>
            </button>
        </div>
    </nav>
    <div class="container d-flex aligh-items-center justify-content-center p-3">
        <button class="btn btn-light btn-alt shadow-lg p-3 mb-5 rounded m-3">
           <h4 >Produtos cadastrados: 178</h4>
        </button>
        <button class="btn btn-dark btn-alt shadow-lg p-3 mb-5 rounded m-3">
           <h4>Valor total: R$3.083,00</h4>
        </button>
        <button class="btn btn-dark btn-alt shadow-lg p-3 mb-5 rounded m-3">
           <h4>Funcionários cadastrados: 38</h4>
        </button>
    </div>
<!--JS-BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>