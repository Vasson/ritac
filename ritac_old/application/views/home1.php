<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>vendors/images/fevicon.png">
    <title>RITAC</title>

    <link href="<?php echo base_url();?>vendors/css/reset.css" rel="stylesheet"/>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>vendors/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendors/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendors/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendors/css/fontello/css/fontello.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendors/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendors/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendors/css/media-query.css" rel="stylesheet">
    <script src="<?php echo base_url();?>vendors/js/jquery.min.js"></script>
<style>

.fade {
    opacity: 0;
    -webkit-transition: opacity .15s;
    transition: opacity .15s;   
     }
     #costumModal10{
        z-index: 100001 !important;
     }
    #service_modal
    {
      background-color: #3a142b;
      opacity: 0.9;
    }
    #service_modal_dialog
    {
        width: 100%;
    }
    .carousel-inner  img
    {
        display: block;
        margin: 0 auto;
        width: 100%;

        height: 100%;
    }
    #service_modal_dialog p
    {
        font-size: 25px;
        font-weight: 800;
    }
    .modal-body p
    {
        margin: 0 auto;
    }
    select
    {
        color: white;
    }
    select option
    {
        background-color: #232829;
        color: white;

    }
    .form-control
    {
        color: white;
    }
    textarea
    {
        color: white;
    }
    #training_form option
    {
        background-color: #b364b0;
        color: white;

    }
     #study_form option
    {
        background-color: #ff8400;
        color: white;

    }
    .panel-default > .panel-heading
    {
        background-color: #2e486f;
    }
    .panel-default > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #ddd;
    background-color: #375584;
}

</style>

</head>

<body>
<div class="body-inner-wrapper">
<!-- Navbar
================================================== -->
<div id="menu-wrapper" class="navbar-wrapper">
    <div class="inner-container">
        <div id="navigation-bar" class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a id="logo" class="navbar-brand" href="index.html"><img class="" src="<?php echo base_url();?>vendors/images/website logo.png"
                                                                                 alt="" style="width: 200px; height: 120px;"></a>
                    </div>
                </div>
                <div id="menu" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active home"><a href="#main-slider"> Home</a></li>
                        <li class="service"><a href="#services-wrapper">Services</a></li>
                       <!--  <li class="portfolio"><a href="#portfolio-wrapper">Projects</a></li> -->
                        <li class="about"><a href="#aboutus-wrapper">About</a></li>
                        <!-- <li class="team"><a href="#team-wrapper">Team</a></li> -->
                        <!-- <li class="client"><a href="#client-wrapper">Partners</a></li> -->
                        <!-- <li class="blog"><a href="#blog-wrapper">Blog</a></li> -->
                      <!--   <li class="blog"><a href="#blog-wrapper">IT</a></li> -->
                  
                        <li class="training"><a href="#training-wrapper">Events</a></li>
                        <li class="study"><a href="#study-wrapper">Study Abroad</a></li>
                        <li class="career"><a href="#career-wrapper">Careers</a></li>
                        <li class="contact"><a href="#contact-wrapper">Contact</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Slideshow
