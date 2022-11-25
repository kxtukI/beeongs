<?php

if(strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0){
  header('Location: ../views/forum-index.php');
}

include_once("../controllers/connect.php");

$email = $_SESSION['email'];
$stmt = $bd -> prepare("SELECT userid FROM usuarios where email = '$email'");
$stmt -> execute();
$data = $stmt -> fetch(PDO::FETCH_ASSOC);
$userid = $data['userid'];

if(isset($_POST["titulo"]) && isset($_POST["desc"]) && isset($_FILES['imagem'])){
    $titulo = $_POST["titulo"];
    $desc = $_POST["desc"];

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
      $stmt = $bd -> prepare("INSERT INTO posts (userid, titulo, descricao, imgPost, datapost) VALUES ('$userid','$titulo', '$desc', '$path', NOW())");
      $stmt->execute();
      header("Location: ../views/forum-index.php");
      exit();
      }
    }
    }

    if(isset($_POST["titulo"]) && isset($_POST["desc"])){
      $titulo = $_POST["titulo"];
      $desc = $_POST["desc"];
    
      $stmt = $bd -> prepare("INSERT INTO posts (userid, titulo, descricao, datapost) VALUES ('$userid','$titulo', '$desc', NOW())");
      $stmt->execute();
      header("Location: ../views/forum-index.php");
      exit();
    }
  
    $stmt = $bd -> prepare("SELECT nome, titulo, descricao, imgPost, imgUser, datapost FROM usuarios INNER JOIN posts ON posts.userid = usuarios.userid ORDER BY datapost DESC");
    $stmt -> execute();
    $query = $stmt -> rowCount();
    
    if($query > 0){?>
       <div class="main-section">
       <div class="post-area">
      <img src="<?php echo $imgUser;?>" alt="" class="user-icon">
        <button class="btn-modal" id="modal">Digite algo...</button>
    </div>
        <?php 
            while($row = $result = $stmt -> fetch(PDO::FETCH_ASSOC)){
                $nome = $row['nome'];
                $titulo = $row['titulo'];
                $desc = $row['descricao'];
                $imgPost = $row['imgPost'];
                $imgUser = $row['imgUser'];
                $datapost = new DateTime($row['datapost']);
            if($imgPost != ''){ ?>
       <div class="post-section">
        <div class="post-header">
          <img src="<?php echo $imgUser;?>" alt="" class="user-icon">
            <div class="user-info">
              <h1 class="username"><?php echo $nome;?></h1>
              <p class="date"><?php echo $datapost->format('d/m/Y • H:i');?></p>
              </div>
            </div>
        <div class="post-info">
          <h1 class="post-title"><?php echo $titulo;?></h1>
          <p class="post-desc"><?php echo $desc;?></p>
          <img class="post-img" src="<?php echo $imgPost;?>">
        </div>
        <?php ?> </div> <?php } else { ?>
          <div class="post-section">
        <div class="post-header">
          <img src="<?php echo $imgUser;?>" alt="" class="user-icon">
            <div class="user-info">
              <h1 class="username"><?php echo $nome;?></h1>
              <p class="date"><?php echo $datapost->format('d/m/Y • H:i');?></p>
              </div>
            </div>
        <div class="post-info">
          <h1 class="post-title"><?php echo $titulo;?></h1>
          <p class="post-desc"><?php echo $desc;?></p>
        </div>
        </div> <?php }}} ?>