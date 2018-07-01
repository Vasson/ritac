<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Add Team</title>
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
                     <h2>ADD TEAM</h2>   
                       
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

                         <form id="add_services" method="post" enctype="multipart">
                          <div class="form-group">
                            <label for="name">Enter name:</label>
                            <input type="text" class="form-control" id="name" name="name" required="">
                          </div>
                          <div class="form-group">
                            <label for="description">image:</label>
                            <input type="file" name="userfile[]" multiple style="width: 100%;" required>
                        *File name shouldn't contain space
                          </div>
                          <div class="form-group">
                            <label for="icon">designation:</label>
                            <input type="text" class="form-control" id="designation" name="designation" required>
                          </div>
                          
                          <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
                          <a href='<?php echo base_url();?>home/team' class="btn btn-default custom-btn">Back</a>
                        </form>
                            
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
                url: "<?php echo base_url();?>home/submit_team",// url to your upload process file
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
