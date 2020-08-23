<?php
require_once("../conn/connect.php");
// print_r($_POST)
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$nowDate = date("Y-m-d H:i:s");


$insert = $conn->query("INSERT INTO `contacts` (`id`, `name`, `email`,`subject`, `message`, `date`) VALUES ('', '$name', '$email','$subject', '$message', '$nowDate')");
if($insert){
    echo "Your message has been sent successfully.";
}else{
    echo "Error failed to send message";
}
?>