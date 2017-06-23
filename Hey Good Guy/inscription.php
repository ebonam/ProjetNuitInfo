<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Inscription</title>
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
		<form action="confirmationInscription.php" method="post">
        
        <div id = "formulaireInscription">
	        <div id = "libelleFormulaire">
	
					</br>

					<div class="gauche">Login*</br>
					<input type="text" name="login" value="abcd123" /></br>
					</br>
					E-mail*</br>
					<input type="text" name="email"value="dupond@gmail.com" /></br>
					</br>
					Mot de passe*</br>
					<input type="password" name="mdp" value="1234"/></br>
					</br>
					Confirmation*</br>
					<input type="password" name="mdpConfirmation" value="1234"/></br>
					</br>
					Date de naissance*</br>
					<select name="jour">
									<?php for($i = 1 ; $i <= 31 ; $i++){
										echo "<option value=$i>$i</option>";
									 }
									 ?>
							</select>
	
							<select name="mois">
									<?php for($i = 1 ; $i <= 12 ; $i++){
										echo "<option value=$i>$i</option>";
									 }
									 ?>
							</select>
	
							<select name="annee">
									<?php for($i = 1940 ; $i <= 2015 ; $i++){
										echo "<option value=$i>$i</option>";
									 }
									 ?>
							</select></br>
							</br>
							<h5>* : Champs obligatoire</h5> </br></div>



					
					
					
					<div class="droite"> Nom</br>
					<input type="text" name="nom" value="Dupond"/></br>
					</br>
					Prénom</br>
					<input type="text" name="prenom" value="jacques"/> </br>
					</br>
					Téléphone :</br>
					<input type="text" name="telephone" value="012345678911"/></br>
					</br>
					Code postal :</br>
					<input type="text" name="codePostal" value="59530"/></br>
					</br>
					Adresse :</br>
					<input type="text" name="adresse" value="adresse"/></br>
					</div> </br>

  
					</div>
					</br>			
					</br>


			</div>
		   </form>			

	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					
						<div class="centree">
							<h2><a href="#" class="myButton">Envoyer votre inscription</a></h2></br>
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