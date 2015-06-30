<?php 
	$title = "AD Tourist, Car service...";
	$area = get_all('car_area');
	$service = get_all('car_service');
	$lang = get_lang();
	$news = get_all('news_event');
	$news_event_content = get_all('news_event_content');
	$tour_region = get_all('tour_region');
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	if($lang =='en')
		$current_possition = array(array('name'=>"Service Car",'link'=>"index.php?controller=#&amp;lang=".$lang));
	else
		$current_possition = array(array('name'=>"Dịch vụ xe",'link'=>"index.php?controller=service_car&amp;lang=".$lang));
	require_once(BASEPATH.'view/service_car/index.php');

?>
