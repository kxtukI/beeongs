<?php 
include("../../controllers/header-ongs.php");
include("../../controllers/connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
    <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../css/pag-ong.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
    <title>Maguila - BeeONGS</title>
</head>
<body>
    <div class="info-ongs">
        <img class="img-ong" src="../../img/ongs/maguila.jpg" alt="">
        <h1>Maguila</h1>
        <h2>Categoria</h2>
        <p>Crianças e adolescentes</p>
        <h2>Fundação</h2>
        <p>2007</p>
        <h2>Localidade <a href="https://www.google.com/maps/place/Projeto+Maguila/@-22.4375102,-46.9204459,15z/data=!4m2!3m1!1s0x0:0x855443185c6d3bec?sa=X&ved=2ahUKEwicrJT1irb7AhVYr5UCHZ0iC_UQ_BJ6BAhFEAg" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i></a></h2>
        <p>Rua José Rezende da Mota, n 895 - Pq. das Laranjeiras - Mogi Mirim - SP </p>
        <h2>Sobre</h2>
        <p>A Associação Jesuíno Marcos Maguila, ou popularmente chamada de Projeto Maguila, é um projeto social que atende crianças e adolescentes, fora do horário escolar, com atividades de arte (circo, dança, música, teatro, esporte e lazer), educação social (direitos humanos e socioassistenciais, libras, valores universais, meio ambiente), recreação e lazer e artes marciais</p>
        <h2>Doações</h2>
        <p>Roupas, alimentos perecíveis, produtos de limpeza, produtos de higiene e dinheiro</p>
        <div class="social">
            <a href="" target="_blank"><i class="fa-brands fa-square-instagram fa-2x"></i></a>
            <a href="" target="_blank"><i class="fa-brands fa-square-facebook fa-2x"></i></a>
            <a href="" target="_blank"><i class="fa-brands fa-square-whatsapp fa-2x"></i></a>
        </div>
    </div>
    <div id="map" class="map"></div>
    <script src="../../js/pag-ong.js" type="text/javascript"></script>
    <script type="text/javascript">
        mapboxgl.accessToken = 'pk.eyJ1Ijoia3h0dWtpIiwiYSI6ImNsNm8yNnN1NjA2am8zcHF1NmFpdm9lMGoifQ.R2xbOwaegs8TLqVFoykstw';
      const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/kxtuki/cl6o11we3006714lsga6cwt62',
  center: [-46.92046736027587, -22.437321769192298],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.92046736027587, -22.437321769192298])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>Maguila</h1><p class='popup-text'>Rua José Rezende da Mota, n 895 - Pq. das Laranjeiras - Mogi Mirim - SP </p>"))
.addTo(map);
    </script>
</body>
</html>