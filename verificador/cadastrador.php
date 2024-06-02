<?php
    if(isset($_POST['submit'])) {
        if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['funcao']) && !empty($_POST['funcao'])){
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];
            $funcao = $_POST['funcao'];
            $sql = "INSERT INTO funcionarios(login, senha, nome, funcao) VALUES (:login, :senha, :nome, :funcao)";
            $result = $conn -> prepare($sql);
            $result->bindValue(':login',$login);
            $result->bindValue(':senha',$senha);
            $result->bindValue(':nome',$nome);
            $result->bindValue(':funcao',$funcao);
            $result->execute();
            header('Location:../login.php?success=ok');
    }
}