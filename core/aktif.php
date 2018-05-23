<?php
include'koneksi.php';
function query($q){
	$q = mysql_query("$q")or die(mysql_error);
	return $q;
}
function getAll($table){
	$q = mysql_query("select *from $table")or die(mysql_error);
	return $q;
}
function getData($table,$kolom,$where){
	$q = mysql_query("SELECT $kolom FROM $table WHERE $where")or die(mysql_error);
	return $q;
}
function getOrder($table,$kolom,$order,$sort){
	$q = mysql_query("SELECT $kolom FROM $table ORDER BY $order $sort")or die(mysql_error);
	return $q;
}
function row($param){
	return mysql_fetch_assoc($param);
}
function nums($param){
	return mysql_num_rows($param);
}
function Insert($table, array $data){
	$sql = "INSERT INTO ".$table." SET";
		foreach($data as $field => $value){
			$sql .= " ".$field."='".mysql_real_escape_string($value)."',";
		}
		$sql = rtrim($sql, ',');
		$result = mysql_query($sql);
		return $result;
}
function Update($table,$where,array $data){
	$sql = "UPDATE ".$table." SET";
		foreach($data as $field => $value){
			$sql .= " ".$field."='".mysql_real_escape_string($value)."',";
		}
		$sql = rtrim($sql, ',');
		$sql .= "WHERE $where";
		$result = mysql_query($sql);
		return $result;
}
function Delete($table,$where){
	$q = mysql_query("DELETE FROM $table WHERE $where")or die(mysql_error);
	return $q;
}
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}
?>