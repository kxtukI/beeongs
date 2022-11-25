<?php

include("../controllers/connect.php");  

if(strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0){
    header('Location: ../views/user-profile.php');
  }

if(isset($_SESSION["email"]) == false) {
    header("Location: ../views/login-page.php");
    exit();
}

if(isset($_POST['aboutme'])){
$postAboutme = trim($_POST['aboutme']);
} else {
  $postAboutme = null;
}
if(isset($_POST['email'])){
$postEmail = trim($_POST['email']);
} else {
  $postEmail = null;
}
if(isset($_POST['senha'])){
$postSenha = trim($_POST['senha']);
} else {
  $postSenha = null;
}
if(isset($_POST['tel'])){
$postTel = trim($_POST['tel']);
} else {
  $postTel = null;
}

$sessionEmail = $_SESSION['email'];
$stmt = $bd -> prepare("SELECT * FROM usuarios where email = '$sessionEmail'");
$stmt -> execute();
$data = $stmt -> fetch(PDO::FETCH_ASSOC);
$userid = $data['userid'];
$nome = $data['nome'];
$tel = $data['telefone'];
$sobreMim  = $data['sobreMim'];
$dataCadastro = new DateTime($data['dataCadastro']);

$stmt = $bd -> prepare("SELECT nome, titulo, descricao, imgPost, imgUser, datapost FROM usuarios INNER JOIN posts ON posts.userid = usuarios.userid WHERE usuarios.userid = '$userid' ORDER BY datapost DESC");
$stmt -> execute();
$query = $stmt -> rowCount();

if(isset($_FILES['imagem'])){
    $extensions = array('jpeg', 'jpg', 'png', 'gif');
    $path = "../img/post/";
    $img = $_FILES['imagem']['name'];
    $tmp = $_FILES['imagem']['tmp_name'];

$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
$fimage = rand(1000,1000000).$img;
if(in_array($ext, $extensions)) 
{ 
$path = $path.strtolower($fimage); 
if(move_uploaded_file($tmp,$path)) 
{
      $stmt = $bd -> prepare("UPDATE usuarios SET imgUser = '$path' WHERE userid = '$userid'");
      $stmt->execute();
      $_SESSION["sucess"] = "As mudanças foram salvas!";
      header("Location: ../views/user-profile.php");
      exit();
      }
    }
    }

  
if ($postAboutme != null){
    $stmt = $bd -> prepare("UPDATE usuarios SET sobreMim = '$postAboutme' WHERE userid = '$userid'");
    $stmt->execute();
    $_SESSION["sucess"] = "As mudanças foram salvas!";
    header("Location: ../views/user-profile.php");
    exit();
} 

if($postEmail != null){
    $stmt = $bd -> prepare("SELECT * FROM usuarios WHERE email = '$postEmail'");
    $stmt -> execute();
    $query = $stmt -> rowCount();

    if($query > 0){
        $_SESSION["error"] = "Esse e-mail já está cadastrado.";
        header("Location: ../views/user-profile.php");
        exit();
    }

    $stmt = $bd -> prepare("UPDATE usuarios SET email = '$postEmail' WHERE userid = '$userid'");
      $stmt->execute();
      $_SESSION['error'] = null;
      $_SESSION["sucess"] = "As mudanças foram salvas!";
      $_SESSION["email"] = $postEmail;
      header("Location: ../views/user-profile.php");
      exit();
}

if($postSenha != null){
    $stmt = $bd -> prepare("UPDATE usuarios SET senha = '$postSenha' WHERE userid = '$userid'");
      $stmt->execute();
      $_SESSION["sucess"] = "As mudanças foram salvas!";
      header("Location: ../views/user-profile.php");
      exit();
} 

if($postTel != null){
  $stmt = $bd -> prepare("UPDATE usuarios SET telefone = '$postTel' WHERE userid = '$userid'");
    $stmt->execute();
    $_SESSION["sucess"] = "As mudanças foram salvas!";
    header("Location: ../views/user-profile.php");
    exit();
}


