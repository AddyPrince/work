
<div class="container">
    <div class="blog-read-container pt-5">

    
    <?php
                require_once("conn/connect.php");
                $id = $_GET['id'];
                $que = $conn->query("SELECT * FROM `articles` WHERE ID = '$id'");
                $row = $que->fetch_assoc();
    ?>  
        <img src="blog/images/<?=$row['image']?>" alt="" class="blog-read-img">
        <h3 class="mt-2"><?=$row['subject']?></h3>
        <?=$row['detail']?>

    </div>
</div>
