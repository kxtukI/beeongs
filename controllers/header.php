<?php
if(isset($_SESSION["email"]) == false) {
    echo('<nav id="navbar">
    <div id="btn-mobile" class="mobile-menu"><i class="fa-solid fa-bars"></i></div>
    <img src="../img/beeongs/sub logo.svg" alt="Logo BeeONGS" class="nav-logo">
    <div class="nav-links">
      <a class="underline" href="index.php">INÍCIO</a>
      <a class="underline" href="forum-index.php">FÓRUM</a>
      <a class="underline" href="ongs-page.php">ONGS</a>
      <a id="btn-login" >
      <i class="fa-solid fa-lock"></i>
        LOGIN
      </a>
    </div>
  </nav>');
} else {
  $email = $_SESSION['email'];
  $stmt = $bd -> prepare("SELECT imgUser FROM usuarios where email = '$email'");
  $stmt -> execute();
  $data = $stmt -> fetch(PDO::FETCH_ASSOC);
  $imgUser = $data['imgUser'];
?> 
  <nav id="navbar">
<div id="btn-mobile" class="mobile-menu"><i class="fa-solid fa-bars"></i></div>
<img src="../img/beeongs/sub logo.svg" alt="Logo BeeONGS" class="nav-logo">
<div class="nav-links">
  <a class="underline" href="index.php">INÍCIO</a>
  <a class="underline" href="forum-index.php">FÓRUM</a>
  <a class="underline" href="ongs-page.php">ONGS</a>
  <a id="dropdown" onclick="toggleD()">
  <img src="<?php echo $imgUser;?>" alt="" class="user-img">
  <i class="fa-solid fa-caret-down"></i>
  </a>
  </div>
</nav>
<div id="dropdown-section">
  <div class="dropdown-content">
    <a href="../views/user-profile.php"><i class="fa-solid fa-user"></i> Meu Perfil</a>
    <a href="../controllers/logout.php" style="color: #FF3864"><i class="fa-solid fa-door-open"></i> Sair</a>
  </div>
</div> 
<?php } ?>

<!-- <a href="../views/user-profile.php"><i class="fa-solid fa-user"></i> Meu Perfil</a>
      <a href="../views/user-settings.php"><i class="fa-solid fa-gear"></i> Configurações</a>
      <a href="../controllers/logout.php" style="color: #FF3864"><i class="fa-solid fa-door-open"></i> Sair</a> -->