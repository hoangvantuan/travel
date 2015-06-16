<?php
if (isset($_GET['delete'])) {
    $a=delete('passport_visa_offers','passport_visa_offer_code',$_GET['delete']);
}
  $active='visa';
   $products = get_all('passport_visa_offers');
   
   require('view/visa/index.php');
   ?>