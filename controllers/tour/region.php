<?php 
	$title = "AD Tourist, Where you go";
	$tour_region = get_all('tour_region');
	$lang = get_lang();
	if(isset($_GET['tour_region_code'])){
		$tour_region_code = $_GET['tour_region_code'];
		$tour_region_name = get_a_record('tour_region','tour_region_code',$tour_region_code);
		$tour_country_code = $tour_region_name['tour_country_code'];
		$tour_country_name = get_a_record('tour_country','tour_country_code',$tour_country_code);
		$tour_country_name = $tour_country_name['tour_country_name'];
		$tour_region_name = $tour_region_name['tour_region_name'];
		$tour = get_all_record('tour_content','tour_region_code',$tour_region_code);
		$current_possition = array(array(
			'name'=>$tour_country_name,'link'=>'index.php?controller=tour&amp;action=country&amp;tour_country_code='.$tour_country_code.'&amp;lang='.$lang
			),array(
			'name'=>$tour_region_name,'link'=>'index.php?controller=tour&amp;action=region&amp;tour_region_code='.$tour_region_code.'&amp;lang='.$lang
			));
		require_once(BASEPATH.'view/tour/show_tour.php');
	}
	else
		header('location:'.BASEURL);
 ?>