================================================== -->
<div id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <!--
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        -->
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php echo base_url();?>vendors/images/slider/slider3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Stunning <span>Web Applications</span></h2>

                                <h2 class="animation animated-item-2">For Enterprising People</h2>
                                <br>
								<span class="content-nav">
									<a href="#services-wrapper" class="animation animated-item-3">Go</a>
								</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>vendors/images/slider/slider2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1">Unique and customizable <span>Web designs</span></h2>

                                <h2 class="animation animated-item-2"> with Responsive Theme</h2>
                                <br>
								<span class="content-nav">
									<a href="#services-wrapper" class="animation animated-item-3">Go</a>
								</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->

            <!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>vendors/images/slider/slider4.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1">Co-orperate, teachers, students <span>Training.</span></h2>

                                <h2 class="animation animated-item-2"></h2>
                                <br>
                                <span class="content-nav">
                                    <a href="#services-wrapper" class="animation animated-item-3">Go</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->

            <!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>vendors/images/slider/slider5.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1"> <span>Study Abroad</span></h2>

                                <h2 class="animation animated-item-2">with RITAC Benefits</h2>
                                <br>
                                <span class="content-nav">
                                    <a href="#services-wrapper" class="animation animated-item-3">Go</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->

            <!-- <div class="item">
                <video id="video_background" preload="auto" autoplay loop="loop" muted="muted" controls>
                    <source src="<?php echo base_url();?>vendors/videos/splash.webm" type="video/webm">
                    <source src="<?php echo base_url();?>vendors/videos/splash.mp4" type="video/mp4">
                    <source src="<?php echo base_url();?>vendors/videos/splash.ogv" type="video/ogg">
                    Video not supported
                </video>

                <div id="video_pattern"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">

                                <h2 class="animation animated-item-1">The Best <span>HTML5 Theme</span></h2>

                                <h2 class="animation animated-item-2">You Have Ever Seen</h2>

                                <br>
                                <span class="content-nav">
                                    <a href="#services-wrapper" class="animation animated-item-3">Go</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--/.item-->
        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs rounded" href="#main-slider" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="next hidden-xs rounded" href="#main-slider" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
<!--/#main-slider-->

<div id="body-wrapper">

<!-- Services
================================================== -->
<div id="services-wrapper">
    <div id="services">
        <div class="inner-wrapper">
			<div class="container">
				<h2>Check out our <span>Services</span></h2>

				<div class="row">
                    <?php
                        foreach($services as $services)
                        {
                           
                    ?>
					<div class="col-md-3 col-sm-6 col-xs-12" onclick="show(<?php echo $services['id'];?>)" >
                        
						<div class="service-box service-fold" style="overflow: hidden;">
                            
							<i class="hippo-icon-<?php echo $services['icon'] ?>"></i>
                            <!-- <a href="#costumModal10" role="button" class="btn btn-default" data-toggle="modal"> -->
							<h3><?php echo $services['name'] ?></h3>
                            

							<!-- <p>
								<?php echo $services['description'] ?>
							</p> -->
                           
						</div>
                    
					</div>


                    <?php
                      }
                     ?>
                 </div>
			</div>
        </div>
    </div>
</div>
<!--/#services-->


