<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Project Three</title>
	

    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans" rel="stylesheet">		
	
</head>

<body>

<!-- Navigation -->

<?php 
$page = 'home';
include "inc/nav.php"; 
?>



    <!-- Top Section -->
	

		<section id="first">

		
		
			<div class="container">
			
				<div class="one">


			
				
					<h1>Relax like a Cat</h1>
					
				</div> <!--one -->	

				<div class="content">
					
					<div class="layout">
					
						<div class="two">
						
						<p>
							Now you too can rest assured that your website construction will go smoothly from start to finish.
						</p>
						
						</div> <!--.two -->
						
						<div class="three">
						
						<p>
							We can make the process for creating a high quality website effortless for you, the customer.
						</p>
						
						</div> <!--.three -->				

						<div class="two">
						
						<p>
							Catering to all types of businesses, Bloggers, or anyone who would like their own website.
						</p>
						
						</div> <!--.two -->
						
					</div> <!--.layout -->

					

				</div><!-- .content -->

		   </div><!-- .container -->

		</section>

		<!-- Second Section -->
		<section id="second">
			<div class="container">

				<h1>Accomplishments</h1>
				
					<p>You can expect the following skills:</p>

				<div class="content">
				
					<div class="wrap-one">				
				
						<h2>HTML & CSS</h2>
						
							<img src="images/html.jpg" alt="html symbol">
							
							<p>
								Clean, semantically correct HTML and well-organized CSS in order to improve code readability and to easily make changes to the code.
							</p>
				
			
						<h2>PHPmyadmin</h2>
						
							<img src="images/phpmy.png" alt="my PHP Admin symbol">	
							
							<p>
								Competent use of PHPmyadmin for the creation of effective forms and database systems for collection and reporting of information.
							</p>				
					
						<h2>PHP</h2>               

							<img src="images/php.png" alt="php symbol">	
							
							<p>
								Use of PHP includes to simplify changes to navigation menus and other items that remain static on multiple pages. This allows for almost effortless future updates.
							</p>				
											
					
					</div> <!-- .col -->

				</div><!-- .content -->

		   </div><!-- .container -->

		</section>

		<!-- Third Section -->
		<section id="third">
			<div class="container">

				<h1>Accomplishments/Skills Continued</h1>

				<div class="content">
				
					<div class="wrap-one">
				
						<h2>WordPress CMS</h2>

							<img src="images/wp.png" alt="word press symbol">
							
							<p>
								Careful creation of WordPress blogs and websites to allow for easier client use and for maintainability.
							</p>	
							
						<h2>JavaScript & JQuery</h2>
						
							<img src="images/js.png" alt="javascript symbol">
							
							<p>
								Appropriate usage of jQuery to simplify and speed up development and design aspects of website creation. And, of course, application of JavaScript to add behavioral elements.
							</p>						
						
						<h2>Design Fundamentals</h2>	

							<img src="images/color.jpg" alt="design choices">
							
							<p>
								Basic design abilities to bring together elements for a comprehensive color palette and layout that will not hurt your eyes (or make you vomit). 
							</p>						

					</div> <!--.wrap-one -->
						
				</div><!-- .content -->

		   </div><!-- .container -->

		</section>
		

	
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