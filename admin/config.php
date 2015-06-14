<?php
/** setting **/
define('BASEURL' , 'travel.com');
define('BASEPATH', dirname(__FILE__) . '/');

/** kết nối MySQL **/
$db = mysql_connect('localhost', 'root', '') or die('Could not connect to Server');
mysql_select_db('db_travel') or die('Could not connect to Database');
mysql_set_charset('utf-8');
mysql_query("SET NAMES 'utf8'");
?>
