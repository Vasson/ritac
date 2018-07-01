<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Edit Gallery</title>
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
                     <h2>EDIT GALLERY</h2>   
                       
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
                                   foreach($gallary as $gal)
                                   {

                                    $images = explode(',', $gal['image']);
                                    
                                ?>

                         <form id="edit_gallary" method="post" enctype="multipart">
                          <div class="form-group" style="width:17%;">
                            <label for="name">Enter date:</label>
                            <input type="date" class="form-control" id="gal_date" name="gal_date" value="<?php echo $gal['date'];?>" required>
                          </div>
                          <div class="form-group">
                            <label for="name">Enter name:</label>
                            <input type="text" class="form-control" id="gal_name" name="gal_name" value="<?php echo $gal['name'];?>" required>
                          </div>
                          <!--<div class="form-group">
                            <label for="name">Enter icon:</label>
                            <input type="text" class="form-control" id="gal_icon" name="gal_icon" value="<?php echo $gal['icon'];?>">
                          </div>-->
                          <div class="form-group">
                            <label for="description">image:</label>
                            <input type="file" name="userfile[]"  multiple style="width: 100%;" required>
                          *File name shouldn't contain space
                          </div>
                          <div class="form-group">
                            <?php foreach($images as $image){?>
                            <a href="<?php echo base_url('assets/gallery/').$image;?>" data-lightbox="events" class="link-preview" title="Preview">
                            <img src="<?php echo base_url("assets/gallery/").$image;?>" style="width:100px;height: 100px;">
                            </a>
                            <?php } ?>
                          </div>
                          <div class="form-group">
                            <label for="icon">description:</label>
                            <input type="text" class="form-control" id="gal_description" name="gal_description" value="<?php echo $gal['description'];?>" required>
                          </div>
                          <input type="hidden" value="<?php echo $gal['id'];?>" name="cid" id="cid">
                          <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
                          <a href='<?php echo base_url();?>home/gallary' class="btn btn-default custom-btn">Back</a>
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
    $("#edit_gallary").on('submit', function(e){
        e.preventDefault();
        var temp=0;
        var data = new FormData($(this))
        $.ajax({
                url: "<?php echo base_url();?>home/update_gallary",// url to your upload process file
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
