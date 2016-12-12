<!doctype html>

<html>
	<head>
	
		<meta charset="utf-8">
		<title>Contact Page</title>
	
	</head>
	
	<body>
    <!-- Navigation -->
<?php 
include "inc/top.inc"; 
?>			
	<!-- Contact Form -->
				<h1>Contact Form</h1>

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
							<label for="telephone">Telephone:</label>
							<input type="tel" name="phone" id="phone">
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

					<p><a href="index.php">Return to Portfolio Page</a></p>	
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
	</body>


</html>