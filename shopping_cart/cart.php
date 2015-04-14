<?php 
	session_start();

	$page_title = "Cart";
	include("layout_head.php");

	$action = isset($_GET['action'])? $_GET['action'] : "";
	$name = isset($_GET['name'])? $_GET['name'] : "";

	if($action == 'removed'){
		echo "<div class='alert alert-info'>";
		echo "<strong>$name</strong> 從購物車刪除";
		echo "</div>";
	}
	else if($action == 'quantity_updated'){
		echo "<div class='alert alert-info'>";
		echo "<strong>$name</strong> 數量已更新";
		echo "</div>";
	}

	if(count($_SESSION['cart_items'])>0){
		// get the product ids
	    $ids = ""; 
	    foreach($_SESSION['cart_items'] as $id=>$value){
	        $ids = $ids . $id . ",";
	    }
	
	    // remove the last comma
	    $ids = rtrim($ids, ','); //總共的id

		//start table
		echo "<table class='table table-hover table-responsive table-bordered'>";
			echo "<tr>";
	            echo "<th>產品名稱</th>";
	            echo "<th>價格(USD)</th>";
	            echo "<th>操作</th>";
	        echo "</tr>";

	        $sql = "SELECT id,name,price FROM products WHERE id IN ({$ids})";  //只取出有加到購物車中的商品
	        $stmt = $con->prepare($sql);
	        $stmt->execute();

	        $total_price = 0;

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){  //PDO::FETCH_ASSOC -- 關聯數組形式
				extract($row);

				//新增每筆紀錄
				echo "<tr>";
					echo "<td><div>{$name}</div></td>";
					echo "<td>&#36;{$price}</td>";
					echo "<td>";
						echo "<a href='remove_cart.php?id={$id}&name={$name}' class='btn btn-danger'>";
							echo "<span class='glyphicon glyphicon-remove'></span> 從購物車刪除";
						echo "</a>";
					echo "</td>";
				echo "</tr>";

				$total_price +=$price;
			}
			echo "<tr>";
                echo "<td><b>Total</b></td>";
                echo "<td>&#36;{$total_price}</td>";
                echo "<td>";
                    echo "<a href='#' class='btn btn-success'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Checkout";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
   		echo "</table>"; 
	}
	else{
		echo "<div class='alert alert-danger'>";
			echo "<strong>No products found</strong> in your cart!";
		echo "</div>";
	}

	include("layout_foot.php");
	
?>