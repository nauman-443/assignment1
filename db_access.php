<?php

$conn=mysqli_connect('localhost','root','','phone_book');
//$conn = $_POST['conn'];
if (!$conn)
{
	die("connection failed: " .mysql_connect_error());
	echo '';
}
else {
	echo '';
}



?>