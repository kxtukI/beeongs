<?php 
session_start();
include ("connect.php");

$email = trim($_POST["email"]);
$senha = $_POST["senha"];

$stmt = $bd -> prepare("SELECT senha, email FROM usuarios WHERE email = '$email' AND senha = '$senha'");
$stmt -> execute();
$usuario = $stmt -> rowCount();

    if($usuario > 0) {
        $_SESSION["email"] = $email;
        header("Location:../views/user.php");
        exit();
    }   else {
        unset($_SESSION["email"]);
        $_SESSION["error"] = ".";
        header("Location: ../views/login-page.php");
        exit();
    }