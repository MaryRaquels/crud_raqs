<?php
    session_start();
    require 'conexao.php';
    if(!isset($_SESSION['login'])){
        header('location: login.php');
    }
    $sql = "SELECT * from relatorio WHERE contIDcat = (
        SELECT count(c.idcategoria) AS contIDcat
        FROM produtos AS p
        JOIN categoria AS c ON p.idcategoria = c.idcategoria
        group by c.idcategoria order by contIDcat desc limit 1)";
    $result = $conn->prepare($sql);
    $result->execute();
    $categorias = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
<!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--CSS-->
    <link rel="stylesheet" href="./CSS/painel.css">
</head>
<body>
<div class="container container-bg p-0">
<!--NAVBAR-->
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

<div class="px-3 ">
    <table class="table table-responsive table-hover my-5 p-5 table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">categoria</th>
                <th scope="col">Quantidade de Produtos</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($categorias as $categoria){
                echo "<tr>";
                echo "<td>" . $categoria['categoria'] . "</td>";
                echo "<td>" . $categoria['contIDcat'] . "</td>";
                echo "</tr>"; 
            }
        ?>                       
        </tbody>
    </table>
        </div>
<!--JS-BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
<!--PARSLEY-->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
</body>
</html>