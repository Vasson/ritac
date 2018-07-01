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
