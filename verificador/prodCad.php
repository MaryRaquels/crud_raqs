<?php
if(isset($_POST['submit'])) {
    if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['validade']) && !empty($_POST['validade']) && isset($_POST['valor']) && !empty($_POST['valor']) && isset($_POST['quantidade']) && !empty($_POST['quantidade']) && isset($_POST['categoria']) && !empty($_POST['categoria'])){
        require '../conexao.php';
        $nome = $_POST['nome'];
        $validade = $_POST['validade'];
        $valor = $_POST['valor'];
        $quantidade = $_POST['quantidade'];
        $categoria = $_POST['categoria'];
        $sql = "INSERT INTO produtos(nome, validade, valor, quantidade, idcategoria) VALUES (:nome, :validade, :valor, :quantidade, :categoria)";
        $result = $conn -> prepare($sql);
        $result -> bindValue(":nome", $nome);
        $result -> bindValue(":validade", $validade);
        $result -> bindValue(":valor", $valor);
        $result -> bindValue(":quantidade", $quantidade);
        $result -> bindValue(":categoria", $categoria);
        $result -> execute();

        header("location: ../produtos.php?nome_produto=$nome&sucesso=ok");
    }
}