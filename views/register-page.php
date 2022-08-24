<?php
	session_start();
 
	if(isset($_SESSION["email"]) == true) {
        header("Location: ../views/user.php");
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
    <title>Cadastre-se - ONGS</title>
</head>
<body>
    <div class="signup">
        <a class="voltar" href="index.html">
        <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M90 45C90 33.0653 85.2589 21.6193 76.8198 13.1802C68.3807 4.74106 56.9347 0 45 0C33.0653 0 21.6193 4.74106 13.1802 13.1802C4.74106 21.6193 0 33.0653 0 45C0 56.9347 4.74106 68.3807 13.1802 76.8198C21.6193 85.2589 33.0653 90 45 90C56.9347 90 68.3807 85.2589 76.8198 76.8198C85.2589 68.3807 90 56.9347 90 45V45ZM47.8125 64.6875C47.8125 65.4334 47.5162 66.1488 46.9887 66.6762C46.4613 67.2037 45.7459 67.5 45 67.5C44.2541 67.5 43.5387 67.2037 43.0113 66.6762C42.4838 66.1488 42.1875 65.4334 42.1875 64.6875V32.1019L30.1163 44.1788C29.5881 44.7069 28.8719 45.0036 28.125 45.0036C27.3781 45.0036 26.6619 44.7069 26.1337 44.1788C25.6056 43.6506 25.3089 42.9344 25.3089 42.1875C25.3089 41.4406 25.6056 40.7244 26.1337 40.1962L43.0087 23.3212C43.27 23.0593 43.5804 22.8515 43.9221 22.7097C44.2638 22.568 44.6301 22.495 45 22.495C45.3699 22.495 45.7362 22.568 46.0779 22.7097C46.4196 22.8515 46.73 23.0593 46.9913 23.3212L63.8663 40.1962C64.3944 40.7244 64.6911 41.4406 64.6911 42.1875C64.6911 42.9344 64.3944 43.6506 63.8663 44.1788C63.3381 44.7069 62.6219 45.0036 61.875 45.0036C61.1281 45.0036 60.4119 44.7069 59.8837 44.1788L47.8125 32.1019V64.6875Z" fill="#F6F8FF"/>
        </svg>
        VOLTAR
        </a>
        <div class="form-signup"> 
    <h1 class="title-signup">REGISTRAR</h1>
        <!-- <form action="../controllers/register.php" method="post"> -->
            <div class="form-group">
                <input type="name" class="form-control" name="nome" id="nome" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="nome">Nome Completo</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="email">Endereço de e-mail</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="cpf">CPF</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" id="senha" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="senha">Senha</label>
                <a class="underline" href="forgot-password.php">Esqueceu a senha?</a>
            </div>
            <button class="btn-signup" id="btn-click">Registrar</button>
            <p class="signup-text">Já tem uma conta? 
            <a class="underline" href="login-page.php">Inicie uma sessão!</a>
            </p>
        </form>
    </div>
</div>
    <script type="text/javascript">
     
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
    if (cpf.length != 11 ||
            cpf == "00000000000" ||
            cpf == "11111111111" ||
            cpf == "22222222222" ||
            cpf == "33333333333" ||
            cpf == "44444444444" ||
            cpf == "55555555555" ||
            cpf == "66666666666" ||
            cpf == "77777777777" ||
            cpf == "88888888888" ||
            cpf == "99999999999")
            result = false;
            
        for (i=1; i<=9; i++) 
    soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11))  
    resto = 0;
    if (resto != parseInt(cpf.substring(9, 10)) ) 
    result =  false;
    
    soma = 0;
    for (i = 1; i <= 10; i++) 
    soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11))  
    resto = 0;
    if (resto != parseInt(cpf.substring(10, 11) ) ) 
    result =  false;
    else{
    result =  true;
    }
    if(result == false){
        e.preventDefault();
            Swal.fire({
  icon: 'error',
  title: 'Erro!',
  text: 'CPF Inválido!',
  confirmButtonColor: '#E9D758',
})   
    }
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
  text: 'Digite um email valido',
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
        else if(result = false){ 
            e.preventDefault();
			Swal.fire({
  icon: 'error',
  title: 'Erro!',
  text: 'CPF Inválido!',
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