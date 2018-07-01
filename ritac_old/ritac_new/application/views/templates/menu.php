<!--==========================
    Header
  ============================-->
  
    <div class="header-outer">
      
        <div class="pi-section-w pi-section-dark container">

    <div class="pi-section pi-row-sm con">

      <div class="pi-row-block pi-row-block-txt">
        <i class="pi-row-block-icon fa fa-phone pi-icon-base pi-icon-square"></i>
        <strong>+971-26710212</strong>
      </div>

      <div class="pi-row-block pi-row-block-txt pi-hidden-xs"><i class="pi-row-block-icon fa fa-envelope pi-icon-base pi-icon-square"></i><a href="mailto:info@ritactechnolabs.com">info@ritactechnolabs.com</a>
      </div>

      <div class="pi-row-block pi-pull-right pi-hidden-2xs">
        <ul class="pi-social-icons pi-stacked pi-jump pi-full-height pi-bordered pi-small pi-colored-bg clearFix">
          <li><a href="https://www.facebook.com/RITACITSOLUTION/?ref=br_rs" target="_blank" class="pi-social-icon-facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://plus.google.com/+RITAC" target="_blank" class="pi-social-icon-gplus"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="https://www.linkedin.com/in/ritac-technolabs-6119b4162/" target="_blank" class="pi-social-icon-linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
       </div>
    </div>
    <header id="header">
      <div class="container">
      <div id="logo" class="pull-left">
        <!--<h1><a href="#intro" class="scrollto">BizPage</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro"><img src="<?php echo base_url('assets/img/web logo.png');?>" alt="" title="" /></a>
      </div>
      <div class="pull-right row-block-menu">
        <?php $url = $_SERVER['REQUEST_URI'];
        $url = trim($url, '/');
        $array = explode('/',$url);
        $page_name = end($array);
        $career_active = "";
        $partner_active = "";
        $home_active = "";
        if($page_name == "careers"){
          $career_active = "menu-active";
          $home_active = "";
        }else if(($page_name == "become_a_partner") || ($page_name == "partner_modal")){
          $partner_active = "menu-active";
          $home_active = "";
        }
         else{
          $home_active = "menu-active";
        }
        ?>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="<?php echo $home_active ?>" ><a href="<?php echo base_url()?>#intro">Home</a></li>
          <li><a href="<?php echo base_url()?>#about">About Us</a></li>
          <li><a href="<?php echo base_url()?>#services">Services</a></li>
          <li><a href="<?php echo base_url()?>#facts">Study Abroad</a></li>
          <li class="menu-has-children <?php echo $partner_active ?>"><a href="#clients">Partners</a>
            <ul class="submenu">
              <li><a href="<?php echo base_url('home/become_a_partner')?>">Become A Partner</a></li>
              <li><a href="<?php echo base_url('home/partner_modal')?>">Partnership Models</a></li>
              <li><a href="<?php echo base_url()?>#">Promoters</a></li>
              <li><a href="<?php echo base_url()?>#">Investores</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url()?>#events">Events</a></li>
          <li class="<?php echo $career_active ?>"><a href="<?php echo base_url('home/careers')?>">Careers</a></li>
          <li><a href="<?php echo base_url()?>#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </div>
  </header><!-- #header -->