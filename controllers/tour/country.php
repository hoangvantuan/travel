<?php
	$title = "AD Tourist, Go Go Go";
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$tour_region = get_all('tour_region');
	$news = get_all('news_event');
	$area = get_all('car_area');
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