<?php

require "db_connect.php";

$con=mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno())
	{
		printf("Connection failed: %s\n", mysqli_connect_error());
		exit();
	}
	
if ($_SERVER["REQUEST_METHOD"] == "POST"){

		$username=trim($_POST['username']);
		$username=strip_tags($username);
		$username=mysqli_real_escape_string($con, $username);
		$password=trim($_POST['password']);
		$password=strip_tags($password);
		$password=mysqli_real_escape_string($con, $password);
		$screenname=trim($_POST['screenname']);
		$screenname=strip_tags($screenname);
		$screenname=mysqli_real_escape_string($con, $screenname);

		if ($username == "" OR $password =="" OR $screenname =="") {
			echo ("You must fill out all fields to register");
			exit();
		}
		
		$sql="Insert INTO Users (Username, Password, Screenname) VALUES ('$username', '$password', '$screenname')";
		$result=mysqli_query($con,$sql);
				
		session_start();
		
		$_SESSION['login']=1;		
		$_SESSION['Screenname']=$screenname;
		
		header('Location: ../userforum.php');
		}else{ 
		header('Location: ../register.php?status=broken');
		}

mysqli_close($con);
														
?>