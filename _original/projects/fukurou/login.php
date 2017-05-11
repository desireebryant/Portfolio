<?php
	$pageTitle="Please Login Here";
	include('includes/header.php');
?>

	<?php if (isset($_GET["status"]) AND $_GET["status"] == "broken") { ?>
		<p class="brokentext"><strong>Sorry, something went wrong, please try again.</strong></p>
	<?php } ?>

		<div id="signin">

			<h4>Please Enter Login Information</h4>

			<form action="includes/loginform.php" method="post" name="login">
				<p><label for="username">Username</label></p>
					<input id="username" type="text" name="username" placeholder="Enter username" class="textbox">
				<p><label for="password">Password</label></p>
					<input id="password" type="password" name="password" placeholder="Enter password" class="textbox">
					<input type="submit" value="Login" class="buttons">
			</form>

			<br>

			<a href="register.php" class="otherlinks">If you are not a member please register here</a>

		</div>

<?php
	include('includes/footer.php');
?>
