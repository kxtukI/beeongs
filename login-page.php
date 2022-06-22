<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
    <title>Login - ONGS</title>
</head>
<body>
    <div class="login">
    <?php 
    if (isset($_SESSION["invalid"])):
    ?>
    <p>asdasdasdsa</p>
    <?php 
    unset($_SESSION["invalid"]);
    endif;
    ?>   
        <form action="login.php" method="post">
            <div class="input-login">
                <input type="text" class="form-login" placeholder="Email" name="email" required >
            </div>
            <div class="input-login">
                <input type="text" class="form-login" placeholder="Senha" name="senha" required>
            </div>
            <button class="btn-login">ENTRAR</button>
        </form>
    </div>
    <script type="text/javascript">
        document.querySelector('form input').oninvalid = function(evt) {  
    evt.preventDefault();
    if (!this.validity.valid) {
        swal ({
        icon: 'error',
        title: 'Algo deu errado',
        text: 'Insira um email e/ou uma senha!',
        footer: '<a href="">Why do I have this issue?</a>',
        confirmButtonText: "#E9D758"
    })      
    } 
};
    </script>

</body>
</html>