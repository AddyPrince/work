<!-- <!DOCTYPE html>
<html lang="en"> -->

<?php 
include 'pages/components/header.php' ;
include 'controller/langController.php';

if(isset($_GET['redirect'])){
    $URL_Redirect = $_GET['redirect'];
    header('Location: '.$URL_Redirect);  
}
?>

<body>

    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
        <div class="container d-flex">
            <div class="contact-info mr-auto text-theme">
                <i class="icofont-envelope"></i> <a href="project@itssautomation.com"
                    class="text-theme">project@itssautomation.com</a>
                <i class="icofont-phone"></i> 0614652652
            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="skype"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
        </div>
    </div>
    <?php
$param;
if(isset($_GET['p']))
    $param = $_GET['p'];
else
    $param = 'main';    
?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.php">ENGINEERING</a></h1>
            <!-- Uncomment below if you prefer to use an image logo  SOLUTIONS Co, Ltd -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="<?=$param=='main'?'active':''?>"><a href="index.php"><?=$langCon[$langParam]['home'];?></a></li>
                    <li class="<?=$param=='about'?'active':''?>"><a href="index.php?p=about"><?=$langCon[$langParam]['about'];?></a></li>
                    <li class="<?=$param=='service'?'active':''?>"><a href="index.php?p=service"><?=$langCon[$langParam]['service'];?></a></li>
                    <li class="<?=$param=='portfolio'?'active':''?>"><a href="index.php?p=portfolio"><?=$langCon[$langParam]['portfolio'];?></a></li>
                    <li class="<?=$param=='contact'?'active':''?>"><a href="index.php?p=contact"><?=$langCon[$langParam]['contact'];?></a></li>
                    <input type="checkbox" checked data-toggle="toggle" onclick="langChange()" data-on="EN"
                        data-off="TH" data-onstyle="secondary" id="toggle-event" data-offstyle="info" data-size="xs">
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->



    <?php 


switch ($param) {
    case 'main':
        include_once("pages/main.php");
        break;
    case 'about':
        include_once("pages/about.php");
            break;
   case 'service':
        include_once("pages/service.php");
            break;
   case 'portfolio':
        include_once("pages/portfolio.php");
            break;
   case 'contact':
        include_once("pages/contact.php");
            break;
    case 'blogs':
        include_once("pages/blog.php");
            break;
    case 'read':
        include_once("pages/read.php");
            break;
    default:
         include_once("pages/main.php");
        break;
}



  include 'pages/components/foot.php';
  ?>
</body>


<script>
$(document).ready(function() {
    var currentLang = "<?= $langParam ?>";
    $('#toggle-event').bootstrapToggle(currentLang=='en'?'on':'off')
});
$(function() {
   
    $('#toggle-event').change(function() {
        var currentLang = "<?= $langParam ?>";
        // $('#console-event').html('Toggle: ' + $(this).prop('checked'))
        // Simulate a mouse click:
        let redirectUrl = window.location.href;
        window.location.href = `index.php?lang=${currentLang=='en'?'th':'en'}&redirect=${redirectUrl}`;
    })
})
</script>



<?php
// footer script
switch ($param) {
    case 'blogs':
        include_once("pages/blog.footer.script.php");
     break;
    case 'read':
        include_once("pages/read.style.php");
     break;
}
?>


</html>