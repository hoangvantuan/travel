<?php
# Using SCRIPT_NAME
# Using QUERY_STRING
# Using HTTP_HOST
function get_url(){
	$domain = $_SERVER['HTTP_HOST'];
	$queryString = $_SERVER['QUERY_STRING'];
	$path = $_SERVER['SCRIPT_NAME'];
	$url =  $domain.$path.'?'.$queryString;
	return $url;
}



?>
