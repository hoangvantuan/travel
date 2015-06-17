<?php
	$title = "Danh sách Tour";
	$active = 'tour';
	$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?controller=tour'));
	$tour = get_all('tour_content');
	require_once('view/tour/index.php');
 ?>