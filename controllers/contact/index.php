<?php
	$title="AD Touris Liên hệ";
	$tour_region = get_all('tour_region');
	$lang = get_lang();
	if($lang =='en')
		$current_possition = array(array('name'=>"Contact",'link'=>"index.php?controller=contact&amp;lang=".$lang));
	else
		$current_possition = array(array('name'=>"Liên hệ",'link'=>"index.php?controller=contact&amp;lang=".$lang));
	require_once(BASEPATH.'view/contact/index.php');
?>;