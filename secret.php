<?php
session_start();
if($_SESSION['logedin']==1){
include "record.php";
echo '<a href="logout.php">logout</a>';	
	}
else{

	header('location:login.php');
	}