<?php
	$pageTitle="Let's Talk. Here's how to contact Desiree' Bryant";
	require ('includes/header.php');
?>

	<div class="contactform column6">

	<h3 class="contactform-head">Collaboration, critique or just to hang and talk shop, <br>I&apos;d love to hear from you!</h3>

	<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
	<p class="thanks"><strong>Thanks for the email! I will be in touch shortly!</strong></p>
	<?php } ?>

	
	<div class="contactform">
		
	   <form method="post" action="includes/contactform.php">
	
	        <p><label for="name">Name</label><br></p>
	        	<input type="text" name="name" id="name" placeholder="Who are you?"><br>
	        <p><label for="email">Email</label><br></p>
	        	<input type="text" name="email" id="email" placeholder="How can I contact you?"><br>
	        <p><label for="message">Message</label><br></p>
	        	<textarea name="message" id="message" placeholder="Tell me a bit about yourself"></textarea><br>
			<input type="submit" value="Send" class="buttons">
	
	    </form>
	
	</div>
	
	</div>
	
	<div class="social column6 rightside">
	
		<h3>If you want to talk to me directly:</h3>
		
		<div class="info">
		
		<p>Desiree&apos; Bryant | Dallas, Texas, USA</p>
		<p>(504) 237-7192</p>
		<p>desiree@desireebryant.com</p>
		
		</div>
		
		<h3>For everything else check out my social media:</h3>
		
		<div class="socialmedia">
		
			<a href="http://www.linkedin.com/pub/desiree-bryant/71/614/1b2/" target="_blank">
				<img src="images/social/linkedin.gif" alt="linkedin icon" class="socialicon">
			</a>
			
			<a href="http://teamtreehouse.com/desireesingreen" target="blank">
				<img src="images/social/treehouse.png" alt="treehouse profile icon" class="socialicon">
			</a>
			
			<a href="https://twitter.com/desiree_bryant" target="_blank">
				<img src="images/social/twitter.gif" alt="twitter icon" class="socialicon">
			</a>
									
			<a href="http://www.pinterest.com/desireehbryant/" target="_blank">
				<img src="images/social/pinterest.gif" alt="pinterest icon" class="socialicon">
			</a>
			
			<a href="http://instagram.com/desireebryant" target="_blank">
				<img src="images/social/instagram.gif" alt="instagram icon" class="socialicon">
			</a>
			
			<a href="https://plus.google.com/u/0/102026754796121312277/posts" target="_blank">
				<img src="images/social/google.gif" alt="goggle plus icon" class="socialicon">
			</a>
				
		</div>
	</div>
	

<?php
	require ('includes/footer.php');
?>