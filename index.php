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

            <h1>Details</h1>

            <div class="content">

                

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Third Section -->
    <section id="third">
        <div class="container">

            <h1>More Info</h1>

            <div class="content">
			


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