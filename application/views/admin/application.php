<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Dashboard</title>
    <!-- /. HEADER  -->
        <?php $this->load->view('admin/templates/header'); ?> 
    <!-- /. HEADER  -->
</head>
<body>
    <div id="wrapper">
        <!-- /. NAV TOP  -->
        <?php $this->load->view('admin/templates/navbar'); ?> 
        <!-- /. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <?php $this->load->view('admin/templates/sidebar'); ?> 
        <!-- /. NAV SIDE  -->
        
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Royal Admin. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                      <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-red set-icon">
                            <i class="fa fa-envelope-o"></i>
                        </span>
                        <div class="text-box" >
                            <p class="main-text"><?php echo count($contacts);?> Contact</p>
                            <p class="text-muted">Enquiry</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">           
                      <div class="panel panel-back noti-box">
                          <span class="icon-box bg-color-green set-icon">
                          <i class="fa fa-bars"></i>
                          </span>
                        <div class="text-box" >
                          <p class="main-text"><?php echo count($career);?> Career</p>
                          <p class="text-muted">Application</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">           
                      <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-blue set-icon">
                        <i class="fa fa-bell-o"></i>
                        </span>
                        <div class="text-box" >
                          <p class="main-text"><?php echo count($higher);?> Education Abroad</p>
                          <p class="text-muted">Application</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">           
                      <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-brown set-icon">
                        <i class="fa fa-rocket"></i>
                        </span>
                        <div class="text-box" >
                          <p class="main-text"><?php echo count($partners);?> Partner</p>
                          <p class="text-muted">Application</p>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /. ROW  -->           
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
  <!-- /. WRAPPER  -->

  <!-- /. FOOTER  -->
      <?php $this->load->view('admin/templates/footer'); ?> 
  <!-- /. FOOTER  -->
</body>
</html>
