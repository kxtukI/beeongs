<?php 
session_start();

if(!$_SESSION["email"]) {
    header("Location: login-page.php");
    exit();
}