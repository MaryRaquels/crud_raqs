<?php
if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['funcao']) && !empty($_POST['funcao']) && isset($funcionario['idfuncionarios']) && !empty($funcionario['idfuncionarios'])){
    require '../conexao.php';

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $funcao = $_POST['funcao'];
    $idfuncionarios = $funcionario['idfuncionarios'];

    $sql = "UPDATE funcionarios SET nome = :nome, login = :login, senha = :senha, funcao = :funcao WHERE idfuncionarios = :idfuncionarios";
    $result = $conn->prepare($sql);

    $result -> bindValue(':nome', $nome);
    $result -> bindValue(':login', $login);
    $result -> bindValue(':senha', $senha);
    $result -> bindValue(':funcao', $funcao);
    $result -> bindValue(':idfuncionarios', $idfuncionarios);
    $result -> execute();

    header("Location: ../funcionarios.php?nome_funcionario=$nome&update=ok");

}
?>
