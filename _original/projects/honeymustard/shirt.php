<?php
	include ('includes/products.php');
	if (isset($_GET["id"])) 
	{
	$product_id = $_GET["id"];
		if (isset($products[$product_id])) 
		{
		$product = $products[$product_id];
		}
	}
	
	$pageTitle=$product["name"];
	include ('includes/header.php');
	
?>

	<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>" class="column6 shirtpage">
	
	<div class="productinfo column6 rightside">

		<h1 class="price">$<?php echo $product["price"]; ?> <?php echo $product["name"]; ?></h1>
	
			<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
				<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
	
				<div class="drop">
				
				<input type="hidden" name="on0" value="Size">
				<label for="os0">Size</label>
					<select name="os0" id="os0">
						<?php foreach($product["sizes"] as $size) { ?>
							<option value="<?php echo $size; ?>"><?php echo $size; ?>
							</option>
						<?php } ?>
					</select>
				</div>
	
				<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" class="paybutton">
				<img alt="" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	
			</form>
			
				<p class="shirtinfo">Our shirts are made of of an Egyptian poly blend that pulls moisture away from the skin. This creates a comfortable experience. The sweat is able to evaporate quickly from the body and the material inhibits bacterial growth. It&apos;s stretchable enough for yoga and durable enough for the most strenuous activities. The fit of these shirts are cut especially for women and the quality of the fabric will make you want to wear them everyday.</p>
		
	</div>

<?php
include ('includes/footer.php');
?>