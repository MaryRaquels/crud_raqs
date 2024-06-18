<?php
if(isset($_POST['nome']) && !empty($_POST['nome']) 
&& isset($_POST['login']) && !empty($_POST['login']) 
&& isset($_POST['senha']) && !empty($_POST['senha']) 
&& isset($_POST['funcao']) && !empty($_POST['funcao']) 
&& isset($_POST['idfuncionarios']) && !empty($_POST['idfuncionarios'])){
    require '../conexao.php';
    $idfuncionarios = $_POST['idfuncionarios'];
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $funcao = $_POST['funcao'];

    $sql = "UPDATE funcionarios SET nome = :nome, login = :login, senha = :senha, funcao = :funcao  WHERE idfuncionarios = :idfuncionarios";
    $result = $conn -> prepare($sql);
    $result -> bindValue(':idfuncionarios', $idfuncionarios);
    $result -> bindValue(':nome', $nome);
    $result -> bindValue(':login', $login);
    $result -> bindValue(':senha', $senha);
    $result -> bindValue(':funcao', $funcao);
    $result -> execute();

    header("location: ../funcionarios.php?nome_funcionario=$nome&update=ok");
    }