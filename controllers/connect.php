<?php
session_start();

try{
    $bd = new PDO("mysql:host=127.0.0.1;dbname=projeto_ongs", "root", "root");
    $bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo($e);
}
