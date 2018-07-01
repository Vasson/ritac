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
    <section id="partner" class="section-bg wow fadeInUp">  
      <div class="container">
        <div class="section-header">
          <h3>Become A Partner</h3>
          <p></p>
        </div>
          <div class="form">
            <form action="" method="post" role="form" class="careerForm" id="partner_form">
              <div id="sendmessage">Thankyou!! We will get back to you soon!!!</div>
                <div class="form-row">
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone" required/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="text" class="form-control" name="company" id="company" placeholder="Company"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="text" class="form-control" name="website" id="website" placeholder="Website"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-6">
                    <input type="text" class="form-control" name="city" id="city" placeholder="City"/>
                  </div>
                  <div class="form-group col-lg-6 col-md-6">
                    <input type="text" class="form-control" name="state" id="state" placeholder="State"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <textarea class="form-control" name="address" rows="5" placeholder="Address" id="address"></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="number" class="form-control" name="company_year" id="company_year" placeholder="Company Established Year"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="number" class="form-control" name="customers" id="customers" placeholder="Number of Customers"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="number" class="form-control" name="employees" id="employees" placeholder="Number of Employees"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-6">
                    <input type="text" class="form-control" name="parent" id="parent" placeholder="Parent Company (If Applicable)"/>
                  </div>
                  <div class="form-group col-lg-6 col-md-6">
                    <input type="text" class="form-control" name="sister" id="sister" placeholder="Sister Concerns (If Applicable)"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <input type="text" class="form-control" name="experience" id="experience" placeholder="Details of prior experience in any ERP/HRMS or accounting software"/>
                  </div>
                  <div class="form-group col-lg-12 col-md-12">
                    <textarea class="form-control" name="intrest" rows="5" placeholder="What is driving your interest in RITAC" id="intrest"></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <input type="text" class="form-control" name="sell_area" id="sell_area" placeholder="Please describe the geographical territory in which you are proposing to sell RITAC products:"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 col-md-12">
                    <input type="text" class="form-control" name="other_partnership" id="other_partnership" placeholder="What other partnerships does your company have"/>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6 col-md-6">
                    <label for="modal">Which RITAC softwares solutions are you interested in reselling:</label>
                    <select class="form-control" name="item" id="item" >
                        <option value="">--select--</option>
                        <option value="accounting">RITAC Accounting Application</option>
                        <option value="pos">RITAC POS System</option>
                        <option value="travels">RITAC Travels Application</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-6 col-md-6">
                    <label for="modal">Partnership model interested:</label>
                    <select class="form-control" name="modal" id="modal" >
                        <option value="">--select--</option>
                        <option value="reseller">RITAC Reseller Partner </option>
                        <option value="consultant">RITAC Consultant Partner</option>
                        <option value="refferal">RITAC Refferal Partner</option>
                        <option value="technology">RITAC Technology Partner</option>
                    </select>
                  </div>
                </div>

                <p>Key Contact 1</p>
                <div class="form-row">
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="text" class="form-control" name="contact_name1" id="contact_name1" placeholder="Name"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="number" class="form-control" name="contact_tel1" id="contact_tel1" placeholder="Tel"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="email" class="form-control" name="contact_email1" id="contact_email1" placeholder="Email"/>
                  </div>
                </div>

                <p>Key Contact 2</p>
                <div class="form-row">
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="text" class="form-control" name="contact_name2" id="contact_name2" placeholder="Name"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="number" class="form-control" name="contact_tel2" id="contact_tel2" placeholder="Tel"/>
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <input type="email" class="form-control" name="contact_email2" id="contact_email2" placeholder="Email"/>
                  </div>
                </div>

                <input type="hidden" name="date" id="date" value="<?php  echo date("Y/m/d");?>">
                <div class="text-center"><button class="btn btn-lg" type="submit">Submit</button>
                </div>
              </form>
            <div>
        </div>
    </section><!-- #contact -->
  </main>
<?php $this->load->view('templates/footer'); ?>
<!--  IT MODAL   -->

<div id="itModal" class="modal fade" role="dialog">
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

    <script>

    $(document).ready(function(){
    $('#sendmessage').hide();

    $("#partner_form").on('submit', function(e){
    e.preventDefault();
    var temp=0;
    var data = new FormData($(this))
          $.ajax({
                  url: "<?php echo base_url();?>home/partner_details",// url to your upload process file
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
                     setTimeout(function() {window.location = "<?php echo base_url('home/become_a_partner');?>";}, 10000); 
                    }
                  }
             });
          });
    });
    </script>
</body>
</html>
