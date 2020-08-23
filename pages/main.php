<section class="section-1">
    <video autoplay muted loop id="myVideo">
        <source
            src="http://sut-schedule.xyz/ABCDEFGHIJKLMNAUTOMATIONS.mp4?fbclid=IwAR2xPUT4ANWLlOVrt78-iIlfq0Ra6BrLGuybi3U7v0uA80R8DHDUtiU-XCU"
            type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="content-custom">
        <h1>ENGINEERING SOLUTIONS Co, Ltd</h1>
        <p><?=$langCon[$langParam]['kk_main_page'];?> </p>
    </div>
</section>

<!-- บทความ -->

<section class="section-2">

    <div class="container p-3">
        <h2 class="border-suort-bottom text-center"><?=$langCon[$langParam]['article_main_page'];?></h2>
        <?php
        include_once("components/blog-main-page.inc.php")
        ?>
        <div class="row">
        <div class="col-md-12 text-right"><a href="?p=blogs"><?=$langCon[$langParam]['article'];?></a></div>
        </div>
    </div>
</section>