<?php
	session_start();
	if(isset($_SESSION["email"]) == true) {
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
    <link rel="stylesheet" href="../css/register-page.css">
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <link rel="shortcut icon" href="../img/beeongs/sub logo.svg" type="image/x-icon">
    <title>Cadastre-se - ONGS</title>
</head>
<body>
<?php echo msg(); ?>
<div onclick="backhome()" class="back-home">
    <svg width="30" height="30"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M109.3 288L480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288z" fill="#F6F8FF"/>
    </svg>
    </div>
    <div class="signup">
        <div class="form-signup"> 
            <img src="../img/beeongs/sub logo.svg" class="img-form" alt="">
    <h1 class="title-signup">REGISTRAR</h1>
        <form action="../controllers/register.php" method="post">
            <div class="form-group">
                <input type="name" class="form-control" name="nome" id="nome" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="nome">Nome Completo</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" maxlength="50" required="required" autocomplete="on">
                <label class="form-control-placeholder" for="email">Endereço de e-mail</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="cpf">CPF</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" id="senha" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="senha">Senha</label>
            </div>
            <button class="btn-signup" id="btn-click">Registrar</button>
            <p class="signup-text">Já tem uma conta? 
            <a class="underline" href="login-page.php">Inicie uma sessão!</a>
            </p>
        </form>
    </div>
</div>
<?php 
function msg(){
    if(isset($_SESSION['user'])){
        $ot = "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'Email e/ou CPF já cadastrados!',
            confirmButtonColor: '#E9D758',
          }) 
            </script>";
            return $ot;
    }
}
?>
    <script type="text/javascript">
    function backhome(){
        location.replace("index.php");
    }
     
    document.getElementById("cpf").onkeypress = function(e) {
         let chr = String.fromCharCode(e.which);
         if ("1234567890".indexOf(chr) < 0)
           return false;
       };
	
	$(document).on('click','#btn-click',function(e){
			
		var nome = $('#nome').val();
		var email = $('#email').val();
		var senha = $('#senha').val();
        var cpf = $('#cpf').val();
			
		var atpos  = email.indexOf('@');
		var dotpos = email.lastIndexOf('.com');
        
        var result;
        var soma = 0;
        var resto;

    if(
     cpf == "00000000000" || 
     cpf == "11111111111" ||
     cpf == "22222222222" ||
     cpf == "33333333333" ||
     cpf == "44444444444" ||
     cpf == "55555555555" ||
     cpf == "66666666666" ||
     cpf == "77777777777" ||
     cpf == "88888888888" ||
     cpf == "99999999999"){
        result = false;
    }
    for (i = 1; i <= 9; i++)
     soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11)){
        resto = 0;}
    if (resto != parseInt(cpf.substring(9, 10))){
        result = false;}

    soma = 0;
    for (i = 1; i <= 10; i++)
        soma = soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11)){
        resto = 0;}
    if (resto != parseInt(cpf.substring(10, 11))){
        result = false;}
    if (result == false) {
        e.preventDefault();
        Swal.fire({
  icon: 'error',
  title: 'Erro!',
  text: 'CPF Inválido!',
  confirmButtonColor: '#E9D758',
})  }   
		if(nome == ''){ 
            e.preventDefault();
            Swal.fire({
  icon: 'error',
  title: 'Erro!',
  text: 'Preencha todos os campos para prosseguir!',
  confirmButtonColor: '#E9D758',
})
		}
		else if(!/^[a-z A-Z]+$/.test(nome)){
            e.preventDefault();
			Swal.fire({
  icon: 'error',
  title: 'Erro!',
  text: 'Preencha seu nome apenas com letras!',
  confirmButtonColor: '#E9D758',
})
		}
		else if(email == ''){
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
        else if(cpf == ''){ 
            e.preventDefault();
			Swal.fire({
  icon: 'error',
  title: 'Erro!',
  text: 'Preencha todos os campos para prosseguir!',
  confirmButtonColor: '#E9D758',
})
        }
        else if(cpf < 11){ 
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
				url: '../controllers/register.php',
				type: 'post',
				data : {
		        nome: nome,
                email: email,
                cpf: cpf,
                senha: senha
	    },
			});
		}
	
});
    </script>
</body>
</html>