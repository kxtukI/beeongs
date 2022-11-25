<?php
session_start();

if(isset($_SESSION["email"]) == true){
    header("Location: ../views/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login-page.css">
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
    <title>Login - BeeONGS</title>
</head>
<body>
<?php echo msg();?>
<div onclick="backhome()" class="back-home">
    <svg width="30" height="30"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z" fill="#F6F8FF"/>
    </svg>
    </div>
    <div class="login">
    <div class="form-login">
    <img src="../img/beeongs/sub logo.svg" class="img-form" alt="">
    <h1 class="title-login">INICIAR SESSÃO</h1>
        <form action="../controllers/login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" maxlength="50" required="required" autocomplete="on">
                <label class="form-control-placeholder" for="email">Endereço de e-mail</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="senha" name="senha" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="senha">Senha</label>
                <!-- <a class="underline" href="forgot-password.php">Esqueceu a senha?</a> -->
            </div>
            <button id="btn-click" class="btn-login">Entrar</button>
            <p class="register-text">Ainda não registrou uma conta? 
            <a class="underline" href="register-page.php">Registre-se.</a>
            </p>
            <!-- <p class="register-text">Quer registrar uma ONG? 
            <a class="underline" href="">Registre a ONG aqui.</a>
            </p> -->
        </form>
    </div>
    </div>
<?php 
function msg(){
    if(isset($_SESSION['error'])){
        $ot = "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'E-mail e/ou senha inválidos!',
            confirmButtonColor: '#E9D758',
          }) 
            </script>";
            return $ot;
    }
    // if(isset($_SESSION['error'])){
    //     $ot = "<script>
    //     Swal.fire({
    //         icon: 'error',
    //         title: 'Erro!',
    //         text: 'E-mail e/ou senha inválidos!',
    //         confirmButtonColor: '#E9D758',
    //       }) 
    //         </script>";
    //         $_SESSION['error'] = null;
    //         return $ot;
    // }
}
?>
    <script type='text/javascript'>
function backhome(){
        location.replace('index.php');
    }
    $(document).on('click','#btn-click',function(e){
			
            var email = $('#email').val();
            var senha = $('#senha').val();
                
            var atpos  = email.indexOf('@');
            var dotpos = email.lastIndexOf('.com');
           
            if(email == ''){
                e.preventDefault();
                Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'Preencha todos os campos para prosseguir!',
      confirmButtonColor: '#E9D758',
    }) 
            }
            else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){ 
                e.preventDefault();
                Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'Digite um e-mail válido',
      confirmButtonColor: '#E9D758',
    })
            }
            else if(senha == ''){ 
                e.preventDefault();
                Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'Preencha todos os campos para prosseguir!',
      confirmButtonColor: '#E9D758',
    })
            }
            else{			
                $.ajax({
                    url: '../controllers/login.php',
                    type: 'post',
                    data : {
                    email: email,
                    senha: senha
            },
                });
            }
        
    });    </script>
</body>
</html>