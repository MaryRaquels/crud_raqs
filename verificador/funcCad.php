<?php
if(isset($_POST['submit'])) {
    if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['funcao']) && !empty($_POST['funcao'])){
        require '../conexao.php';
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $funcao = $_POST['funcao'];
        $sql = "INSERT INTO funcionarios(nome, login, senha, funcao) VALUES (:nome, :login, :senha, :funcao)";
        $result = $conn -> prepare($sql);
        $result -> bindValue(":nome", $nome);
        $result -> bindValue(":login", $login);
        $result -> bindValue(":senha", $senha);
        $result -> bindValue(":funcao", $funcao);
        $result -> execute();

        header("location: ../funcionarios.php?nome_funcionario=$nome&sucesso=ok");
    }
}