<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Entrega</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Formulário de Entrega</h2>
    <form action="processa_form.php" method="post">
      <div class="form-group">
        <label for="local_de_entrega">Local de Entrega:</label>
        <input type="text" class="form-control" id="local_de_entrega" name="local_de_entrega" required>
      </div>
      <div class="form-group">
        <label for="local_de_busca">Local de Busca:</label>
        <input type="text" class="form-control" id="local_de_busca" name="local_de_busca" required>
      </div>
      <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="peso">Peso (em kg):</label>
        <input type="number" class="form-control" id="peso" name="peso">
      </div>
      <div class="form-group">
        <label for="tamanho_pacote">Tamanho do Pacote:</label>
        <input type="text" class="form-control" id="tamanho_pacote" name="tamanho_pacote">
      </div>
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="urgencia"> Urgente
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>
</html>
