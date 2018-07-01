<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RITAC Admin - Edit Event</title>
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
                     <h2>EDIT EVENT</h2>   
                       
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
                                  $description = '';
                                   foreach($events as $event)
                                   {

                                    $date = date("m/d/Y", strtotime($event['date'])); 
                                    $time = $event['time'];
                                    $datetime = $date.' '.$time;
                                    $description.= $event['description'];
                                  
                                ?>
                         <form id="edit_event" method="post" enctype="multipart">
                          <div class='input-group date form-group' id='datetimepicker1' style="width: 17%">
                            <label for="date" style="display: table-row;">Enter Date & Time:</label>
                            <input type='text' class="form-control" id="event_date" name="event_date" required="" value="<?php echo $datetime;?>"/>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                          </div>

                          <div class="form-group">
                            <label for="name">Enter Name:</label>
                            <input type="text" class="form-control" id="event_name" name="event_name" value="<?php echo $event['name'];?>" required>
                          </div>
                          <div class="form-group">
                            <label for="location">Enter Location:</label>
                            <input type="text" class="form-control" id="event_location" name="event_location" value="<?php echo $event['location'];?>" required>
                          </div>

                          <div class="form-group">
                            <label for="icon">Enter Description:</label>
                             <div id="txtEditor" name="txtEditor" data-target="content"></div>
                          </div>
                          <input type="hidden" value="<?php echo $event['id'];?>" name="cid" id="cid">
                          <input type="hidden" value="" name="event_description" id="event_description">
                          <button type="submit" name="submit" class="btn btn-default custom-btn">Submit</button>
                          <a href='<?php echo base_url();?>home/events' class="btn btn-default custom-btn">Back</a>
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

  $(function(){
        $('#datetimepicker1').datetimepicker({
          //format: 'YYYY-MM-DD hh:mm',
          minDate:new Date(),
          disabledDates: [new Date()]
        });


    });

  $(document).ready(function(){

      var text = "<?php echo addslashes($description) ?>";

      $("#txtEditor").Editor();
      $('#txtEditor').Editor("setText",text);

       $("#edit_event").on('submit', function(e){
          e.preventDefault();

          var text = $('#txtEditor').Editor("getText");
          $("#event_description").val(text);

          var temp=0;
          var data = new FormData($(this))
          $.ajax({
                  url: "<?php echo base_url();?>home/update_event",// url to your upload process file
                  type: "POST",
                  dataType:'json',
                  data:  new FormData(this),
                  contentType: false,
                  cache: true,
                  processData:false,        // tell jQuery not to set contentType
                  success: function(data)
                  {  
                     window.location.href = "<?php echo base_url();?>home/events";
                  }
                 });
      });
  });
</script>
</body>
</html>
