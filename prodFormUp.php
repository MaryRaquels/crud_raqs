<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Produtos</title>
<!--CSS-->
<link rel="stylesheet" href="./CSS/style.css">
<!--BOOTSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #ADD8E6">
<div class="container d-flex justify-items-center align-items-center">
        <div class="card shadow-lg p-3 mb-1 rounded mx-auto bg-light">
            <div class="card-title">
                <img src="./images/logo-certa.png" alt="" class="rounded mx-auto d-block logo">
                <h5 class="text-center text-dark font-weight-light">Atualize o Produto desejado</h5>
            </div>
<!--FORM-->
            <div class="card-body align-self-center w-100" >
                <form action="./verificador/prodUp.php" method="post"  data-parsley-validate>
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
                    
                    <input type="submit" value="Enviar" name="submit" class="btn w-100 text-light" style="background-color: #1d405c">
                </form>
            </div>
        </div>    
    </div>

<!--JS-BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--PARSLEY-->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
</body>
</html>