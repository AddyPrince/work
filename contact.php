<?php 
include 'head.php'
?>

<!-- Navber -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/image/logo1.jpg" width="45" height="45" alt="" style="border-radius: 5px;">
      </a>

      <span class="navbar-text text-white collapse navbar-collapse">
        ICON-ENGINEERING SOLUTIONS
      </span>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey"
        aria-controls="#navbarKey" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarKey">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

<!-- TOP -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-img jarallax" data-jarallax='{ "speed": 0.6 }' style="background-image: url(assets/image/a3.jpg)">
          <div class="carousel-caption">
            <h1 class="display-4 font-weight-bold">ติดต่อเรา</h1>
            <h1 class="display-5 font-weight-bold">ICON-ENGINEERING</h1>
            <p>ICON-ENGINEERING SOLUTIONS Co.,Ltd.(HEAD OFFICE)</p>
          </div>
          <div class="blackscreen"> </div>
        </div>
      </div>
      </div>
      </div>

<!-- Section Blog -->
<section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom">รายละเอียด</h2>
            </div>
            <div class="col-sm-4 mb-3" data-aos="fade-left">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">เขตอุตสาหกรรมสุรนารี 799 หมู่ที่ 3 ตำบลหนองบัวศาลา</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" data-aos="fade-right">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p  class="card-text">044-756 997</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" data-aos="fade-left">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope  py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">อีเมลล์</h4>
                        <p  class="card-text">infor@icon-engsolutions.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> แบบฟอร์มติดต่อเรา </h5>
                        <form>
                            <div class="form-row" data-aos="fade-right">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" id="name" class="form-control" placeholder="ชื่อของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <input type="text" id="phone" class="form-control" placeholder="เบอร์โทรศัพท์ของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมลล์</label>
                                    <input type="text" id="email" class="form-control" placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="form-group" data-aos="fade-left">
                                <label for="message">ข้อความของคุณ</label>
                                <textarea id="message" rows="5" class="form-control" placeholder="เขียนข้อความของคุณที่นี้"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary d-block mx-auto">ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php 
include 'foot.php'
?>