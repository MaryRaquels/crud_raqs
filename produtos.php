<?php
    session_start();
    require 'conexao.php';
    if(!isset($_SESSION['login'])){
        header('location: login.php');
    }
$sql = "SELECT * FROM produtos";
$result = $conn -> prepare($sql);
$result -> execute();
$produtos = $result -> fetchALL(PDO:: FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
<!--CABEÇALHO-->
<?php 
if(count($produtos) > 0){
?>
<div class="d-flex align-items-center justify-content-center">
    <h2 class="py-1">Lista de Produtos</h2>
</div>
<div class="d-flex align-items-center justify-content-end">
    <a href="insertProd.php" class="btn my-2 mx-3" style="background-color:#87CEEB;">Adicionar</a>
    </div>

<!--ALERT SUCESS-->
<?php
    if(isset($_GET['sucesso'])):
        $prodNome = $_GET['nome_produto'];
?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastro concluído',
            text: 'Produto ' + '<?php echo $prodNome; ?>' + ' cadastrado com sucesso!'
        });
    </script>
<?php endif; ?>
<?php
    if(isset($_GET['delete'])):
        $prodNome = $_GET['nome_produto'];
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Produto excluído',
            text: 'Produto ' + '<?php echo $prodNome; ?>' + ' excluído com sucesso!'
        });
    </script>
<?php endif; ?>
<!--TABLE-->
<div class="table-responsive-sm ">
    <table class="table table-hover m-0 p-3">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Validade</th>
                <th scope="col">Valor</th>
                <th scope="col">Quantidade</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($produtos as $produto){
                echo "<tr>";
                echo "<td>" . $produto['idprodutos'] . "</td>";
                echo "<td>" . $produto['nome'] . "</td>";
                echo "<td>" . $produto['validade'] . "</td>";
                echo "<td>" . $produto['valor'] . "</td>";
                echo "<td>" . $produto['quantidade'] . "</td>";
                echo "<td>
                <div class='d-flex align-items-center justify-content-sm-end mx-1'>
                    <form method='post' action='./verificador/prodDel.php'>
                        <input type='hidden' name='idprodutos' value='" . $produto['idprodutos'] . "' />
                        <input type='hidden' name='nome' value='" . $produto['nome'] . "' />
                        <button class='btn btn-danger mx-2' type='submit'>Deletar</button>
                    </form>
                    <form method='post' action='prodFormUp.php'>
                        <input type='hidden' name='idprodutos' value='" . $produto['idprodutos'] . "' />
                        <button class='btn btn-success mx-2' type='submit'>Atualizar</button>
                    </form>
                </div>
                </td>";
                echo "<tr/>";
            }
        ?>
        </tbody>
    </table>
    <?php
        }else{
            echo "<h3 style='text-align: center;'>Nenhum produto cadastrado</h3>";
        ?>
            <div class="d-flex align-items-center justify-content-center py-2">
                <a href="insertProd.php" class="btn m-1 justify-content-sm-end" style="background-color:#87CEEB;">Adicionar</a>
            </div>
    <?php
        }
    ?>
</div>
<!--JS-BOOSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>