<?php include_once("../controllers/connect.php");
include("../controllers/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
        <link rel="stylesheet" href="../css/index-remake.css">
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
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/css/ol.css"
            type="text/css">
        <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.15.1/build/ol.js">
        </script>
        <title>Início - BeeONGS</title>
    </head>
    <body><svg onclick="scrollToTop()" id="btn-top" width="90" height="90" viewBox="0 0 90 90" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M90 45C90 33.0653 85.2589 21.6193 76.8198 13.1802C68.3807 4.74106 56.9347 0 45 0C33.0653 0 21.6193 4.74106 13.1802 13.1802C4.74106 21.6193 0 33.0653 0 45C0 56.9347 4.74106 68.3807 13.1802 76.8198C21.6193 85.2589 33.0653 90 45 90C56.9347 90 68.3807 85.2589 76.8198 76.8198C85.2589 68.3807 90 56.9347 90 45V45ZM47.8125 64.6875C47.8125 65.4334 47.5162 66.1488 46.9887 66.6762C46.4613 67.2037 45.7459 67.5 45 67.5C44.2541 67.5 43.5387 67.2037 43.0113 66.6762C42.4838 66.1488 42.1875 65.4334 42.1875 64.6875V32.1019L30.1163 44.1788C29.5881 44.7069 28.8719 45.0036 28.125 45.0036C27.3781 45.0036 26.6619 44.7069 26.1337 44.1788C25.6056 43.6506 25.3089 42.9344 25.3089 42.1875C25.3089 41.4406 25.6056 40.7244 26.1337 40.1962L43.0087 23.3212C43.27 23.0593 43.5804 22.8515 43.9221 22.7097C44.2638 22.568 44.6301 22.495 45 22.495C45.3699 22.495 45.7362 22.568 46.0779 22.7097C46.4196 22.8515 46.73 23.0593 46.9913 23.3212L63.8663 40.1962C64.3944 40.7244 64.6911 41.4406 64.6911 42.1875C64.6911 42.9344 64.3944 43.6506 63.8663 44.1788C63.3381 44.7069 62.6219 45.0036 61.875 45.0036C61.1281 45.0036 60.4119 44.7069 59.8837 44.1788L47.8125 32.1019V64.6875Z"
                fill="#1F1300" /></svg>
        <main>
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000"></div>
                    <div class="carousel-item" data-bs-interval="5000"><p>a</p></div>
                    <div class="carousel-item" data-bs-interval="5000"><p>a</p></div>
                </div>
            </div>
        </main>
        <section class="about-section">
            <div class="about_us">
                <h2>QUEM SOMOS?</h2>
                <p>A BEEONGs tem como objetivo ajudar as ONGs de Mogi Mirim por meio do nosso site, onde as instituições podem divulgar
                    seus serviçoes e falar sobre suas necessidades para que os usuários dispostos a ajudar, possam doar de acordo com 
                    as suas possibilidades. Além, de claro, auxiliar as ONGs a terem melhores condições para ajudarem as pessoas que acolhem. 
                </p>
            </div>
            <div class="about_resourses">
                <div>
                    <h2>Fórum</h2>
                    <p>Aqui em nosso site você encontra o nosso fórum, onde o objetivo dele é ser comunicativo, lá se pode ver as publicações
                        das ONGs e dos usuários cadastrados.
                    </p>
                    <div class="about_resourses__link" onclick="window.location='forum-index.php'">
                        <p>Acesse o Fórum</p>
                        <i class="fa-solid fa-angles-right fa-xl"></i>
                    </div>
                </div>
                <div>
                    <h2>ONGs</h2>
                    <p>Para facilidade de acesso as ONGs, temos uma página em que todas as ONGs são exibidas e podem ser facilmente acessadas.</p>
                    <div class="about_resourses__link" onclick="window.location='forum-index.php'">
                        <p>Explore as ONGs</p>
                        <i class="fa-solid fa-angles-right fa-xl"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="ongs-section">
            <div class="ongs_description">
                <h2>O QUE É UMA ONG?</h2>
                <p>As ONGs podem ser definidas como organizações sem fins lucrativos, que exercem atividades que auxiliam os governos, desempenhando um papel social importante ao oferecer projetos e serviços culturais, educativos, de saúde, qualidade de vida, capacitação e contribuição à sociedade.</p>
            </div>
            <div class="owl-carousel owl-theme">
                <!-- <div class="item">
                  <div class="card">
                    <img src="https://opopularmm.com.br/wp-content/uploads/2020/12/ICA-Fachada.jpg" alt="" class="card_background">
                    <img src="../img/ongs/projeto-ica.png" alt="" class="card_icon">
                  </div>
                </div> -->
                <div class="card">
                    <img src="https://opopularmm.com.br/wp-content/uploads/2020/12/ICA-Fachada.jpg" alt="">
                    <div class="card-content">
                      <h2>Projeto ICA</h2>
                      <p>O ICA foi fundado, no município de Mogi Mirim, por Sofia Mazon, bem como por inúmeras pessoas da comunidade que 
                        envidaram esforços em conjunto para a concretização desse projeto.</p>
                      <a href="ongs/projeto-ica.php"> Saiba mais 
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                      </a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://opopularmm.com.br/wp-content/uploads/2015/01/maguila.jpg" alt="">
                    <div class="card-content">
                      <h2>Projeto Maguila</h2>
                      <p>O Projeto Maguila, é um projeto social que atende crianças e adolescentes, fora do horário escolar, com atividades de 
                        arte, educação social, recreação e lazer e artes marciais</p>
                      <a href="ongs/maguila.php"> Saiba mais 
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                      </a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://ocompacto.com/wp-content/uploads/2023/08/DSCN8358-1024x768.jpg" alt="">
                    <div class="card-content">
                      <h2>Instituto C. João Leite</h2>
                      <p>O Instituto Coronel João Leite, direciona seu atendimento a 22 idosos do município, de ambos os sexos, em regime de 
                        acolhimento institucional, para idosos com 60 ou mais anos, independentes e/ou com diversos graus de dependência.</p>
                      <a href="ongs/inst-coronel-leite.php"> Saiba mais 
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                      </a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://casaderepousoemanuel.com.br/wp-content/uploads/2022/01/08.jpg" alt="">
                    <div class="card-content">
                      <h2>Casa de Repouso Emanuel</h2>
                      <p>É uma entidade filantrópica conhecida como utilidade pública nas esferas federal, estadual e municipal e tem certificado 
                        SEBAS, cuida de idosos vulneráveis acima de 60 anos, com diversos graus de dependências, de forma contínua, há mais de 20 anos.</p>
                      <a href="ongs/casa-emanuel.php"> Saiba mais 
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                      </a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://opopularmm.com.br/wp-content/uploads/2021/10/14.jpg" alt="">
                    <div class="card-content">
                      <h2>Associação Espirita Jesus e Caridade</h2>
                      <p>A Associação Espirita Jesus e Caridade tem por fim praticar a caridade. Então, assim, surgiram as atividades da 
                        instituição e o Departamento Lar Espirita Maria de Nazaré, que é um hospital especializado que acolhe pessoas com deficiência neurológica.</p>
                      <a href="ongs/espirita-jesus.php"> Saiba mais 
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                      </a>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <img src="../img/beeongs/sub logo.svg" alt="">
            <div class="footer-elements">
                <span class="material-symbols-outlined">
                    mail
                </span>
                <span class="material-symbols-outlined">
                    call
                </span>
                
            </div>
        </footer>
<script src="../js/index.js" defer></script>
    </body>
    </html>