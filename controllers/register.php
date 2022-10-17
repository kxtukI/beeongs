<?php 
session_start();
include ("connect.php");

$nome = ($_POST["nome"]);
$email = ($_POST["email"]);
$senha = $_POST["senha"];
$cpf = ($_POST["cpf"]);

// $usuario = $stmt -> rowCount();

$stmtemail = $bd -> prepare("SELECT email FROM usuarios WHERE email = '$email'");
$stmtemail -> execute();
$usuarioemail = $stmtemail -> rowCount();

$stmtcpf = $bd -> prepare("SELECT cpf FROM usuarios WHERE cpf = '$cpf'");
$stmtcpf -> execute();
$usuariocpf = $stmtcpf -> rowCount();

    if($usuarioemail > 0) {
        $_SESSION["error_email"] == true;
        header("Location:../views/register-page.php");
    } elseif ($usuariocpf > 0) {
        $_SESSION["error_cpf"] = ".";
        header("Location:../views/register-page.php");
    } else {
        $stmt = $bd -> prepare("INSERT INTO usuarios (nome, email, cpf, senha, dataCadastro) VALUES ('$nome', '$email', '$cpf', '$senha', NOW())");
        $stmt->execute();
        header("Location:../views/login-page.php");
    }