<?php 
include("connect.php");

if(strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0){
    header('Location: ../views/user-profile.php');
  }

$email = $_SESSION['email'];
$stmt = $bd -> prepare("SELECT * FROM usuarios where email = '$email'");
$stmt -> execute();
$data = $stmt -> fetch(PDO::FETCH_ASSOC);
$userid = $data['userid'];

    $stmt = $bd -> prepare("DELETE FROM posts WHERE userid = '$userid'");
    $stmt->execute();

    $stmt = $bd -> prepare("DELETE FROM usuarios WHERE userid = '$userid'");
    $stmt->execute();
    session_destroy();
    header("Location: ../views/index.php");
    exit();