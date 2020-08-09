<?php
include_once('../authen.php');
require_once('../../../conn/connect.php');



// print_r($_POST);

$subject = $_POST['subject'];
$subTitle = $_POST['sub_title'];
// $file = $_POST['file'];
$detail = $_POST['detail'];

$sql = "INSERT INTO `articles` (`id`, `subject`, `sub_title`, `image`, `detail`) VALUES ('', '$subject', '$subTitle', 'filpath', '$detail');";
$result = $conn->query($sql);

if($result){
    echo '<script> alert("Finished Updating!")</script>'; 
    header('Refresh:0; url=index.php');
}

?>