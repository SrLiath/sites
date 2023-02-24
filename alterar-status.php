<?php

// Conexão com o banco de dados
$servername = "localhost:5431";
$username = "root";
$password = "40028922.jj";
$dbname = "teste";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtém os valores do POST
$id = $_POST["id"];
$status = $_POST["status"];

// Atualiza o status do pedido no banco de dados
$sql = "UPDATE pedidos SET status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "error";
}

$conn->close();
?>
