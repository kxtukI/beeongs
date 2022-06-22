<?php 

session_start();

include ("connect.php");

if(empty($_POST["email"]) || empty($_POST["senha"])) {
    header("Location: login-page.php");
    exit();
}

$email = mysqli_real_escape_string($connect, $_POST["email"]);
$senha = mysqli_real_escape_string($connect, $_POST["senha"]);

$query = "select email from usuarios where email = '$email'";
$query = "select senha from usuarios where senha = '$senha'";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION["email"] = $email;
    header("Location: user.php");
    exit();
} else {
    $_SESSION["invalid"] = true;
    header("Location: login-page.php");
    exit();
}

if(isset($_SESSION["email"])){
    header('Location: user.php');
   }