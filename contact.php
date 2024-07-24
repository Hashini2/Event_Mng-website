<!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4">
                    	 <h1 class="text-uppercase  font-weight-bold text-white" style="text-shadow: 3px 3px 3px #000;">Contact Us</h1>
                        <hr class="divider my-4" />
                    </div>
                </div>
            </div>
        </header>

    <section class="page-section" style="background:#fff">
        <div class="container">

<div class="container my-5">
  
  <div class="row justify-content-center">
    

<div class="container">

<div class="row">

<div class="col-md-8">
<h1>
Contact Us</h1>
<form name="contact-form" action="" method="post" id="contact-form">
<div class="form-group">
<label for="Name">Name</label>
<input type="text" class="form-control" name="your_name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" name="your_email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="Phone">Phone</label>
<input type="text" class="form-control" name="your_phone" placeholder="Phone" required>
</div>
<div class="form-group">
<label for="comments">Comments</label>
<textarea name="comments" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"></textarea> 
</div>

<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
</form>
<br>
<div class="response_msg "></div>
</div>
<div class="col-md-4">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58638733147!2d79.77380281149222!3d6.922001981751521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1685856604497!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
</div>
</div>
<script>
$(document).ready(function(){

});
</script>

  <script type="text/javascript">
    $.validator.setDefaults( {
      submitHandler: function () {
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_email']").val() === '')
{
$("#contact-form [name='your_email']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(9000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}

});
}
});

$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});

      }
    } );

    $( document ).ready( function () {
      $( "#contact-form" ).validate( {
        rules: {
          your_name: "required",
      your_email: {
        required: true,
        email: true
      },
      your_phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
        number: true
      },comments: "required",
         
        },
        messages: {
          your_name: "Please enter your your_name",


      your_email: "Please enter a valid email address",
      your_phone: {
        required: "Please enter a phone number",
        minlength:"please enter valid phone number",
        maxlength:"please enter valid phone number",
        number:"please enter valid phone number"
      },
                comments: "Please enter your your_name",

        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
       
      } );

      
    } );
  </script>
  </div>
</div>

        </div>
        </section>