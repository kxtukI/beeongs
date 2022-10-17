<?php 
session_start();
include("connect.php");

$email = trim($_POST["email"]);
$senha = $_POST["senha"];

$stmt = $bd -> prepare("SELECT senha, email FROM usuarios WHERE email = '$email' AND senha = '$senha'");
$stmt -> execute();
$usuario = $stmt -> rowCount();

    if($usuario > 0) {
        $_SESSION["email"] = $email;
        header("Location:../views/index.php");
        exit();
    }   else {
        $_SESSION["error"] = true;
        header("Location: ../views/login-page.php");
        exit();
    }