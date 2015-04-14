<?php session_start();?>  
<!-- 啟用session，此語法要放在網頁最前方 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("config.php");
	if(!empty($_POST['username']) or !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysql_query("SELECT * FROM user WHERE username='$username'");// 搜尋資料庫資料,查詢結果放入$result
		$row = mysql_fetch_row($result);

		//判斷帳號與密碼是否為空白,以及MySQL資料庫裡是否有這個會員
		if($username != null && $password != null && $row[1] == $username && $row[2] == $password){
			$_SESSION['username'] = $username;  //將帳號寫入session，方便驗證使用者身份
			header("location:index.php");  //導向哪個頁面
		}else{
			echo "驗正失敗";
			exit();
		}
	}else{
		echo "請輸入帳號密碼!";
	}
?>
