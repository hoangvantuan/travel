<?php
	$lang = get_lang();
if (isset($_GET['delete'])) {
    delete('labor_content','labor_content_id',$_GET['delete']);
}
  $active='labor';
   $products = get_all('labor_content');
   
   require('view/labor/index.php');
   ?>