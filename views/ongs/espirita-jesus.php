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
    <title>Associação Espirita Jesus e Caridade - BeeONGS</title>
</head>
<body>
    <div class="info-ongs">
        <img class="img-ong" src="../../img/ongs/assoc-jesus-caridade.png" alt="">
        <h1>Associação Espirita Jesus e Caridade</h1>
        <h2>Categoria</h2>
        <p>Deficientes</p>
        <h2>Fundação</h2>
        <p>1933</p>
        <h2>Localidade <a href="https://www.google.com.br/maps/place/Associação+Espírita+Jesus+e+Caridade/@-22.4340168,-46.9613848,18z/data=!4m5!3m4!1s0x94c8f82ff74a9c19:0x9dd227bfe6ee6c99!8m2!3d-22.4340718!4d-46.9605535" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i></a></h2>
        <p>Rua Treze de Maio, 140 - Centro, Mogi Mirim - SP</p>
        <h2>Sobre</h2>
        <p>A Associação Espirita Jesus e Caridade tem por fim praticar a caridade, sem interesse algum. Então, esse valor cristão, do qual decorrem muitos outros valores, surgiram as atividades da instituição e o Departamento Lar Espirita Maria de Nazaré, que é um hospital especializado que acolhe pessoas com deficiência neurológica.</p>
        <h2>Doações</h2>
        <p>Roupas, alimentos perecíveis, produtos de limpeza, higiene e dinheiro</p>
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
  center: [-46.96052911609938, -22.4339176320463],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.96052911609938, -22.4339176320463])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>Associação Espirita Jesus e Caridade</h1><p class='popup-text'>Rua Nelson Pateli, n 79 – Parque da Imprensa - Mogi Mirim - SP</p>"))
.addTo(map);
    </script>
</body>
</html>