<?php
	$title = "Danh sách Tour";
	$active = 'tour';
	$lang = get_lang();
	$current_possition = array(array('name'=>'Danh sách các tour','link'=>'index.php?lang='.$lang.'&controller=tour'));
	$tour = get_all('tour_content');
	require_once('view/tour/index.php');
 ?>