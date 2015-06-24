<?php 
	$title = "AD Tourist, Where you go";
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$tour_region = get_all('tour_region');
	$news = get_all('news_event');
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