<?php
	$pageTitle = "Honey Mustard: Shirts Store Catalog";
	include ('includes/header.php');
	include ('includes/products.php');
?>

	<h2 class="store-headline">Honey Mustard&apos;s Awesome Shirts</h2>
	
	<div class="store grid_12">
	
		<p class="description grid_12">Honey Mustard Tees are made of a soft, breathable fabric that allows the wearer to exercise without any <q>sticky</q> consequences. We take pride in offering plenty of size options for all shapes and lifestyles of women. Here you will find fun colors with a cut that flatters a women&apos;s figure.</p>

		<ul class="store-products">

			<?php 
				foreach($products as $product_id => $product) 
				{ 
				echo get_list($product_id,$product);
				}
			?>

		</ul>
			
	</div>

<?php
include ('includes/footer.php');
?>