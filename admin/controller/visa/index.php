<?php
	$lang = get_lang();
if (isset($_GET['delete'])) {
	$image=get_a_record('passport_visa_offers','passport_visa_offer_code',$_GET['delete']);
	$image='../'.$image['image'];
	unlink($image);
    $a=delete('passport_visa_offers','passport_visa_offer_code',$_GET['delete']);
}
  $active='visa';
   $products = get_all('passport_visa_offers');
   
   require('view/visa/index.php');
   ?>