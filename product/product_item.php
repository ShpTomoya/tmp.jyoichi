<?php
	require_once('library.php');
	$get_category = $_GET['category'];
	$id = $_GET['id'];

	foreach($products[$get_category] as $product){
		if($product['id'] == $id){
			$selected_product = $product;
		}
	}

	require_once('product_item-template.php');
