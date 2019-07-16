<?php
include "db_access.php";
?>

<a href = "form.php"> <img src = "images/add.jpg" width = "50px" height = "50px"> </a>
<table border ='3' align="center" style="width: 400px; line-height: 20px;">
	
	<tr>
		<th><h3> ID </h3></th>
		<th><h3> First name </h3></th>
		<th><h3> Last name </h3></th>
		<th><h3> Email </h3></th>
		<th><h3> Phone number </h3></th>
		<th><h3> Edit </h3></th>
		<th><h3> Delete </h3></th>

	</tr>


<?php

$rec = " SELECT * FROM phone_table ";

//$fetch = mysqli_query($rec,$conn);
//if ($fetch = mysqli_query($conn,$rec))

//	if(mysqli_num_rows($fetch) > 0){
//	die ('not found' .mysqli_error());
//}
//{
$fetch = mysqli_query($conn,$rec);
while ($data = mysqli_fetch_array ($fetch))
{
	?>
	<tr>
	<td><?php echo $data['id'] ?></td>
	<td><?php echo $data['first_name'] ?></td>
	<td><?php echo $data['last_name'] ?></td>
	<td><?php echo $data['email'] ?></td>
	<td><?php echo $data['ph_num'] ?></td>
	<td> <a href="edit.php?id= <?php echo $data['id'] ?> "> edit </a> </td>
	<td> <a href="del.php?id= <?php echo $data['id'] ?> "> delete </a> </td>

	</tr>
	<?php
}
?>
</table>

