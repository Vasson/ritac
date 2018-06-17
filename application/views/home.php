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
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#team">Team</a></li>
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

  <!--==========================
    Intro Section
  ============================-->
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

    <!--==========================
      Featured Services Section
    ============================-->
    <!--<section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>&nbsp; &nbsp;&nbsp;We are growing as one among the leading Software development firm , where our software products are used by various companies across the world. We are striving to gain popularity on the web,social media and training solutions and tend to become one of the most reputed companies in the country or may be beyond ! No matter the size of your company,we’d love to help.</p>
          <p> Our main goal is to be a versatile and well-respected organization to provide reliable, scalable and cost-efficient web sites and applications to corporate and individual clients all over the world by implementing modern programming technologies, techniques, platforms, standards of coding.</p>
          <p> “Not to be the biggest, but to be the best in whatever area we focus”.We believe that we have a responsibility to use our resources to make a positive impact on our customers. Our vision is to achieve global IT services leadership in providing value-added high quality IT solutions to our clients by combining technology skills, domain expertise,candidate resourcing, process focus and a commitment to long-term client relationships.</p>
        </header>

        <!--<div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url('assets/img/about-mission.jpg');?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url('assets/img/about-plan.jpg');?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url('assets/img/about-vision.jpg');?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>-->

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p></p>
        </header>

        <div class="row">
          <?php foreach($services as $services){
          ?>
          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="<?php echo $services['icon'];?>"></i></div>
            <h4 class="title"><a href=""><?php echo $services['name'] ?></a></h4>
            <p class="description"><?php echo $services['description'] ?></p>
          </div>
          <?php
           }?>

          <!--<div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>-->

        </div>

      </div>
    </section><!-- #services -->

    
    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Study Abroad</h3>
          <p>Enroll now for our STUDY ABROAD PROGRAM</p>
          <p><a class="cta-btn" onclick="show_form()" href="javascript:void(0);">Enroll Now</a></p>

        </header>
        <div class="row counters">
          <div class="col-md-4 text-center box">
            <!--<span data-toggle="counter-up"></span>-->
            <h4 class="title">STUDY MEDICINE</h4>
              <p>Study Medicine in Poland</p>
              <p>Study Medicine in Hungary</p>
              <p>Study Medicine in Moldova</p>
              <p>Study Medicine in Canada</p>
              <p>We are not limited.........</p>
          </div>
          <div class="col-md-4 text-center box ">
            <!--<span data-toggle="counter-up"></span>-->
            <h4 class="title">STUDY ENGINEERING</h4>
              <p>Study Engineering in Poland</p>
              <p>Study Engineering in Canada</p>
              <p>Study Engineering in India</p>
              <p>Study Engineering in Australia</p>
              <p>Study Engineering in Newsland</p>
              <p>and much more.........</p>
          </div>
          <div class="col-md-4 text-center box ">
            <!--<span data-toggle="counter-up"></span>-->
            <h4 class="title">STUDY BUSINESS</h4>
              <p>Study Business in Canada</p>
              <p>Study Business in Hungary</p>
              <p>Harvard Business School</p>
              <p>University of Pennsylvania</p>
              <p>Still counts.........</p>
          </div>
        </div>
        <!--<div class="facts-img">
            <img src="<?php echo base_url('assets/img/facts-img.png');?>" alt="" class="img-fluid">
        </div>-->
        
      </div>

      <div id="enrollment_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="col-md-12">
                <div class="form">
                  <form action="" method="post" role="form" id="study_form" enctype="multipart/form-data">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
                        <div class="validation"></div>
                      </div>
                      <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required/>
                        <div class="validation"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="institution" id="institution" placeholder="Institution/Organization:" required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="course" id="course" placeholder="Select your course">
                        <option value="medicine" selected>Study Medicine</option>
                                <option value="engineering">Study Engineering</option>
                                <option value="business">Study Business</option>
                                <option value="others">Others</option>
                      </select>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="description" id="description" rows="5" placeholder="Descriptin" ></textarea>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <label >Files(Photo and CV)</label>
                      <input type="file" name="userfile[]" multiple="multiple" class="form-control" required >
                      <p>*File name shouldn't contain space,MAX 2GB<p>
                      <div class="validation"></div>
                    </div>
                    <input type="hidden" name="date" id="date" value="<?php  echo date("Y/m/d");?>">
                    <div class="text-center"><button type="submit">Submit</button></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
              </div>
          </div>
        </div>
    </section><!-- #facts -->


