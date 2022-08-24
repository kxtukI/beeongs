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
    <link rel="stylesheet" href="../css/login-page.css">
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="../css/sweetalert2.css">
    <title>Login - ONGS</title>
</head>
<body>
<?php 
    if (isset($_SESSION["error"])) {
        echo "<script> 
        Swal.fire({
      icon: 'error',
      title: 'Erro!',
      text: 'E-mail e/ou senha inválidos!',
      confirmButtonColor: '#E9D758',
    }) </script>";
    } 
    unset($_SESSION["error"]);
    ?>
    <div class="login">
    <div class="form-login">
    <h1 class="title-login">INICIAR SESSÃO</h1>
        <form action="../controllers/login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="email">Endereço de e-mail</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="senha" name="senha" maxlength="50" required="required" autocomplete="off">
                <label class="form-control-placeholder" for="senha">Senha</label>
                <a class="underline" href="forgot-password.php">Esqueceu a senha?</a>
            </div>
            <button id="btn-click" class="btn-login">Entrar</button>
            <p class="register-text">Ainda não registrou uma conta? 
            <a class="underline" href="register-page.php">Registre-se</a>
            </p>
            <p class="register-text">Quer registrar uma ONG? 
            <a class="underline" href="register-page.php">Registre-se</a>
            </p>
        </form>
    </div>
    </div>
    <script type="text/javascript">
        var _0x3c6b9e=_0x259c;function _0x259c(_0x572ed5,_0xbd25f3){var _0x31c38c=_0x31c3();return _0x259c=function(_0x259ca6,_0x145862){_0x259ca6=_0x259ca6-0x112;var _0x586af7=_0x31c38c[_0x259ca6];return _0x586af7;},_0x259c(_0x572ed5,_0xbd25f3);}function _0x31c3(){var _0x189cc9=['indexOf','fire','1352212OkieNR','10zbCXGt','#E9D758','#senha','post','../controllers/login.php','Preencha\x20todos\x20os\x20campos\x20para\x20prosseguir!','1935408DYWipM','#email','1115873ctltXQ','length','4187493eiqDYS','45yulZZk','error','.com','#btn-click','val','3930353jFQBYv','preventDefault','click','lastIndexOf','99888yBOJkW','11362250RAoCLK','Erro!','2ESuXHq'];_0x31c3=function(){return _0x189cc9;};return _0x31c3();}(function(_0x593f03,_0x2af2f9){var _0x18555d=_0x259c,_0x1c37c2=_0x593f03();while(!![]){try{var _0x538c79=parseInt(_0x18555d(0x114))/0x1+parseInt(_0x18555d(0x123))/0x2*(parseInt(_0x18555d(0x116))/0x3)+parseInt(_0x18555d(0x126))/0x4*(-parseInt(_0x18555d(0x127))/0x5)+-parseInt(_0x18555d(0x112))/0x6+parseInt(_0x18555d(0x11c))/0x7+-parseInt(_0x18555d(0x120))/0x8*(parseInt(_0x18555d(0x117))/0x9)+-parseInt(_0x18555d(0x121))/0xa;if(_0x538c79===_0x2af2f9)break;else _0x1c37c2['push'](_0x1c37c2['shift']());}catch(_0x971ed0){_0x1c37c2['push'](_0x1c37c2['shift']());}}}(_0x31c3,0xd5d4e),$(document)['on'](_0x3c6b9e(0x11e),_0x3c6b9e(0x11a),function(_0x1f42bc){var _0x4bb763=_0x3c6b9e,_0x33701d=$(_0x4bb763(0x113))[_0x4bb763(0x11b)](),_0x4d45c9=$(_0x4bb763(0x129))[_0x4bb763(0x11b)](),_0x5f923c=_0x33701d[_0x4bb763(0x124)]('@'),_0x282338=_0x33701d[_0x4bb763(0x11f)](_0x4bb763(0x119));if(_0x33701d=='')_0x1f42bc[_0x4bb763(0x11d)](),Swal[_0x4bb763(0x125)]({'icon':'error','title':_0x4bb763(0x122),'text':_0x4bb763(0x12c),'confirmButtonColor':_0x4bb763(0x128)});else{if(_0x5f923c<0x1||_0x282338<_0x5f923c+0x2||_0x282338+0x2>=_0x33701d[_0x4bb763(0x115)])_0x1f42bc[_0x4bb763(0x11d)](),Swal[_0x4bb763(0x125)]({'icon':_0x4bb763(0x118),'title':_0x4bb763(0x122),'text':'Digite\x20um\x20email\x20valido','confirmButtonColor':'#E9D758'});else _0x4d45c9==''?(_0x1f42bc[_0x4bb763(0x11d)](),Swal[_0x4bb763(0x125)]({'icon':'error','title':_0x4bb763(0x122),'text':_0x4bb763(0x12c),'confirmButtonColor':_0x4bb763(0x128)})):$['ajax']({'url':_0x4bb763(0x12b),'type':_0x4bb763(0x12a),'data':{'email':_0x33701d,'senha':_0x4d45c9}});}}));
    </script>
</body>
</html>