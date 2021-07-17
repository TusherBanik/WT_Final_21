<?php
$name="";
$err_name="";
$uname="";
$err_uname="";
$email="";
$err_email="";
$pass="";
$err_pass="";
$hasError=""
if(($_POST["name"])){
	$err_name="Name Required";
	$hasError= false
}
else{
	$name-$_POST["name"];
}

if(($_POST["uname"])){
	$err_uame="Name Required";
    $hasError= false
}
else{
	$uname-$_POST["uname"];
}

if(($_POST["email"])){
	$err_email="Email Required";
    $hasError= false
}
else{
	$email-$_POST["email"];
}

if(($_POST["pass"])){
	$err_pass="Password Required";
    $hasError= false
}
else{
	$pass-$_POST["pass"];
}

?>