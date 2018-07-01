<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Edit Career</title>
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
                     <h2>EDIT CAREER</h2>   
                       
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
                             $right_content = '';
                                 foreach($careers as $car)
                                 {

                                   $right_content.=$car["right_content"];
                            ?>
                         <form id="add_services" method="post">
                          <div class="form-group">
                            <label for="name">Enter Main Date:</label>
                            <input type="date" class="form-control" id="left_date" name="left_date" value="<?= date('Y-m-d', strtotime($car['left_date'])); ?>" style="width:17%;">
                          </div>

                           <div class="form-group">
                            <label for="name">Enter Main Heading:</label>
                            <input type="text" class="form-control" id="left_heading" name="left_heading" value="<?php echo $car['left_heading'];?>">
                          </div>

                           <div class="form-group">
                            <label for="name">Enter Inside Heading:</label>
                            <input type="text" class="form-control" id="right_heading" name="right_heading" value="<?php echo $car['right_heading'];?>">
                          </div>

                           <div class="form-group">
                            <label for="name">Enter Inside Content:</label>
                            <!--<input type="text" class="form-control" id="right_content" name="right_content" value="<?php echo $car['right_content'];?>">-->
                            <div id="txtEditor" name="txtEditor" data-target="content">
                              </div>
                          </div>
                          
                          <input type="hidden" value="<?php echo $car['id'];?>" name="cid" id="cid">
                          <input type="hidden" value="" name="right_content" id="right_content">
                          <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
                          <a href='<?php echo base_url();?>home/enter_careers' class="btn btn-default custom-btn">Back</a>
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

        
        var content = "<?php echo addslashes($right_content)?>";

        $("#txtEditor").Editor();
        $('#txtEditor').Editor("setText",content);

        $("#add_services").on('submit', function(e){

            var text = $('#txtEditor').Editor("getText");
            $("#right_content").val(text);
            e.preventDefault();
            var temp=0;
            var data = new FormData($(this))
            $.ajax({
                      url: "<?php echo base_url();?>home/update_careers",// url to your upload process file
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
