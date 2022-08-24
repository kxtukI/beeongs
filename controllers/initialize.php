<?php 

ob_start();
date_default_timezone_set('America/Sao_Paulo');

define("BD_HOST", "localhost");
define("BD_NAME", "projeto_ongs");
define("BD_USER", "root");
define("BD_PASSWORD", "root");

$public_end=strpos($_SERVER['SCRIPT_NAME'],"")+8;
$doc_root=substr($_SERVER['SCRIPT_NAME'],0,$public_end);

define("WWW_ROOT",$doc_root);