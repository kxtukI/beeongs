<?php
session_start();
include ("connect.php");

$nome = mysqli_real_escape_string($connect, $_POST["nome"]);
$email = mysqli_real_escape_string($connect, $_POST["email"]);

// if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $_SESSION["invalid_email"] = true;
//     header("Location: register-page.php");
//     exit();
// }

$cpf = mysqli_real_escape_string($connect, $_POST["cpf"]);
$senha = mysqli_real_escape_string($connect, $_POST["senha"]);


$query = "select count(*) as total from usuarios where email = '$email'";
$query = "select count(*) as total from usuarios where cpf = '$cpf'";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc ($result);


if($row["total"] == 1) {
    $_SESSION["user_exists"] = true;
    header("Location: register-page.php");
    exit();
}

$query = "insert into usuarios (nome, email, cpf, senha, dataCadastro) values ('$nome', '$email', '$cpf', '$senha', NOW())";

if($connect->query($query) === true) {
    $_SESSION['register_ok'] = true;
    header("Location: register-page.php");
} else {
    $_SESSION['register_error'] = true;
    header("Location: register-page.php");
}

$connect->close();

header("Location: register-page.php");
exit();
