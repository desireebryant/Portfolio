<?php

	//Read more function for long posts
	function read_more ($readmore)
	{
		if(strlen($readmore)<=20)
		{
		echo $readmore;
		}else{
		$readall=substr($readmore,0,strpos($readmore," ", 20)).'...';
		echo $readall;
		}
	}

?>