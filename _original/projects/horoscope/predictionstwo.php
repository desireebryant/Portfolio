<?php
	
	$signtwo=$_GET['signtwo'];
					
	include('includes/db_connect.php');
		
	$con=mysqli_connect($host, $user, $pass, $db);
				
	$sql="Select * FROM Horoscope WHERE Sign='$signtwo'";
	$result=mysqli_query($con, $sql);
	
	if ($row=mysqli_fetch_array($result))
		{
		$returnData="<p>".nl2br($row['Prediction'])."</p>";
		}
		
	mysqli_close($con);
	
	echo $returnData;
?>