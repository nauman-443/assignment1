<?php
include "db_access.php";
echo $id = $_GET['id'];

$rec = " SELECT * FROM phone_table WHERE id='$id' ";
$fetch = mysqli_query($conn,$rec);
$data = mysqli_fetch_array ($fetch);


if (isset($_POST['ok'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$number=$_POST['number'];

$ch = "UPDATE `phone_table` SET `first_name`=' $fname',`last_name`='$lname',`email`='$email',`ph_num`='$number' WHERE id='$id'";
$edit = mysqli_query($conn,$ch);

if($edit)
	{
		header ("location:record.php");
	}
	else
	{
		
		echo 'not success';
	}
}

?>

<form method='POST')>
	First Name:
	<input type="text" name="fname" value="<?php echo trim($data['first_name']); ?>" placeholder="First name">
	<br><br>
	Lastname:
	<input type="text" name="lname" value="<?php echo trim($data['last_name']); ?>"placeholder="Last name">
	<br><br>
	Email:
	<input type="text" name="email" value="<?php echo trim($data['email']); ?>" placeholder="Email">
	<br><br>
	Phone Number:
	<input type="text" name="number" value="<?php echo trim($data['ph_num']); ?>" placeholder="Phone number">
    <br><br>
	
	<input type="submit" name="ok">

	</form>