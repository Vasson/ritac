<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Career Application View</title>
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
                     <h2>CAREER APPLICATIONS</h2>   
                       
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
                                            <th>Position</th>
                                            <th>Description</th>
                                            <th>Docs</th>
                                            <th>Date</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1; 
                                         foreach($career_applications as $car)
                                         {
                                            $images=explode(',', $car['image']);
                                            $count=count($images);
                                         ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $car['name'];?></td>
                                            <td><?php echo $car['email'];?></td>
                                            <td class="center"><?php echo $car['phone'];?></td>
                                            <td><?php echo $car['position'];?></td>
                                            <td><?php echo $car['description'];?></td>
                                       <td>
                                       <?php
                                       for($i=0;$i<$count;$i++)
                                       {
                                        $image_types = array('gif','jpg','jpeg','png');
                                        $ext = strtolower(pathinfo( $images[$i], PATHINFO_EXTENSION));
                                       ?>
                                        <a href="<?php echo base_url();?>assets/career_doc/<?php echo $images[$i];?>" download>
                                            <?php echo $images[$i];
                                            if (in_array($ext, $image_types)) { ?>
                                            <img src="<?php echo base_url();?>assets/career_doc/<?php echo $images[$i];?>" style="width:50px;height:50px;">
                                            <?php } ?>
                                        </a><br/>
                                       <?php
                                       }
                                       ?>
                                       <td><?php echo $car['date'];?></td>
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
