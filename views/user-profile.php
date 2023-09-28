<?php 
include("../controllers/connect.php");
require("../controllers/header.php");
include("../controllers/user.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <script src="../js/header.js"></script>
    <script src="../js/bootstrap.js" defer ></script>
    <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
    <script src="../js/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <title><?php echo $nome; ?> - BeeONGS</title>
</head>
<body>
  <svg onclick="scrollToTop()" id="btn-top" width="90" height="90" viewBox="0 0 90 90" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <path
      d="M90 45C90 33.0653 85.2589 21.6193 76.8198 13.1802C68.3807 4.74106 56.9347 0 45 0C33.0653 0 21.6193 4.74106 13.1802 13.1802C4.74106 21.6193 0 33.0653 0 45C0 56.9347 4.74106 68.3807 13.1802 76.8198C21.6193 85.2589 33.0653 90 45 90C56.9347 90 68.3807 85.2589 76.8198 76.8198C85.2589 68.3807 90 56.9347 90 45V45ZM47.8125 64.6875C47.8125 65.4334 47.5162 66.1488 46.9887 66.6762C46.4613 67.2037 45.7459 67.5 45 67.5C44.2541 67.5 43.5387 67.2037 43.0113 66.6762C42.4838 66.1488 42.1875 65.4334 42.1875 64.6875V32.1019L30.1163 44.1788C29.5881 44.7069 28.8719 45.0036 28.125 45.0036C27.3781 45.0036 26.6619 44.7069 26.1337 44.1788C25.6056 43.6506 25.3089 42.9344 25.3089 42.1875C25.3089 41.4406 25.6056 40.7244 26.1337 40.1962L43.0087 23.3212C43.27 23.0593 43.5804 22.8515 43.9221 22.7097C44.2638 22.568 44.6301 22.495 45 22.495C45.3699 22.495 45.7362 22.568 46.0779 22.7097C46.4196 22.8515 46.73 23.0593 46.9913 23.3212L63.8663 40.1962C64.3944 40.7244 64.6911 41.4406 64.6911 42.1875C64.6911 42.9344 64.3944 43.6506 63.8663 44.1788C63.3381 44.7069 62.6219 45.0036 61.875 45.0036C61.1281 45.0036 60.4119 44.7069 59.8837 44.1788L47.8125 32.1019V64.6875Z"
      fill="#1F1300" />
  </svg>
<?php echo msgError(); echo msgSucess();?>
<div id="form-modal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <h1>Editar Perfil</h1>
    <form id="form" action="../controllers/user.php" method="post" enctype="multipart/form-data">
            <div class="icon-config">
              <img id="img-preview" src="<?php echo $imgUser ?>" alt="">
              <i class="fa-solid fa-camera fa-2xl"></i>
              <input type="file" id="imagem" name="imagem" onchange="return fileValidation()">
            </div>
            <div id="edit-aboutme">
              <p class="edit-text"><i class="fa-solid fa-user"></i> Adicionar/Alterar Sobre Mim</p>
            </div>
            <div id="form-aboutme" class="form-group">
               <textarea type="text" class="form-control" rows="5" wrap="soft" maxlength="255" id="aboutme" name="aboutme"
                    placeholder="<?php echo $sobreMim; ?>"></textarea>
                <label class="form-control-placeholder" for="aboutme"> Adicionar/Alterar Sobre Mim</label>
                <button id="btn-aboutme"><i class="fa-regular fa-pen-to-square"></i> Atualizar</button>
            </div>
            <div id="edit-email">
              <p class="edit-text"><i class="fa-solid fa-envelope"></i> Alterar E-mail</p>
            </div>
            <div id="form-email" class="form-group">
                <input type="email" class="form-control" id="email" name="email" autocomplete="off"
                    placeholder="<?php echo $_SESSION['email']; ?>">
                <label class="form-control-placeholder" for="email">Alterar E-mail</label>
                <button id="btn-email"><i class="fa-regular fa-pen-to-square"></i> Atualizar</button>
            </div>
            <div id="edit-senha">
              <p class="edit-text"><i class="fa-solid fa-key"></i> Alterar Senha</p>
            </div>
            <div id="form-senha" class="form-group">
                <input type="password" class="form-control" id="senha" name="senha" autocomplete="off" 
                    placeholder="•••••••••••••">
                <label class="form-control-placeholder" for="senha">Alterar Senha</label>
                <button id="btn-password"><i class="fa-regular fa-pen-to-square"></i> Atualizar</button>
            </div>
            <div id="edit-tel">
              <p class="edit-text"><i class="fa-solid fa-phone"></i> Adicionar/Alterar Telefone</p>
            </div>
            <div id="form-tel" class="form-group">
                <input type="text" class="form-control" id="tel" name="tel" maxlength="11" autocomplete="off"
                    placeholder="<?php echo '('.substr($tel, -11, -9).') '.substr($tel, -9, -4).'-'.substr($tel, -4) ?>">
                <label class="form-control-placeholder" for="tel">Adicionar/Alterar Telefone</label>
                <button id="btn-tel"><i class="fa-regular fa-pen-to-square"></i> Atualizar</button>
            </div>     
              <span id="delete"><i class="fa-solid fa-trash"></i> Deletar a minha conta</span>
      <!-- <div class="modal-footer">
        <button id="btn-form">Enviar</button>
      </div>  -->
    </form>
  </div>
</div>
<div class="user-section">
<div class="header-info">
    <div class="user-info">
        <img class="user-icon" src="<?php echo $imgUser; ?>" alt="">
        <div class="user-details">
        <h1 class="username"><?php echo $nome; ?></h1>
        <p class="date-user">Criado dia <?php echo $dataCadastro->format('d/m/Y'); ?></p>
        </div>
    </div>
    <div id="btn-settings">
    <i class="fa-solid fa-pencil"></i>
        Editar Perfil  
    </div>
</div>
<div id="side-info">
  <h1>Informações</h1>
  <h2>Nome</h2>
  <p><?php echo $nome ?></p>
  <?php if(isset($sobreMim)){?>
  <h2>Sobre Mim</h2>
  <p><?php echo $sobreMim ?>&nbsp;</p>
  <?php } ?>
  <h2>Data de Ingresso</h2>
  <p><?php echo $dataCadastro->format('d/m/Y') ?></p>
  <h2>E-mail</h2>
  <p><?php echo $email ?></p>
  <?php if(isset($tel)){?>
  <h2>Telefone</h2>
  <p><?php echo '('.substr($tel, -11, -9).') '.substr($tel, -9, -4).'-'.substr($tel, -4) ?>&nbsp;</p>
  <?php } ?>
</div>
<?php if($query > 0){
    while($row = $result = $stmt -> fetch(PDO::FETCH_ASSOC)){
        $nome = $row['nome'];
        $titulo = $row['titulo'];
        $desc = $row['descricao'];
        $imgPost = $row['imgPost'];
        $imgUser = $row['imgUser'];
        $datapost = new DateTime($row['datapost']);
    if($imgPost != ''){ ?>
<div class="user-posts">
<div class="post-section">
<div class="post-header">
  <img src="<?php echo $imgUser;?>" alt="" class="user-icon-post">
    <div class="user-info-post">
      <h1 class="username-post"><?php echo $nome;?></h1>
      <p class="date-post"><?php echo $datapost->format('d/m/Y • H:i');?></p>
      </div>
    </div>
<div class="post-info">
  <h1 class="post-title"><?php echo $titulo;?></h1>
  <p class="post-desc"><?php echo $desc;?></p>
  <img class="post-img" src="<?php echo $imgPost;?>">
</div>
<?php ?> </div> <?php } else { ?>
  <div class="post-section">
<div class="post-header">
  <img src="<?php echo $imgUser;?>" alt="" class="user-icon-post">
    <div class="user-info-post">
      <h1 class="username-post"><?php echo $nome;?></h1>
      <p class="date-post"><?php echo $datapost->format('d/m/Y • H:i');?></p>
      </div>
    </div>
<div class="post-info">
  <h1 class="post-title"><?php echo $titulo;?></h1>
  <p class="post-desc"><?php echo $desc;?></p>
</div>
</div>
<?php }}} else { ?>
  <div class="no-publish">
    <a href="forum-index.php">
    <i class="fa-solid fa-comment-dots fa-3x"></i>
    <h1>Parece que você ainda não postou nada...</h1>
    </a>
  </div>
<?php } ?>
</div>
</div>
</div>
<?php 
function msgError(){
    if(isset($_SESSION['error'])){
        $ot = "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'Esse e-mail já está cadastrado.',
            confirmButtonColor: '#E9D758',
          }) 
            </script>";
            $_SESSION['error'] = null;
            return $ot;
    }
}

