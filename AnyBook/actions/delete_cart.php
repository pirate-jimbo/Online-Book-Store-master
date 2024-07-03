<?php

session_start();
$title = "Orders";
include("../includes/header.php");
include("../includes/db.php");
?>






<?php
	if(filter_input(INPUT_GET, 'action') == 'delete'){
		foreach($_SESSION['shopping_cart'] as $key => $product){
			if($product['id'] == filter_input(INPUT_GET, 'id')){
				unset($_SESSION['shopping_cart'][$key]);
			}
		}

		$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
	}

	header("location: ../order_cart.php");
?>
