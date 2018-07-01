<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Add Career</title>
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
           <h2>ADD CAREER</h2>   
          </div>
        </div>
         <!-- /. ROW  -->
         <hr />

        <div class="row">
          <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <!--<div class="panel-heading"></div>-->
                <div class="panel-body">
                 <form id="add_services" method="post">
                  <div class="form-group" id='datetimepicker1'>
                    <label for="name">Enter Main Date:</label>
                    <input type="date" class="form-control" id="left_date" name="left_date" required style="width:17%;">
                  </div>
                   <div class="form-group">
                    <label for="name">Enter Main Heading:</label>
                    <input type="text" class="form-control" id="left_heading" name="left_heading" required>
                  </div>
                   <div class="form-group">
                    <label for="name">Enter Inside Heading:</label>
                    <input type="text" class="form-control" id="right_heading" name="right_heading" required>
                  </div>
                   <div class="form-group">
                    <label for="name">Enter Inside Content:</label>
                    <!--<input type="text" class="form-control" id="right_content" name="right_content" required>-->
                    <div id="txtEditor" required></div>
                  </div>
                  <input type="hidden" name="right_content" id="right_content">
                  <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
                  <a href='<?php echo base_url();?>home/enter_careers' class="btn btn-default custom-btn">Back</a>
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
</div>
<!-- /. WRAPPER  -->

<!-- /. FOOTER  -->
    <?php $this->load->view('admin/templates/footer'); ?> 
<!-- /. FOOTER  -->


<script>
$(document).ready(function(){

    $("#txtEditor").Editor();  

    $("#add_services").on('submit', function(e){
        e.preventDefault();

        var text = $('#txtEditor').Editor("getText");
        $("#right_content").val(text);

        var temp=0;
        var data = new FormData($(this))
        $.ajax({
                  url: "<?php echo base_url();?>home/submit_careers",// url to your upload process file
                  type: "POST",
                  dataType:'json',
                  data:  new FormData(this),
                  contentType: false,
                  cache: true,
                  processData:false,        // tell jQuery not to set contentType
                  success: function(data)
                  {  
                     window.location.href = "<?php echo base_url();?>home/enter_careers";
                  }
               });
    });
});
</script>
</body>
</html>
