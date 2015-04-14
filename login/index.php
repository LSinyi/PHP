<?php session_start();?>  
<!-- 啟用session，此語法要放在網頁最前方 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("config.php");

	echo '<a href="logout.php">登出</a> <br><br>';

	//已登入的使用者才看的到資訊,此判斷為判定觀看此頁有沒有權限
	if($_SESSION['username'] != null){
		echo '<a href="register.php">新增 </a>';
		echo '<a href="update.php">修改 </a>';
		echo '<a href="delete.php">刪除</a> <br><br>';

		$sql = "SELECT * FROM user";
        $result = mysql_query($sql);

        while($row = mysql_fetch_row($result)){
        	$count++;
			echo "帳號:$row[1] <br>";
		}
		echo "會員人數共有".$count."個";
	}else{
		echo "你沒有觀看權限";
		echo "<meta http-equiv=REFRESH CONTENT=1; url=login.php>";
	}
?>


