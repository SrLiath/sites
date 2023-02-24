<?php
  $host = "localhost:5431";
  $user = "root";
  $password = "40028922.jj";
  $database = "teste";

  $conn = mysqli_connect($host, $user, $password, $database);

  if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM pedidos";
  $result = mysqli_query($conn, $sql);

  $pedidos = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $pedidos[] = $row;
  }

  echo json_encode($pedidos);
?>
