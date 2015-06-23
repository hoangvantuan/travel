<?php
	$lang = get_lang();
if (isset($_GET['delete'])) {
    delete('contact','email',$_GET['delete']);
}
  $active='contact';
   $products = get_all('contact');
   
   require('view/contact/index.php');
   ?>