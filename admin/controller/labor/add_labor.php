<?php
	$active="labor"; 
	$lang = get_lang();
if (isset($_POST['submit'])) {
	$labor_name=$_POST['labor_name'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$labor_id=get_a_record('labor','labor_name',$labor_name);
	$labor=array('labor_id'=>$labor_id['labor_id'],'title'=>$title,'content'=>$content);
	save('labor_content',$labor);
	$success="Thêm thành công ! ";
}
$labor_name=get_all('labor');
require('view/labor/add_labor.php');

 ?>