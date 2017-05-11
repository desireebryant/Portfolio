<?php
	session_start();
	if(!$_SESSION['login'])
	{
		header('Location: login.php');
	}
?>

<?php
	$pageTitle="New Forum Topic";
	include('includes/header.php');
?>

<form action="includes/logout.php" method="post" type="hidden" name="logout">
	<input type="submit" value="Logout" name="logout" class="buttons logoff">
</form>

<div id="posts">

	<h3 class ="instructions">New Forum Post</h3><br><br>
	<p class="instructions">Hello <strong><?php echo $_SESSION['Screenname']; ?></strong></p>

	<form action="includes/postform.php" method="post" name="newblog">
		<p><label for="title">Title</label><p><br>
			<input id="title" placeholder="Subject" type="text" class="subject" name="title"><br><br>
		<p><label for="newpost">Message</label><p><br>
			<textarea id="newpost" placeholder="Write your post here!" type="text" name="content" class="postbox"></textarea>
			<br>
			<input type="submit" value="New Post" class="buttons"><br>
	</form>

</div>

<?php
	include('includes/footer.php');
?>