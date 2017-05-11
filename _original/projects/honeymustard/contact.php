<?php
	$pageTitle = "Contact Us: We'd love to hear from you";
	$section = "contact";
	include ('includes/header.php');
?>

    <h1>Contact Us</h1>

    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
    <p class="contactmessage">Thanks for the email! We will be in touch shortly!</p>

	<?php } else { ?>

    <p class="contactmessage">We&apos;d love to hear from you! Please complete the form to send us an email.</p>

    <div class="contact-form">

       <form method="post" action="includes/contactform.php">

            <label for="name">Name</label><br>
            	<input type="text" name="name" id="name" class="textbox" placeholder="Name"><br>
            <label for="email">Email</label><br>
            	<input type="text" name="email" id="email" class="textbox" placeholder="Email"><br>
            <label for="message">Message</label><br>
            	<textarea name="message" id="message" class="messagebox" placeholder="Message"></textarea><br>
		    <label for="emptyaddress" class="emptyaddress">EmptyAddress</label>
           		<input type="text" name="emptyaddress" id="emptyaddress" class="emptyaddress">
            <!-- Please leave this field blank if you are a person or an alien and not a robot....well self-aware robots are ok -->
            	<input type="submit" value="Send" class="buttons">
        </form>
        
     </div>

        <?php } ?>

<?php
include ('includes/footer.php');
?>