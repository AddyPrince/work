<?php
include_once('../authen.php');
require_once('../../../conn/connect.php');



$imagePath="../../../blog/images/";


$id = $_POST['id'];
$subject = $_POST['subject'];
$subTitle = $_POST['sub_title'];
$file = $_FILES['file'];
$detail = $_POST['detail'];

$fileIsNull = $_FILES['file']['size']==0?true:false;

$target_file = $imagePath. basename($file['name']);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$temp = explode(".", $file["name"]);
$newfilename = $fileIsNull==true?NULL:round(microtime(true)) . '.' . end($temp);
$uploadOk  = 0;
$nowDate = date("Y-m-d H:i:s");
$language = $_POST['tag_lang'];


if($fileIsNull!=true){

  $result1 = $conn->query("SELECT `image` FROM `articles` WHERE id ='$id'")->fetch_assoc();
  $imageName = $result1['image'];
  if($imageName!=""){

    $_filePath = "{$imagePath}{$imageName}";
    print_r($_filePath);
    if (file_exists($_filePath)) {
      unlink($_filePath);
    } 
  }
  $result1 = $conn->query("UPDATE `articles` SET `image` = '$newfilename' WHERE `id` = '$id'");
  if($result1){
    echo "update image";
  }

}
if($fileIsNull!=true){
  $check = getimagesize($file["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else if($fileIsNull!=true){
    if (move_uploaded_file($file["tmp_name"], $imagePath.$newfilename)) {
      echo "The file ". basename( $file["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
}

$sql = ("UPDATE `articles` SET `subject` = '$subject', `sub_title` = '$subTitle', `detail` = '$detail',`date_update`='$nowDate',`language` ='$language' WHERE `id` = $id; ");
$result = $conn->query($sql);

if($result){
    echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');
}

?>