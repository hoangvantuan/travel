<?php
	$title = "AD Tourist, Go Go Go";
	$tour_region = get_all('tour_region');
	$lang = get_lang();
	if(isset($_GET['tour_country_code'])){
		$tour_country_code = $_GET['tour_country_code'];
		$tour_country_name = get_a_record('tour_country','tour_country_code',$tour_country_code);
		$tour_country_name = $tour_country_name['tour_country_name'];
		$tour= get_all_record('tour_content','tour_country_code',$tour_country_code);
		$link = 'index.php?controller=tour&amp;action=country&amp;tour_country_code='.$tour_country_code.'lang='.$lang;
		$current_possition = array(array('name'=>$tour_country_name,'link' => $link));
		require_once(BASEPATH.'view/tour/show_tour.php');
	}
	else
		header('location: index.php?lang='.$lang);
 ?>