<section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">92%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">PHP <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Bootstrap <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Angular JS <i class="val">92%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Laravel <i class="val">75%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Call To Action Section
    ============================-->
   <!-- <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->


        <!--==========================
      Clients Section
    ============================-->
    <!--<section id="call-to-action" class="wow fadeInUp fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Our Partners</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url('assets/img/clients/thinkpalm.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/bell_logo.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/almanarat.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/future.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/educare.png');?>" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    

    

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All Works</li>
              <li data-filter=".filter-web">Web Development</li>
              <li data-filter=".filter-app">Web Design</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/img/slider/eco.jpg');?>" class="img-fluid" alt="">
                <a href="<?php echo base_url('assets/img/slider/eco.jpg');?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Eco Wide</a></h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/img/slider/alfawaq.jpg');?>" class="img-fluid" alt="">
                <a href="<?php echo base_url('assets/img/slider/alfawaq.jpg');?>" class="link-preview" data-lightbox="portfolio" data-title="Al Fawaq Travels" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Al Fawaq Travels</a></h4>
                <p>ERP Application</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/img/slider/ewl.jpg');?>" class="img-fluid" alt="">
                <a href="<?php echo base_url('assets/img/slider/ewl.jpg');?>" class="link-preview" data-lightbox="portfolio" data-title="Ewl" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Ewl</a></h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/img/slider/alhamed.jpg');?>" class="img-fluid" alt="">
                <a href="<?php echo base_url('assets/img/slider/alhamed.jpg');?>" class="link-preview" data-lightbox="portfolio" data-title="Al Hamed" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Al Hamed</a></h4>
                <p>ERP Application</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/img/slider/search.jpg');?>" class="img-fluid" alt="">
                <a href="<?php echo base_url('assets/img/slider/search.jpg');?>" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Search Kerla</a></h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>

    
          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/img/slider/greendoor.jpg');?>" class="img-fluid" alt="">
                <a href="<?php echo base_url('assets/img/slider/greendoor.jpg');?>" class="link-preview" data-lightbox="portfolio" data-title="Green Door" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Green Door</a></h4>
                <p>ERP Application</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

        <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Partners</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo base_url('assets/img/clients/thinkpalm.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/bell_logo.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/almanarat.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/future.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/educare.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/thinkpalm.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/bell_logo.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/almanarat.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/future.png');?>" alt="">
          <img src="<?php echo base_url('assets/img/clients/educare.png');?>" alt="">
        </div>

      </div>
    </section><!-- #clients -->

        <!--==========================
      Careers Section
    ============================-->
        <section id="events" class="section-bg wow fadeInUp">
          <div class="container">
            <div class="section-header">
              <h3>Events</h3>
              <p>Take a look into our Events</p>
            </div>
            <div class="row events-container">
              <?php
              foreach($gallery as $gal)
              {
                $images = explode(',',$gal['image']);
              ?>
              <div class="col-lg-4 col-md-6 events-item filter-app wow fadeInUp">
                <div class="events-wrap">
                  <figure>
                    <img src="<?php echo base_url('assets/gallery/');?><?php echo  $images[0];?>" class="img-fluid" alt="">
                    <a href="javascript:void(0);" data-title="<?php echo $gal['name']?>" class="link-preview" title="Preview" onclick="show_gallery(<?php echo $gal['id']?>)">
                      <i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </figure>

                  <div class="events-info">
                    <h4><a href="#"><?php echo $gal['name']?></a></h4>
                    <p><?php echo $gal['date']?></p>
                  </div>
                </div>
              </div>
              <?php } ?>
            
              <div class="panel-group col-lg-12" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                  <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Collapsible Group Item #1
                  </a>
                  </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>                        
    <!-- #careers -->

    <!--==========================
      Clients Section
    ============================-->

    <!--<section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonial-1.jpg');?>" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="<?php echo base_url('assets/img/quote-sign-left.png');?>" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="<?php echo base_url('assets/img/quote-sign-right.png');?>" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonial-2.jpg');?>" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="<?php echo base_url('assets/img/quote-sign-left.png');?>" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="<?php echo base_url('assets/img/quote-sign-right.png');?>" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonial-3.jpg');?>" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="<?php echo base_url('assets/img/quote-sign-left.png');?>" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="<?php echo base_url('assets/img/quote-sign-right.png');?>" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonial-4.jpg');?>" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="<?php echo base_url('assets/img/quote-sign-left.png');?>" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="<?php echo base_url('assets/img/quote-sign-right.png');?>" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo base_url('assets/img/testimonial-5.jpg');?>" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="<?php echo base_url('assets/img/quote-sign-left.png');?>" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="<?php echo base_url('assets/img/quote-sign-right.png');?>" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Meet Our Team</p>
        </div>

        <div class="row">
          <?php

              foreach($team as $val)
              {

              ?>
          <div class="col-lg-3 col-md-6 wow fadeInUp"  data-wow-delay="0.1s">
            <div class="member">
              <img style="width:255px;height:255px;" src="<?php echo base_url();?>assets/img/team/<?php echo $val['image']?>" class="img-fluid" alt="<?php echo $val['name'];?>">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php echo $val['name'];?></h4>
                  <span><?php echo $val['designation'];?></span>
                  <!--<div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>-->
                </div>
              </div>
            </div>
          </div>

          <?php } ?>

        </div>

      </div>
    </section><!-- #team -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div id="map" style="width:100%;height:300px;"></div> 
      <p></p>   
      <div class="container">
        <div class="section-header">
          <h3>Contact Us</h3>
          <p></p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Royal International Training and Consultancy
                Office No:M-03, BLD No:p/343<br>Behind UAE Exchange, Shabia-10<br>Mussafah, Abu Dhabi, UAE</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+97126710212,+971507809135<br>+971552595064</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@ritactechnolabs.com">info@ritactechnolabs.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

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