function msgSucess(){
  if(isset($_SESSION['sucess'])){
      $ot = "<script>
      Swal.fire({
          icon: 'success',
          title: 'Tudo certo!',
          text: 'As mudanças foram salvas!',
          timer: 1000,
          showConfirmButton: false,
        }) 
          </script>";
          $_SESSION['sucess'] = null;
          return $ot;
  }
}

?>
<script type="text/javascript">
document.getElementById("tel").onkeypress = function(e) {
         let chr = String.fromCharCode(e.which);
         if ("1234567890".indexOf(chr) < 0)
           return false;
       };

       $(document).on('click','#btn-aboutme',function(e){
        var aboutme = $('#aboutme').val();    
        document.getElementById("form").submit();
});

$(document).on('click','#btn-email',function(e){
			
      var email = $('#email').val();       
      var atpos  = email.indexOf('@');
      var dotpos = email.lastIndexOf('.com');
     
      if (email == ""){
    e.preventDefault();
        Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'Preencha para prosseguir!',
      confirmButtonColor: '#E9D758',
    });
  }else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ 
        e.preventDefault();
        Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'Digite um e-mail válido',
      confirmButtonColor: '#E9D758',
    })
  }else{
    document.getElementById("form").submit();
  }
});

$(document).on('click','#btn-password',function(e){
			
      var senha = $('#senha').val();       
     
      if(senha == ""){ 
        e.preventDefault();
        Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'Preencha para prosseguir',
      confirmButtonColor: '#E9D758',
    });
  }else{
    document.getElementById("form").submit();
  }
});

