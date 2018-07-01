<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Partners</title>
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
                     <h2>VIEW PARTNER APPLICATION</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
              
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <!--<div class="panel-heading">

                        </div>-->
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tbody>
                                        <?php
                                        $i=1; 
                                      foreach($partners as $partner)
                                         {
                                         ?>
                                         <tr class="odd gradeX">
                                            <th>Title</th><td><?php echo $partner['title'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Name</th><td><?php echo $partner['name'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Email</th><td><?php echo $partner['email'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Phone</th><td><?php echo $partner['phone'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Address</th><td><?php echo $partner['address'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Company</th><td><?php echo $partner['company'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Website</th><td><?php echo $partner['website'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>City</th><td><?php echo $partner['city'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>State</th><td><?php echo $partner['state'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Company Established Year</th><td><?php echo $partner['company_year'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>No. of Customers</th><td><?php echo $partner['customers'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>No. of Employees</th><td><?php echo $partner['employees'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Parent Company</th><td><?php echo $partner['parent'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Sister Company</th><td><?php echo $partner['sister'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Details of prior experience in any ERP/HRMS or accounting software</th><td><?php echo $partner['experience'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>What is driving interest in RITAC</th><td><?php echo $partner['intrest'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Please describe the geographical territory in which you are proposing to sell RITAC products:</th><td><?php echo $partner['sell_area'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>What other partnerships does your company have</th><td><?php echo $partner['other_partnership'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Which RITAC softwares solutions are you interested in reselling:</th><td><?php echo $partner['item'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Partnership model interested:</th><td><?php echo $partner['modal'];?></td>
                                        </tr>
                                        <tr><th>Key Contact 1</th><td></td></tr>
                                        <tr class="odd gradeX">
                                            <th>Name</th><td><?php echo $partner['contact_name1'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Email</th><td><?php echo $partner['contact_tel1'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Phone</th><td><?php echo $partner['contact_email1'];?></td>
                                        </tr>
                                        <tr><th>Key Contact 2</th><td></td></tr>
                                        <tr class="odd gradeX">
                                            <th>Name</th><td><?php echo $partner['contact_name2'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Email</th><td><?php echo $partner['contact_tel2'];?></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <th>Phone</th><td><?php echo $partner['contact_email2'];?></td>
                                        </tr>

                                         <?php 
                                         $i++;
                                          } 
                                         ?>
                                    </tbody>
                                </table>
                                <a href='<?php echo base_url();?>home/partners' class="btn btn-default custom-btn">Back</a>
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
       </div>
     <!-- /. WRAPPER  -->
   </div>
<!-- /. FOOTER  -->
    <?php $this->load->view('admin/templates/footer'); ?> 
<!-- /. FOOTER  -->
</body>
</html>
