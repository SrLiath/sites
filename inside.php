<!DOCTYPE html>
<html lang="en">

  <head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>JB Logistica</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <style>

.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}

.modal-content {  
  left: -15vw;
  width: 52vw;
}

</style>
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="index.php"><em>JB</em> Logistica</a>
    </div>
    <a href="index.php" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="index.php">Inicial</a></li>
        <li class="has-submenu"><a href="index.php">Sobre nós</a>
          <ul class="sub-menu">
            <li><a href="index.php">Sobre</a></li>

          </ul>
        </li>
        <li><a href="index.php">Serviços</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="index.php">Contato</a></li>
        <li><a href="#" class="external">Rastreio</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
     
          <img src="assets/images/fundo.jpg" id="bg-video" />
      

      <div class="video-overlay header-text">
      <div class="container emp-profile">

      <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h2>Lista de Pedidos</h2>
    <button class="btn btn-primary entregues-btn" id="entreguesBtn" style=' right:5vw;'>Entregues</button>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Entregador</th>
            <th>Local de Entrega</th>
            <th>Local de Busca</th>
            <th>Descrição</th>
            <th>Peso</th>
            <th>Tamanho do Pacote</th>
            <th>Urgência</th>
            <th>Status</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Popup para listar os pedidos entregues -->
<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pedidos Entregues</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Usuário</th>
              <th>Entregador</th>
              <th>Local de Entrega</th>
              <th>Local de Busca</th>
              <th>Descrição</th>
              <th>Peso</th>
              <th>Tamanho do Pacote</th>
              <th>Urgência</th>
              <th>Status</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tbody id="pedidosEntreguesTbody">
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

  <!-- Popup para editar o status do pedido -->
  <div class="modal fade" id="editarStatusModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Status</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" id="pedidoId">
          <div class="form-group">
            <label for="novoStatus">Novo Status:</label>
            <input type="text" class="form-control" id="novoStatus">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" id="salvarStatusBtn">Salvar</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Adiciona evento de clique para abrir o popup de entregues
$(document).on("click", "#entreguesBtn", function() {
  var table = $("table tbody");
  var entregues = table.find(".status:contains('Entregue')").closest("tr");
  var popup = $("<div></div>").addClass("modal fade").attr("id", "entreguesModal");
  var modalDialog = $("<div></div>").addClass("modal-dialog").appendTo(popup);
  var modalContent = $("<div></div>").addClass("modal-content").appendTo(modalDialog);
  var modalHeader = $("<div></div>").addClass("modal-header").appendTo(modalContent);
  $("<h4></h4>").addClass("modal-title").text("Pedidos Entregues").appendTo(modalHeader);
  var modalBody = $("<div></div>").addClass("modal-body").appendTo(modalContent);
  var modalTable = $("<table></table>").addClass("table").appendTo(modalBody);
  var modalHeaderRow = $("<tr></tr>").appendTo(modalTable);
  $("<th></th>").text("ID").appendTo(modalHeaderRow);
  $("<th></th>").text("Usuário").appendTo(modalHeaderRow);
  $("<th></th>").text("Entregador").appendTo(modalHeaderRow);
  $("<th></th>").text("Local de Entrega").appendTo(modalHeaderRow);
  $("<th></th>").text("Local de Busca").appendTo(modalHeaderRow);
  $("<th></th>").text("Descrição").appendTo(modalHeaderRow);
  $("<th></th>").text("Peso").appendTo(modalHeaderRow);
  $("<th></th>").text("Tamanho do Pacote").appendTo(modalHeaderRow);
  $("<th></th>").text("Urgência").appendTo(modalHeaderRow);
  $("<th></th>").text("Status").appendTo(modalHeaderRow);
  var modalBodyRows = entregues.clone().appendTo(modalTable);
  var modalFooter = $("<div></div>").addClass("modal-footer").appendTo(modalContent);
  $("<button></button>").addClass("btn btn-default").attr("type", "button").attr("data-dismiss", "modal").text("Fechar").appendTo(modalFooter);
  popup.modal("show");
});


  $(document).ready(function() {
  // Carrega a lista de pedidos na tabela
  carregarPedidos();

  // Adiciona evento de clique para editar o status
  $(document).on("click", ".editar-status", function() {
    var row = $(this).closest("tr");
    var id = row.data("id");
    var status = row.find(".status").text();
    $("#pedidoId").val(id);
    $("#novoStatus").val(status);
    $("#editarStatusModal").modal("show");
  });

  // Adiciona evento de clique para salvar o novo status
  $(document).on("click", "#salvarStatusBtn", function() {
    var id = $("#pedidoId").val();
    var newStatus = $("#novoStatus").val();
    if (newStatus) {
      $.ajax({
        type: "POST",
        url: "alterar-status.php",
        data: {
          id: id,
          status: newStatus
        },
        success: function(response) {
          if (response == "success") {
            $("#editarStatusModal").modal("hide");
            carregarPedidos();
          } else {
            alert("Erro ao alterar o status do pedido. Tente novamente.");
          }
        }
      });
    } else {
      alert("Por favor, insira o novo status.");
    }
  });
});

// Função para carregar a lista de pedidos na tabela
function carregarPedidos() {
  $.ajax({
    type: "GET",
    url: "listar-pedidos.php",
    dataType: "json",
    success: function(data) {
      var table = $("table tbody");
      table.empty();
        $.each(data.pedidos, function(index, pedido) {
            var row = $("<tr></tr>");
            row.attr("data-id", pedido.id);
            row.append($("<td></td>").text(pedido.id));
            row.append($("<td></td>").text(pedido.usuario));
            row.append($("<td></td>").text(pedido.entregador));
            row.append($("<td></td>").text(pedido.local_de_entrega));
            row.append($("<td></td>").text(pedido.local_de_busca));
            row.append($("<td></td>").text(pedido.descricao));
            row.append($("<td></td>").text(pedido.peso));
            row.append($("<td></td>").text(pedido.tamanho_pacote));
            row.append($("<td></td>").text(pedido.urgencia ? "Sim" : "Não"));
            var statusCell = $("<td class='status'></td>").text(pedido.status);
            row.append(statusCell);
            var editarBtn = $("<button class='btn btn-primary editar-status'>Editar</button>");
            row.append($("<td></td>").append(editarBtn));
            table.append(row);

            // Cria as opções de status para o select do popup de edição
            var options = "";
            $.each(data.status, function(index, value) {
            options += "<option" + (value == pedido.status ? " selected" : "") + ">" + value + "</option>";
            });
            $("#novoStatus").html(options);
        });
    }
  });
}
</script>
</body>
</html>


          
        </div>
          </div>
      </div>
  </section>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>
