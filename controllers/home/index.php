<?php 
	$title = "AD Tourist - Trang chủ - Du lịch tour";
	$tour = get_all('tour_content');
	$tour = array_reverse($tour);
	$tour = get_number_from_array($tour,6);
	$tour_region = get_all('tour_region');
	$visa = get_all('passport_visa_offers');
	$partner = get_all('partners');
	$lang = get_lang();
	require_once(BASEPATH.'view/home/index.php');
 ?>