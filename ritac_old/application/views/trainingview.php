<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>vendors/public3/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>vendors/public3/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>vendors/public3/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?php echo base_url();?>vendors/public3/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ROYAL</a> 
            </div>
 <!--  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div> -->
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url();?>vendors/public3/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>

				
			 <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/index"><i class="fa fa-dashboard fa-3x"></i> SITE</a>
                    </li>       
                    <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/enter_careers"><i class="fa fa-dashboard fa-3x"></i> ENTER CAREERS</a>
                    </li>
                       <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/services"><i class="fa fa-dashboard fa-3x"></i> SERVICES</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/projects"><i class="fa fa-dashboard fa-3x"></i> PROJECTS</a>
                    </li>
                      <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/team"><i class="fa fa-dashboard fa-3x"></i> TEAM</a>
                    </li>
                     <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/itview"><i class="fa fa-dashboard fa-3x"></i> IT Applications</a>
                    </li>   
                    <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/trainingview"><i class="fa fa-dashboard fa-3x"></i> TRINING & ORIENTATION</a>
                    </li>
                     <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/higherview"><i class="fa fa-dashboard fa-3x"></i> HIGHER EDUCATION ABROAD</a>
                    </li> 

                    <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home/career_application_view"><i class="fa fa-dashboard fa-3x"></i>CAREER APPLICATIONS</a>
                    </li>                               

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PROJECTS</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            
                                            <th>Institution</th>
                                            <th>Course</th>
                                            <th>Description</th>
                                            <th>Docs</th>
                                            <th>Date</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1; 
                                         foreach($training as $train)
                                         {
                                            $images=explode(',', $train['image']);
                                            $count=count($images);
                                         ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $train['name'];?></td>
                                            <td><?php echo $train['email'];?></td>
                                            <td class="center"><?php echo $train['phone'];?></td>
                                            <td><?php echo $train['institution'];?></td>
                                            <td><?php echo $train['course'];?></td>
                                            <td><?php echo $train['description'];?></td>
                                       <td>
                                       <?php
                                       for($i=0;$i<$count;$i++)
                                       {
                                       ?>
                                        <a href="<?php echo base_url();?>/it_doc/<?php echo $images[$i];?>" download><?php echo $images[$i];?><img src="<?php echo base_url();?>/it_doc/<?php echo $images[$i];?>"></a>
                                       <?php
                                       }
                                       ?>
                                       <td><?php echo $train['date'];?></td>
                                        </tr>
                                         <?php 
                                         $i++;
                                          } 
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>vendors/public3/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>vendors/public3/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>vendors/public3/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>vendors/public3/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>vendors/public3/assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>vendors/public3/assets/js/custom.js"></script>
    
   
</body>
</html>
