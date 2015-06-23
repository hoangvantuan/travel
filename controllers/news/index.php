<?php 
	$title = "AD Tourist Tin tức";
	$news = get_all('news_event');
	$lang = get_lang();
	$data_news = get_all('news_event_content');
	$current_possition = array(array('name'=>"Tin tức - sự kiện",'link'=>"index.php?controller=news"));
	require_once(BASEPATH.'view/news/index.php');
?>
