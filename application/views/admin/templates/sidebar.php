<!-- NAV SIDE -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <?php 
                $url = $_SERVER['REQUEST_URI'];
                $url = trim($url);
                $url = explode('/', $url);
                $page_name = end($url);
                ?>
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url();?>assets/admin/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="<?php if($page_name == 'application') {echo 'active-menu';}?>"  href="<?php echo base_url();?>home/application"><i class="fa fa-dashboard fa-3x"></i> DASHBOARD</a>
                    </li>   
                    <li>
                        <a class=""  href="<?php echo base_url();?>home/index" target='_blank'><i class="fa fa-globe fa-3x"></i> SITE</a>
                    </li>		
                    <li>
                        <a class="<?php if(($page_name == 'enter_careers') || ($page_name == 'edit_careers') || ($page_name == 'add_careers')){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/enter_careers"><i class="fa fa-briefcase fa-3x"></i> CAREERS</a>
                    </li>
                       <li>
                        <a class="<?php if(($page_name == 'services') || ($page_name == 'edit_services') || ($page_name == 'add_services')){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/services"><i class="fa fa-cogs fa-3x"></i> SERVICES</a>
                    </li>
                    <li>
                        <a class="<?php if(($page_name == 'gallary') || ($page_name == 'edit_gallary') || ($page_name == 'add_gallary')){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/gallary"><i class="fa fa-picture-o fa-3x"></i> GALLERY</a>
                    </li>
                    <li>
                        <a class="<?php if(($page_name == 'events') || ($page_name == 'edit_event') || ($page_name == 'add_event')){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/events"><i class="fa fa-calendar fa-3x"></i> EVENTS</a>
                    </li>
                    <li>
                        <a class="<?php if(($page_name == 'projects') || ($page_name == 'edit_projects') || ($page_name == 'add_projects')){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/projects"><i class="fa fa-desktop fa-3x"></i> PROJECTS</a>
                    </li>
                      <li>
                        <a class="<?php if(($page_name == 'team') || ($page_name == 'edit_team') || ($page_name == 'add_team')){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/team"><i class="fa fa-users fa-3x"></i> TEAM</a>
                    </li>
                    <li>
                        <a class="<?php if(($page_name == 'partners') || ($page_name == 'view_partner')){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/partners"><i class="fa fa-handshake-o fa-3x"></i> PARTNER APPLICATIONS</a>
                    </li>
                     <li>
                        <a class="<?php if($page_name == 'higherview'){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/higherview"><i class="fa fa-graduation-cap fa-3x"></i> HIGHER EDUCATION ABROAD</a>
                    </li> 

                    <li>
                        <a class="<?php if($page_name == 'career_application_view'){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/career_application_view"><i class="fa fa-tasks fa-3x"></i>CAREER APPLICATIONS</a>
                    </li>
                    <li>
                        <a class="<?php if($page_name == 'contacts'){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/contacts"><i class="fa fa-phone fa-3x"></i>CONTACT ENQUIRY</a>
                    </li>
                    <li>
                        <a class="<?php if($page_name == 'trainingview'){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/trainingview">
                            <i class="fa fa-certificate fa-3x"></i> TRINING & ORIENTATION</a>
                    </li>
                    <li>
                        <a class="<?php if($page_name == 'itview'){echo 'active-menu';}?>"  href="<?php echo base_url();?>home/itview"><i class="fa fa-code fa-3x"></i> IT APPLICATIONS</a>
                    </li>											                     	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->