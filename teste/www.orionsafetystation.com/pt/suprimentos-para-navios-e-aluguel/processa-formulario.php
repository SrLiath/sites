<?php

// Conexão com o banco de dados
$servername = "localhost:5431";
$username = "root";
$password = "40028922.jj";
$dbname = "teste";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Recupera os dados do formulário
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$quantidade_botoes = $_POST['quantidade_botoes'];

// Insere os dados na tabela "files"
$sql = "INSERT INTO files (name, description) VALUES ('$nome', '$descricao')";
if (mysqli_query($conn, $sql)) {
    // Recupera o ID da última inserção
    $id_file = mysqli_insert_id($conn);

    // Insere os botões na tabela "buttons"
    for ($i = 0; $i < $quantidade_botoes; $i++) {
        $nome_botao = $_POST['nome_botao_' . $i];
        $link_botao = $_POST['link_botao_' . $i];
        $sql = "INSERT INTO buttons (id_file, nome_botao, link_botao) VALUES ('$id_file', '$nome_botao', '$link_botao')";
        mysqli_query($conn, $sql);
    }

    echo "Arquivo inserido com sucesso.";
} else {
    echo "Erro ao inserir arquivo: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
