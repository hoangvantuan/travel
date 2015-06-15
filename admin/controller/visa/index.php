<?php
if (isset($_GET['delete'])) {
    $a=delete('passport_visa_offers','passport_visa_offer_code',$_GET['delete']);
}
  $active='visa';
  $limit = 9;
  $url = 'index.php?controller=visa';
  $total_rows =get_number_recored('passport_visa_offers');
  $total = ceil($total_rows/$limit);
  $total = $total > 0 ? $total : 0;
  if(isset($_GET['page']))
   {
   $page = $_GET['page'] >0 ? $_GET['page'] : 1;
    $page = $_GET['page'] <= $total ? $_GET['page'] : 1;
   }
  else $page = 1;
$offset = ($page -1) *$limit;
   $products = get_from_to('passport_visa_offers',$offset,$limit,null,null);
   
   $pagination = pagination($url,$page,$total);
   require('view/visa/index.php');
   ?>