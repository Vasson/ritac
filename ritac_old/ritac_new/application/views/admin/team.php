<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Team</title>
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
                     <h2>TEAM</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
        <p><a href="<?php echo base_url();?>home/add_team" class="btn btn-default custom-btn"><i class="fa fa-plus-square"></i> Add</a></p>    
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
                                            <th>Image</th>
                                            <th>Designation</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1; 
                                      foreach($team as $team)
                                         {
                                         ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $team['name'];?></td>
                                            <td><a href="<?php echo base_url('assets/img/team/').$team['image'];?>" data-lightbox="events" class="link-preview" title="Preview" data-title="<?php echo $team['name']?>">
                                                <img src="<?php echo base_url();?>assets/img/team/<?php echo $team['image'];?>" style="width:50px;height: 50px;">
                                            </a>
                                            </td>
                                            <td class="center"><?php echo $team['designation'];?></td>
                                            <td> <a href="<?php echo base_url();?>home/edit_team/<?php echo $team['id'];?>" class="btn btn-success btn-sm" value="">
                                            <span class="glyphicon glyphicon-pencil"></span> </a></td>
                                            <td> <a href="<?php echo base_url();?>home/delete_team/<?php echo $team['id'];?>" class="btn btn-danger btn-sm" value="">
                                            <span class="glyphicon glyphicon-trash"></span> </a></td>
                                             
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
