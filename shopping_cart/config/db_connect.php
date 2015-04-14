<?php 
	//傳統寫法
	// $db_host = 'localhost';
	// $db_user = 'root';
	// $db_pass = '0715';
	// $db = 'product_cart';

	// mysql_connect($db_host, $db_user,$db_pass);
	// mysql_select_db($db) or die(mysql_error());



	// PDO 寫法
	$db_host = '127.0.0.1';
	$db_name = 'product_cart';
	$db_user = 'root';
	$db_pass = '0715';

	try{
		$con = new PDO("mysql:host={$db_host} ; dbname={$db_name}", $db_user , $db_pass);
	}
	//to handle connection error
	catch(PDOException $exception){
		echo "Connection error:" . $exception->getMessage();
	}
?>