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
    <title>Instituto Coronel João Leite - BeeONGS</title>
</head>
<body>
    <div class="info-ongs">
        <img class="img-ong" src="../../img/ongs/inst-coronel-leite.png" alt="">
        <h1>Instituto Coronel João Leite</h1>
        <h2>Categoria</h2>
        <p>Idosos</p>
        <h2>Fundação</h2>
        <p>1921</p>
        <h2>Localidade <a href="https://www.google.com/maps/place/Instituto+Coronel+João+Leite/@-22.4335345,-46.9648396,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f835b9f12af3:0x2db70f05cd0997e3!8m2!3d-22.4336871!4d-46.9625523" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i></a></h2>
        <p>Rua Marciliano, 610 - Mogi Mirim - SP</p>
        <h2>Sobre</h2>
        <p>Inicialmente o objetivo na instituição era fornecer acomodações precisas, moradia, alimentação, vestuário e tratamento às pessoas pobres de Mogi Mirim, que não podiam prover sua subsistência e que não tinham abrigo. No evoluir de sua história o ICJL focou seu atendimento nas pessoas idosas, do município de Mogi Mirim. O Instituto Coronel João Leite, na atualidade, vem direcionando seu atendimento a 22 idosos do município, de ambos os sexos, em regime de acolhimento institucional, para idosos com 60 ou mais anos, independentes e/ou com diversos graus de dependência.</p>
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
  center: [-46.9625275854167, -22.433549402083692],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.9625275854167, -22.433549402083692])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>Instituto Coronel João Leite</h1><p class='popup-text'>Rua Marciliano, 610 - Mogi Mirim - SP</p>"))
.addTo(map);
    </script>
</body>
</html>