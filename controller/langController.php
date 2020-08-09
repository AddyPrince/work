<?php
session_start();


$langParam;
if(isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

if(isset($_SESSION['lang'])){
    $langParam = $_SESSION['lang'];
}else{
    $langParam = 'th';
}


include 'language.config.inc.php';
?>