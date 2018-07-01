<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('templates/header'); ?>

<body>
<?php $this->load->view('templates/menu'); ?>
  
<section id="graph" class="masthead text-center text-white" style="background: url(../assets/img/graph.gif);">
  <div class="masthead-content">
    <div class="container">
      <h1 class="masthead-heading mb-0">Grow with us!!</h1>
      <h2 class="masthead-subheading mb-0">Earn with us!!</h2>
    </div>
  </div>
 
</section><!-- #graph -->

  <main id="main">
    <!--==========================
      Contact Section
    ============================-->
    <section id="career" class="section-bg wow fadeInUp">  
      <div class="container">
        <div class="section-header">
          <h3>Careers</h3>
          <p>Check out our latest careers</p>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-arrow-graph-up-right"></i></div>
            <h4 class="title">Make a difference by your way</h4>
            <p>Work where you are inspired to explore your passions & dreams, where your talents & Creativeness are nurtured and cultivated. Innovate with edge technologies on some of the coolest projects you can never imagine. And get the tools, that you need to keep learning and growing so you stay continually ahead of the game while making a difference in this world.</p><br/>
            <p class="text-center quote"><img src="<?php echo base_url('assets/img/quote-sign-left.png')?>" class="quote-sign-left" alt="">The talent recruited and developed by businesses will play a major role in achieving economic independence.<img src="<?php echo base_url('assets/img/quote-sign-right.png')?>" class="quote-sign-right" alt=""></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-search"></i></div>
            <h4 class="title">Current Openings</h4>
            <p>Explore internships and jobs at RITAC & RITAC TECHNOLABS. Each location offers a wide range of opportunities.</p>
            <?php    
            $i=1;
            foreach($careers as $car)
            {
            ?>
          <div class="panel-group" id="accordion-<?php echo $i;?>">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-<?php echo $i;?>" href="#collapse<?php echo $i?>">
                    <?php echo $car['left_heading'];?>
                    <?php echo $car['left_date'];?>
                  </a>
                </h4>
              </div>
              <div id="collapse<?php echo $i?>" class="panel-collapse collapse in">
                <div class="panel-body">
                  <h3 class="job-title"><?php echo $car['right_heading'];?></h3>
                  <?php echo $car['right_content'];?>
                </div>
              </div>
            </div>
          </div>
            <?php
              $i++;
            }
            ?>
          </div>
          <div class="form col-lg-6 col-md-6">
            <div class="icon"><i class="ion-edit"></i></div>
            <h4 class="title">Apply Now</h4>
            <form action="" method="post" role="form" class="careerForm" id="careerForm">
              <div id="sendmessage">Thank you!! We will get back to you soon!!!</div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone" required/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <input type="text" class="form-control" name="position" id="position" placeholder="Position Appliying For" required/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <textarea class="form-control" name="description" rows="5" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <label>Resume</label>
                    <input type="file" class="form-control" name="userfile[]" id="resume" required/>
                    <p class='note'>*File name shouldn't contain space, MAX 2GB</p>
                  </div>
                </div>
                <input type="hidden" name="date" id="date" value="<?php  echo date("Y/m/d");?>">
                <div class="text-center"><button class="btn btn-lg" type="submit">Apply</button></div>
              </form>
            <div>
        </div>
      <div>
    </section><!-- #contact -->
  </main>

<!--  IT MODAL   -->

<div id="itModal" class="modal fade" role="dialog" style="z-index:  100001 !important;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!--<h4 class="modal-title">Modal Header</h4>-->
      </div>
      <div class="modal-body">
        <p class="success">Thank you!! We will get back to you soon!!!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--  /IT MODAL  -->

  <?php $this->load->view('templates/footer'); ?>

  <script type="text/javascript">
    
        $(document).ready(function(){
          $('#sendmessage').hide();
      $("#careerForm").on('submit', function(e){
        e.preventDefault();


        var data = new FormData($(this))
        $.ajax({
            url: "<?php echo base_url('home/save_career_applications');?>",// url to your upload process file
            type: "POST",
            dataType:'json',
            data:  new FormData(this),
            contentType: false,
            cache: true,
            processData:false,        // tell jQuery not to set contentType
            success: function(data)
            {   
              if(data == 1){
                $('#careerForm').find("input, textarea").val("");
                $("#itModal").modal('show');
              setTimeout(function() {window.location = "<?php echo base_url('home/careers');?>";}, 10000);
              }
              
            }
        });
      });
    });
  </script>
</body>
</html>
