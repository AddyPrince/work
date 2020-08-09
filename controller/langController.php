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

$langCon= array(
    "th" => array(
        "home"=>"หน้าแรก",
        "about"=>"เกี่ยวกับ",
        "service"=>"บริการของเรา",
        "portfolio"=>"ผลงาน",
        "contact"=>"ติดต่อ",
    ),
    "en" =>  array(
        "home"=>"Home",
        "about"=>"About",
        "service"=>"Services",
        "portfolio"=>"Portfolio",
        "contact"=>"Contact",
    ));
?>