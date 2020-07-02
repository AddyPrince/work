<?php 
    session_start();
    require_once('../../../conn/connect.php');

    $uri = $_SERVER['REQUEST_URI']; 
    $array = explode('/', $uri);
    $key = array_search("pages", $array);
    $name = $array[$key + 1];

    if( !isset($_SESSION['authen_id'] ) ){
      header('Location: ../../login.php');  
    } else if ( $name == 'admin' && $_SESSION['status'] == 'admin' ){
      header('Location: ../dashboard/');    
    }



?>