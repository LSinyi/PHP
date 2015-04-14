<?php session_start();?>  
<!-- 啟用session，此語法要放在網頁最前方 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	unset($_SESSION['username']);  //清空session
	echo '登出中...';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';  //跳轉
?>
