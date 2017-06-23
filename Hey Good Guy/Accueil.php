<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Accueil</title>
	<style>
</style>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/logo3.png" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<script src="notreCarte/cmap/France-map.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src='js/camera.js'></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/script.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
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
	
<body class="index">
	
<!--==============================header=================================-->
<header id="header">
		<?php include("menu.php"); ?>
</header>

<!--=======content================================-->
					
<section id="content">
	<div class="full-width-container block-1">
		<div class="camera_container">
			<div id="camera_wrap">
				<div class="item" data-src="images/index_img_slider-1.jpg">
					<div class="camera_caption fadeIn">
						<h3> A votre service !</h3>
						<p>Contact Us by</p>
						<a href="apropos.php#nousContacter" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
						<a href="apropos.php#nousContacter" class="btn bd-ra"><span class="fa fa-phone"></span></a>
						<a href="apropos.php#notreLocalisation" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
					</div>
				</div>
				<div class="item" data-src="images/index_img_slider-1.jpg">
					<div class="camera_caption fadeIn">
						<h3>Echangez comme jamais !</h3>
						<p>Contact Us by</p>
						<a href="apropos.php#nousContacter" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
						<a href="apropos.php#nousContacter" class="btn bd-ra"><span class="fa fa-phone"></span></a>
						<a href="apropos.php#notreLocalisation" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					
					<h4><span><a href="#"> Un problème, une solution près de chez vous ! </a></span></h4>
					<header>
						<h2><span><a href="recherche.php" class="myButton">Démarrer une recherche</a></span></h2>
					</header>
					
					
				<div class="container">
					<!--<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed rabitur vel lorem sit amet nulla ullamcorper fermentum. <br><br>In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->


					<!--<a href="#" class="btn">more</a>-->
				</div>
				</div>
			</div>
		</div>
	</div>


</section>


<!--=======footer=================================-->
<footer id="footer">
	<?php include("footer.php"); ?>
</footer>
<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '34.58333333333333%',
			thumbnails: false,
			pagination: true,
			fx: 'simpleFade',
			loader: 'none',
			hover: false,
			navigation: false,
			playPause: false,
			minHeight: "139px",
		});
	});
</script>
<script>
	$(document).ready(function() {
		$(".owl-carousel").owlCarousel({
			navigation: true,
			pagination: false,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [750,1],
			itemsMobile : [479,1],
			navigationText: false
		});
	});
</script>
<script>
	$(document).ready(function() { 
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>
</body>
</html>