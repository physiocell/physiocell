<?php include('header.php') ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

<div class="servicesmain">
<div style="background:#f1f0f0;">
<div class="aboutone pb40">
        <div class="container">
            <h1 class="sectiontitle yellowcolor pt20 pb10"><big>Get In Touch.</big></h1>
        </div>
        <div class="container">
        <div class="row mb40">
            <div class="col-md-12">
                <h3 class="sectiontitle mb40">Are you a corporate?</h3>
                <div class="formmain">
                    <form method="POST" id="contpopup">
                    <div class="row">
                          <div class="col-md-5">
                            <div class="mb10">
                             <input type="text"  id="company_name" name="company_name" placeholder="Company Name*">
                             <p class="form-error" id="company_name_error" style="display:none;">Please Enter Company Name</p>
                            </div>
                            <div class="mb10">
                                <input type="email" id="email_address" name="email_address" placeholder="Email Address*">
                                <p class="form-error" id="email_address_error" style="display:none;">Please Employee Name</p>
                            </div>
                            <div class="mb10">
                                <input type="number" id="phone_no"  name="phone_no" placeholder="Phone Number*">
                                <p class="form-error" id="phone_no_error" style="display:none;">Please Enter Phone No</p>
                            </div>
                            <div>
	                            <input type="number"  id="emp_strength" name="emp_strength" placeholder="Employee Strength*">
	                            <p class="form-error" id="emp_strength_erro" style="display:none;">Please Inert Employee Strength</p>
                            </div>
	                        </div>
                        <div class="col-md-7">
                            <textarea placeholder="Your Message*" name="your_message" id="your_message"></textarea>
                             <p class="form-error" id="your_message_error" style="display:none;">Please Enter Message</p>
                        </div>   
                     
                    </div>
                    <div class="text-center mt10">
                        <button  type="button" onclick="contspopup()">SUBMIT</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
<section class="homethree contactyellowform mb60">
  <div class="container">
    <h3 class="sectiontitle mb40">Are you a health care professional?</h3>
    <div class="formmain">
          <form method="POST" id="contProfession">
        <div class="row">
            <div class="col-md-5">
                <div class="mb10">
                      <input type="text"  id="company_name_p" name="company_name_p" placeholder="Company Name*">
                      <p class="form-error" id="company_name_error_p" style="display:none;">Please Enter Company Name</p>
                  </div>
                  <div class="mb10">
                        <input type="email" id="email_address_p" name="email_address_p" placeholder="Email Address*" >
                        <p class="form-error" id="email_address_error_p" style="display:none;">Please Employee Name</p>
                    </div>
                    <div class="mb10">
                        <input type="number" id="phone_no_p"  name="phone_no_p" placeholder="Phone Number*">
                        <p class="form-error" id="phone_no_error_p" style="display:none;">Please Enter Phone No</p>
                    </div>
                    <div>
                        <input type="text"  id="your_profession_p" name="your_profession_p" placeholder="Your  Profession*">
                        <p class="form-error" id="your_profession_error_p" style="display:none;">Please Enter Profession </p>
                    </div>
              <!--   <input type="text" placeholder="Company Name*" id="name" class="mb10">
                <input type="text" placeholder="Email Address*" class="mb10">
                <input type="text" placeholder="Phone Number*" class="mb10">
                <input type="text" placeholder="Your Profession*"> -->
            </div>
            <div class="col-md-7">
                <textarea placeholder="Your Message*" name="your_message_p"></textarea>
                 <p class="form-error" id="your_message_error_p" style="display:none;">Please Enter Message </p>
            </div>
        </div>
        </form>
        <div class="text-center mt10">
            <button   type="button" onclick="contProfession()">SUBMIT</button>
        </div>
    </div>
  </div>
</section>
</div>
<section class="mt40 mb40 maplast">
    <div class="container text-center">
        <!-- <img src="images/map.png"> -->
        <div class="text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.3132571819347!2d73.8986129144066!3d18.469464525556777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea661ba3fed5%3A0xca1fedd733557200!2sBIZZBAY%20Mall!5e0!3m2!1sen!2sin!4v1620051393974!5m2!1sen!2sin" width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <p class="mt40"><a href="tel:8446844645"><i class="fa fa-phone" aria-hidden="true"></i> +91 8446844645</a></p>
        <p class="mt10"><a href="mailto:varun.patidar@physiocell.com"><i class="fa fa-envelope" aria-hidden="true"></i> varun.patidar@physiocell.com</a></p>

    </div>
</section>
</div>

<script>
function contspopup(e){


 if($("#company_name").val() == ""){
        $('#company_name_error').fadeIn();
        var validcmppopup = false;
    }else {
        var validcmppopup = true;
        $('#company_name_error').fadeOut();
    }
    if($("#email_address").val() == ""){
        var validAddress =false;
        $('#email_address_error').fadeIn();

    }else {
        var validAddress = true;
        $('#email_address_error').fadeOut();
    }
    if($("#phone_no").val() == ""){
        $('#phone_no_error').fadeIn();
        var validPhone = false;
    }else {
        var validPhone = true;
        $('#phone_no_error').fadeOut();
    }
    if($("#emp_strength").val() == ""){
        $('#emp_strength_erro').fadeIn();
        var valid_emp_strength = false;
    }else {
        var valid_emp_strength = true;
        $('#emp_strength_erro').fadeOut();
    }

if(validcmppopup && validAddress && validPhone && valid_emp_strength){
    frm = $('#contpopup')[0];
    var d = $.ajax({
        type:'POST',
        dataType:'json',
        url:'sendmail.php',
        data: new FormData(frm),
        processData: false,
        contentType: false,
        success:function(data)
        {

            if(data.status)
            {
                return true;
            }
        },
        error:function(data)
        {
        }
    })
    
        if(d)
        {
         setTimeout(function () {
            alert('Thank you for your response. Someone from the team will be in touch with you soon!');
            location.reload(true);
          }, 500);
           
        }
    
}
}


function contProfession(e){


 if($("#company_name_p").val() == ""){
        $('#company_name_error_p').fadeIn();
        var validcmppopup = false;
    }else {
        var validcmppopup = true;
        $('#company_name_error_p').fadeOut();
    }
    if($("#email_address_p").val() == ""){
        var validAddress =false;
        $('#email_address_error_p').fadeIn();

    }else {
        var validAddress = true;
        $('#email_address_error_p').fadeOut();
    }
    if($("#phone_no_p").val() == ""){
        $('#phone_no_error_p').fadeIn();
        var validPhone = false;
    }else {
        var validPhone = true;
        $('#phone_no_error_p').fadeOut();
    }
    if($("#your_profession_p").val() == ""){
        $('#your_profession_error_p').fadeIn();
        var valid_emp_profession = false;
    }else {
        var valid_emp_profession = true;
        $('#your_profession_error_p').fadeOut();
    }

if(validcmppopup && validAddress && validPhone && valid_emp_profession){
    frm = $('#contProfession')[0];
    var d = $.ajax({
        type:'POST',
        dataType:'json',
        url:'sendmail_profession.php',
        data: new FormData(frm),
        processData: false,
        contentType: false,
        success:function(data)
        {

            if(data.status)
            {
                return true;
            }
        },
        error:function(data)
        {
        }
    })
    
        if(d)
        {
         setTimeout(function () {
            alert('Thank you for your response. Someone from the team will be in touch with you soon!');
            location.reload(true);
          }, 500);
           
        }
    
}
}
</script>

<?php include('footer.php') ?>