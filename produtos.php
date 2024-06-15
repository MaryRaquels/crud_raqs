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
<div class="d-flex align-items-center justify-content-end mx-3 my-2">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color:#87CEEB">
        Adicionar
    </button>
<!--MODAL ADICIONAR-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="staticBackdropLabel">Adicione o produto desejado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./verificador/prodCad.php" method="post" data-parsley-validate>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control " name="nome" required>
                            <label for="nome">Nome <span style="color: #FF0000">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control " name="validade" required>
                            <label for="validade">Validade <span style="color: #FF0000">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control " name="valor" required>
                            <label for="valor">Valor <span style="color: #FF0000">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control " name="quantidade"  required>
                            <label for="quantidade">Quantidade <span style="color: #FF0000">*</span></label>
                        </div>
                        <input type="submit" value="Adicionar" name="submit" class="btn w-100 text-light my-2" style="background-color: #1d405c">
                        <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ALERT SUCCESS-->
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
<?php endif;?>
<!--ALERT DELETE-->
<?php
    if(isset($_GET['delete'])):
        $prodNome = $_GET['nome_produto'];
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Deletado!',
            text: 'Produto ' + '<?php echo $prodNome; ?>' + ' deletado com sucesso!'
        });
    </script>
<?php endif; ?>
<!--TABLE-->
<div class="px-3 ">
    <table class="table table-responsive table-hover m-0 p-3 table-bordered ">
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
                $modalId = "Backdrop" . $produto['idprodutos'];
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
                    
                    <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#" . $modalId . "'>
                        Atualizar
                    </button>
                    <div class='modal fade' id='" . $modalId . "' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h1 class='modal-title fs-4' id='staticBackdropLabel'>Atualize o produto desejado</h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>
                                    <form method='post' action='./verificador/prodUp.php'>
                                        <input type='hidden' name='idprodutos' value='" . $produto['idprodutos'] . "' />
                                        <div class='form-floating mb-3'>
                                            <input type='text' class='form-control' value='". $produto['nome'] ."' name='nome' required>
                                            <label for='nome'>Nome <span style='color: #FF0000'>*</span></label>
                                        </div>
                                        <div class='form-floating mb-3'>
                                            <input type='date' class='form-control' value='". $produto['validade'] ."' name='validade' required>
                                            <label for='validade'>Validade <span style='color: #FF0000'>*</span></label>
                                        </div>
                                        <div class='form-floating mb-3'>
                                            <input type='number' class='form-control' value='". $produto['valor'] ."' name='valor' required>
                                            <label for='valor'>Valor <span style='color: #FF0000'>*</span></label>
                                        </div>
                                        <div class='form-floating mb-3'>
                                            <input type='number' class='form-control' value='". $produto['quantidade'] ."' name='quantidade'  required>
                                            <label for='quantidade'>Quantidade <span style='color: #FF0000'>*</span></label>
                                        </div>
                                        <input type='submit' value='Atualizar' name='submit' class='btn w-100 text-light my-2' style='background-color: #1d405c'>
                                        <button type='button' class='btn btn-secondary w-100' data-bs-dismiss='modal'>Cancelar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
<!--MODAL ADICIONAR 2-->
        <div class="d-flex align-items-center justify-content-center">
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color:#87CEEB">
                Adicionar
            </button>
        </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-4" id="staticBackdropLabel">Adicione o produto desejado</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="./verificador/prodCad.php" method="post" data-parsley-validate>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control " name="nome" required>
                                    <label for="nome">Nome <span style="color: #FF0000">*</span></label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control " name="validade" required>
                                    <label for="validade">Validade <span style="color: #FF0000">*</span></label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control " name="valor" required>
                                    <label for="valor">Valor <span style="color: #FF0000">*</span></label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control " name="quantidade"  required>
                                    <label for="quantidade">Quantidade <span style="color: #FF0000">*</span></label>
                                </div>
                                <input type="submit" value="Cadastrar" name="submit" class="btn w-100 text-light my-2" style="background-color: #1d405c">
                                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    ?>
</div>
<!--JS-BOOSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--PARSLEY-->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>  
</body>
</html>