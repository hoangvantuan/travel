<?php
/** setting **/
define('BASEURL' , 'tourist.com');
define('BASEPATH', dirname(__FILE__) . '/');
define('ROOTPATH', '../');
//max size image upload
define('MAXSIZE', '4096');

/** kết nối MySQL **/
$db = mysql_connect('localhost', 'root', 'toannv1993') or die('Could not connect to Server');
if(isset($_GET['lang']) && $_GET['lang'] == 'en')
{
		mysql_select_db('db_travel_en') or die('Could not connect to Database');
}
else 
	mysql_select_db('db_travel') or die('Could not connect to Database');
mysql_set_charset('utf-8');
mysql_query("SET NAMES 'utf8'");
?>
