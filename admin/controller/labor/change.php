<?php
	$active="labor"; 
	$lang = get_lang();
	if (isset($_GET['labor_content_id'])&&!isset($_POST['submit'])) {
	$labor_content_id=$_GET['labor_content_id'];
	$labor = get_a_record('labor_content','labor_content_id',$labor_content_id);
	$labor_name1=get_a_record('labor','labor_id',$labor['labor_id']);
	$labor_name=get_all('labor');
	require('view/labor/change.php');
}elseif (isset($_GET['labor_content_id'])&&isset($_POST['submit'])) {
	$labor_content_id=$_GET['labor_content_id'];
	$labor_name=$_POST['labor_name'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$labor_id=get_a_record('labor','labor_name',$labor_name);

	$data = array('labor_id'=>$labor_id['labor_id'], 'title'=>$title, 'content'=>$content);
	
	update_record('labor_content','labor_content_id',$labor_content_id,$data);

	$labor = get_a_record('labor_content','labor_content_id',$labor_content_id);
	$labor_name1=get_a_record('labor','labor_id',$labor['labor_id']);
	$labor_name=get_all('labor');
$success="Thay đổi thành công !";
require('view/labor/change.php');


}

 ?>