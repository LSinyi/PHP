<?php 
	session_start();

	$id = isset($_GET['id']) ? $_GET['id'] : "";
	$name = isset($_GET['name']) ? $_GET['name'] : "";
	$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";

	//檢查'cart'session 是否被創建,否則創建session array
	if(!isset($_SESSION['cart_items'])){
		$_SESSION['cart_items'] = array();
	}

	//檢查array是否有item,如果有,則不添加
	if(array_key_exists($id,$_SESSION['cart_items'])){
		// redirect to product list and tell the user it was added to cart
		header('Location: product.php?action=exists'. '&name=' . $name);
	}
	else{  //add the item to array
		$_SESSION['cart_items'][$id]= $name;
		// redirect to product list and tell the user it was added to cart
		header('Location: product.php?action=added'. '&name=' . $name);
	}

?>