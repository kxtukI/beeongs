<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/ongs-page.css">
    <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/css/ol.css" type="text/css">
    <script src="../js/header.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js"></script>
    <title>ONGS - BeeONGS</title>
</head>
<body>
    <nav id="navbar">
        <div id="btn-mobile" class="mobile-menu"><i class="fa-solid fa-bars"></i></div>
        <img src="../img/beeongs/sub logo.svg" alt="" class="nav-logo">
        <div class="nav-links">
            <img src="../../img/beeongs/sub logo.svg" alt="" class="nav-logo-menu">
          <a class="underline" href="index.html">INÍCIO</a>
          <a class="underline" href="forum-index.php">FÓRUM</a>
          <a class="underline" href="">ONGS</a>
        </div>
    </nav>
    <div class="search-ongs">
        <div>
        <input type="text" id="form-control" placeholder="Pesquisar" autocomplete="off" maxlength="50"/>
        <i class="fa-solid fa-magnifying-glass search-icon"></i>
        </div>
    </div>
    <div class="ongs-content">
        <div class="items">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Humanas</p>
            </div>
        </div>
    <div class="items">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Humanas</p>
            </div>
        </div>
    <div class="items">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Humanas</p>
            </div>
        </div>
        <div class="items">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Humanas</p>
            </div>
        </div>
        <div class="items">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Humanas</p>
            </div>
        </div>
        <div class="items">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Humanas</p>
            </div>
        </div>
        <div class="items">
            <img src="../img/ongs/projeto-ica.png" alt="">
            <div class="info">
                <h1>Projeto Ica</h1>
                <p>Humanas</p>
            </div>
        </div>
    </div>

    <div class="search-content">
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