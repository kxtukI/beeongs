<?php 
include("../controllers/check-login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/forum-index.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
    <title>Forum - ONGS</title>
</head>
<body>
<nav class="navbar">
    <h1 class="nav-logo">ONGS</h1>
    <div class="nav-links">
      <a class="underline" href="index.html">INÍCIO</a>
      <a class="underline" href="forum-index.php">FÓRUM</a>
      <a class="underline" href="">ONGS</a>
    </div>
</nav>
<div class="container" style="padding-top:100px;">
  <form action="../controllers/post-area.php" class="post-area">
    <textarea name="" id="" cols="80" rows="8" placeholder="Digite algo"></textarea>
    <div class="bottom-content">
      <img src="" alt="">
      <input type="submit" class="post-button">
    </div>
  </form>
</div>
</body>
</html>