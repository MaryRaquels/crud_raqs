<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!--CSS-->
    <link rel="stylesheet" href="./CSS/style.css">
<!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<!--CARD-->
<body style="background-color: #ADD8E6">
    <div class="container d-flex justify-items-center align-items-center">
        <div class="card shadow-lg p-3 mb-5 rounded mx-auto bg-light">
            <div class="card-body align-self-center">
                <img src="./images/logo-certa.png" alt="" class="rounded mx-auto d-block logo">
                <h5 class="text-center text-dark font-weight-light">Bem vindo a Farm+!</h5>
<!--FORM-->
                <form action="./verificador/logador.php" method="post" data-parsley-validate>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control " name="login"  required>
                        <label for="login">Login <span style="color: #FF0000">*</span></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control " name="senha" required>
                        <label for="senha">Senha <span style="color: #FF0000">*</span></label>
                    </div>
                    <input type="submit" value="Enviar" name="submit" class="btn btn-info w-100">
                </form>
<!--LINK-CARD-->
                <div class="card-footer py-3 hover-shadow text-center bg-light">
                    <a href="formcad.php" class="text-decoration-none link-dark">Não possui cadastro? Cadastre aqui!</a>
                </div>
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
</html><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!--CSS-->
    <link rel="stylesheet" href="./CSS/style.css">
<!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<!--CARD-->
<body style="background-color: #ADD8E6">
    <div class="container d-flex justify-items-center align-items-center">
        <div class="card shadow-lg p-3 mb-5 rounded mx-auto bg-light">
            <div class="card-body align-self-center">
                <img src="./images/logo-certa.png" alt="" class="rounded mx-auto d-block logo">
                <h5 class="text-center text-dark font-weight-light">Bem vindo a Farm+!</h5>
<!--FORM-->
                <form action="./verificador/logador.php" method="post" data-parsley-validate>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control " name="login"  required>
                        <label for="login">Login <span style="color: #FF0000">*</span></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control " name="senha" required>
                        <label for="senha">Senha <span style="color: #FF0000">*</span></label>
                    </div>
                    <input type="submit" value="Enviar" name="submit" class="btn w-100 text-light" style="background-color: #1d405c">
                </form>
<!--LINK-CARD-->
                <div class="card-footer py-3 hover-shadow text-center bg-light">
                    <a href="formcad.php" class="text-decoration-none link-dark">Não possui cadastro? Cadastre aqui!</a>
                </div>
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