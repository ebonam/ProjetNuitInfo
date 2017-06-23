<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Resultat recherche</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/logo3.png" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
		

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/script.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
	 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		 <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	 </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
	</head>
<body class="index-2">
<!--==============================header=================================-->
<header id="header">
	<?php include("menu.php"); ?>
</header>

<!--=======content================================-->

<section id="content">
	
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12 copyright">
					<br>
					<h2><span>Résultat de votre recherche :</span></h2>		
					<!--<h4><a href="#"> Un problème, une solution près de chez vous! </a></h4>
				-->
					<div class="container">
					<!--<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed rabitur vel lorem sit amet nulla ullamcorper fermentum. <br><br>In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
						<?php
						
						include ("profil.php");
						
						?>
	
		
					<!--<a href="#" class="btn">more</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>
<br>
<br>
<br>
</section>

<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12 copyright">
				<h2><span>Follow Us</span></h2>
				<a href="https://www.facebook.com/WebB12Team/?skip_nax_wizard=true" class="btn bd-ra"><span class="fa fa-facebook"></span></a>
				<a href="https://www.tumblr.com/" class="btn bd-ra"><span class="fa fa-tumblr"></span></a>
				<a href="https://accounts.google.com/SignUp?service=oz&continue=https%3A%2F%2Fplus.google.com%2Fgetstarted%3Ffww%3D1%26gpsrc%3Dgplp0&hl=fr" class="btn bd-ra"><span class="fa fa-google-plus"></span></a>
				<pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
			</div>
		</div>
	</div>
	<div class="footer_bottom"><a href="http://www.templatemonster.com/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>
<script>
	$(function(){
		$('#touch_gallery a').touchTouch();
	});
</script>
</body>
</html>