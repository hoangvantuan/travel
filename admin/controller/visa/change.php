<?php
	$active="visa"; 
if (isset($_POST['submit'])) {
	$noidung=$_POST['noidung'];
	$masp=$_GET['masp'];
	update('lienhe','noidung',$noidung,'id',$masp);
	$success= 'Thay đổi thành công';
}

	if (isset($_GET['passport_visa_offer_code'])) {
	$passport_visa_offer_code=$_GET['passport_visa_offer_code'];
	$visa = get_a_record('passport_visa_offers','passport_visa_offer_code',$passport_visa_offer_code);
}else $sp =null;
require('view/visa/change.php');
 ?>