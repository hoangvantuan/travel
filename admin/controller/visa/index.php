<?php
	$lang = get_lang();
if (isset($_GET['delete'])) {
	$image=get_a_record('passport_visa_offers','passport_visa_offer_code',$_GET['delete']);
	$image='../'.$image['image'];
	unlink($image);
    $a=delete('passport_visa_offers','passport_visa_offer_code',$_GET['delete']);
}
   $active='visa';
   $passport_visa = get_all('passport_visa');
 
   
   if(isset($_POST['passport_visa_code']))
    {
        $passport_visa_code = $_POST['passport_visa_code'];
        if($passport_visa_code == 0 )
        {
            $products = get_all('passport_visa_offers');

        }
        else{
            $selected = $passport_visa_code;
            $products = get_all_record('passport_visa_offers','passport_visa_code',$passport_visa_code);
        } 

    }
    else
    {
          $products = get_all('passport_visa_offers');
    }

   require('view/visa/index.php');
   ?>