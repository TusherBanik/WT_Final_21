<?php
    include 'models/db_config.php';
    $name="";
    $err_name="";
    $id="";
    $err_id="";
	$bod="";
    $err_bod="";
    $cr="";
    $err_cr="";
	$cr="";
    $err_cgpa="";
	$cgpa="";
	$err_Did="";
	$Did="";
	
	$hasError = false;

    if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Requird";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["id"])){
		    $err_id = "id Requird";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["id"];
	    }
		if(empty($_POST["bod"])){
		    $err_bod = "bod Requird";
			$hasError = true;
	    }
		else{
		    $email = $_bod["bod"];
	    }
		if(empty($_POST["cr"])){
		    $err_cr = "cr Requird";
			$hasError = true;
	    }
		else{
		    $cr = $_cr["cr"];
	    }
		if(empty($_POST["cgpa"])){
		    $err_cgpa = "cgpa Requird";
			$hasError = true;
	    }
		else{
		    $cgpa = $_cgpa["cgpa"];
	    }
		if(empty($_POST["Did"])){
		    $err_Did = "Did Requird";
			$hasError = true;
	    }
		else{
		    $Did = $_Did["Did"];
	    }
		
		if(!$hasError){
			$rs = insertUser($name,$id,$bod,$cr,$cgpa,$Did);
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
		}
	}
	
	else if(isset($_POST["login"])){
		
		
		if(!$hasError){
			if(authenticateUser($id,$bod)){
				header("Location: Dashboard.php");
			}
			$err_db = "User Invalid";
		}
	}
	
	function insertUser($name,$id,$bod,$Did){
		$query = "insert into users values (NULL,'$name','$id','$bod','$Did')";
		return execute($query);
	}
	function authenticateUser($name,$id){
		$query = "select * from users where name='$name' and id='$id'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>