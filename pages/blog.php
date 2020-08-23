
<div class="container">
    <div class="blog-container">

    <table id="dataTableBlog" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th><?=$langCon[$langParam]['article'];?></th>
            </tr>
            </thead>
            <tbody>
                
                <?php
                require_once("conn/connect.php");
                $language = $langParam;
                $que = $conn->query("SELECT * FROM `articles` WHERE `language` = '$language' ORDER BY id desc");
                while($row = $que->fetch_assoc()){
                
                ?>
                 <tr>
                    <td>  
                    <div class="card card-hover"  onclick="javascript:location.href='?p=read&id=<?=$row['id']?>'">
                        <img class="card-image" src="blog/images/<?=$row['image']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['subject']?></h5>
                            <p class="card-text"><?=$row['sub_title']?></p>
                            <span class="text-secondary"><?=date("d/m/Y", strtotime($row['date_create']));?></span>
                        </div>
                    </div>

                </td>
             </tr>
             <?php } ?>
             
            </tbody>
   </table>
    
      
</div>
