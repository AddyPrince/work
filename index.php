<!-- <!DOCTYPE html>
<html lang="en"> -->

<?php 
include 'pages/components/header.php' ;
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
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
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
                    <li class="<?=$param=='main'?'active':''?>"><a href="index.php">Home</a></li>
                    <li class="<?=$param=='about'?'active':''?>"><a href="index.php?p=about">About</a></li>
                    <li class="<?=$param=='service'?'active':''?>"><a href="index.php?p=service">Services</a></li>
                    <li class="<?=$param=='portfolio'?'active':''?>"><a href="index.php?p=portfolio">Portfolio</a></li>
                    <li class="<?=$param=='contact'?'active':''?>"><a href="index.php?p=contact">Contact</a></li>

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
    default:
         include_once("pages/main.php");
        break;
}



  include 'pages/components/foot.php';
  ?>
</body>

</html>