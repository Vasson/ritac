<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RITAC</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/fevicon.png">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
  </head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!--<h1><a href="#intro" class="scrollto">BizPage</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro"><img src="<?php echo base_url('assets/img/web logo.png');?>" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#facts">Study Abroad</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li class="menu-has-children"><a href="">Partners</a>
            <ul>
              <li><a href="<?php echo base_url('home/become_a_partner')?>">Become A Partner</a></li>
              <li><a href="<?php echo base_url('home/partner_modal')?>">Partnership Modals</a></li>
              <li><a href="#">Promoters</a></li>
              <li><a href="#">Investores</a></li>
            </ul>
          </li>
          <li><a href="#">Careers</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url('assets/img/intro-carousel/slider2.jpg');?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Stunning Web Applications</h2>
                <p>For Enterprising People</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets/img/intro-carousel/slider3.jpg');?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Unique and customizable Web designs with Responsive Theme</h2>
                <p></p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets/img/intro-carousel/slider4.jpg');?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Co-orperate, teachers, students Training.</h2>
                <p></p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets/img/intro-carousel/slider5.jpg');?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Study Abroad with RITAC Benefits</h2>
                <p></p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!--<div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>-->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Events</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Study Abroad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p><strong>Address:</strong>
              P.O.Box:53031 <br>
              Office No:M-03, BLD No:p/343<br>
              Behind UAE Exchange <br>
              Shabia-10, Mussafah, Abu Dhabi, UAE <br>
              <strong>Phone:</strong> +97126710212, +971507809135, +971552595064<br>
              <strong>Email:</strong> info@ritactechnolabs.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Our Another Wing</h4>
            <p>
              RITAC Techolabs Pvt. Ltd. <br>
              Kochin<br>
              Kerla India <br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Follow Us</h4>
           <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

          <!--<div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>-->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>2018 RITAC</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="http://ritactechnolabs.com">RITAC IT TEAM</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/hoverIntent.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/superfish/superfish.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js');?>"></script>
  <script src="<?php echo base_url('assets/lib/touchSwipe/jquery.touchSwipe.min.js');?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>
</body>
</html>
