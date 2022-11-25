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
    <link rel="stylesheet" href="../../css/pag-ong.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
    <title>Projeto ICA - BeeONGS</title>
</head>
<body>
    <div class="info-ongs">
        <img class="img-ong" src="../../img/ongs/projeto-ica.png" alt="">
        <h1>PROJETO ICA</h1>
        <h2>Categoria</h2>
        <p>Crianças e adolescentes</p>
        <h2>Fundação</h2>
        <p>1997</p>
        <h2>Localidade <a href="https://www.google.com.br/maps/place/Av.+Brasília,+350+-+Lot.+Nova+Mogi,+Mogi+Mirim+-+SP,+13800-280/@-22.4417043,-46.9655593,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f99155588cf7:0x44749585c7c08d5!8m2!3d-22.4417093!4d-46.9633653" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i></a></h2>
        <p>Avenida Brasília, n. 350 - Lot. Nova Mogi, Mogi Mirim - SP</p>
        <h2>Sobre</h2>
        <p>O ICA foi fundado, no município de Mogi Mirim, por Sofia Mazon, bem como por inúmeras pessoas da comunidade que envidaram esforços em conjunto para a concretização desse projeto.</p>
        <h2>Doações</h2>
        <p>Roupas, alimentos, utensílios e dinheiro</p>
        <div class="social">
            <a href="https://www.instagram.com/instituicaoica/" target="_blank"><i class="fa-brands fa-square-instagram fa-2x"></i></a>
            <a href="https://pt-br.facebook.com/instituicaoica/" target="_blank"><i class="fa-brands fa-square-facebook fa-2x"></i></a>
            <a href="https://api.whatsapp.com/send/?phone=%2B5519978293252&text&type=phone_number&app_absent=0" target="_blank"><i class="fa-brands fa-square-whatsapp fa-2x"></i></a>
        </div>
    </div>
    <div id="map" class="map"></div>
    <script src="../../js/pag-ong.js" type="text/javascript"></script>
    <script type="text/javascript">
                mapboxgl.accessToken = 'pk.eyJ1Ijoia3h0dWtpIiwiYSI6ImNsNm8yNnN1NjA2am8zcHF1NmFpdm9lMGoifQ.R2xbOwaegs8TLqVFoykstw';
      const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/kxtuki/cl6o11we3006714lsga6cwt62',
  center: [-46.96366736027583, -22.44130587264838],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.96366736027583, -22.44130587264838])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>Projeto Ica</h1><p class='popup-text'>Avenida Brasília, n. 350 - Lot. Nova Mogi, Mogi Mirim - SP</p>"))
.addTo(map);
    </script>
</body>
</html>