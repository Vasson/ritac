<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Edit Projects</title>
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
         <h2>EDIT PROJECTS</h2>   
           
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
              foreach($projects as $projects)
              {
              ?>
             <form id="add_services" method="post" enctype="multipart">
              <div class="form-group">
                <label for="name">Enter project name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $projects['name'];?>" required>
              </div>
              <div class="form-group">
                <label for="description">image:</label>
                <img src="<?php echo base_url();?>/vendors/images/projects/<?php echo $projects['image'];?>" required>
                <input type="file" name="userfile[]" multiple style="width: 100%;">
            *File name shouldn't contain space
              </div>
              <div class="form-group">
                <label for="icon">description:</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo $projects['description'];?>" required>
              </div>
              <input type="hidden" value="<?php echo $projects['id'];?>" name="cid" id="cid">
              <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
               <a href='<?php echo base_url();?>home/projects' class="btn btn-default custom-btn">Back</a>
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
   <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
  </div>
<!-- /. WRAPPER  -->
</div>

<!-- /. FOOTER  -->
    <?php $this->load->view('admin/templates/footer'); ?> 
<!-- /. FOOTER  -->

<script>
    $(document).ready(function(){
        $("#add_services").on('submit', function(e){
            e.preventDefault();
            var temp=0;
            var data = new FormData($(this))
            $.ajax({
                        url: "<?php echo base_url();?>home/update_projects",// url to your upload process file
                        type: "POST",
                        dataType:'json',
                        data:  new FormData(this),
                        contentType: false,
                        cache: true,
                        processData:false,        // tell jQuery not to set contentType
                        success: function(data)
                        {  
                           window.location.href = "<?php echo base_url();?>home/projects";
                        }
                   });
        });
    });
</script>
</body>
</html>
