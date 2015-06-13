<?php 
	$title = "AD Tourist, Everywhere, Everyone...";
	$country = get_all('tour_country');
	$region = get_all('tour_region');
	$data = get_all('tour_content');
	require_once(BASEPATH.'view/tour/show_tour.php');

?>
