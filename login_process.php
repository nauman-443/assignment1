<?php
include "db_login.php";
session_start();
if (isset($_POST['ok'])){
$E_mail=$_POST['E_mail'];
$pas=$_POST['password'];

$rec = " SELECT * FROM login ";
$fetch = mysqli_query($conn1,$rec);
$data = mysqli_fetch_array ($fetch);
//echo $data['username'];
//echo $data['password'];
//$dbemail='abc';
//$dbpass='123';
//echo "$dbemail";
//echo "$E_mail";
}
if($E_mail === $data['username'] && $pas === $data['password']){

	$_SESSION['logedin']=1;
	$_SESSION['name']='nomi';
	
	}
else{
	echo "please reg";
	}

if($_SESSION['logedin'] ==1){
	
	header('location:secret.php');
	}
else{
	header('location:login.php');
	}
?>