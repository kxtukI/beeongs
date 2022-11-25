<?php 
include_once("../controllers/connect.php");
require("../controllers/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="../js/jquery.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <script src="../js/index.js" defer></script>
  <script src="../js/bootstrap.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/css/ol.css"
    type="text/css">
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
  <title>Início - BeeONGS</title>
</head>
<body>
  <svg onclick="scrollToTop()" id="btn-top" width="90" height="90" viewBox="0 0 90 90" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
      d="M90 45C90 33.0653 85.2589 21.6193 76.8198 13.1802C68.3807 4.74106 56.9347 0 45 0C33.0653 0 21.6193 4.74106 13.1802 13.1802C4.74106 21.6193 0 33.0653 0 45C0 56.9347 4.74106 68.3807 13.1802 76.8198C21.6193 85.2589 33.0653 90 45 90C56.9347 90 68.3807 85.2589 76.8198 76.8198C85.2589 68.3807 90 56.9347 90 45V45ZM47.8125 64.6875C47.8125 65.4334 47.5162 66.1488 46.9887 66.6762C46.4613 67.2037 45.7459 67.5 45 67.5C44.2541 67.5 43.5387 67.2037 43.0113 66.6762C42.4838 66.1488 42.1875 65.4334 42.1875 64.6875V32.1019L30.1163 44.1788C29.5881 44.7069 28.8719 45.0036 28.125 45.0036C27.3781 45.0036 26.6619 44.7069 26.1337 44.1788C25.6056 43.6506 25.3089 42.9344 25.3089 42.1875C25.3089 41.4406 25.6056 40.7244 26.1337 40.1962L43.0087 23.3212C43.27 23.0593 43.5804 22.8515 43.9221 22.7097C44.2638 22.568 44.6301 22.495 45 22.495C45.3699 22.495 45.7362 22.568 46.0779 22.7097C46.4196 22.8515 46.73 23.0593 46.9913 23.3212L63.8663 40.1962C64.3944 40.7244 64.6911 41.4406 64.6911 42.1875C64.6911 42.9344 64.3944 43.6506 63.8663 44.1788C63.3381 44.7069 62.6219 45.0036 61.875 45.0036C61.1281 45.0036 60.4119 44.7069 59.8837 44.1788L47.8125 32.1019V64.6875Z"
      fill="#1F1300" />
  </svg>
  <div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" id="parallax">
      <div class="carousel-item active" data-bs-interval="5000">
        <div class="info-section">
          <h1>Faça parte e ajude as ONGS</h1>
          <p>Conectamos os doadores às ONGS de Mogi Mirim</p>
      </div>
        <img src="../img/foto-carousel1.png" class="carousel-img" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <div class="info-section">
          <h1>Apoio</h1>
          <img src="../img/beecloud-logo.svg" class="beecloud-logo" alt="">
          <a href="https://www.beecloud.com.br" target="_blank" >Saiba mais</a>
      </div>
        <img src="../img/foto-carousel2.jpg" class="carousel-img" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
      <div class="info-section">
          <h1>Vai ter que pagar imposto?</h1>
          <p>Transforme parte do valor em doação!</p>
          <a id="saiba-mais">SAIBA MAIS</a>
      </div>
        <img src="../img/foto-carousel1.png" class="carousel-img" alt="...">
      </div>
    </div>
  </div>
  <section class="main-section container">
    <div class="main-section-content container">
      <h1> BEEONGS </h1>
      <p>A BEEONGS tem como objetivo ajudar as ONGs de Mogi Mirim por meio do nosso site, onde as instituições podem
        divulgar seus serviços e falar sobre suas necessidades para que nossos usuários dispostos a ajudar, possam doar
        de acordo com suas possibilidades.
        Além, de claro, auxiliar as ONGs a terem melhores condições para ajudarem as pessoas que acolhem. </p>
    </div>
    <img src="../img/image00001.jpeg" alt="">
  </section>
  <svg class="background-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e9d758" fill-opacity="1"
      d="M0,224L48,234.7C96,245,192,267,288,250.7C384,235,480,181,576,160C672,139,768,149,864,160C960,171,1056,181,1152,160C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <section class="beeongs-section container">
    <img src="../img/foto-menina-balao.jpeg" class="beeongs-section-img" alt="">
    <div class="beeongs-section-content">
      <h1> Transforme parte do imposto de renda em doação! </h1>
      <p>Transforme parte do valor em doação!
A legislação permite que até 6% do chamado "imposto devido" seja convertido em doação.
O valor pode ser direcionado a fundos federais, estaduais ou municipais. Esses fundos são responsáveis por repassar os recursos para as instituições de apoio a crianças, adolescentes ou idosos.
Porém, para que o dinheiro chegue ao destino final, é necessário que você informe a instituição que pretende ajudar. <a href="https://www.uol.com.br/ecoa/ultimas-noticias/2022/03/23/ir2022-voce-pode-doar-parte-do-imposto-devido-para-quem-precisa-veja-como.htm" target="_blank" style="font-weight: 400; color: #1F1300;">Clique aqui para saber mais.</a></p>
    </div>
  </section>
  <!-- <div class="beeongs-section">
    <div class="beeongs-frame">
      <h1>PORQUE BEEONGS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Nec, odio faucibus in gravida. Purus nisl,
        pellentesque pretium et pretium etiam enin</p>
    </div>
  </div> -->
  <svg class="background-wave-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e9d758" fill-opacity="1"
      d="M0,224L48,234.7C96,245,192,267,288,250.7C384,235,480,181,576,160C672,139,768,149,864,160C960,171,1056,181,1152,160C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <!-- <h1 class="title-cards">
    DEPOIMENTOS
  </h1> -->
  <section>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="card">
          <img src="../img/depoimentos/telma-almamater.jpg" alt="">
          <div class="info">
            <h1>TELMA</h1>
            <h2>Alma Mater</h2>
            <p>“Atendemos mensalmente cerca de 40 crianças e adolescentes em duas unidades, 
              oferecendo moradia, vestuário, educação, alimentação e etc. 
              Além disso realizamos todo atendimento e encaminhamentos necessários as famílias, 
              com o objetivo de superar as fragilidades que levaram ao acolhimento.”
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="../img/depoimentos/danilo-ica.png" alt="">
          <div class="info">
            <h1>DANILO SILVA ALBERTI</h1>
            <h2>Projeto Ica</h2>
            <p>“Buscamos fazer com que a criança, o adolescente e o jovem sejam 
              protagonistas de mudanças sociais em suas comunidades, empoderados por 
              virtudes universais.”
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="../img/depoimentos/fabiana-equipotencia.jpg" alt="">
          <div class="info">
            <h1>FABIANA</h1>
            <h2>Equipotência</h2>
            <p>“Hoje atendemos crianças conveniadas com a prefeitura e com a 
              assistência social, então nós atendemos duas frentes, atendemos 
              crianças do ensino fundamental do primeiro ao quinto ano e, da área social, 
              que são as crianças que vem do CRAS, que nós atendemos as de 6 a 15 anos.”
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="../img/depoimentos/nathalia-laraninha.jpg" alt="">
          <div class="info">
            <h1>NATHALIA L. P. DA SILVA</h1>
            <h2>Lar Aninha</h2>
            <p>“O Lar Aninha é uma creche que atende as necessidades da primeira infância, 
              crianças de 4 meses à 5 anos e 11 meses na cidade de Mogi Mirim.”
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="../img/depoimentos/eloane-maguila.jpg" alt="">
          <div class="info">
            <h1>ELOANE FELIPE</h1>
            <h2>Maguila</h2>
            <p>“O Projeto Maguila tem por finalidade promover atividades de 
              relevância pública e social, direcionadas a crianças e adolescentes 
              de preferência as que se encontram em situação de vulnerabilidade e 
              risco pessoal e/ou social.”
            </p>
          </div>
        </div>
      </div>
      <!-- <div class="item">
        <div class="card">
          <img src="../img/depoimentos/cintia-coroneljoao.png" alt="">
          <div class="info">
            <h1>CINTIA C. O. REZENDE</h1>
            <h2>Coronel João Leite</h2>
            <p>“Atendemos idosos carentes do Município e oferecemos atendimento integral,
              afim de assegurar a garantia de direitos.”
            </p>
          </div>
        </div>
      </div> -->
      <div class="item">
        <div class="card">
          <img src="../img/depoimentos/daiane-educandario.jpg" alt="">
          <div class="info">
            <h1>DAIANE GOMES</h1>
            <h2>Educandário</h2>
            <p>“Tem por missão a promoção de atividades de fins de relevância pública e social.
            Proporcionando condições para seu desenvolvimento físico, psicológico, intelectual,
            social e cultural em complementação a ação da família.”
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="../img/depoimentos/everaldo-laremanuel.jpg" alt="">
          <div class="info">
            <h1>EVERALDO</h1>
            <h2>Lar Emanuel</h2>
            <p>“Oferecemos serviços de proteção especial de alta complexidade a através de 
              acolhimento institucional com características domiciliar a pessoas idosas de 
              ambos os sexos , com diversas necessidades clínicas.”
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer">
    <div class="footer-section">
    <div class="footer-logo">
      <img src="../img/beeongs/sub logo.svg" alt="">
    </div>
    <div class="footer-links">
      <h1>BEEONGS</h1>
      <a href="#">Início</a>
      <a href="forum-index.php">Fórum</a>
      <a href="ongs-page.php">Ongs</a>
    </div>
    <div class="footer-contact">
      <h1>CONTATO</h1>
      <a><i class="fa-brands fa-square-instagram"></i> @beeongs</a>
      <a><i class="fa-solid fa-square-envelope"></i> projetobeeongs@gmail.com</a>
      <a><i class="fa-solid fa-square-phone"></i> +55 19 36839-5830</a>
    </div>
    </div>
    <div class="footer-copyright">
      <p>© 2022 BeeONGS</p>
    </div>
  </div>
  <script src="../js/index.js" defer></script>
  <script>
    document.body.className += ' js-enabled';
  </script>
  <div class="noscript">
    <img src="../img/beeongs/beeongs 2 abelhas.svg" alt="" srcset="">
    <p>Ative o JavaScript para prosseguir.</p>
    <a href="https://www.enable-javascript.com/pt/#chrome" target="_blank">Ajuda</a>
  </div>
</body>
</html>