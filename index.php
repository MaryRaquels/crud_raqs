<?php
session_start();
require 'conexao.php';
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
                    <button class="btn me-sm-5" type="button" style="background: #87CEEB;">
                        <a class="text-decoration-none link-dark px-1" href="./verificador/logout.php">Logout</a>
                    </button>
                </div>
            </div>
        </nav>
<!--DASHBOARD-->
        <div class="d-flex">
            <h1 class=" pt-3 mx-4 px-2">Bem-vindo, <?php echo $_SESSION['nome'];?>!</h1>
        </div>
        <hr>
        <div class="d-flex flex-wrap aligh-items-center justify-content-around pt-5" >
            <button id="produtos" class="btn btn-alt shadow-lg rounded m-3 text-light" style="background-color: #1d405c;">
                <h2>Produtos</h32>
                <h4>
                    <?php 
                        require 'conexao.php';
                        $sql = "SELECT COUNT(*) as total FROM produtos";
                        $result = $conn->prepare($sql);
                        $result-> execute();
                        $total = $result-> fetchcolumn();
                     
                        echo "Total de produtos: " . ($total);
                    ?>
                </h4>
            </button>
            <button id="valores" class="btn btn-alt shadow-lg p-3 rounded m-3 text-light" style="background-color: #1d405c;">
                <h2>Valor Total</h2>
                <h4>
                    <?php 
                        require 'conexao.php';
                        $sql = "SELECT SUM(valor) as total FROM produtos";
                        $result = $conn->prepare($sql);
                        $result-> execute();
                        $totalvalor = $result-> fetchcolumn();
                     
                        echo "R$ " . ($totalvalor);
                        if($totalvalor == 0){
                            echo '0,00';
                        }
                    ?>
                </h4>
            </button>
            <button id="funcionarios" class="btn btn-alt shadow-lg p-3 rounded m-3 text-light" style="background-color: #1d405c;">
                <h2>Funcionários</h2>
                <h4>
                    <?php 
                        require 'conexao.php';
                        $sql = "SELECT COUNT(*) as total FROM funcionarios";
                        $result = $conn->prepare($sql);
                        $result-> execute();
                        $totalfunc = $result-> fetchcolumn();
                     
                        echo "Total de funcionários: " . ($totalfunc);
                    ?>
                </h4>
            </button>
            <div class="d-flex flex-wrap aligh-items-center justify-content-around">
            <button id="relatorio" class="btn btn-alt shadow-lg p-3 rounded m-3 text-light" style="background-color: #1d405c;">
                <h2>Relatório</h2>
                <h5>Categoria de produtos mais cadastradas</h5>
                <h5><a href="join.php" class="link link-light text-decoration-none">Ver Mais</a></h5>
            </button>
            </div>
        </div>
    </div>
<!--JS-BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--PARSLEY-->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
</body>
</html>