<!-- About us
================================================== -->
<div id="aboutus-wrapper">
    <div id="aboutus">
        <div class="inner-wrapper">
            <div class="row">
                <div class="container">
                    <h2>Read more <span> About us</span></h2>

                    <div class="row contents">
                        <div class="col-md-6">
                            <p>&nbsp; &nbsp;&nbsp;We are growing as one among the leading Software development firm , where our software products are used by various companies across the world. We are striving to gain popularity on the web,social media and training solutions and tend to become one of the most reputed companies in the country or may be beyond ! No matter the size of your company,we’d love to help.</p>

                            <p> Our main goal is to be a versatile and well-respected organization to provide reliable, scalable and cost-efficient web sites and applications to corporate and individual clients all over the world by implementing modern programming technologies, techniques, platforms, standards of coding.</p>

                            <p> “Not to be the biggest, but to be the best in whatever area we focus”.We believe that we have a responsibility to use our resources to make a positive impact on our customers. Our vision is to achieve global IT services leadership in providing value-added high quality IT solutions to our clients by combining technology skills, domain expertise,candidate resourcing, process focus and a commitment to long-term client relationships.</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Our Skills</h3>

                            <p> every pleasure is to be welcomed and every pain avoided. But in certain
                                circumstances
                                and
                                owing to the claims of duty or the obligations of business it will frequently occur
                                that
                                pleasures have to be repudiated</p>

                            <div class="progress-bars">
                                <div class="skill-progress" data-skill="90%">CSS</div>
                                <div class="skill-progress" data-skill="92%">HTML</div>
                                <div class="skill-progress" data-skill="91%">PHP</div>
                                <div class="skill-progress" data-skill="87%">Photoshop</div>
                                <div class="skill-progress" data-skill="92%">Angular JS</div>
                                <div class="skill-progress" data-skill="94%">Node JS</div>
                                <div class="skill-progress" data-skill="98%">Paypal</div>
                                <div class="skill-progress" data-skill="90%">Bootstrap</div>
                                <div class="skill-progress" data-skill="97%">Javascript</div>
                                <div class="skill-progress" data-skill="95%">Jquery</div>
                                <div class="skill-progress" data-skill="96%">Ajax</div>
                                <div class="skill-progress" data-skill="75%"> Laravel</div>
                            </div>
                           
                        </div>
                    </div>
                    <br>
                    <div class="row">
                         <div class="col-md-6 col-sm-9 col-xs-12">
                                <span style="font-size: 30px;font-weight: 800;">IT ASSOCIATE PARTNERS</span><br>
                              
                                <img src="<?php echo base_url();?>vendors/images/clients/thinkpalm.png" alt=""><br>
                                <label style="font-size: 25px;color: #fff; font-family: Georgia;">THINK PALM TECHNOLOGIES.</label><br><br><br><br>
                                 <img src="<?php echo base_url();?>vendors/images/clients/bell_logo.png" alt=""><br>
                                <label style="font-size: 25px;color: #fff; font-family: Georgia;">BELL TECHNOLABS.</label>
                                
                            </div>
                               
                              <div class="col-md-6 col-sm-9 col-xs-12">
                                <span style="font-size: 30px;font-weight: 800;">EDUCATIONAL ASSOCIATE PARTNERS</span><br>
                                <img src="<?php echo base_url();?>vendors/images/clients/almanarat.png" alt=""><br>
                                <label style="font-size: 25px;color: #fff; font-family: Georgia;">MANARAT ALMARIFA.</label><br><br><br><br>
                                <img src="<?php echo base_url();?>vendors/images/clients/future.png" alt=""><br>
                                <label style="font-size: 25px;color: #fff; font-family: Georgia;">FUTURE ABROAD.</label><br><br><br><br>
                                <img src="<?php echo base_url();?>vendors/images/clients/educare_trans.png"  style="width: 250px; height: 150px;"><br><br>
                                <label style="font-size: 25px;color: #fff; font-family: Georgia;">EDUCARE.</label>
                             </div>

                    </div>
                    <br>
                    <br>
                    <br>
                     <div class="connect">
                                <h3>Connect with us</h3>

                                <div class="social-shares">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/RITACITSOLUTION/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/#about-us-->


