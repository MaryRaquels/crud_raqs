<?php
if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['validade']) && !empty($_POST['validade']) && isset($_POST['valor']) && !empty($_POST['valor']) && isset($_POST['quantidade']) && !empty($_POST['quantidade']) && isset($produto['idprodutos']) && !empty($produtos['idprodutos'])){
    require '../conexao.php';
    $nome = $_POST['nome'];
    $validade = $_POST['validade'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $idprodutos = $produtos['idprodutos'];

    $sql = "UPDATE produtos SET validade = :validade, valor = :valor, quantidade = :quantidade, nome = :nome, WHERE idprodutos = :idprodutos";
    $result = $conn -> prepare($sql);
    $result -> bindValue(':nome', $nome);
    $result -> bindValue(':validade', $validade);
    $result -> bindValue(':valor', $valor);
    $result -> bindValue(':quantidade', $quantidade);
    $result -> bindValue(':idprodutos', $idprodutos);
    $result -> execute();

    header("location: ../produtos.php?nome_produto=$nome&update=ok");
    }