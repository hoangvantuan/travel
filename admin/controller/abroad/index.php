<?php
	$lang = get_lang();
if (isset($_GET['delete'])) {
    delete('abroad_offers','abroad_offer_id',$_GET['delete']);
}
  $active='abroads';
  $abroad=get_all('abroads');
  if(isset($_POST['abroad_id']))
    {
        $abroad_id = $_POST['abroad_id'];
        if($abroad_id == 0 )
        {
            $products = get_all('abroad_offers');

        }
        else{
            $selected = $abroad_id;
            $products = get_all_record('abroad_offers','abroad_id',$abroad_id);
        } 

    }
    else
    {
          $products = get_all('abroad_offers');
    }
   require('view/abroad/index.php');
   ?>