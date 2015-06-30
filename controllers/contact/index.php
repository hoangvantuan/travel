<?php
	$title="AD Touris Liên hệ";
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$title=$_POST['title'];
		$content=$_POST['content'];
		$contact=array('name'=>$name,'tel'=>$phone,'email'=>$email,'title'=>$title,'content'=>$content);
		save('contact',$contact);
	}
	$tour_region = get_all('tour_region');
	$news = get_all('news_event');
	$area = get_all('car_area');
	$visa1 = get_all_record('passport_visa_offers','passport_visa_code','1');
	$visa2 = get_all_record('passport_visa_offers','passport_visa_code','2');
	$visa5 = get_all_record('passport_visa_offers','passport_visa_code','5');
	$visa6 = get_all_record('passport_visa_offers','passport_visa_code','6');
	$visa7 = get_all_record('passport_visa_offers','passport_visa_code','7');
	$visa8 = get_all_record('passport_visa_offers','passport_visa_code','8');
	$visa9 = get_all_record('passport_visa_offers','passport_visa_code','9');
	$lang = get_lang();
	if($lang =='en')
		$current_possition = array(array('name'=>"Contact",'link'=>"index.php?controller=contact&amp;lang=".$lang));
	else
		$current_possition = array(array('name'=>"Liên hệ",'link'=>"index.php?controller=contact&amp;lang=".$lang));
	require_once(BASEPATH.'view/contact/index.php');
	// content site
	// end - thank site is not compete
	// add
?>;
