<?php
require ('includes/header.php');
?>

	<header>

		<h1 class="main-head">Love Horoscope</h1>
		
		<h2 class="desktop">This website is best viewed on a mobile phone</h2>

		<nav class="main-nav2">				
			<ul>	
				<li><a href="chinesehoroscope.php">Chinese zodiac</a></li>
				<li><a href="westernhoroscope.php">Western zodiac</a></li>
			</ul>
		</nav>
		
		<p class="mobiletext">Let&apos;s find out who you&apos;re most compatible with today!</p>
				
	</header>
	
	<div class="desktopimg">
			
		<iframe src="mobileindex.php" width="336" height="500" class="mobileview"></iframe>
					
		<img src="images/iphone.png" alt="iphone" class="phoneimg">
	
	</div>
	


<?php
require ('includes/footer.php');
?>