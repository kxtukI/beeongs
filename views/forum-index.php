<?php 
include("../controllers/connect.php");
include("../controllers/check-login.php");
require("../controllers/header.php");
require("../controllers/post.php")
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
    <title>Forum - BeeONGS</title>
</head>
<body>
<div class="main-section">
<div id="form-modal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <h1>PUBLICAR</h1>
    <form action="../controllers/post.php" method="post">
      <div class="form-group">
        <label class="form-control-placeholder">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" maxlength="50" required="required" autocomplete="off">
      </div>
      <div class="form-group">
        <label class="form-control-placeholder">Descrição</label>
        <textarea rows="5" wrap="soft" maxlength="255" id="desc" name="desc"></textarea>
      </div>
      <div class="modal-footer">
        <div class="modal-optc">
          <i class="fa-regular fa-image fa-lg"></i>
        </div>
        <button id="btn-form">Enviar</button>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
$(document).on('click','#btn-form',function(e){
  var modal = document.getElementById("form-modal");
  var titulo = $('#titulo').val();
  var desc = $('#desc').val();
    if(titulo != "" && desc != ""){
      $.ajax({
				url: '../controllers/post.php',
				type: 'post',
				data : {
		        titulo: titulo,
            desc: desc,
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
</script>
</body>
</html>