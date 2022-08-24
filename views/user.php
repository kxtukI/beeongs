<?php 
session_start();

    if(isset($_SESSION["email"]) == false) {
        header("Location: ../views/login-page.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user-page.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <script src="../js/index.js" defer ></script>
    <script src="../js/bootstrap.js" defer ></script>
    <title>Meu Perfil - ONGS</title>
</head>
<body>
  <nav class="navbar">
    <h1 class="nav-logo">ONGS</h1>
    <div class="nav-links">
      <a class="underline" href="">PÁGINA INICIAL</a>
      <a class="underline" href="forum-index.php">FÓRUM</a>
      <a class="underline" href="">ONGS</a>
    </div>
</nav>
<section class="container">
    <div class="header-info">
    <img src="../img/user.png" alt="">
    <h1>Olá <?php echo $_SESSION["email"]; ?></h1>
    <a href="../controllers/logout.php">Sair</a>
    <a href="../views/config-page.php">Editar Conta</a>
    </div>
</section>
</head>
</body>


