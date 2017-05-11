<?php
include ('includes/header.php');
?>

		<header>

			<h1 class="main-head">Chinese Horoscope</h1>
			
			<nav class="main-nav2">				
				<ul>	
					<li><a href="mobileindex.php">Home</a></li>
					<li><a href="westernhoroscope.php">Western Zodiac</a></li>
				</ul>
			</nav>

		</header>

		<div id="chinese_zodiac">
			
			<label for="birthday">Enter Birthday: <br> Between 1929-2044 (mm/dd/yy)</label><br><br>
			<input class="textbox" id="birthday" type="text" name="birthday" placeholder="(mm/dd/yyyy)"><br>
			<button type="submit" value="Submit" id="sbmt" onclick="showSign();">Submit</button>		

			<?php include('predictionstwo.php'); ?>
			
			<div id="showdate" class="predictions"></div>

		</div>

<?php
include ('includes/footer.php');
?>