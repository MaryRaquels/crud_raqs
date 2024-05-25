<?php
    if(isset($_POST['submit'])) {
        if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])){
            session_start();
            require '../conexao.php';
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $sql = "SELECT * FROM funcionarios WHERE login = :login AND senha = :senha";
            $result = $conn->prepare($sql);
            $result->bindValue('login',$login);
            $result->bindValue('senha',$senha);
            $result->execute();

            if($result -> rowCount() > 0){
                $dado = $result -> fetch();
                $_SESSION['login'] = $dado['login'];


                header('location: ../index.php');
            }else{
                ?>
                <div class="alert alert-secondary">
                    <span style="color:white">
                <?php
                    echo "Login ou senha inválidos. Tente novamente!";
                ?>
                    </span>
                </div>
                <?php
                header('location: ..login.php');
            }
    }
   
}    
?>