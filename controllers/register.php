<?php 
session_start();
include ("connect.php");

$nome = ($_POST["nome"]);
$email = ($_POST["email"]);
$senha = $_POST["senha"];
$cpf = ($_POST["cpf"]);

// $usuario = $stmt -> rowCount();

$stmt1 = $bd -> prepare("SELECT email FROM usuarios WHERE email = '$email'");
$stmt1 -> execute();
$usuario1 = $stmt1 -> rowCount();

$stmt2 = $bd -> prepare("SELECT cpf FROM usuarios WHERE cpf = '$cpf'");
$stmt2 -> execute();
$usuario2 = $stmt2 -> rowCount();

    if($usuario1 > 0) {
        $_SESSION["error_email"] = ".";
        header("Location:../views/register-page.php");
    } elseif ($usuario2 > 0) {
        $_SESSION["error_cpf"] = ".";
        header("Location:../views/register-page.php");
    } else {
        $stmt = $bd -> prepare("INSERT INTO usuarios (nome, email, cpf, senha, dataCadastro) VALUES ('$nome', '$email', '$cpf', '$senha', NOW())");
        $stmt->execute();
        $_SESSION["email"] = $_POST["email"];
        header("Location:../views/user.php");
    }