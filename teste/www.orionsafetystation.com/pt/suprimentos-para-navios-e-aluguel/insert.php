<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulário de Cadastro</h1>
        <form method="post" action="processa-formulario.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="file" id="imagem" name="imagem">
            </div>
            <div class="form-group">
                <label for="informacao_extra">Informação Extra:</label>
                <textarea class="form-control" id="informacao_extra" name="informacao_extra"></textarea>
            </div>
            <div class="form-group">
                <label for="quantidade_botoes">Quantidade de Botões:</label>
                <input type="number" class="form-control" id="quantidade_botoes" name="quantidade_botoes" min="0" max="10">
            </div>
            <div id="botoes"></div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Adiciona inputs para nome e link de botões adicionais conforme quantidade informada
        $('#quantidade_botoes').change(function() {
            var qtd = parseInt($(this).val());
            var html = '';
            for (var i = 0; i < qtd; i++) {
                html += '<div class="form-group">';
                html += '<label for="nome_botao_' + i + '">Nome do Botão:</label>';
                html += '<input type="text" class="form-control" id="nome_botao_' + i + '" name="nome_botao_' + i + '">';
                html += '</div>';
                html += '<div class="form-group">';
                html += '<label for="link_botao_' + i + '">Link do Botão:</label>';
                html += '<input type="text" class="form-control" id="link_botao_' + i + '" name="link_botao_' + i + '">';
                html += '</div>';
            }
            $('#botoes').html(html);
        });
    </script>
</body>
</html>
