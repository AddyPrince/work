<?php 
include_once('../authen.php');
require_once('../../../conn/connect.php');

?>
<?php
    $id = $_GET['id'];
    $imageName = $conn->query("SELECT `image` FROM `articles` WHERE ID = '$id'")->fetch_assoc()['image'];
    echo $imageName;
    $conn->query("DELETE FROM `articles` WHERE `id` = '$id'"); 
    echo '<script> alert("Finished Deleting!")</script>'; 
    header('Refresh:0; url=index.php');
?>