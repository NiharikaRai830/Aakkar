<?php include_once('head.php');
include_once('header.php'); ?>
<section class="contact-us headings" style="background-image:url('images/contact.jpg');background-size:100% 800px;background-repeat:no-repeat;">
  <div class="text-heading">
    <div class="container">
      <!-- <h1 class="text-center">CONTACT US</h1> -->
    </div>
  </div>
</section>

<!-- START SECTION CONTACT -->
<section id="contact" class="contact">
  <div class="container">
    <div class="section-title ml-3">
      <h3>Have a Question?</h3>
      <h2>CONTACT US</h2>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="alert"></div>
        <form id="contactform" class="contact-form" method="post">
          <div id="success" class="successform">
            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="emai" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control numonly" name="mobile" id="mobile" placeholder="Mobile" maxlength="10" minlength="10">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subjects" id="subjects" placeholder="Subjects">
          </div>
          <div class="form-group">
            <textarea class="form-control textarea-custom input-full" id="comments" name="comments" rows="8" placeholder="Message"></textarea>
          </div>
          <div class="box bg-3">
            <button type="submit" class="button button--wayra button--border-thick button--text-upper button--size-s">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-md-4 info-touch">
        <h4>Keep In Touch</h4>
        <div class="my-info">
          <div class="in1">
            <div class="address">
              <p><i class="fa fa-map-marker" aria-hidden="true"></i>Pirmuhani, Kadamkuan Patna-800003</p>
            </div>
            <div class="email">
              <p><i class="fa fa-envelope" aria-hidden="true"></i> theaakkar@gmail.com</p>
            </div>
          </div>
          <div class="in1">
            <div class="phone">
              <p><i class="fa fa-phone" aria-hidden="true"></i> 87987297806</p>
            </div>
            <div class="whatssap">
              <p><i class="fa fa-whatsapp" aria-hidden="true"></i> 87987297806</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- START SECTION GOOGLE MAP -->
<!-- <div id="contact-map" class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798.9297087577693!2d85.14370660822453!3d25.60958731463696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed585e9115a597%3A0xd99577245c540c87!2sPirmuhani%2C%20Salimpur%20Ahra%2C%20Golambar%2C%20Patna%2C%20Bihar%20800001!5e0!3m2!1sen!2sin!4v1634032290706!5m2!1sen!2sin"  style="border:0;width:100%;height:500px;" allowfullscreen="" loading="lazy"></iframe>
        </div> -->
<?php include_once('footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('.alert').hide()
    $(".numonly").keypress(function(e) {
      var a = [];
      var k = e.which;
      if (k == 13) {} else {
        for (i = 48; i < 58; i++) a.push(i);
        if (!(a.indexOf(k) >= 0) && !(a.indexOf(k) == 13)) e.preventDefault();
      }
    });
    $("#contactform").validate({
      rules: {
        fullname: {
          required: true,
        },

        email: {
          required: true,
        },

        mobile: {
          required: true,
        }
      },

      messages: {
        fullname: {
          required: "Please Enter your fullname",
        },

        email: {
          required: "Please Enter your Email",
        },

        mobile: {
          required: "Please Enter Your Mobile",
        }
      },

      errorPlacement: function(label, element) {
        label.addClass("mt-2 text-danger");
        if (element.parent().hasClass("input-group")) {
          label.insertAfter(element.parent());
        } else {
          label.insertAfter(element);
        }
      },
      highlight: function(element, errorClass) {
        $(element).parent().addClass("has-danger");
        $(element).addClass("form-control-danger");
        $(element).next("label").remove();
      },
      unhighlight: function(element) {
        $(element).parent().removeClass("has-danger");
        $(element).addClass("form-control-danger");
        $(element).next("label").remove();
      },
      success: function(label, element) {
        $(element).removeClass("text-danger");
      },
      submitHandler: function() {
        $.ajax({
            url: "ajax/contact.php",
            type: "POST",
            dataType: "json",
            data: $("#contactform").serialize(),
          })

          .done(function(data) {
            // alert(data);
            if (data.success) {
              $(".alert").show().addClass("alert-info").text("Thank you sincerely for your kind visit.");
              $(".alert").fadeOut(6000);
              $("#contactform").trigger("reset");
            } else {
              $(".alert").show().addClass("alert-danger").text("Sorry we are Facing Issue Please Try Again Later");
              $(".alert").fadeOut(6000);
            }
            return false;
          })
          .fail(function(data) {
            $(".alert").show().addClass("alert-danger").text("we are Facing Issue Please Try Again Later");
            $(".alert").fadeOut(6000);
            return false;
          });
        return false;
      },
    });
  });
</script>