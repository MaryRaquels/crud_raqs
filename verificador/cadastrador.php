<?php
    if(isset($_POST['submit'])) {
        if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['nome']) && !empty($_POST['nome'])){
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];
            $sql = "INSERT INTO funcionarios(login, senha, nome) VALUES (:login, :senha, :nome)";
            $result = $conn->prepare($sql);
            $result->bindValue('login',$login);
            $result->bindValue('senha',$senha);
            $result->bindValue('nome',$nome);
            $result->execute();
            header('Location:../login.php?success=ok');
    }
}
if(isset($_POST['submit'])) {
    if(isset($_POST['gerente']) && !empty($_POST['gerente']) && isset($_POST['atendente']) && !empty($_POST['atendente'])){
        require '../conexao.php';
        $gerente = $_POST['gerente'];
        $atendente = $_POST['atendente'];
        $sql = "INSERT INTO funcao(gerente, atendente) VALUES (:gerente, :atendente)";
        $result = $conn->prepare($sql);
        $result->bindValue('gerente',$gerente);
        $result->bindValue('atendente',$atendente);
        $result->execute();
        header('Location:../login.php?success=ok');
    }
}
