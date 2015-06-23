<?php
	$title = "AD Tourist";
	$lang = get_lang();
	$news = get_all('news_event_content');
	if(isset($_GET['news_code'])){
		$news_code = $_GET['news_code'];
		$detail_news = get_a_record('news_event_content','news_event_code', $news_code);
		$title_news = $detail_news['description'];
		$content_news = $detail_news['content'];
		$image_news = $detail_news['image'];
		require_once(BASEPATH.'view/news/content_new.php');
	}
	else
		header('location:'.BASEURL);
 ?>