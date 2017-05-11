<?php
include ('includes/header.php');
?>

	<header>

		<h1 class="main-head">Western Horoscope</h1>
		
		<nav class="main-nav2">				
			<ul>	
				<li><a href="mobileindex.php">Home</a></li>
				<li><a href="chinesehoroscope.php">Chinese Zodiac</a></li>
			</ul>
		</nav>

	</header>

		<div id="western_zodiac">
			
			<label for="birthmonth">Enter Birthday: (mm/dd/yyyy)</label><br><br>			
			<input class="textbox" id="birthmonth" type="text" name="birthmonth" placeholder="(mm/dd/yyyy)"><br><br>									
			<button type="button" value="Submit" id="sbmt2" onclick="showSign2();">Submit</button><br>
			
			<?php include('predictions.php'); ?>
			
			<div id="showdate2" class="predictions"></div>
																	
		</div>

<?php
include ('includes/footer.php');
?>