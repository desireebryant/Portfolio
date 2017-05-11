<?php

require "db_connect.php";

$con=mysqli_connect($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$screenname=$_POST['screenname'];
	$title=trim($_POST['title']);
	$title=strip_tags($title);
	$title=mysqli_real_escape_string($con, $title);
	$content=trim($_POST['content']);
	$content=strip_tags($content);
	$content=mysqli_real_escape_string($con, $content);

	if($title == "" OR $content == ""){
		echo ("Please fill out all information before posting");
		exit();
	}

	$sql="Insert INTO Posts (Screenname, Title, Content) VALUES ('$screenname','$title','$content')";
	$result=mysqli_query($con, $sql);

	if($result)
		{
		header ('Location:../userforum.php');
		}else{
		echo "Something's broken and I don't know what";
		}
}	

?>