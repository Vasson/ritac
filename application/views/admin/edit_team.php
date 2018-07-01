<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Edit Team</title>
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
                   <h2>EDIT TEAM</h2>   
                     
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
                                 <?php  
                                     foreach($team as $team)
                                     {
                                  ?>
                           <form id="add_team" method="post" enctype="multipart">
                            <div class="form-group">
                              <label for="name">Enter name:</label>
                              <input type="text" class="form-control" id="name" name="name" value="<?php echo $team['name'];?>" required>
                            </div>
                            <div class="form-group">
                              <label for="description">image:</label>
                              <input type="file" name="userfile[]" style="width: 100%;" required>
                          *File name shouldn't contain space
                            </div>
                            <div class="form-group">
                            <img src="<?php echo base_url("assets/img/team/").$team['image'];?>" style="width:100px;height: 100px;">
                          </div>
                            <div class="form-group">
                              <label for="icon">designation:</label>
                              <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $team['designation'];?>" required>
                            </div>
                            <input type="hidden" value="<?php echo $team['id'];?>" name="cid" id="cid">
                            <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
                            <a href='<?php echo base_url();?>home/team' class="btn btn-default custom-btn">Back</a>
                          </form>
                              <?php
                            }
                            ?>
                          </div>
                      </div>
                      <!--End Advanced Tables -->
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

<script>
  $(document).ready(function(){
      $("#add_team").on('submit', function(e){
          e.preventDefault();
          var temp=0;
          var data = new FormData($(this))
          $.ajax({
                  url: "<?php echo base_url();?>home/update_team",// url to your upload process file
                  type: "POST",
                  dataType:'json',
                  data:  new FormData(this),
                  contentType: false,
                  cache: true,
                  processData:false,        // tell jQuery not to set contentType
                  success: function(data)
                  {  
                     window.location.href = "<?php echo base_url();?>home/team";
                  }
                });

      });
  });
</script>
</body>
</html>
