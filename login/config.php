<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '0715';
	$db = 'login';

	mysql_connect($db_host, $db_user,$db_pass);
	mysql_select_db($db) or die(mysql_error());
?>