<?php
@session_start();

$lang;
$langParam;
if(isset($_GET['lang'])){
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
    $langParam = $lang;
}else{
    $_SESSION['lang'] = 'th';
    $langParam = 'th';
}

include 'language.config.inc.php';
?>