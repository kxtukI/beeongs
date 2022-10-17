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
          <h1>APOIO</h1>
          <img src="../img/beecloud-logo.svg" class="beecloud-logo" alt="">
          <a href="https://www.beecloud.com.br" target="_blank" >SAIBA MAIS</a>
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
      <p>A BEEONGS tem como objetivo ajudar as ONGs de Mogi Mirim por meio do nosso site, onde as instituições podem
        divulgar seus serviços e falar sobre suas necessidades para que nossos usuários dispostos a ajudar, possam doar
        de acordo com suas possibilidades.
        Além, de claro, auxiliar as ONGs a terem melhores condições para ajudarem as pessoas que acolhem. </p>
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
          <img src="../img/foto-depoimento1.jpg" alt="">
          <div class="info">
            <h1>CLARA GUEDES</h1>
            <h2>Diretora da ONG</h2>
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Nec, odio faucibus in gravida. Purus nisl,
              pellentesque pretium et pretium etiam enin”
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="../img/foto-depoimento2.jpg" alt="">
          <div class="info">
            <h1>REBECA ALVES</h1>
            <h2>Diretora da ONG</h2>
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Nec, odio faucibus in gravida. Purus nisl,
              pellentesque pretium et pretium etiam enin”
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img src="../img/foto-depoimento3.jpg" alt="">
          <div class="info">
            <h1>MARCOS GUERRA</h1>
            <h2>Diretor da ONG</h2>
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Nec, odio faucibus in gravida. Purus nisl,
              pellentesque pretium et pretium etiam enin”
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <div class="footer"></div> -->
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