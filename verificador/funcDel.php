<?php
    if(isset($_POST['idfuncionarios'])){
        require '../conexao.php';
        $nome = $_POST['nome'];
        $idfuncionarios = $_POST['idfuncionarios'];

        $sql = "DELETE FROM funcionarios WHERE idfuncionarios = :idfuncionarios";
        $result = $conn -> prepare($sql);
        $result -> bindValue("idfuncionarios", $idfuncionarios);
        $result -> execute();

        header("location: ../funcionarios.php?nome_funcionario=$nome&delete=ok");
    }
?>