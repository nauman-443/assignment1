<?php
//$conn=mysqli_connect('localhost','root','','Phone_book');
//if (!conn)
//{
//	die("connection failed: " .mysql_connect_error());
//	echo 'unsuccessful';
//}
//else {
//	echo 'successful';
//}

include "db_access.php";

if (isset($_POST['ok'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$number=$_POST['number'];

$q= "INSERT INTO phone_table (`first_name`, `last_name`, `email`, `ph_num`) VALUES ('$fname','$lname','$email','$number')";
if(mysqli_query($conn, $q))
	{
		header ("location:record.php");
	}
	else
	{
		echo $q;
		echo "<br>";
		echo 'not success';
	}
}
?>


<html>
	<form method='POST')>
	First Name:
	<input type="text" name="fname" placeholder="First name">
	
	Lastname:
	<input type="text" name="lname" placeholder="Last name">
	
	Email:
	<input type="text" name="email" placeholder="Email">
	
	Phone Number:
	<input type="text" name="number" placeholder="Phone number">

	
	<input type="submit" name="ok">

	</form>
</html>