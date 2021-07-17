<?php
$db_server="localhost";
$db_uname="root";
,="";
$db_name="WT_Final";

$conn= mysqli_connect($db_server,$db_uname,$db_pass,$db_name);

function execute ($query){
	global $db_server,$db_uname,$db_pass,$db_name;
	$conn - mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
	if ($conn){
		mysqli_query($query);
		
	}
	function get ($query){
	global $db_server,$db_uname,$db_pass,$db_name;
	$conn - mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
	$data - array();
	if ($conn){
		$result=mysqli_query($query);
		while($row- mysqli_fetch_assoc($result)){
		$data [] - $row;	
			
		}
	}
	return $data;
	
	
}

?>