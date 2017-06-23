<html lang="en">
	<head>
	<title>Services</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/logo3.png" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact-form.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
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
<body class="index-4">
<!--==============================header=================================-->
<header id="header">
	<?php include("menu.php"); ?>
</header>

<!--=======content================================-->
<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>A propos de nous</span></h2>
					</header>
				</div>
				<div class="grid_4">
					<div class="img_container"><img src="images/index-1_img-1.jpg" alt="img"></div>
				</div>
				<div class="grid_7 preffix_1">
					<p>Nous sommes une petite équipe composée de six développeurs, fort de nos plusieurs projets menés à bien nous avons réflechis à un nouveau concept de site en ligne permettant l'échange de services <br> avec un système de point innovant les gens peuvent se rendrent services et reçevoir des services en retour.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div id="notreLocalisation" class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Notre localisation</span></h2>
					</header>
					<div class="content_map">
						<div class="google-map-api"> 
							<div id="map-canvas" class="gmap"></div> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div id="nousContacter" class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Nous contacter</span></h2>
					</header>
					<h3><span>Email :</span></h3>
					<h4><span>webbteam1@gmail.com</span></h4>
					<h3><span>Téléphone :</span></h3>
					<h4><span>06 87 35 76 22</span></h4>
				</div>
			</div>
		</div>
	</div>
</section>

<!--=======footer=================================-->
<footer id="footer">
	<?php include("footer.php"); ?>
</footer>
<script type="text/javascript">
	google_api_map_init();
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(parseFloat(50.280228), parseFloat(3.967399999999998));
		var markCoord1 = new google.maps.LatLng(parseFloat(50.280228), parseFloat(3.967399999999998));
		var marker;
		
		function initialize() {
			var mapOptions = {
				zoom: 14,
				center: coordData,
				scrollwheel: false,
			}

			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
			
			marker = new google.maps.Marker({
				map:map,
				position: markCoord1,
			});

			google.maps.event.addDomListener(window, 'resize', function() {
				map.setCenter(coordData);
				var center = map.getCenter();
			});
		}

		google.maps.event.addDomListener(window, "load", initialize); 

	}

</script>
</body>
</html>