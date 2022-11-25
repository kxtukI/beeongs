<?php
include_once("../controllers/connect.php");
include("../controllers/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/ongs-page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/css/ol.css" type="text/css">
    <script src="../js/header.js"></script>
    <script src="../js/jquery.min.js"></script>
    <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
    <title>ONGS - BeeONGS</title>
</head>
<body>
    <div class="search-ongs">
        <div>
        <!-- <i id="filter-icon" class="fa-solid fa-filter"></i> -->
        <input type="text" id="form-control" placeholder="Pesquisar" autocomplete="off" maxlength="50"/>
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
        </div>
    </div>
    <div class="ongs-content">
    <div class="items" onclick="window.location='ongs/projeto-ica.php'">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Crianças e Adolescentes</p>
            </div>
        </div>
    <div class="items" onclick="window.location='ongs/alma-mater.php'">
            <img src="../img/ongs/alma-mater.jpg" alt="">
            <div class="info">
                <h1>Alma Mater</h1>
                <p>Crianças e Adolescentes</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/casa-emanuel.php'">
            <img src="../img/ongs/casa-emanuel.jpg" alt="">
            <div class="info">
                <h1>Casa de Repouso Emanuel</h1>
                <p>Idosos</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/lar-aninha.php'">
            <img src="../img/ongs/lar-aninha.png" alt="">
            <div class="info">
                <h1>Lar Aninha</h1>
                <p>Crianças</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/espirita-jesus.php'">
            <img src="../img/ongs/assoc-jesus-caridade.png" alt="">
            <div class="info">
                <h1>Assoc. Esp. Jesus e Caridade</h1>
                <p>Deficientes</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/equipotencia.php'">
            <img src="../img/ongs/equipotencia.svg" alt="">
            <div class="info">
                <h1>Equipotência</h1>
                <p>Crianças e Adolescentes</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/edu-nossa-sra-carmo.php'">
            <img src="../img/ongs/edu-nsra-carmo.svg" alt="">
            <div class="info">
                <h1>Educ. N. Sra. do Carmo</h1>
                <p>Crianças</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/inst-coronel-leite.php'">
            <img src="../img/ongs/inst-coronel-leite.png" alt="">
            <div class="info">
                <h1>Inst. Coronel João Leite</h1>
                <p>Idosos</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/maguila.php'">
            <img src="../img/ongs/maguila.jpg" alt="">
            <div class="info">
                <h1>Maguila</h1>
                <p>Crianças e Adolescentes</p>
            </div>
        </div>
        <div class="items" onclick="window.location='ongs/apdmm.php'">
            <img src="../img/ongs/apdmm.svg" alt="">
            <div class="info">
                <h1>Apdmm</h1>
                <p>Deficientes</p>
            </div>
        </div>
    </div>
    <div class="search-content">
    </div>
    </div>
    <script type="text/javascript"> 

        var ongsContent = document.querySelectorAll(".ongs-content");
        var formControl = document.getElementById("form-control").onkeyup=function(){ 
            var inputText = $('#form-control').val();   
            if(formControl != ""){
                $(".ongs-content").css("display", "none");
                $.ajax({
                url: '../controllers/ongs-search.php',
                type: 'post',
                data : {
                inputText: inputText
},
        success:function(data){
                $(".search-content").html(data);
        }
});
            } else {
                $(".search-content").css("display", "none");
            }
        };
    </script>
</body>
</html>