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
    <title>Casa de Repouso Emanuel - BeeONGS</title>
</head>
<body>
    <div class="info-ongs">
        <img class="img-ong" src="../../img/ongs/casa-emanuel.jpg" alt="">
        <h1>CASA DE REPOUSO EMANUEL</h1>
        <h2>Categoria</h2>
        <p>Idosos</p>
        <h2>Fundação</h2>
        <p>2001</p>
        <h2>Localidade <a href="https://www.google.com.br/maps/place/Centro+de+Apoio+para+Vida+Casa+de+Repouso+Emanuel/@-22.3999202,-46.9525639,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f87bc7a6d8e3:0x8edd82ea0852daba!8m2!3d-22.3999259!4d-46.9480829" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square fa-2xs"></i></a></h2>
        <p>Rua Antonio Pio Brito, 410 jd. Guaçu-Mirim - Mogi Mirim - SP</p>
        <h2>Sobre</h2>
        <p>É uma entidade filantrópica, sem fins lucrativos, que possui inscrição nos órgãos públicos, é conhecida como utilidade pública nas esferas federal, estadual e municipal e tem certificado SEBAS, cuida de idosos vulneráveis acima de 60 anos, com diversos graus de dependências, de forma contínua, há mais de 20 anos.</p>
        <h2>Doações</h2>
        <p>Gêneros alimenticios, produtos de limpeza, produtos de higiene pessoal e dinheiro</p>
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
  center: [-46.94809636438543, -22.399728819093145 ],
  zoom: 16
});
const marker = new mapboxgl.Marker({
    color: "#E64848",
})
.setLngLat([-46.94809636438543, -22.399728819093145])
.setPopup(new mapboxgl.Popup().setHTML("<h1 class='popup-title'>Casa de Repouso Emanuel</h1><p class='popup-text'>Rua Antonio Pio Brito, 410 jd. Guaçu-Mirim - Mogi Mirim-SP</p>"))
.addTo(map);
    </script>
</body>
</html>