<?php session_start();?>  
<!-- 啟用session，此語法要放在網頁最前方 -->
<?php 
	include("config.php");

	$acc = $_POST['acc'];
	$pw = $_POST['pw'];
	$pw2 = $_POST['pw2'];

	if($acc!=null && $pw!=null && $pw2!=null && $pw == $pw2){
		$sql = "insert into user(username,password) values('$acc','$pw')";
		if(mysql_query($sql)){
			echo "註冊成功";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
		}else{
			echo "註冊失敗";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
		}
	}else{
		echo "你沒有觀看權限!!!";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	}



?>
