<?php
        if(isset($_POST['idprodutos'])){
            require '../conexao.php';
            $nome = $_POST['nome'];
            $idprodutos = $_POST['idprodutos'];

            $sql = "DELETE FROM produtos WHERE idprodutos = :idprodutos";
            $result = $conn -> prepare($sql);
            $result -> bindValue('idprodutos', $idprodutos);
            $result -> execute();

            header("location: ../produtos.php?nome_produto=$nome&delete=ok");
        }
?>