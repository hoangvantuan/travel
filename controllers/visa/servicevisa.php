<?php 
	$title = "AD Tourist - Visa hộ chiếu ";
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$lang = get_lang();
	$tour_region = get_all('tour_region');
	$passport_visa_name=get_all('passport_visa');
	if (isset($_GET['passport_visa_code'])&&isset($_GET['pass_offer'])) {
		$passport_visa_code=$_GET['passport_visa_code'];
		$pass_offer=$_GET['pass_offer'];
		$visa_offer=get_a_record('passport_visa_offers','passport_visa_offer_code',$pass_offer);
		
		
	}
	elseif (isset($_GET['passport_visa_code'])) {
		$passport_visa_code=$_GET['passport_visa_code'];
	}else $passport_visa_code=1;
	$id= get_a_record('passport_visa','passport_visa_code',$passport_visa_code);
	$content=get_all_record('passport_visa_offers','passport_visa_code',$id['passport_visa_code']);
	require_once(BASEPATH.'view/visa/servicevisa.php');
 ?>