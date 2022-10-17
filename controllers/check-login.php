<?php 
if(isset($_SESSION["email"]) == false) {
    header("Location: ../views/login-page.php");
    exit();
}