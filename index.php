	<!DOCTYPE html>

	<html>
	<body>
	<?php
	include ('./httpful.phar');

	$uri  = "https://api.cdiscount.com/OpenApi/json/Search";
	$uri2 = "https://api.cdiscount.com/OpenApi/json/PushToCart";
	$api = "cda3d12b-097e-4296-b04f-d6b7d8d0f8ab";
	$toPost = array(
			"ApiKey" => $api,
			"SearchRequest" => array(
					"Keyword" => "couverture de survie",
					"SortBy" => "relevance",
					"Pagination" => array(
							"ItemsPerPage" => 10,
							"PageNumber" => 0
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
	//echo json_encode($toPost,true) . '<br><br>';

	$response = \Httpful\Request::put($uri)->sendsJson()->body(json_encode($toPost))->send();

	$arr = (array)json_decode($response);

	$pageCount = $arr['PageCount'];
	echo $pageCount;

	//for($j = 0; $j<$pageCount;$j++){
	$toPost = array(
			"ApiKey" => $api,
			"SearchRequest" => array(
					"Keyword" => "couverture de survie",
					"SortBy" => "relevance",
					"Pagination" => array(
							"ItemsPerPage" => 10,
							"PageNumber" => 0
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
	
	//json_encode($toPost,true) . '<br><br>';

	$response = \Httpful\Request::put($uri)->sendsJson()->body(json_encode($toPost))->send();
	//echo $response . '<br>';
	$arr = json_decode($response,true);
	$i = 1;
	$arrayProduits = $arr['Products'];
	 foreach($arrayProduits as $p){
		
		echo '[' . $i .']'.$p['Name'] .$p['Id'] .'<br>';
		$i+=1;
	 }
	//}

	
	
	$requestToCart = array(
		"ApiKey" => $api,
		  "PushToCartRequest" => array (
			"OfferId" => $arrayProduits[0]['Id'],
			"ProductId"=> $arrayProduits[0]['BestOffer']['Id'],
			"Quantity"=> 1,
			"SellerId"=> '0'
			)

		 )

		$Resultcart = \Httpful\Request::put($uri2)->sendsJson()->body(json_encode($requestToCart))->send();
		$cart = json_decode($Resultcart,true);
		
		echo $cart['CartGUID'];
		
		
	
	
	?>
	
	
	

	</body>
	</html>