<div id="events_gallery" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
      <div class="col-md-12">
       <div id="myCarousel2" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                              <div class="item active">
                                <img id="sl1" style="width:50%;">
                            </div>

                            <div class="item">
                                <img id="sl2"  style="width:50%;">
                            </div>

                            <div class="item">
                                <img id="sl3"  style="width:50%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                      </a>
      </div>
  </div>
  <div class="modal-footer">
      <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
    </div>
</div>


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
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url('assets/contactform/contactform.js');?>"></script>
  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('assets/js/main.js');?>"></script>
      <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(24.336954,54.530971);
            var mapOptions = {

                center: myCenter,
                zoom:15,
                mapTypeId: google.maps.MapTypeId.HYBRID
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({position:myCenter});
              marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx3uRsCBmDCkzfa6UHbyp6rjQVDsE9_hQ&callback=myMap"></script>

  <script type="text/javascript">

    function show_form(){
      $("#enrollment_form").modal('show');
    }

    $(document).ready(function(){
      $("#study_form").on('submit', function(e){
        e.preventDefault();


        var data = new FormData($(this))
        $.ajax({
            url: "<?php echo base_url('home/save_higher');?>",// url to your upload process file
            type: "POST",
            dataType:'json',
            data:  new FormData(this),
            contentType: false,
            cache: true,
            processData:false,        // tell jQuery not to set contentType
            success: function(data)
            {   
              if(data == 1){
                  $('#enrollment_form').find('#study_form').html("<p>Thankyou!! We will get back to you soon!!!</p>").show;

                  setTimeout(function() {window.location = "<?php echo base_url('home');?>";}, 10000); 
              }
            }
        });
      });
    });

    function show_gallery(id){
      $("#events_gallery").modal('show');

          $.ajax({
              url: "<?php echo base_url();?>home/fetch_gallary_modal/"+id,// url to your upload process file

              type: "POST",
              dataType:'json',

              contentType: false,
              cache: true,
              processData:false,        // tell jQuery not to set contentType
              success: function(data)
              {   
                  
                var img = data[0].image.split(",");

                $("#costumModal10").modal('show');

                $("#modal_header").html(data[0].name);
                $("#sl1").attr("src", "<?php echo base_url()?>assets/gallery/"+img[0]);
                $("#sl2").attr("src", "<?php echo base_url()?>assets/gallery/"+img[1]);
                $("#sl3").attr("src", "<?php echo base_url()?>assets/gallery/"+img[2]);
              }
          });
    }
  </script>
</body>
</html>
