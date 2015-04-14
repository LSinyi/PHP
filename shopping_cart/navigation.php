<!-- navbar -->
<div class="nabar navbar-inverse nav-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="product.php">購物車</a>
		</div>

		<div class="navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php echo $page_title=="Products" ? "class='active'" : '' ?>>  
					<a href="product.php">Products</a>
				</li>
				<li <?php echo $page_title=="Cart" ? "class='active'" : '' ?>>
					<a href="cart.php">
						<?php  
							//取得購物車數量
							$cart_count = count($_SESSION['cart_items']);
						?>
						Cart <span class="badge" id="comparison-count"><?php echo "$cart_count"; ?></span>
					</a>
				</li>
			</ul>
		</div><!--end: nav-collapse -->

	</div>
</div>
<!-- end: navbar -->