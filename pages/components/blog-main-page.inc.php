<div class="row">
<?php
@session_start();
require_once('conn/connect.php');
$language = $langParam;
$sql_command = "SELECT * FROM `articles` WHERE `language`='$language' ORDER BY id DESC LIMIT 6 ";
$result = $conn->query($sql_command);
while($row=$result->fetch_assoc()){
?>

    <section class="col-12 col-sm-6 col-md-4 p-2">
        <div class="card h-100">
            <a href="blog-detail.html?id=001" class="warpper-card-img">
                <img class="card-img-top" src="blog/images/<?=$row['image']?>" alt="Coding">
            </a>
            <div class="card-body">
                <h5 class="card-title"><?=$row['subject']?></h5>
                <p class="card-text">
                    <?=$row['sub_title']?> </p>
                <span class="text-secondary"> <?=date("d/m/Y", strtotime($row['date_create']));?></span>
            </div>
            <div class="p-3 text-right">
                <a href="?p=read&id=<?=$row['id']?>" class="btn btn-custom-more "><?=$langCon[$langParam]['readmore_'];?></a>
            </div>
        </div>
    </section>
    <!-- 
<section class="col-12 col-sm-6 col-md-4 p-2">
    <div class="card h-100">
        <a href="#" class="warpper-card-img">
            <img class="card-img-top" src="assets/img/b8.jpg" alt="Coding">
        </a>
        <div class="card-body">
            <h5 class="card-title">ทีมงานวิศวกร ณ ประเทศญี่ปุ่น </h5>
            <p class="card-text">อีกหนึ่งความภาคภูมิใจที่เราได้พัฒนาเพื่อจะก้าวไปเป็นผู้นำด้านเทคโนโลยี
                นวัตกรรม การรองรับการเปลี่ยนแปลงในทุก ๆ
                อุตสาหกรรมการผลิต ที่สามารถช่วยลำเลียงสินค้า ช่วยลดคน ลดเวลา ลดค่าใช้จ่าย เพิ่มอัตราการผลิต
                สะดวกแม้อยู่ในพื้นที่ที่จำกัด
                เรามีทีมวิศวกรมากประสบการณ์ที่สามารถออกแบบอุปกรณ์และเครื่องจักรแบบอัตโนมัติ
                มีเครื่องจักรที่ทันสมัย สามารถรองรับความต้องการของลูกค้า ทั้งการออกแบบ พัฒนา
                ปรับปรุงและการผลิตเครื่องจักรอัตโนมัติ </p>
        </div>
        <div class="p-3 text-right">
            <a href=#" class="btn btn-custom-more ">อ่านเพิ่มเติม...</a>
        </div>
    </div>
</section>

<section class="col-12 col-sm-6 col-md-4 p-2">
    <div class="card h-100">
        <a href="#" class="warpper-card-img">
            <img class="card-img-top" src="assets/img/b1.PNG" alt="Coding">
        </a>
        <div class="card-body">
            <h5 class="card-title">หัวข้อบทความ</h5>
            <p class="card-text">บทความ......</p>
        </div>
        <div class="p-3 text-right">
            <a href=#" class="btn btn-custom-more ">อ่านเพิ่มเติม...</a>
        </div>
    </div>
</section> -->
    <?php } ?>
</div>