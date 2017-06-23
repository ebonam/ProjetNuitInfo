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
	
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
					
						<h2><span> Nos valeurs</span></h2>

					</header>
					
					<h4>Un problème, une solution près de chez vous !</h4>
					<div>
						<br>
						<br>
						<br>
						<div id="maDivDroite" style="float:right;clear:right;">
							<form method="post" action="traitement.php">
							<p>
								<label for="Cat">Catégorie</label><br />
								<select name="Cat" id="Cat">
								<option value="france">Toutes</option>
								<option value="france">Informatique</option>
								<option value="espagne">Mécanique</option>
								</select>
							</p>
							</form>
							<br>
							<form method="post" action="traitement.php">
							 <p>
								<label>Compétence recherchée</label> : <input type="text" name="pseudo" />
							 </p>
							</form>
							<br>
							<br>
							<br>
							<h2><span><a href="resultatRecherche.php" class="myButton">Rechercher</a></span></h2>
						</div>

					</div>
					<div class="centre">
						<br>
					<!--<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed rabitur vel lorem sit amet nulla ullamcorper fermentum. <br><br>In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->

						<script>
							francefree();
						</script>
		
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

</body>
</html>