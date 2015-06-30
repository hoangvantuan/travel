<?php 
	$title = "AD Tourist - Trang chủ - Du lịch tour";
	$tour = get_all('tour_content');
	$tour = array_reverse($tour);
	$tour = get_number_from_array($tour,8);
	
	$area = get_all('car_area');
	$tour_region = get_all('tour_region');
	$news = get_all('news_event');
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$partner = get_all('partners');
	$lang = get_lang();
	$visa = get_all('passport_visa_offers');
	$visa = array_reverse($visa);

	$news_event_content = get_all('news_event_content');
	$news_event_content = array_reverse($news_event_content);
	$news_event_content = get_number_from_array($news_event_content,10);

	$passport_visa = get_all('passport_visa');
	require_once(BASEPATH.'view/home/index.php');
 ?>