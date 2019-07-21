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
<!--<html>
<form action="login_process.php" method="post">
	Email<input type="text" name="E_mail">
	password<input type="password" name="password">
	<input type="submit" name="ok">
</form>-->
