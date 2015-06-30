<?php 
	$title = "AD Tourist chi tiết dịch vụ xe";
	$lang = get_lang();
	$area = get_all('car_area');
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
	if(isset($_GET['code'])){
		$code = $_GET['code'];
		$service = get_all_record('car_service', 'msdd', $code);
		$current_possition = array(array('name'=>"Dịch vụ xe",'link'=>"index.php?controller=service_car"));
		require_once(BASEPATH.'view/service_car/detail_car.php');
	}
	else 
		require_once('view/service_car/index.php');
?>