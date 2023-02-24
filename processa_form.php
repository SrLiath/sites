<?php
// Conectar ao banco de dados
$servername = "localhost:5431";
$username = "root";
$password = "40028922.jj";
$dbname = "teste";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}

// Obter os dados do formulário
$local_de_entrega = mysqli_real_escape_string($conn, $_POST['local_de_entrega']);
$local_de_busca = mysqli_real_escape_string($conn, $_POST['local_de_busca']);
$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
$peso = mysqli_real_escape_string($conn, $_POST['peso']);
$tamanho_pacote = mysqli_real_escape_string($conn, $_POST['tamanho_pacote']);
$urgencia = isset($_POST['urgencia']) ? 1 : 0;

// Inserir os dados na tabela
$sql = "INSERT INTO pedidos (local_de_entrega, local_de_busca, descricao, peso, tamanho_pacote, urgencia)
        VALUES ('$local_de_entrega', '$local_de_busca', '$descricao', '$peso', '$tamanho_pacote', '$urgencia')";
if (mysqli_query($conn, $sql)) {
  echo "Dados inseridos com sucesso!";
} else {
  echo "Erro ao inserir dados: " . mysqli_error($conn);
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
