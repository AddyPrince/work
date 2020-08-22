<?php 
include_once('../authen.php');
require_once('../../../conn/connect.php');



$imagePath="../../../blog/images/";

print_r($_POST);
$subject = $_POST['subject'];
$subTitle = $_POST['sub_title'];
$file = $_FILES['file'];
$detail = $_POST['detail'];

$target_file = $imagePath. basename($file['name']);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$temp = explode(".", $file["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$uploadOk  = 0;
print_r($file["tmp_name"]);

    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
 
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($file["tmp_name"], $imagePath.$newfilename)) {
          echo "The file ". basename( $file["name"]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }

$sql = "INSERT INTO `articles` (`id`, `subject`, `sub_title`, `image`, `detail`) VALUES ('', '$subject', '$subTitle', '$newfilename', '$detail');";
$result = $conn->query($sql);

if($result){
    echo '<script> alert("Finished Updating!")</script>'; 
    // header('Refresh:0; url=index.php');
}

?>