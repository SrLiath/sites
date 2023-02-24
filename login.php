<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JB Logistica</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>/* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.container{
  position: relative;
  max-width: 850px;
  width: 100%;
  background: #fff;
  padding: 40px 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  perspective: 2700px;
}
.container .cover{
  position: absolute;
  top: 0;
  left: 50%;
  height: 100%;
  width: 50%;
  z-index: 98;
  transition: all 1s ease;
  transform-origin: left;
  transform-style: preserve-3d;
}

.container #flip:checked ~ .cover{
  transform: rotateY(-180deg);
}
.container .cover img{
  position: absolute;
  height: 100%;
  width: 100%;
  object-fit: cover;
  z-index: 12;
  backface-visibility: hidden;
  right: 0%;
}
.container .cover .back .backImg{
  transform: rotateY(180deg);
  transform: rotateY(180deg);
}
.container .cover .text{
  position: absolute;
  z-index: 111;
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.cover .text .text-1,
.cover .text .text-2{
  font-size: 26px;
  font-weight: 600;
  color: #fff;
  text-align: center;
  backface-visibility: hidden;
}
.cover .back .text .text-1,
.cover .back .text .text-2{
  transform: rotateY(180deg);
}
.cover .text .text-2{
  font-size: 15px;
  font-weight: 500;
}
.container .forms{
  height: 100%;
  width: 100%;
  background: #fff;
}
.container .form-content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.form-content .login-form,
.form-content .signup-form{
  width: calc(100% / 2 - 25px);
}
.forms .form-content .title{
  position: relative;
  font-size: 24px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .title:before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 25px;
  background: #FF9F5B;
}
.forms .signup-form  .title:before{
  width: 20px;
}
.forms .form-content .input-boxes{
  margin-top: 30px;
}
.forms .form-content .input-box{
  display: flex;
  align-items: center;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  position: relative;
}
.form-content .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
  border-color: #FF9F5B;
}
.form-content .input-box i{
  position: absolute;
  color: #FF9F5B;
  font-size: 17px;
}
.forms .form-content .text{
  font-size: 14px;
  font-weight: 500;
  color: #333;
}
.forms .form-content .text a{
  text-decoration: none;
  color: #FF9F5B;
}
.forms .form-content .text a:hover{
  text-decoration: underline;
}
.forms .form-content .button{
  color: #fff;
  margin-top: 40px;
}
.forms .form-content .button input{
  color: #fff;
  background: #FF9F5B;
  border-radius: 6px;
  padding: 0;
  cursor: pointer;
  transition: all 0.4s ease;
}
.forms .form-content .button input:hover{
  background: #FF9F5B;
}
.forms .form-content label{
  color: #FF9F5B;
  cursor: pointer;
}
.forms .form-content label:hover{
  text-decoration: underline;
}
.forms .form-content .login-text,
.forms .form-content .sign-up-text{
  text-align: center;
  margin-top: 25px;
}
.container #flip{
  display: none;
}
@media (max-width: 730px) {
  .container .cover{
    display: none;
  }
  .form-content .login-form,
  .form-content .signup-form{
    width: 100%;
  }
  .form-content .signup-form{
    display: none;
  }
  .container #flip:checked ~ .forms .signup-form{
    display: block;
  }
  .container #flip:checked ~ .forms .login-form{
    display: none;
  }
}</style>
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>JB</em> Logistica</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Inicial</a></li>
        <li class="has-submenu"><a href="#section2">Sobre nós</a>
          <ul class="sub-menu">
            <li><a href="#section2">Sobre</a></li>

          </ul>
        </li>
        <li><a href="#section1">Login</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contato</a></li>
        <li><a href="rastreio.php" class="external">Rastreio</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
     
          <img src="assets/images/fundo.jpg" id="bg-video" />
      

      <div class="video-overlay header-text">
          <div class="caption">
          <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="4c.jpg " alt="login">
        <div class="text">
          <span class="text-1">Sua melhor escolha</span>
          <span class="text-2">para uma entrega <em> rápida</em></span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/register.jpg" alt="Imagem Cadastro">
        <div class="text">
          <span class="text-1">Compelte sua jornada <br> </span>
          <span class="text-2">Vamos começar</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Digite seu email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Digite sua senha" required>
              </div>
              <div class="text"><a href="#">Esqueceu a senha?</a></div>
              <div class="button input-box">
                <input type="submit" value="Enviar">
              </div>
              <div class="text sign-up-text">Não tem uma conta? <label for="flip">Inscreva-se agora</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Inscrever-se</div>
        <form action="#">
            <div class="input-boxes">
            <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="CPF" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Digite seu nome" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Digite seu email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Digite sua senha password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Enviar">
              </div>
              <div class="text sign-up-text">Já tem uma conta? <label for="flip">Conecte-se agora</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
          </div>
      </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
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



        $(window).scroll(function () {
          checkSection();
        });


        
    </script>
</body>
</html>