$(document).on('click','#btn-tel',function(e){
			
      var tel = $('#tel').val();       
     
      if (tel.length < 11){
    e.preventDefault();
        Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'O número deve conter ao menos 11 dígitos!',
      confirmButtonColor: '#E9D758',
    });
  }else if(tel == ""){
    e.preventDefault();
        Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'Preencha para prosseguir!',
      confirmButtonColor: '#E9D758',
    });
  }else{
    document.getElementById("form").submit();
  }
});

$(document).on('click','#delete',function(e){
  e.preventDefault();
  Swal.fire({
  title: 'Você tem certeza?',
  text: "Você realmente deseja DELETAR A SUA CONTA?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#1f130075',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Deletar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    window.location="../controllers/delete.php";
  }
})})

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
      document.getElementById("form").submit();
}}

var modal = document.getElementById("form-modal");
var btn = document.getElementById("btn-settings");
var span = document.getElementsByClassName("close-btn")[0];

btn.onclick = function() {
  modal.style.display = "flex";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(e) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var editAboutMe = document.getElementById("edit-aboutme");
var formAboutMe = document.getElementById("form-aboutme");
editAboutMe.onclick = function(){
if(formAboutMe.style.display == 'block')
      formAboutMe.style.display = 'none';
      else
      formAboutMe.style.display = 'block';
}

var editEmail = document.getElementById("edit-email");
var formEmail = document.getElementById("form-email");
editEmail.onclick = function(){
if(formEmail.style.display == 'block')
      formEmail.style.display = 'none';
      else
      formEmail.style.display = 'block';
}

var editSenha = document.getElementById("edit-senha");
var formSenha = document.getElementById("form-senha");
editSenha.onclick = function(){
if(formSenha.style.display == 'block')
formSenha.style.display = 'none';
      else
      formSenha.style.display = 'block';
}

var editTel = document.getElementById("edit-tel");
var formTel = document.getElementById("form-tel");
editTel.onclick = function(){
if(formTel.style.display == 'block')
      formTel.style.display = 'none';
      else
      formTel.style.display = 'block';
}

var sideFix = $('#side-info').offset().top;
$(window).scroll(function() {
    var width = $(window).width();
    var ScrollY = $(window).scrollTop();
    if (width <= 1024){
      if (ScrollY >= sideFix) {
        $('#side-info').css({
            position: 'relative',
        });
    }
    } else {
      if (ScrollY >= sideFix) {
        $('#side-info').css({
            position: 'fixed',
            top: '3.75vw'
        });
    } else {
        $('#side-info').css({
            position: 'absolute',
            top: '16.5vw'
        });
    }
    }
});

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


