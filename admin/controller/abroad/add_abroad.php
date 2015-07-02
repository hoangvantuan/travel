<?php
	$active="abroad"; 
	$lang = get_lang();
if (isset($_POST['submit'])) {
	$abroad_name=$_POST['abroad_name'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$abroad_id=get_a_record('abroads','abroad_name',$abroad_name);
	$abroad=array('abroad_id'=>$abroad_id['abroad_id'],'title'=>$title,'content'=>$content);
	save('abroad_offers',$abroad);
	$success="Thêm thành công ! ";
}
$abroad_name=get_all('abroads');
require('view/abroad/add_abroad.php');

 ?>