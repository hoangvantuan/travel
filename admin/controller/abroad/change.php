<?php
	$active="abroad"; 
	$lang = get_lang();
	if (isset($_GET['abroad_offer_id'])&&!isset($_POST['submit'])) {
	$abroad_offer_id=$_GET['abroad_offer_id'];
	$abroad = get_a_record('abroad_offers','abroad_offer_id',$abroad_offer_id);
	$abroad_name1=get_a_record('abroads','abroad_id',$abroad['abroad_id']);
	$abroad_name=get_all('abroads');
	require('view/abroad/change.php');
}elseif (isset($_GET['abroad_offer_id'])&&isset($_POST['submit'])) {
	$abroad_offer_id=$_GET['abroad_offer_id'];
	$abroad_name=$_POST['abroad_name'];
	$title=$_POST['title'];
	$content=$_POST['content'];

	$abroad_id=get_a_record('abroads','abroad_name',$abroad_name);
	$data = array('title'=>$title,'content'=>$content,'abroad_id'=>$abroad_id['abroad_id']);
	
	update_record('abroad_offers','abroad_offer_id',$abroad_offer_id,$data);

	$abroad = get_a_record('abroad_offers','abroad_offer_id',$abroad_offer_id);
	$abroad_name1=get_a_record('abroads','abroad_id',$abroad['abroad_id']);
	$abroad_name=get_all('abroads');
$success="Thay đổi thành công !";
require('view/abroad/change.php');

}

 ?>