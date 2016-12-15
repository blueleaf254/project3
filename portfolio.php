<!doctype html>

<html>
	<head>
	
		<meta charset="utf-8">
		<title>Portfolio</title>


		<link rel="stylesheet" href="css/portfolio.css" type="text/css" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans" rel="stylesheet">	
		<script src="js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/filterable.pack.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/styles.css">
	
	</head>
	
	<body>
	
    <!-- Navigation -->
<?php 
$page = 'portfolio';
include "inc/nav.php"; 
?>	

		<h1>Portfolio - Examples of Work</h1>
		
			<div class="wrapper" id="contentWrapper">
				<div class="boundingBox" id="content">


					<ul id="portfolio-filter">
						<li><a href="#all" title="">All</a></li>
						<li><a href="#design" title="" rel="design">Design</a></li>
						<li><a href="#partner" title="" rel="partner">Agency Partner</a></li>						
						<li><a href="#nonprofit" title="" rel="nonprofit">Non-Profit</a></li>
						<li><a href="#business" title="" rel="business">Business</a></li>
						<li><a href="#cms" title="" rel="cms">CMS</a></li>
						<li><a href="#jquery" title="" rel="jquery">jQuery</a></li>

					</ul>
				
					<ul id="portfolio-list">
						<li style="display: block;" class="business design partner jquery">
							
							<a href="http://www.urcsc170.org/tanacker/lab09/" title="test"><img src="portfolio_files/swiss.jpg" alt=""></a>
							
							<p>
								An example that uses a Z-pattern design.
							</p>
						</li>
						
						<li style="display: block;" class="nonprofit partner cms">
							
							<a href="http://www.urcsc174.org/tanacker/lab11/" title=""><img src="portfolio_files/wordpress.jpg" alt=""></a>
							
							<p>
								An example of a WordPress blog.
							</p>
						</li>
												
							<li class="nonprofit">
								
								<a href="http://www.urcsc170.org/tanacker/lab01/" title=""><img src="portfolio_files/basic.jpg" alt=""></a>
								
								<p>
									An example of a basic informational/brochure website.
								</p>
								
						</li>
						
						<li class="nonprofit design">
						
							<a href="http://www.urcsc170.org/tanacker/lab06/" title=""><img src="portfolio_files/nyc.jpg" alt=""></a>
								<p>
									Example of a governmental website.
								</p>
						</li>	

						<li class="design">
						
							<a href="http://www.urcsc170.org/tanacker/lab00/" title=""><img src="portfolio_files/materialize.jpg" alt=""></a>
								<p>
									Example of a website using the Materialize framework.
								</p>
						</li>

						<li class="design">
						
							<a href="http://www.urcsc170.org/tanacker/lab03/" title=""><img src="portfolio_files/bootstrap.jpg" alt=""></a>
								<p>
									Example a website using the Bootstrap framework.
								</p>
						</li>
						
					</ul>
		
				</div>	<!-- .boundingBox -->
			</div> <!--.wrapper -->	
		
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-499901-76']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
	</body>


</html>		