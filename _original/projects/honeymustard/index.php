<?php
	$pageTitle = "Honey Mustard: Awesome Fitness Tees for Women";
	include ('includes/header.php');
	include ('includes/products.php');
?>

	<img src="images/homepage.jpg" alt="Woman at the gym" class="homepage-img grid_12">
	<a href="http://jjmillerphotography.com/#/52" class="sourcelink" target="_blank">Photo Credit</a>
	
	<div class="latest-shirts grid_12">
	
		<h2 class="latest-headline">Our Latest Shirts - Get them fast!</h2>
	
			<div class="latest-products grid_12">
	
				<ul class="products">
	
					<?php 
						$total_products = count($products);
						$position = 0;
						$productlist = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position < 4) {
								$productlist = get_list($product_id,$product).$productlist;
							}
						}
						echo $productlist;
					?>														
				</ul>
	
			</div>
	
	</div>

<?php
include ('includes/footer.php');
?>