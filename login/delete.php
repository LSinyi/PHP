<?php session_start();?>  
<!-- 啟用session，此語法要放在網頁最前方 -->
<?php 
	if($_SESSION['username'] != null){
		echo "<form action='delete_finish.php' method='post'>";
		echo "刪除的帳號<input type='text' name='acc'>";
		echo "<input type='submit' value='刪除'>";
		echo "</form>";
	}else{
		echo "你沒有觀看權限";
		echo "<meta http-equiv=REFRESH CONTENT=1; url=login.php>";
	}



?>