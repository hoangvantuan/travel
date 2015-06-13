<?php 
	$title = "AD Tourist,..";
	$country = get_all('tour_country');
	$region = get_all('tour_region');
	if(isset($_GET['tour_region_code'])){
		$tour_region_code = $_GET['tour_region_code'];
		$data = get_all_record('tour_content','tour_region_code',$tour_region_code);
		require_once(BASEPATH.'view/tour/show_tour.php');
	}
	else
		header('location:'.BASEURL);
 ?>