<?php 
	if(isset($_GET['lang']))
	{
		$lang = $_GET['lang'];
		header('location: index.php?lang='.$lang);
	}
 ?>