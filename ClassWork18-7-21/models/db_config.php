<?php
	$db_server="localhost";
	$db_id="root";
	$db_bod="";
	$db_name="ClassWork";


function execute($query)//responcible for running insert,update,delete
{
	global $db_server,$db_id,$db_bod,$db_name;
	$conn=mysqli_connect($db_server,$db_id,$db_bod,$db_name);
	if($conn)
	{
		if(mysqli_query($conn,$query))
		{
			return true;
		}
		return mysqli_error($conn);
	}
}

function get($query)//responcible for running select
{
	global $db_server,$db_id,$db_bod,$db_name;
	$conn=mysqli_connect($db_server,$db_id,$db_bod,$db_name);
	$data=array();
	if($conn)
	{
		$result=mysqli_query($conn,$query);
		while($row=mysqli_fetch_assoc($result))
		{
			$data=$row;
		}
	}
	return $data;
}