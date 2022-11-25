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
    <title>Associação da Pessoa com Deficiência de Mogi Mirim - BeeONGS</title>
</head>
<body>
    <div class="info-ongs">
        <img class="img-ong" src="../../img/ongs/apdmm.svg" alt="">
        <h1>Associação da Pessoa com Deficiência de Mogi Mirim</h1>
        <h2>Categoria</h2>
        <p>Deficientes</p>
        <h2>Fundação</h2>
        <p>1987</p>
        <h2>Localidade <a href="https://www.google.com.br/maps/place/Associação+da+Pessoa+com+Deficiencia+de+Mogi+Mirim/@-22.4283138,-46.9541886,19.5z/data=!4m5!3m4!1s0x94c8f84e675752a3:0x4792f7f6c59b1590!8m2!3d-22.4283938!4d-46.953382" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i></a></h2>
        <p>R. Dr. Ulhôa Cintra, 76 - Centro, Mogi Mirim - SP</p>
        <h2>Sobre</h2>
        <p>APDMM (Associação da Pessoa com Deficiência de Mogi Mirim), é uma entidade que atende pessoas com mobilidade reduzida, deficiência física, neurológica e suas respectivas famílias.</p>
        <h2>Doações</h2>
        <p>Dinheiro, produtos de limpeza, voluntários para ajudar com arrecadação. </p>
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
  center: [-46.95338334862955, -22.428189418609257],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.95338334862955, -22.428189418609257])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>Associação da Pessoa com Deficiência de Mogi Mirim</h1><p class='popup-text'>R. Dr. Ulhôa Cintra, 76 - Centro, Mogi Mirim - SP, 13800-061</p>"))
.addTo(map);
    </script>
</body>
</html>