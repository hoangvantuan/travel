<?php 
	$title = "AD Tourist, Everywhere, Everyone...";
	$tour_region = get_all('tour_region');
	$tour = get_all('tour_content');
	$current_possition = array(array('name'=>"Du lịch giá tốt",'link'=>"index.php?controller=tour"));
	require_once(BASEPATH.'view/tour/show_tour.php');

?>
