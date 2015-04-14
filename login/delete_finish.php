<?php session_start();?>  
<!-- 啟用session，此語法要放在網頁最前方 -->
<?php 
	include("config.php");

	$acc = $_POST['acc'];

	if($_SESSION['username'] != null){
		$sql = "delete from user where username='$acc'";
		if(mysql_query($sql)){
			echo "刪除成功";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
		}else{
			echo "刪除失敗";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
		}
	}else{
		echo "你沒有觀看權限!!!";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	}



?>
