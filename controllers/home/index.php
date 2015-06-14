<?php 
	$title = "AD Tourist - Trang chủ - Du lịch tour";
	$tour = get_all('tour_content');
	$visa = get_all('passport_visa_offers');
	$partner = get_all('partners');
	require_once(BASEPATH.'view/home/index.php');
 ?>