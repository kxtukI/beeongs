<?php 
session_start();
include ("connect.php");

$nome = ($_POST["nome"]);
$email = ($_POST["email"]);
$senha = $_POST["senha"];
$cpf = ($_POST["cpf"]);
$path = "../img/user/user-default.png";

$stmt = $bd -> prepare("SELECT * FROM usuarios where email = '$email' AND cpf = '$cpf' OR email = '$email' OR cpf = '$cpf'");
$stmt -> execute();
$usuario = $stmt -> rowCount();

        if ($usuario > 0) {
        $_SESSION["user"] = "Email e/ou CPF já cadastrados!";
        header("Location:../views/register-page.php");
        exit();
    } else {
        $stmt = $bd -> prepare("INSERT INTO usuarios (nome, email, cpf, senha, imgUser, dataCadastro) VALUES ('$nome', '$email', '$cpf', '$senha', '$path', NOW())");
        $stmt->execute();
        $_SESSION["user"] = null;
        $_SESSION["email"] = $email;
        header("Location:../views/index.php");
        exit();
    }