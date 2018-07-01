<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Add Gallery</title>
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
                     <h2>ADD GALLERY</h2>   
                       
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

                         <form id="add_gallary" method="post" enctype="multipart">
                          <div class="form-group" style="width: 17%">
                            <label for="name">Enter date:</label>
                            <input type="date" class="form-control" id="gal_date" name="gal_date" required="">
                          </div>
                          <div class="form-group">
                            <label for="name">Enter name:</label>
                            <input type="text" class="form-control" id="gal_name" name="gal_name" required="">
                          </div>
                          <!--<div class="form-group">
                            <label for="name">Enter icon:</label>
                            <input type="text" class="form-control" id="gal_icon" name="gal_icon">
                          </div>-->
                          <div class="form-group">
                            <label for="description">image:</label>
                            <input type="file" name="userfile[]"  multiple style="width: 100%;" required="" id="userfile">
                        *File name shouldn't contain space
                          </div>
                          <div class="form-group">
                            <div id="image_preview"></div>
                          </div>
                          <div class="form-group" style="clear: both;">
                            <label for="icon">description:</label>
                            <input type="text" class="form-control" id="gal_description" name="gal_description" required="">
                          </div>
                          <input type="hidden" value="0" name="img_count" id="img_count">
                          <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
                          <a href='<?php echo base_url();?>home/gallary' class="btn btn-default custom-btn">Back</a>
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

    if($("#img_count").val() == 0){
      $('#userfile').prop('required',true);
    }

    // Multiple images preview in browser
    $('#userfile').on('change', function() {
        if (this.files) {
            var filesCount = this.files.length;
            var img_count = $("#img_count").val();
            var img_new_count =  parseInt(filesCount) + parseInt(img_count);
            $("#img_count").val(img_new_count);
            var k = 1;
            for (i = 0; i < filesCount; i++) {
                var type = '"new"';
                //$('#image_preview').append("<div class='img-pos'><a href='"+URL.createObjectURL(event.target.files[i])+"' data-lightbox='events' class='link-preview' title='Preview'><span class='view icons' title='View' ><i class='fa fa-eye'></i></span></a><span class='close icons' title='Remove'>&times;</span><img src='"+URL.createObjectURL(event.target.files[i])+"' style='width:100px;height: 100px;'/></div>");
                k++;

                $(".close").click(function(){
                    $(this).parent(".img-pos").remove();
                    img_count_del = parseInt(img_new_count) - parseInt(1);
                    $("#img_count").val(img_count_del);
                });
            }
        }

    });

     
          $("#add_gallary").on('submit', function(e){

        
              e.preventDefault();
              var temp=0;
              var data = new FormData($(this))
              $.ajax({
                          url: "<?php echo base_url();?>home/submit_gallary",// url to your upload process file
                          type: "POST",
                          dataType:'json',
                          data:  new FormData(this),
                          contentType: false,
                          cache: true,
                          processData:false,        // tell jQuery not to set contentType
                          success: function(data)
                          {  
                             
                             window.location.href = "<?php echo base_url();?>home/gallary";
                          }
                     });

          });
    });
        </script>
    
   
</body>
</html>
