<?php
# Using SCRIPT_NAME
# Using QUERY_STRING
# Using HTTP_HOST
function get_url(){
	$queryString = $_SERVER['QUERY_STRING'];
	$path = $_SERVER['SCRIPT_NAME'];
	$url =  $path.'?'.$queryString;
	return $url;
}
function get_lang(){
	if(isset($_GET['lang']) &&  $_GET['lang'] == 'en'){
		return 'en';
	}
	else return 'vi';
}
function get_number_from_array($array, $i){
	$data = array();
	$j = 0;
	foreach ($array as $key) {
		if($j==$i)break;
		$data[] = $key;
		$j++;
	}
	return $data;
}
?>
