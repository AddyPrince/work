<?php include 'header.php' ?>

    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
        <div class="container d-flex ">
            <div class="contact-info mr-auto text-theme">
                <i class="icofont-envelope"></i> <a href="project@itssautomation.com" class="text-theme">project@itssautomation.com</a>
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

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
    
            <h1 class="logo mr-auto"><a href="index.php">ENGINEERING</a></h1>
            <!-- Uncomment below if you prefer to use an image logo  SOLUTIONS Co, Ltd -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" class="img-fluid"></a>-->
    
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li ><a href="portfolio.php">Portfolio</a></li>
                    <!-- <li><a href="#team">Team</a></li> -->
                    <li class="active"><a href="contact.php">Contact</a></li>
    
                </ul>
            </nav><!-- .nav-menu -->
    
        </div>
    </header><!-- End Header -->

 <!-- ======= Hero Section ======= -->
 <!-- <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>ENGINEERING SOLUTIONS Co, Ltd</h1>
      <h2>ผลิตภัณฑ์มีมาตรฐาน  ล้ำเลิศเทคโนโลยี ทีมงานมืออาชีพ 
        มุ่งมั่นสร้างสรรค์ผลิตภัณฑ์ สำคัญที่สุดคือลูกค้า
        </h2>
    </div>
  </section> -->
  <!-- End Hero -->

  <main id="main">
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact" style="margin-top:10vh">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>เขตอุตสาหกรรมสุรนารี 799 หมู่ที่ 3 ตำบลหนองบัวศาลา</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email TH</h3>
              <p>project@itssautomation.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call TH</h3>
              <p>061-465-2652</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%A9%E0%B8%B1%E0%B8%97%20%E0%B9%84%E0%B8%AD%E0%B8%84%E0%B8%AD%E0%B8%99-%E0%B9%80%E0%B8%AD%E0%B9%87%E0%B8%99%E0%B8%88%E0%B8%B4%E0%B9%80%E0%B8%99%E0%B8%B5%E0%B8%A2%E0%B8%A5%E0%B8%B4%E0%B9%88%E0%B8%87%20%E0%B9%82%E0%B8%8B%E0%B8%A5%E0%B8%B9%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%20%E0%B8%88%E0%B8%B3%E0%B8%81%E0%B8%B1%E0%B8%94&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>                          
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



  </main>
<?php include 'foot.php' ?>