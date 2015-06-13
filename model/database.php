<?php 

// Get all data from table 
function get_all($table){
	$sql = "SELECT '*' FROM $table";
	$query = mysql_query($sql) or die(mysql_error());

	$data = array();
	if(mysql_num_rows($query) > 0)
	{
		while($row = mysql_fetch_assoc($query))
			$data[] = $row;
	}
	mysql_free_result($query);
	return $data;
}

// incase $colum is primary key
function get_a_record($table, $colum, $value){
	$sql = "SELECT '*' FROM $table WHERE $colum = '$value'";
	$query = mysql_query($sql) or die(mysql_error());
	$data = NULL;
	if(mysql_num_rows($query) > 0 )
		$data = mysql_fetch_assoc($query);
	mysql_free_result($query);
	return $data;

}

//incase $colum isn't primary key
function get_all_record($table, $colum, $value){
	$sql = "SELECT '*' FROM $table WHERE $colum = '$value'";
	$query = mysql_query($sql) or die(mysql_error());

	$data = array();
	if(mysql_num_rows($query) > 0 )
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	mysql_free_result($query);
	return $data;


}
?>

