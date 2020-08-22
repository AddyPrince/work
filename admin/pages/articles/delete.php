<?php 
include_once('../authen.php');
require_once('../../../conn/connect.php');

?>
<?php
    $id = $_GET['id'];
    $conn->query("DELETE FROM `articles` WHERE `id` = '$id'"); 
    echo '<script> alert("Finished Deleting!")</script>'; 
    header('Refresh:0; url=index.php');
?>