<!-- Team
================================================== -->
<!-- <div id="team-wrapper">
    <div id="team">
        <div class="inner-wrapper">
            <div class="row">
                <div class="container">
                    <h2>
                        Meet our Amazing
                        <span>
                          Team
                      </span>
                  </h2>

                  <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div id="team-container">
                            <ul id="team-items">
                                <?php
                                foreach($team as $team)
                                {
                                    ?>
                                    <li class="team-member">
                                        <div>
                                            <div class="img-wrapper">
                                                <img class="img-responsive" src="<?php echo base_url();?>vendors/images/team/<?php echo $team['image'];?>" alt="">
                                            </div>
                                            <div class="team-item-description">
                                                <div class="description">
                                                    <h3>
                                                        <?php echo $team['name'];?>
                                                    </h3>
                                                    <h4>
                                                        <?php echo $team['designation'];?>
                                                    </h4>
                                                </div>
                                                <div class="social social-shares">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-twitter">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-facebook">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-dribbble">
                                                                </i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-google-plus">
                                                                </i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                            <div class="clearfix">
                            </div>
                        </div>
                        <div class="team-directions">
                            <span class="prev-items rounded">
                              <i class="fa fa-angle-left">
                              </i>
                          </span>
                          <span class="next-items rounded">
                              <i class="fa fa-angle-right">
                              </i>
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
 </div>
</div> -->
<!--/#team-->




<!-- <div id="blog-wrapper">
    <div id="blog">
        <div class="inner-wrapper">
            <div class="row">
                <div class="container">
                    <h2>
                        Enroll now for our 
                        <span>
                         IT TRAININGS
                     </span>
                 </h2>

                 <div class="row">
                    <div class="col-md-4">
                      <h1>PHP TRAINING</h1>
                      <p>RITAC provides the PHP training at its best.From the basics to the expert level, through cutting-edge topics. In RITAC you can learn through real-time examples from our expert team.</p>

                      <h1>DATABASE TRAINING</h1>
                      <p>Learn how to use databases like SQL servers, Microsoft Access,Mongo db.</p>

                      <h1>JAVA,C,C++</h1>
                      <p>Learn the core of java,c,c++ and oop concepts which would lead you to shine in the future.</p>

                      <h1>WEB DEVELOPMENT</h1>
                      <p>RITAC provides a wide range of web development courses with latest frameworks.</p>

                      <h1>WEB DESIGNING</h1>
                      <p>The interactor between a user and a system-UI designer.In RITAC we provide a wide range of designing concepts.</p>

                      <h1>NETWORKING</h1>
                      <p>Todays employment market is both complex and competitive recruiting right candidate with right skills is crucial. We make this process hassle-free.</p>


                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <form id="it_form" method="post" enctype="multipart">
                        <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                      </div>
                      <div class="form-group">
                          <label for="pwd">Email:</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required="">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Phone:</label>
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required="">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Institution/Organization:</label>
                          <input type="text" class="form-control" id="institution" name="institution" placeholder="Enter Phone" required="">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Select your course:</label>
                        <select name="course" id="course" style="width: 100%; background-color: transparent;">
                            <option value="php" selected>PHP TRAINING</option>
                            <option value="database">DATABASE TRAINING</option>
                            <option value="java">JAVA,C,C++</option>
                            <option value="development">WEB DEVELOPMENT</option>
                            <option value="designing">WEB DESIGNING</option>
                            <option value="networking">NETWORKING</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Description:</label>
                        <textarea name="description" id="description" style="width: 100%;"></textarea>
                    </div>

                    <div class="form-group">
                        <label >Files(Photo and CV)</label>
                        <input type="file" name="userfile[]" multiple style="width: 100%;" required>
                        *File name shouldn't contain space, MAX 2GB
                    </div>
                    <input type="hidden" name="date" id="date" value="<?php  echo date("Y/m/d");?>">
                    <button type="submit" name="submit" class="btn btn-lg">Submit</button>
                </form>

            </div>

        </div>
        <div class="clearfix">
        </div>
    </div>
       </div>
    </div>
   </div>
  </div>
</div> -->
<!--/#blog-->


<!-- Training
================================================== -->
<div id="training-wrapper">
    <div id="training">
        <div class="inner-wrapper">
            <div class="row">
                <div class="container">
                    <h2>
                        Take a look to our 
                        <span>
                           Events
                       </span>
                   </h2>
                    <div class="row">
                       
                         <?php
                        foreach($gallery as $gal)
                        {
                           
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12" onclick="show_gallary(<?php echo $gal['id'];?>)" >
                        
                        <div class="service-box1 service-fold1" style="overflow: hidden;">
                            
                            <i class="hippo-icon-<?php echo $gal['icon'] ?>"></i>
                            <!-- <a href="#costumModal10" role="button" class="btn btn-default" data-toggle="modal"> -->
                            <h3><?php echo $gal['name'] ?></h3>

                            <p>
                                <?php echo $gal['date'] ?>
                            </p>
                           
                        </div>
                    
                    </div>


                    <?php
                      }
                     ?>
                </div>
                <h2>
                       Our upcoming
                        <span>
                           Events
                       </span>
                   </h2>
                <div class="row">
                   <div class="panel-group">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapse3">Higher education abroad</a><br>
                          <a data-toggle="collapse" href="#collapse3">28/04/2018 at ISC Abudhabi</a><br>
                          <a data-toggle="collapse" href="#collapse3">6.00 PM</a>
                      </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body" style="
    background-color: #b364b0;
"><p>
   We cordially invite you to attend a free seminar on GLOBAL EDUCATION OPPORTUNITIES in Medicine, Engineering and Business studies.The seminar will cover all aspects related to higher studies in Europe.
</p></div>
                    
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- /#Training -->

<!-- stydy -->
<div id="study-wrapper">
    <div id="study">
        <div class="inner-wrapper">
            <div class="row">
                <div class="container">
                    <h2>
                        Enroll now for our 
                        <span>
                           STUDY ABROAD PROGRAM
                       </span>
                   </h2>
                   <div class="row">
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo base_url();?>vendors/images/slider/poland.jpg" alt="Los Angeles">
                      </div>

                      <div class="item">
                          <img src="<?php echo base_url();?>vendors/images/slider/hungary.jpg" alt="Chicago">
                      </div>

                      <div class="item">
                          <img src="<?php echo base_url();?>vendors/images/slider/canada.jpg" alt="New York">
                      </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                   </div>
                   <br>
                   <div class="row">
                    <div class="col-md-4">
                      <h1>STUDY MEDICINE</h1>
                      <h3>Study Medicine in Poland</h3>
                      <h3>Study Medicine in Hungary</h3>
                      <h3>Study Medicine in Moldova</h3>
                      <h3>Study Medicine in Canada</h3>
                     <h3>We are not limited.........</h3>
                              <br>
                     <h1>STUDY ENGINEERING</h1>
                      <h3>Study Engineering in Poland</h3>
                      <h3>Study Engineering in Canada</h3>
                      <h3>Study Engineering in India</h3>
                      <h3>Study Engineering in Australia</h3>
                      <h3>Study Engineering in Newsland</h3>
                     <h3>and much more.........</h3>
                              <br>
                     <h1>STUDY BUSINESS</h1>
                      <h3>Study Business in Canada</h3>
                      <h3>Study Business in Hungary</h3>
                      <h3>Harvard Business School</h3>
                      <h3>University of Pennsylvania</h3>
                     <h3>Still counts.........</h3>
                      

                      


                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <form id="study_form" method="post" enctype="multipart">
                        <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" name="name"  required>
                      </div>
                      <div class="form-group">
                          <label for="pwd">Email:</label>
                          <input type="text" class="form-control" id="email" name="email"  required="">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Phone:</label>
                          <input type="text" class="form-control" id="phone" name="phone"  required="">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Institution/Organization:</label>
                          <input type="text" class="form-control" id="institution" name="institution"  required="">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Select your course:</label>
                        <select name="course" id="course" style="width: 100%; background-color: transparent;">
                            <option value="medicine" selected>STUDY MEDICINE</option>
                            <option value="engineering">STUDY ENGINEERING</option>
                            <option value="business">STUDY BUSINESS</option>
                            <option value="others">OTHERS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Description:</label>
                        <textarea name="description" id="description" style="width: 100%;"></textarea>
                    </div>

                    <div class="form-group">
                        <label >Files(Photo and CV)</label>
                        <input type="file" name="userfile[]" multiple style="width: 100%;">
                        *File name shouldn't contain space,MAX 2GB
                    </div>
                    <input type="hidden" name="date" id="date" value="<?php  echo date("Y/m/d");?>">
                    <button type="submit" name="submit" class="btn btn-lg">Submit</button>
                </form>

            </div>

        </div>
        <div class="clearfix">
        </div>
    </div>
     </div>
   </div>
  </div>
 </div>
</div>

<!--/#study-->


<!-- /#career -->

<div id="career-wrapper">
    <div id="career">
        <div class="inner-wrapper">
            <div class="row">
                <div class="container">
                    <h2>
                        Check out our latest
                        <span>
                          Careers
                      </span>
                  </h2>
                  <p>Explore internships and jobs at RITAC & RITAC TECHNOLABS. Each location offers a wide range of opportunities.</p>
                  <h3>Make a difference by your way</h3>
                  <p>Work where you are inspired to explore your passions & dreams, where your talents & Creativeness are nurtured and cultivated. Innovate with edge technologies on some of the coolest projects you can never imagine. And get the tools, that you need to keep learning and growing so you stay continually ahead of the game while making a difference in this world.
                  “The talent recruited and developed by businesses will play a major role in achieving economic independence.”</p>
                  <div class="row">
                    <div class="col-md-5">
                     <div class="panel-group" id="accordion">
                        <?php    
                        $i=1;
                        foreach($careers as $car)
                        {
                            ?>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i?>"><h1><?php echo $car['left_heading'];?></h1><?php echo $car['left_date'];?></a>
                              </h4>
                          </div>
                          <div id="collapse<?php echo $i?>" class="panel-collapse collapse">
                            <div class="panel-body"><h3><?php echo $car['right_heading'];?></h3><p><?php echo $car['right_content'];?></p></div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
        </div>

        <div class="col-md-2">
        </div>

        <div class="col-md-5">
            <div class="row">
                <form id="career_form" method="post" enctype="multipart">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                      <label for="pwd">Email:</label>
                      <input type="text" class="form-control" id="email" name="email" required="">
                  </div>
                  <div class="form-group">
                      <label for="pwd">Phone:</label>
                      <input type="text" class="form-control" id="phone" name="phone" required="">
                  </div>
                  <div class="form-group">
                      <label for="pwd">Position applying for:</label>
                      <input type="text" class="form-control" id="position" name="position"  required="">
                  </div>


                  <div class="form-group">
                    <label for="pwd">Description:</label>
                    <textarea name="description" id="description" style="width: 100%;"></textarea>
                </div>

                <div class="form-group">
                    <label >Resume</label>
                    <input type="file" name="userfile[]" style="width: 100%;">
                    *File name shouldn't contain space, MAX 2GB
                </div>
                <input type="hidden" name="date" id="date" value="<?php  echo date("Y/m/d");?>">
                <button type="submit" name="submit" class="btn btn-lg">Submit</button>
                <!-- <p>Also send CV with cover letter and position as subject to<a href="mailto:careers@ritactechnolabs.com">careers@ritactechnolabs.com</a></p> -->
                </form>
            </div>
        </div>
         <div class="clearfix">
        </div>

    </div>
     </div>
    </div>
  </div>
 </div>
</div>
<!--/#career-->

<!-- Contact
================================================== -->
<div id="contact-wrapper">
    <div id="contact">
        <div class="inner-wrapper">
            <div class="row">
                <div class="container">
                    <h2><span>Contact us</span> Now</h2>

                    <div class="row">
                        <div class="col-md-12">
                            
                                <div id="map" style="width:100%;height:300px;background:yellow">                                   
                                
                            </div>
                            <div class="contact-info">
                                <ul>
                                    <li class="first">
                                        <p><i class="fa fa-map-marker fa-2"></i> Royal International Training and Consultancy(RITAC)</p>

                                        <p> P.O.Box:53031, Office No:M-03,BLD No:p/343,Behind UAE Exchange,Shabia-10,Mussafah,Abu Dhabi,UAE.</p>
                                    </li>
                                    <li class="second">
                                        <p><i class="fa fa-phone fa-2"></i>+97126710212,+971507809135,<br>+971552595064</p>

                                        <p><i class="fa fa-envelope fa-2"></i> info@ritactechnolabs.com </p>
                                        <p><i class="fa fa-globe fa-2"></i> www.ritactechnolabs.com </p>
                                    </li>
                                    <li class="third">
                                        <p><i class="fa fa-home fa-2"></i> Our Another Wing</p>

                                        <p> RITAC TECHNOLABS PVT. LTD.<br>KOCHI<br> KERALA INDIA.</p>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="message-box">
                                <h3>Send Message</h3>

                                <form id="mail_form" method="post" enctype="multipart">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Name" id="name_contact" name="name_contact" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Email" id="email_contact" name="email_contact" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" placeholder="Subject" id="subject_contact" name="subject_contact">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="readmore send-button"
                                                   value="Send Message" >SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/#contact-wrapper-->
</div>
<!--/.body-wrapper-->

<!-- Bottom
================================================== -->
<div id="bottom">
    <div class="row">
        <a id="to-top" href="#main-slider"><i class="fa fa-long-arrow-up"></i></a>

        <div class="container">
            <div class="col-xs-6">
                <div class="social-shares">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/RITACITSOLUTION/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="copyright">
                    <p>Copyright &copy; 2018 RITAC / Design by <a href="http://ritactechnolabs.com" style="color: #ffc312;">RITAC IT TEAM</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/#bottom-->

<!-- Modal Window
================================================== -->
<div id="modal-window-wrapper" class="blog-style">
    <div id="modal-window" class="left-top-fold">
        <div id="modal-window-box">
            <div class="inner-wrapper">
                <div class="row">
                    <div id="modal-window-content" class="container">
                        <div>
                            <!-- Modal window contents goes here -->
                        </div>
                    </div>
                    <div class="modal-loading">Loading...</div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-overlay"></div>
</div><!--/#Modal Window-->


<!--  IT MODAL   -->

<div id="itModal" class="modal fade" role="dialog" style="z-index:  100001 !important;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: green;">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div> -->
      <div class="modal-body">
        <p>Thankyou!! We will get back to you soon!!!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--  /IT MODAL  -->
 <div id="costumModal10" class="modal fade" data-easein="bounceIn">
            <div class="modal-dialog" id="service_modal_dialog">
                <div class="modal-content" id="service_modal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                          <h4 id="modal_header"></h4>
                    </div>
                    <div class="modal-body">
  
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
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


                        <p id="modal_description">
                           
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">
                            Close
                        </button>
                        <a class="btn btn-success" id="enroll" href="<?php echo base_url();?>/#study-wrapper">ENROLL NOW</a>
                       
                    </div>
                </div>
            </div>
        </div>


        <div id="show_gallary" class="modal fade" data-easein="bounceIn" style="z-index: 100001;">
            <div class="modal-dialog" id="service_modal_dialog">
                <div class="modal-content" id="service_modal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                          <h4 id="gal_modal_header"></h4>
                    </div>
                    <div class="modal-body">
  
                        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel2" data-slide-to="1"></li>
                              <li data-target="#myCarousel2" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                              <div class="item active">
                                <img id="gl1" style="width:50%;">
                            </div>

                            <div class="item">
                                <img id="gl2"  style="width:50%;">
                            </div>

                            <div class="item">
                                <img id="gl3"  style="width:50%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>


                        <p id="gal_modal_description">
                           
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">
                            Close
                        </button>
                       
                    </div>
                </div>
            </div>
        </div>






</div>
<!--/.body-inner-wrapper-->

    <script src="<?php echo base_url();?>vendors/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>vendors/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>vendors/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>vendors/js/jquery.bxslider.js"></script>
    <script src="<?php echo base_url();?>vendors/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url();?>vendors/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>vendors/js/themehippo.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
    <script src="<?php echo base_url();?>vendors/js/script.js"></script>

    <!-- SERVICES MODALS -->
    <script>
    function show(id)
    {
        
         $.ajax({
                                        url: "<?php echo base_url();?>home/fetch_service_modal/"+id,// url to your upload process file

                                        type: "POST",
                                        dataType:'json',
                                        
                                        contentType: false,
                                        cache: true,
                                        processData:false,        // tell jQuery not to set contentType
                                        success: function(data)
                                        {   
                                              
                                              var img = data[0].image.split(",");
                                             
                                            $("#costumModal10").modal('show');

                                           $("#modal_description").html(data[0].description);
                                                 
                                           if(data[0].name == 'HIGHER EDUCATION ABROAD')  
                                           {
                                              $("#enroll").show();

                                           }
                                           else
                                           {
                                            $("#enroll").hide();
                                           }
                                            $("#modal_header").html(data[0].name);
                                             $("#sl1").attr("src", "<?php echo base_url()?>vendors/images/slider/"+img[0]);
                                             $("#sl2").attr("src", "<?php echo base_url()?>vendors/images/slider/"+img[1]);
                                             $("#sl3").attr("src", "<?php echo base_url()?>vendors/images/slider/"+img[2]);
                                          
                                        }
                                   });
    }  

    </script>
    <!--///////// SERVICE MODAL///////// -->
    <script>
        function show_gallary(id)
        {

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
                                             
                                            $("#show_gallary").modal('show');

                                           $("#gal_modal_description").html(data[0].description);
                                            $("#gal_modal_header").html(data[0].name);
                                             $("#gl1").attr("src", "<?php echo base_url()?>gallery/"+img[0]);
                                             $("#gl2").attr("src", "<?php echo base_url()?>gallery/"+img[1]);
                                             $("#gl3").attr("src", "<?php echo base_url()?>gallery/"+img[2]);
                                            
                                                      
                                          
                                          
                                        }
                                   });
            
        }
    </script>

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

    <script>
    $(document).ready(function(){
          $("#enroll").hide();
         $("#itModal").modal('hide');
        $("#it_form").on('submit', function(e){
  
            e.preventDefault();
            var temp=0;
            var data = new FormData($(this))
                                  $.ajax({
                                        url: "<?php echo base_url();?>home/save_it",// url to your upload process file

                                        type: "POST",
                                        dataType:'json',
                                        data:  new FormData(this),
                                        contentType: false,
                                        cache: true,
                                        processData:false,        // tell jQuery not to set contentType
                                        success: function(data)
                                        {   
                                           $("#itModal").modal('show');
                                           window.location.href = "<?php echo base_url();?>home";
                                        }
                                   });

        });
    });
    </script>
    <script>
    $(document).ready(function(){
         $("#itModal").modal('hide');
        $("#training_form").on('submit', function(e){
  
            e.preventDefault();
            var temp=0;
            var data = new FormData($(this))
                                  $.ajax({
                                        url: "<?php echo base_url();?>home/save_training",// url to your upload process file

                                        type: "POST",
                                        dataType:'json',
                                        data:  new FormData(this),
                                        contentType: false,
                                        cache: true,
                                        processData:false,        // tell jQuery not to set contentType
                                        success: function(data)
                                        {   
                                           $("#itModal").modal('show');
                                           window.location.href = "<?php echo base_url();?>home";
                                        }
                                   });

        });
    });
    </script>

     <script>
    $(document).ready(function(){
         $("#itModal").modal('hide');
        $("#study_form").on('submit', function(e){
  
            e.preventDefault();
            var temp=0;
            var data = new FormData($(this))
                                  $.ajax({
                                        url: "<?php echo base_url();?>home/save_higher",// url to your upload process file

                                        type: "POST",
                                        dataType:'json',
                                        data:  new FormData(this),
                                        contentType: false,
                                        cache: true,
                                        processData:false,        // tell jQuery not to set contentType
                                        success: function(data)
                                        {   
                                           $("#itModal").modal('show');
                                           window.location.href = "<?php echo base_url();?>home";
                                        }
                                   });

        });
    });
    </script>

    <script>
    $(document).ready(function(){
         $("#itModal").modal('hide');
        $("#career_form").on('submit', function(e){
  
            e.preventDefault();
            var temp=0;
            var data = new FormData($(this))
                                  $.ajax({
                                        url: "<?php echo base_url();?>home/save_career_applications",// url to your upload process file

                                        type: "POST",
                                        dataType:'json',
                                        data:  new FormData(this),
                                        contentType: false,
                                        cache: true,
                                        processData:false,        // tell jQuery not to set contentType
                                        success: function(data)
                                        {   
                                           $("#itModal").modal('show');
                                          
                                        }
                                   });

        });
    });

     $("#mail_form").on('submit', function(e)
     {
   
        var temp=0;
        var name=$("#name_contact").val();
        var email=$("#email_contact").val();
        var subject=$("#subject_contact").val();
        var message=$("#message").val();
       
        
    
            $.ajax({
                      url: "<?php echo base_url();?>home/save_details",
                      type: "POST",
                      async:false,
                      data: {name:name,email:email,subject:subject,message:message},
                      success: function(data)
                      {  
                          $("#itModal").modal('show');
                        
                      }
               });  
         });
         
    
   
    </script>
    <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+971507809135", // WhatsApp number
            // company_logo_url: "//royaltechlab.com/public/style/images/logo5.png", // URL of company logo (png, jpg, gif)
            // greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<!-- WhatsHelp.io widget -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ab244ce4b401e45400debd4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->




</body>
</html>
