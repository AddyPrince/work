<?php
session_start();

$lang;
$langParam;
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
}

if(isset($_SESSION['lang'])){
    $langParam = $_SESSION['lang'];
}else{
    $langParam = 'th';
}


include 'language.config.inc.php';
?>