<?php 
//check admin account
function check_admin($email, $password){
	$check = get_a_record('account', 'email', $email);
	if($check != null){
		if($password == $check['password']){
			return true;
		}
	}
	return false;
}
// get current time
function get_time(){
	return gmdate('Y-m-d H:i:s',time() + 7*3600);
 }

 //reject sql
 function escape($str) {
return mysql_real_escape_string($str);
}

// lay phan mo rong cua file 
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}
//get language of page
function get_lang(){
	if(isset($_GET['lang']) &&  $_GET['lang'] == 'en'){
		return 'en';
	}
	else return 'vi';
}
 ?>
