<?php
	$active="labor"; 
	$lang = get_lang();
if (isset($_POST['submit'])) {
	$labor_name=$_POST['laborname'];
	$labor=array('labor_name'=>$labor_name);
	save('labor',$labor);
}
if (isset($_GET['del'])) {
	delete('labor','labor_id',$_GET['del']);
	delete('labor_content','labor_id',$_GET['del']);
}
	$labor=get_all('labor');
require('view/labor/add_labor_name.php');

 ?>