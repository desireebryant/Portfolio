<?php

	require "db_connect.php";

	$con=mysqli_connect($host, $user, $pass, $db);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$username=trim($_POST['username']);
		$username=strip_tags($username);
		$username=mysqli_real_escape_string($con, $username);
		$password=trim($_POST['password']);
		$password=strip_tags($password);
		$password=mysqli_real_escape_string($con, $password);

		if ($username == "" OR $password == "") {
			echo ("You must fill out username and password to login");
			exit;
		}

		$sql="Select * FROM Users WHERE Username='$username' AND Password='$password'";
		$result=mysqli_query($con, $sql);

		if (mysqli_num_rows($result))
		
		
			{
				session_start();
				$_SESSION['login']=1;
					if ($row=mysqli_fetch_array($result))
					{
					$_SESSION['Screenname']=$row['Screenname'];
					}
				header('Location: ../userforum.php');
				}else{ 
				header('Location: ../login.php?status=broken');
			}

	}
	
mysqli_close($con);
	

?>