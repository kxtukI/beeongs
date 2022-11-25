<?php 
include("../controllers/connect.php");
include("../controllers/check-login.php");
include("../controllers/header.php");
require("../controllers/posts.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/header.js"></script>
    <link rel="stylesheet" href="../css/forum-index.css">
    <script src="../js/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="../js/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
    <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
    <title>Forum - BeeONGS</title>
</head>
<body>
  <svg onclick="scrollToTop()" id="btn-top" width="90" height="90" viewBox="0 0 90 90" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
      d="M90 45C90 33.0653 85.2589 21.6193 76.8198 13.1802C68.3807 4.74106 56.9347 0 45 0C33.0653 0 21.6193 4.74106 13.1802 13.1802C4.74106 21.6193 0 33.0653 0 45C0 56.9347 4.74106 68.3807 13.1802 76.8198C21.6193 85.2589 33.0653 90 45 90C56.9347 90 68.3807 85.2589 76.8198 76.8198C85.2589 68.3807 90 56.9347 90 45V45ZM47.8125 64.6875C47.8125 65.4334 47.5162 66.1488 46.9887 66.6762C46.4613 67.2037 45.7459 67.5 45 67.5C44.2541 67.5 43.5387 67.2037 43.0113 66.6762C42.4838 66.1488 42.1875 65.4334 42.1875 64.6875V32.1019L30.1163 44.1788C29.5881 44.7069 28.8719 45.0036 28.125 45.0036C27.3781 45.0036 26.6619 44.7069 26.1337 44.1788C25.6056 43.6506 25.3089 42.9344 25.3089 42.1875C25.3089 41.4406 25.6056 40.7244 26.1337 40.1962L43.0087 23.3212C43.27 23.0593 43.5804 22.8515 43.9221 22.7097C44.2638 22.568 44.6301 22.495 45 22.495C45.3699 22.495 45.7362 22.568 46.0779 22.7097C46.4196 22.8515 46.73 23.0593 46.9913 23.3212L63.8663 40.1962C64.3944 40.7244 64.6911 41.4406 64.6911 42.1875C64.6911 42.9344 64.3944 43.6506 63.8663 44.1788C63.3381 44.7069 62.6219 45.0036 61.875 45.0036C61.1281 45.0036 60.4119 44.7069 59.8837 44.1788L47.8125 32.1019V64.6875Z"
      fill="#1F1300" />
  </svg>
<div class="main-section">
<div id="form-modal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <h1>PUBLICAR</h1>
    <form action="../controllers/posts.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="form-control-placeholder">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" maxlength="50" required="required" autocomplete="off">
      </div>
      <div class="form-group">
        <label class="form-control-placeholder">Descrição</label>
        <textarea rows="5" wrap="soft" maxlength="255" id="desc" name="desc"></textarea>
      </div>
      <div id="input-img"></div>
      <div class="modal-footer">
        <div class="modal-optc">
          <div>
          <input type="file" id="imagem" name="imagem" onchange="return fileValidation()">
          <i class="fa-regular fa-image fa-lg input-icon"></i>
          </div>
        </div>
        <button id="btn-form">Enviar</button>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">

  function fileValidation(){
    var fileInput = document.getElementById('imagem');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
      Swal.fire({
        icon: 'error',
        title: 'Erro!',
        text: 'Insira uma imagem válida!',
        confirmButtonColor: '#E9D758',
 });    fileInput.value = '';
    }else{
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('input-img').innerHTML = '<img src="'+e.target.result+'" id="input-img"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
  
$(document).on('click','#btn-form',function(e){
  var modal = document.getElementById("form-modal");
  var titulo = $('#titulo').val();
  var desc = $('#desc').val();
  var img = $('#imagem')[0].files;
    if(titulo != "" && desc != "" && img != ""){
      $.ajax({
				url: '../controllers/posts.php',
				type: 'post',
				data : {
		        titulo: titulo,
            desc: desc,
            img: img
	    },
			});
      modal.style.display = "block";
    }
      else if(titulo != "" && desc != ""){
      $.ajax({
				url: '../controllers/posts.php',
				type: 'post',
				data : {
		        titulo: titulo,
            desc: desc
	    },
			});
      modal.style.display = "block";
    } else {
      e.preventDefault();
      Swal.fire({
  icon: 'error',
  title: 'Erro!',
  text: 'Preencha todos os campos!',
  confirmButtonColor: '#E9D758',
})
    } 
}) 

var modal = document.getElementById("form-modal");
var btn = document.getElementById("modal");
var span = document.getElementsByClassName("close-btn")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(e) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  function scrollToTop (){
    window.scrollTo(0,0);
  }

  const btnTop = document.getElementById("btn-top") 
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 200) {
      btnTop.style.display = "block";
    } else {
      btnTop.style.display = "none";
    }
  });
</script>
</body>
</html>