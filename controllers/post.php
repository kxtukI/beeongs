<?php
include_once("connect.php");

$email = $_SESSION['email'];

$stmt = $bd -> prepare("SELECT userid FROM usuarios where email = '$email'");
$stmt -> execute();
$data = $stmt -> fetch(PDO::FETCH_ASSOC);
$userid = $data['userid'];


if(isset($_POST["titulo"]) && isset($_POST["desc"])){
    $titulo = $_POST["titulo"];
    $desc = $_POST["desc"];
    
        $stmt = $bd -> prepare("INSERT INTO posts (userid, titulo, descricao, datapost) VALUES ('$userid','$titulo', '$desc', NOW())");
        $stmt->execute();
        header("Location: ../views/forum-index.php");
    }

$stmt = $bd -> prepare("SELECT nome, titulo, descricao, datapost FROM usuarios INNER JOIN posts ON posts.userid = usuarios.userid ORDER BY datapost DESC");
$stmt -> execute();
$query = $stmt -> rowCount();

if($query > 0){?>
   <div class="main-section">
   <div class="post-area">
  <img src="../img/user.png" alt="" class="user-icon">
    <button class="btn-modal" id="modal">Digite algo...</button>
</div>
    <?php 
        while($row = $result = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $nome = $row['nome'];
            $titulo = $row['titulo'];
            $desc = $row['descricao'];
            $datapost = new DateTime($row['datapost']);
        ?>
    <div class="post-section">
    <div class="post-header">
      <img src="../img/user.png" alt="" class="user-icon">
        <div class="user-info">
          <h1 class="username"><?php echo $nome;?></h1>
          <p class="date"><?php echo $datapost->format('d/m/Y • H:i');?></p>
          </div>
        </div>
    <div class="post-info">
      <h1 class="post-title"><?php echo $titulo;?></h1>
      <p class="post-desc"><?php echo $desc;?></p>
    </div>
    </div>
    <?php } ?>
    <?php } else { ?>
        <div class="main-section">
   <div class="post-area">
  <img src="../img/user.png" alt="" class="user-icon">
    <button class="btn-modal" id="modal">Digite algo...</button>
</div> 
</div>
<?php
    }