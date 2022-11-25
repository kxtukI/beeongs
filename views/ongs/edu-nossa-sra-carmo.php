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
    <title>Educandário Nossa Senhora do Carmo - BeeONGS</title>
</head>
<body>
    <div class="info-ongs">
        <img class="img-ong" src="../../img/ongs/edu-nsra-carmo.svg" alt="">
        <h1>Educandário Nossa Senhora do Carmo</h1>
        <h2>Categoria</h2>
        <p>Crianças</p>
        <h2>Fundação</h2>
        <p>1956</p>
        <h2>Localidade <a href="https://www.google.com.br/maps/place/Educandário+Nossa+Senhora+Carmo/@-22.4314391,-46.9605545,17z/data=!4m12!1m6!3m5!1s0x94c8f84bc83834b7:0x34a81f8e6a2e8ef1!2sEducandário+Nossa+Senhora+Carmo!8m2!3d-22.4314441!4d-46.9583605!3m4!1s0x94c8f84bc83834b7:0x34a81f8e6a2e8ef1!8m2!3d-22.4314441!4d-46.9583605" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i></a></h2>
        <p>Rua Marciliano, 120 - Centro - Mogi Mirim</p>
        <h2>Sobre</h2>
        <p>A instituição desde seu surgimento sempre teve cunho assistencial voltado para crianças carentes vindouras do município de Mogi Mirim SP, com intenções de ampliar suas potencialidades, autonomia e favorecer a participação comunitária.</p>
        <h2>Doações</h2>
        <p>Alimentos, brinquedos, roupa, produtos de higiene e dinheiro.</p>
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
  center: [-46.95841414678205, -22.43128541216856],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.95841414678205, -22.43128541216856])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>Educandário Nossa Senhora do Carmo</h1><p class='popup-text'>Rua Marciliano, 120 - Centro - Mogi Mirim</p>"))
.addTo(map);
    </script>
</body>
</html>