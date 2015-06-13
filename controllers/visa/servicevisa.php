<?php 
	$title = "AD Tourist - Visa hộ chiếu ";
	$passport_visa_name=get_all('passport_visa');
	if (isset($_GET['passport_visa_code'])&&isset($_GET['pass_offer'])) {
		$passport_visa_code=$_GET['passport_visa_code'];
		$pass_offer=$_GET['pass_offer'];

	}
	elseif (isset($_GET['passport_visa_code'])) {
		$passport_visa_code=$_GET['passport_visa_code'];
	}else $passport_visa_code=1;
	$id= get_a_record('passport_visa','passport_visa_code',$passport_visa_code);
	$content=get_all_record('passport_visa_offers','passport_visa_code',$id['passport_visa_code']);
	require_once(BASEPATH.'view/visa/servicevisa.php');
 ?>