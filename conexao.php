<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=crudR", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /*echo "Conectado com sucesso!!";*/
} catch(PDOException $e) {
  echo "A conexão falhou: " . $e->getMessage();
}
?>