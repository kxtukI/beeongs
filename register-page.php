<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se - ONGS</title>
</head>
<body>
    <div class="signup">
    <?php 
        if (isset($_SESSION["register_ok"])):
    ?>
        <p>Cadastro Sucesso</p>
    <?php 
        unset($_SESSION["register_ok"]);
    endif;
    ?>  
    <?php 
        if (isset($_SESSION["register_error"])):
    ?>
        <p>ERRO</p>
    <?php 
        unset($_SESSION["register_error"]);
    endif;
    ?>  
    <?php 
        if (isset($_SESSION["user_exists"])):
    ?>
        <p>Usuário já existe</p>
    <?php 
        unset($_SESSION["user_exists"]);
    endif;
    ?>  
    <?php 
        if (isset($_SESSION["invalid_email"])):
    ?>
        <p>Email invalido</p>
    <?php 
        unset($_SESSION["invalid_email"]);
    endif;
    ?>  
        <form action="register.php" method="post">
            <div class="input-signup">
                <input type="text" class="form-signup" placeholder="Nome Completo" name="nome" required="required">
            </div>
            <div class="input-signup">
                <input type="text" class="form-signup" placeholder="Email" name="email" required="required">
            </div>
            <div class="input-signup">
                <input type="text" class="form-signup" id="cpf" placeholder="CPF" name="cpf" required="required">
            </div>
            <div class="input-signup">
                <input type="text" class="form-signup" placeholder="Senha" name="senha" required="required">
            </div>
            <button class="btn-login" >REGISTRAR</button>
        </form>
    </div>

    <script type="text/javascript">

    document.getElementById("cpf").onkeypress = function(e) {
         let chr = String.fromCharCode(e.which);
         if ("1234567890".indexOf(chr) < 0)
           return false;
       };
       
    </script>
</body>
</html>