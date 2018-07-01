jQuery(document).ready(function($) {
  "use strict";

  //Contact
  $('form.contactForm').submit(function() {
    
    var str = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "home/save_details",
      data: str,
      success: function(msg) {
        //alert(msg);
        if (msg == 'OK') {
          $("#itModal").modal('show');
          //$("#sendmessage").addClass("show");
          $("#errormessage").removeClass("show");
          $('.contactForm').find("input, textarea").val("");
        } else {
          $("#sendmessage").removeClass("show");
          $("#errormessage").addClass("show");
          $('#errormessage').html(msg);
        }

      }
    });
    return false;
  });

});
