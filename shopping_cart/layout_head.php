<?php
// connect to database
include("config/db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo isset($page_title) ? $page_title : ""; ?></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
 
    <?php include("navigation.php"); ?>
 
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1><?php echo isset($page_title) ? $page_title : ""; ?></h1>
            	<!-- php -->
            	<!-- if($page_title == 'Products'){
            		echo "<a class='btn btn-danger pull-right' style='margin-top: -35px;''><span class='glyphicon glyphicon-plus'></span> 新增商品</a>";
            	} -->
            
        </div>