<?php 
	$title = "AD Tourist - Dịch vụ Du học";
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$area = get_all('car_area');
	$lang = get_lang();
	$news = get_all('news_event');
	$tour_region = get_all('tour_region');
	$abroad_name=get_all('abroads');
	if (isset($_GET['abroad_id'])&&isset($_GET['abroad_offer_id'])) {
		$abroad_id=$_GET['abroad_id'];
		$abroad_offer_id=$_GET['abroad_offer_id'];
		$abroad_offers=get_a_record('abroad_offers','abroad_offer_id',$abroad_offer_id);
		
		
	}
	elseif (isset($_GET['abroad_id'])) {
		$abroad_id=$_GET['abroad_id'];
	}else $abroad_id=$abroad_name[0]['abroad_id'];
	$id= get_a_record('abroads','abroad_id',$abroad_id);
	$content=get_all_record('abroad_offers','abroad_id',$id['abroad_id']);
	require_once(BASEPATH.'view/abroad/index.php');
 ?>