<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Connexion</title>
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
<section>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					
					<h4><span> Connectez vous ! </span></h4>
					<table id="formulaireInscription">
				     	<tr><td><span class="libelleFormulaire">Login </td></tr>
				     	<tr><td> <input type="text" name="login" value="abcd123" /> </td></tr>

				        <tr><td><span class="libelleFormulaire">Mot de passe </span></td></tr>
				        <tr><td> <input type="password" name="mdp" value="1234"/> </td></tr>
					</table>
					<br>
					<h4><a href="#" class="myButton">Connexion</a></h4>
					<br>
					<br>
					<div>
						
						<p><h5>Ou si vous n'avez pas encore de compte :  <a href="inscription.php" class="myButton">Inscrivez vous</a></h5>
						
						</p>
					</div>
					
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
</body>
</html>