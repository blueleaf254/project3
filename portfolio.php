<!doctype html>

<html>
	<head>
	
		<meta charset="utf-8">
		<title>Portfolio</title>

		<link rel="stylesheet" href="css/portfolio.css" type="text/css" media="screen">
		<script src="js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/filterable.pack.js" type="text/javascript" charset="utf-8"></script>
	
	</head>
	
	<body>
	
    <!-- Navigation -->
<?php 
include "inc/top.inc"; 
?>	
	
		<h1>Portfolio Page</h1>
		
			<div class="wrapper" id="contentWrapper">
				<div class="boundingBox" id="content">


					<ul id="portfolio-filter">
						<li><a href="#all" title="">All</a></li>
						<li><a href="#design" title="" rel="design">Design</a></li>
						<li><a href="#partner" title="" rel="partner">Agency Partner</a></li>
						<li><a href="#political" title="" rel="political">Political</a></li>
						<li><a href="#university" title="" rel="university">University</a></li>
						<li><a href="#nonprofit" title="" rel="nonprofit">Non-Profit</a></li>
						<li><a href="#business" title="" rel="business">Business</a></li>
						<li><a href="#econdev" title="" rel="econdev">Economic Development</a></li>
						<li><a href="#jquery" title="" rel="jquery">jQuery</a></li>

					</ul>
				
					<ul id="portfolio-list">
						<li style="display: block;" class="business ecommerce partner cms programming jquery search">
							
							<a href="http://www.urcsc170.org/tanacker/lab09/" title="test"><img src="portfolio_files/swiss1.jpg" alt=""></a>
							
							<p>
								An example that uses a Z-pattern.
							</p>
						</li>
						
						<li style="display: block;" class="nonprofit partner cms jquery">
							
							<a href="http://www.urcsc174.org/tanacker/lab11/" title=""><img src="portfolio_files/wordpress1.jpg" alt=""></a>
							
							<p>
								An example of a WordPress blog.
							</p>
						</li>
												
							<li class="business design">
								
								<a href="http://www.urcsc170.org/tanacker/lab01/" title=""><img src="portfolio_files/basic1.jpg" alt=""></a>
								
								<p>
									An example of a basic website.
								</p>
								
						</li>
						
						<li class="nonprofit university design cms jquery video">
						
							<a href="http://www.urcsc170.org/tanacker/lab06/" title=""><img src="portfolio_files/nyc1.jpg" alt=""></a>
								<p>
									Example of a government website.
								</p>
						</li>	

						<li class="nonprofit university design cms jquery video">
						
							<a href="http://www.urcsc170.org/tanacker/lab00/" title=""><img src="portfolio_files/materialize1.jpg" alt=""></a>
								<p>
									Example a website using Materialize framework.
								</p>
						</li>

						<li class="nonprofit university design cms jquery video">
						
							<a href="http://www.urcsc170.org/tanacker/lab03/" title=""><img src="portfolio_files/bootstrap1.jpg" alt=""></a>
								<p>
									Example a website using Bootstrap framework.
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