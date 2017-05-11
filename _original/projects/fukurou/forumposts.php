<?php
	session_start();
	if(!$_SESSION['login'])
	{
		header('Location: login.php');
	}
?>

<?php
	$pageTitle="Forum Posts";
	include('includes/header.php');
?>

	<div id="forum_header">

		<h3 class="instructions">Forums</h3>
		<p class="instructions">Welcome <strong><?php echo $_SESSION['Screenname']; ?></strong></p>

		<form action="newpost.php" method="get" type="hidden" name="newtopic">
			<input type="button" value="New Topic" name="newtopic" class="buttons">
		</form>

		<form action="includes/logout.php" method="post" type="hidden" name="logout">
			<input type="submit" value="Logout" name="logout" class="buttons logoff">
		</form>

	</div>

	<hr>

<?php
	require "includes/db_connect.php";
	require "includes/functions.php";

	$PostID=$_GET['id'];

	$con=mysqli_connect($host, $user, $pass, $db);
	$query="Select * FROM Posts WHERE PostID='$PostID'";
	$result=mysqli_query($con, $query) or die(mysqli_error($con));

	while($row=mysqli_fetch_array($result)) 

	{
		echo "<div class='echo_time'> ".$row['Date']."<br></div>";
		echo "<div class='echo_screen'>".$row['Screenname']."<br></div>";
		echo "<div class='echo_title'> ".$row['Title']."<br></div>";
		echo "<div class='echo_content'>".$row['Content']."<br></div>";
		
	}

	mysqli_close($con);
?>

<?php
	include('includes/footer.php');
?>