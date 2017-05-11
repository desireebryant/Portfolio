<?php
	$pageTitle="Please Register Here";
	include('includes/header.php');
?>

<?php if (isset($_GET["status"]) AND $_GET["status"] == "broken") { ?>
	<p class="brokentext"><strong>Sorry, something went wrong, please try again.</strong></p>
<?php } ?>

	<div id="registration">

		<h4>Please Register Below</h4>
		
			<form action="includes/registerform.php" method="post" name="register">
				<p><label for="username">Username</label></p>
					<input id="username" type="text" name="username" placeholder="Enter username" class="textbox">
				<p><label for="password">Password</label></p>
					<input id="password" type="password" name="password" placeholder="Enter password" class="textbox">
				<p><label for="screenname">Screenname</label></p>
					<input id="screenname" type="text" name="screenname" placeholder="Enter Screenname" class="textbox">
					<input type="submit" value="Register" class="buttons">
			</form>
			
			<br>

			<a href="login.php" class="otherlinks">If you are already a member login here</a>

	</div>

<?php
	include('includes/footer.php');
?>
