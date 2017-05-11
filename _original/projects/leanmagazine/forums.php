<?php
	session_start();
	if($_SESSION['login'])
	{
		header('Location: userforum.php');
	}
?>

<?php
	$pageTitle = "Forums";
	include ("includes/header.php");
?>
	
	<div class="forum_header column12">
	
		<hr>

		<h3 class="instructions">Forums</h3>
		<p class="instructions">You must be a member to post or comment</p>

		<nav  class="forum_links">
		
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
		</nav>
		
	</div>
	
	<hr class="forumhr">
	
	<?php

		require "includes/db_connect.php";
		require "includes/functions.php";

		$con=mysqli_connect($host, $user, $pass, $db);
		$query="Select * FROM Posts";
		$result=mysqli_query($con, $query) or die(mysqli_error($con));

		while($row=mysqli_fetch_array($result)) 

			{
				echo "<div class='echo_time'> ".$row['Date']."<br></div>";
				echo "<div class='echo_screen'>".$row['Screenname']."<br></div>";
				echo "<div class='echo_title'> ".$row['Title']."<br></div>";
				echo "<div class='echo_content'>".$row['Content']."</div><hr>";
			}

		mysqli_close($con);

	?>

<?php
	include ("includes/footer.php");
?>