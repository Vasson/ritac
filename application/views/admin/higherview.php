<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Higher Education</title>
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
                     <h2>HIGHER EDUCATION ABROAD</h2>   
                       
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
                                         foreach($higher as $higher)
                                         {
                                            $images=explode(',', $higher['image']);
                                            $count=count($images);

                                         ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $higher['name'];?></td>
                                            <td><?php echo $higher['email'];?></td>
                                            <td class="center"><?php echo $higher['phone'];?></td>
                                            <td><?php echo $higher['institution'];?></td>
                                            <td><?php echo $higher['course'];?></td>
                                            <td><?php echo $higher['description'];?></td>
                                       <td>
                                       <?php
                                       for($i=0;$i<$count;$i++)
                                       {
                                       ?>
                                        <a href="<?php echo base_url();?>assets/it_doc/<?php echo $images[$i];?>" download>
                                            <?php echo $images[$i];
                                            $image_types = array('gif','jpg','jpeg','png');
                                            $ext = strtolower(pathinfo( $images[$i], PATHINFO_EXTENSION));
                                            if (in_array($ext, $image_types)) { ?>
                                            <img src="<?php echo base_url();?>assets/it_doc/<?php echo $images[$i];?>" style="width: 50px;height:50px;">
                                            <?php } ?>
                                        </a>
                                        <br/>
                                       <?php
                                       }
                                       ?>
                                       <td><?php echo $higher['date'];?></td>
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
