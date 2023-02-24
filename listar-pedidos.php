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

// Consulta SQL para obter a lista de pedidos
$sql = "SELECT p.id, u.nome AS usuario, e.nome AS entregador, p.local_de_entrega, p.local_de_busca, p.descricao, p.peso, p.tamanho_pacote, p.urgencia, p.status FROM pedidos p INNER JOIN usuarios u ON p.id_usuario = u.id LEFT JOIN entregadores e ON p.id_entregador = e.id WHERE p.status <> 'Entregue'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Monta um array com os resultados
  $pedidos = array();
  while ($row = $result->fetch_assoc()) {
    $pedidos[] = $row;
  }

  // Array com os possíveis valores de status
  $status = array("Aguardando confirmação", "Confirmado", "Em trânsito", "Entregue", "Cancelado");

  // Monta um array com os resultados e o array de status
  $data = array(
    "pedidos" => $pedidos,
    "status" => $status
  );

  // Retorna o array como JSON
  echo json_encode($data);
} else {
  echo "Nenhum pedido encontrado.";
}

$conn->close();
?>
