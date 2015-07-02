<?php
	$active="abroad"; 
	$lang = get_lang();
if (isset($_POST['submit'])) {
	$abroad_name=$_POST['abroadname'];
	$abroad=array('abroad_name'=>$abroad_name);
	save('abroads',$abroad);
}
if (isset($_GET['del'])) {
	delete('abroads','abroad_id',$_GET['del']);
	delete('abroad_offers','abroad_id',$_GET['del']);
}
	$abroad=get_all('abroads');
require('view/abroad/add_abroad_name.php');

 ?>