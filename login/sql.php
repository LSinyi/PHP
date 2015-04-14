<!DOCTYPE html>
<html>
<body>
	<?php
	echo "hello world!";
		// $con = mysql_connect('localhost','root','0715');
  //   	if (!$con){
		// 	die('Could not connect: ' . mysql_error());
		// }

		// mysql_select_db("login",$con);
		// mysql_query("INSERT INTO user(id, username, password)
		// VALUES(null,'test','test123')");

		// $sql = "CREATE TABLE user(
		// 	id int(10) not null AUTO_INCREMENT,
		// 	PRIMARY KEY(id),
		// 	username varchar(255),
		// 	password varchar(255)
		// )";

		

		// Create database
		// if (mysql_query("CREATE DATABASE login",$con)){
		// 	echo "Database created";
		// }else{
		// 	echo "Error creating database: " . mysql_error();
		// }
		// mysql_query($sql,$con);
  //   	mysql_close($con);

		// Create table in practice database
		// $sql = "CREATE TABLE admin(
		// 	ID int NOT NULL AUTO_INCREMENT,
		// 	PRIMARY KEY(ID),
		// 	username varchar(20),
		// 	password char(32),
		// 	email varchar(50)
		// )";

		// $sql = "CREATE TABLE cate(
		// 	ID int NOT NULL AUTO_INCREMENT,
		// 	PRIMARY KEY(ID),
		// 	cName varchar(50)
		// )";

		// $sql = "CREATE TABLE product(
		// 	ID int NOT NULL AUTO_INCREMENT,
		// 	PRIMARY KEY(ID),
		// 	pName varchar(50) not null,
		// 	pSn varchar(50) not null,
		// 	pNum int default 1,
		// 	mPrice int not null,
		// 	iPrice int not null,
		// 	pDesc text,
		// 	pImg varchar(50) not null,
		// 	pubTime int not null,
		// 	isShow int default 1,
		// 	isHot int default 0,
		// 	cId smallint unsigned not null
		// )";
		
		// $sql = "CREATE TABLE user(
		// 	ID int NOT NULL AUTO_INCREMENT,
		// 	PRIMARY KEY(ID),
		// 	username varchar(20) not null,
		// 	password char(32) not null,
		// 	sex int not null,
		// 	face varchar(50) not null, 
		// 	regTime int not null
		// )";

		// $sql = "CREATE TABLE album(
		// 	ID int NOT NULL AUTO_INCREMENT,
		// 	PRIMARY KEY(ID),
		// 	pid int not null,
		// 	albumPath varchar(50) not null
		// )";


		
	?>    
</body>
</html>
