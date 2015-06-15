<?php 

function show_404(){
header('HTTP/1.1 Not Found 404', true, 404);
require(BASEPATH.'404.php');
exit();
}
// Get all data from table 
function get_all($table,$select = '*'){
	$sql = "SELECT $select FROM $table";
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
function get_a_record($table, $colum, $value, $select = '*'){
	$sql = "SELECT $select FROM $table WHERE $colum = '$value'";
	$query = mysql_query($sql) or die(mysql_error());
	$data = NULL;
	if(mysql_num_rows($query) > 0 )
		$data = mysql_fetch_assoc($query);
	mysql_free_result($query);
	return $data;

}

//incase $colum isn't primary key
function get_all_record($table, $colum, $value, $select = '*'){
	$sql = "SELECT $select FROM $table WHERE $colum = '$value'";
	$query = mysql_query($sql) or die(mysql_error());

	$data = array();
	if(mysql_num_rows($query) > 0 )
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	mysql_free_result($query);
	return $data;


}

function get_from_to($table,$from,$to,$colum,$value, $select ='*'){
    if($colum && $value)
    $sql = "SELECT $select FROM `$table`  WHERE $colum = '$value' LIMIT $from,$to " ;
    else
    $sql = "SELECT $select FROM `$table` LIMIT $from,$to " ;
    $query = mysql_query($sql) or die(mysql_error());
    
    $data = array();
    if(mysql_num_rows($query) >0){
        while($row = mysql_fetch_assoc($query))
            $data[]= $row;
        return $data;
    }
    else return null;
    }
    
function get_number_recored($table)
{   
    
    $sql = "SELECT COUNT(*) as total FROM $table";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $row = mysql_fetch_assoc($query);
    mysql_free_result($query);
    return $row['total'];
}

function delete($table,$colum,$value){
    $sql= "DELETE FROM `$table` WHERE $colum='$value'";
    $query = mysql_query($sql) or die(mysql_error());

}


function get_a_record_x($table, $colum, $value ,$colum1,$value1,$colum2,$value2, $select = '*') {
    //truy vấn
    $sql = "SELECT $select FROM `$table` WHERE $colum='$value' AND $colum1='$value1'AND $colum2='$value2'";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = NULL;
    if (mysql_num_rows($query) > 0) {
        $data = mysql_fetch_assoc($query);
        mysql_free_result($query);
    }
     return $data;
  
}

function save($table, $data = array()) {
    //xử lý dữ liệu $data
    $values = array();
    foreach ($data as $key => $value) {
        $value = escape($value);
        $values[] = "`$key`='$value'";
    }

    //insert
  
     $sql = "INSERT INTO `$table` SET " . implode(',', $values);
     mysql_query($sql) or die(mysql_error());
}
function update_x($table,$colum,$value,$colid,$id,$colid1,$id1){
    mysql_query("UPDATE `$table` SET `$colum` = '$value' WHERE `$colid`= '$id'&&`$colid1`= '$id1'");
}
function update($table,$colum,$value,$colid,$id)
{     
      mysql_query("UPDATE `$table` SET `$colum` = '$value' WHERE `$colid`= '$id'");
}


function pagination($url, $page, $total){
$adjacents = 2;
$prevlabel = "&lsaquo; Trước";
$nextlabel = "Tiếp &rsaquo;";
$out = '
<ul class="pagination">
	 ';
	 //first
	 if ($page == 1) {
	 $out.= '
	 <li class="disabled"><span>Đầu</span></li>
	 ';
	 } else {
	 $out.='
	 <li><a href="'.$url.'">Đầu</a></li>
	 ';
	 }
	 // previous
	 if ($page == 1) {
	 $out.= '
	 <li class="disabled"><span>&Lt;</span></li>
	 ';
	 } elseif ($page == 2) {
	 $out.='
	 <li><a href="'.$url.'">&Lt;</a></li>
	 ';
	 } else {
	 $out.='
	 <li><a href="'.$url.'&amp;page='.($page - 1).'">&Lt;</a></li>
	 ';
	 }
	 $pmin=($page>$adjacents)?($page - $adjacents):1;
	 $pmax=($page<($total - $adjacents))?($page + $adjacents):$total;
	 for ($i = $pmin; $i <= $pmax; $i++) {
	 if ($i == $page) {
	 $out.= '
	 <li class="active"><span>'.$i.'</span></li>
	 ';
	 } elseif ($i == 1) {
	 $out.= '
	 <li><a href="'.$url.'">'.$i.'</a></li>
	 ';
	 } else {
	 $out.= '
	 <li><a href="'.$url. "&amp;page=".$i.'">'.$i. '</a></li>
	 ';
	 }
	 }
	 // next
	 if ($page < $total) {
	 $out.= '
	 <li><a href="'.$url.'&amp;page='.($page + 1).'">&Gt;</a></li>
	 ';
	 } else {
	 $out.= '
	 <li class="disabled"><span>&Gt;</span></li>
	 ';
	 }
	 //last
	 if ($page < $total) {
	 $out.= '
	 <li><a href="'.$url.'&amp;page='.$total.'">Cuối</a></li>
	 ';
	 } else {
	 $out.= '
	 <li class="disabled"><span>Cuối</span></li>
	 ';
	 }
	 $out.= '
</ul>
';
return $out;
}
?>

