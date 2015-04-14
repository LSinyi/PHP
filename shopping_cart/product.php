<?php 
	session_start();

	$page_title="Products";
	include("layout_head.php");

	$action = isset($_GET['action']) ? $_GET['action'] : "";
	$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
	$name = isset($_GET['name']) ? $_GET['name'] : "";

	//添加動作
	if($action == 'added'){ 
		echo "<div class='alert alert-info'>";
		echo "<strong>$name</strong> 成功加入購物車!!!";
		echo "</div>";
	}
	if($action == 'exists'){
		echo "<div class='alert alert-info'>";
		echo "<strong>$name</strong> 已存在購物車中";
		echo "</div>";
	}
	

	$sql = "SELECT id,name,price FROM products";
	$stmt = $con->prepare($sql); //prepare and bind
	$stmt->execute(); //執行sql語法

	$num = $stmt->rowCount();  //幾列

	if($num>0){
		//start table
		echo "<table class='table table-hover table-responsive table-bordered'>";
			echo "<tr>";
	            echo "<th>產品名稱</th>";
	            echo "<th>價格(USD)</th>";
	            echo "<th>操作</th>";
	        echo "</tr>";

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){  //PDO::FETCH_ASSOC -- 關聯數組形式
				extract($row);

				//新增每筆紀錄
				echo "<tr>";
					echo "<td><div class='product-id' style='display:none;'>{$id}</div>";
					echo "<div class='product-name'>{$name}</div></td>";
					
					echo "<td>&#36;{$price}</td>";
					echo "<td>";
						echo "<form class='add-to-cart'><div class='input-group'>";
						echo "<input type='number' value='1' min='1' class='form-control'>";
						echo "<button type='submit' class='btn btn-primary'>";
							echo "<span class='glyphicon glyphicon-shopping-cart'></span> 加入購物車";
						echo "</button>";
						echo "</div></form>";
					echo "</td>";
				echo "</tr>";
			}
		echo "</table>";  
	}
	else{
		echo "無商品";  //若product無商品
	}

	include("layout_foot.php");
?>