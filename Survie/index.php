<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>TsonGa</title>

<!-- Bootstrap core CSS -->
<link href="./dist/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="starter-template.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="./assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
include ('httpful.phar');

$uri = "https://api.cdiscount.com/OpenApi/json/Search";
$uriProduct = "https://api.cdiscount.com/OpenApi/json/GetProduct";
$api = "1187f984-ca43-4263-b389-ee75689542e7";

if (isset($_GET['id']))
{
	$pageNumber = $_GET['id'];
}
else
{
	$pageNumber = 0;
}

$toPost = array(
		"ApiKey" => $api,
		"SearchRequest" => array(
				"Keyword" => "trousse de soin",
				"SortBy" => "relevant",
				"Pagination" => array(
						"ItemsPerPage" => 6,
						"PageNumber" => $pageNumber
				)
		),
		"Filters" => array(
				"Price" => array(
						"Min" => null,
						"Max" => null
				)
		),
		"Navigation" => "",
		"IncludeMarketPlace" => false,
		"Condition" => null
);

$response = \Httpful\Request::put($uri)->sendsJson()->body(json_encode($toPost))->send();

$arr = json_decode($response, true);

$numberPage = $arr['PageCount'];

$products = $arr['Products'];

$objets = array();

foreach ($products as $product)
{
	
	$toPostProduct = array(
			"ApiKey" => $api,
			"ProductRequest" => array(
					"ProductIdList" => array(
							$product['Id']
					),
					"Scope" => array(
							"Offers" => false,
							"AssociatedProducts" => false,
							"Images" => true,
							"Ean" => false
					)
			)
	);
	
	$responseImage = \Httpful\Request::put($uriProduct)->sendsJson()->body(json_encode($toPostProduct))->send();
	
	$arrImage = json_decode($responseImage, true);
	
	$tempArray = array(
			'Brand' => $product['Name'],
			'Description' => $product['Description'],
			'productURL' => $product['BestOffer']['ProductURL'],
			'Id' => $product['Id'],
			'imageSrc' => $arrImage['Products'][0]['Images'][0]['ImageUrl'],
			'offerId' => $arrImage['Products'][0]['BestOffer']['Id']
	);
	array_push($objets, $tempArray);
}

?>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Accueil</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.html">Connexion</a></li>
							<li><a href="inscription.html">Inscription</a></li>
						</ul></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>



	<div class="container">

		<h2 class="form-signin-heading">Information</h2>

		<div class="row">
		<?php
		for ($i = 0; $i < ceil((count($products) / 2)); $i ++)
		{
			echo "<div style=\"max-height: 500px;\" class=\"col-sm-6 col-md-4\">";
			echo "<div style=\"height: 360px; width: 380px; overflow: auto;\" class=\"thumbnail\">";
			echo "<img data-src=\"holder.js/100%x200\" alt=\"100%x200\" src=\"" . $objets[$i]['imageSrc'] . "\" data-holder-rendered=\"true\" style=\"height: 140px; width: 50%; display: block;\">";
			echo "<div class=\"caption\">";
			echo "<h3> " . $objets[$i]['Id'] . "</h3>";
			echo "<p style=\"-webkit-line-clamp: 2; white-space: nowrap; overflow:hidden !important; text-overflow: ellipsis;\">" . $objets[$i]['Description'] . "</p>";
			echo "<p>";
			echo "<a target=\"_blank\" href=\"" . $objets[$i]['productURL'] . "\" class=\"btn btn-primary\" role=\"button\">Voir Article</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Ajouter au panier</a>";
			echo "</p>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
		?>
		</div>
		<div class="row">
		<?php
		for ($i = ceil((count($products) / 2)); $i < count($products); $i ++)
		{
			echo "<div style=\"max-height: 500px;\" class=\"col-sm-6 col-md-4\">";
			echo "<div style=\"height: 360px; width: 380px; overflow: auto;\" class=\"thumbnail\">";
			echo "<img data-src=\"holder.js/100%x200\" alt=\"100%x200\" src=\"" . $objets[$i]['imageSrc'] . "\" data-holder-rendered=\"true\" style=\"height: 140px; width: 50%; display: block;\">";
			echo "<div class=\"caption\">";
			echo "<h3> " . $objets[$i]['Id'] . "</h3>";
			echo "<p style=\"white-space: nowrap; overflow:hidden !important; text-overflow: ellipsis;\">" . $objets[$i]['Description'] . "</p>";
			echo "<p>";
			echo "<a target=\"_blank\" href=\"" . $objets[$i]['productURL'] . "\" class=\"btn btn-primary\" role=\"button\">Voir Article</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Ajouter au panier</a>";
			echo "</p>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
		?>
		</div>


		<nav class="text-center">
			<ul class="pagination">
				<?php
				if ($pageNumber != 0)
				{
					echo "<li><a href=\"index.php?id=" . ($pageNumber - 1) . "\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>";
				}
				?>
				<?php
				for ($i = 0; $i < $numberPage; $i ++)
				{
					if ($i == $pageNumber)
					{
						echo "<li class=\"active\"><a href=\"#\">" . ($i + 1) . "<span class=\"sr-only\">(current)</span></a></li>";
					}
					else
					{
						echo "<li><a href=\"index.php?id=" . $i . "\">" . ($i + 1) . "</a></li>";
					}
				}
				?>
				<?php
				if ($pageNumber != $numberPage)
				{
					echo "<li><a href=\"index.php?id=" . ($pageNumber + 1) . "\" aria-label=\"Next\"> <span aria-hidden=\"true\">&raquo;</span>";
				}
				?>
				</a>
				</li>
			</ul>
		</nav>

	</div>
	<!-- /.container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		window.jQuery
				|| document
						.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
	</script>
	<script src="./dist/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="./assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>