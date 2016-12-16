<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Project Three</title>

		<link rel="stylesheet" href="css/long-scrolly.css">
		<link rel="stylesheet" href="css/portfolio.css" type="text/css" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans" rel="stylesheet">		
		<script src="js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/filterable.pack.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/styles.css">

	
</head>

<body>

			
 <!-- Navigation -->
<?php
$page = 'contact'; 
include "inc/nav.php"; 
?>			
	<!-- Contact Form -->
	<section id="third">
		
		<div class="container">	
		
			<div class="content">
			
				<div class="form-style">
				
					<h1 class="down-placement">Contact Form</h1>
					
						<p>
							Please fill in all of the text fields.
						</p>

						<form method="post" action="database-write.php" name="myForm" onsubmit="return(validate() & validateEmail() );" >
			
							<div>
								<label>First Name:</label> 
								<input type="text" name="first_name" id="first_name">
							</div>


							<div>
								<label>Last Name:</label>
								<input type="text" name="last_name" id="last_name">
							</div>
							
							<div>
								<label>Telephone:</label>
								<input type="text" name="phone" id="phone">
							</div>							

							<div>
								<label>Your Email:</label>
								<input type="text" name="email" id="email">
							</div>
							
							<div>
								<br>
								<label>Your Message and/or Comments:</label>
								<br>
								<textarea name ="message" id="message"></textarea>
							</div>						
							
							<input type="submit" value="Send">
					
						</form>

						<p class="section-wrapper">
							Style idea borrowed from: <a href="https://www.sanwebe.com/2013/10/css-html-form-styles">https://www.sanwebe.com/2013/10/css-html-form-styles</a>
						</p>	
				
				</div> <!-- .form-style -->
					
			</div><!-- .content -->

		</div><!-- .container -->

	</section>        
<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.first_name.value == "" )
         {
            alert( "Please provide your first name!" );
            document.myForm.first_name.focus() ;
            return false;
         }
		 
         if( document.myForm.last_name.value == "" )
         {
            alert( "Please provide your last name!" );
            document.myForm.last_name.focus() ;
            return false;
         }		 

         if( document.myForm.phone.value == "" )
         {
            alert( "Please provide your telephone number!" );
            document.myForm.phone.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
		 
         if( document.myForm.message.value == "" )
         {
            alert( "Please provide a comment or a message!" );
            document.myForm.message.focus() ;
            return false;
         }
		                
         return( true );
      }
	  
      function validateEmail()
      {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }	  
	  
   //-->
</script>


<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>



</body>

</html>