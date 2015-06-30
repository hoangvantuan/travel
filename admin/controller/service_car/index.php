<?php
	$title = "Danh sách nhà cung cấp dịch vụ xe ";
	$active = 'car';
	$lang = get_lang();
	$service = get_all('car_service');
	$current_possition = array(array('name'=>'Danh sách nhà cung cấp dịch vụ xe ','link'=>'index.php?lang='.$lang.'&controller=service_car'));
	require_once('view/service_car/index.php');
 ?>