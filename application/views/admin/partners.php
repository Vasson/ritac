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
                     <h2>PARTNER APPLICATIONS</h2>   
                       
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
                                    <thead>
                                        <tr>
                                            <th>S.NO</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1; 
                                      foreach($partners as $partner)
                                         {
                                         ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $partner['name'];?></td>
                                            <td><?php echo $partner['email'];?></td>
                                            <td><?php echo $partner['phone'];?></td>
                                            <td> <a href="<?php echo base_url();?>home/view_partner/<?php echo $partner['id'];?>" class="btn btn-success btn-sm">
                                            <span class="glyphicon glyphicon-eye-open"></span> </a></td>
                                             
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
    </div>
    <!-- /. WRAPPER  -->
</div>

    <!-- /. FOOTER  -->
        <?php $this->load->view('admin/templates/footer'); ?> 
    <!-- /. FOOTER  -->
</body>
</html>
