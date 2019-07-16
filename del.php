<?php
include "db_access.php";
$id = $_GET['id'];
$delete = "DELETE FROM `phone_table` WHERE id = '$id'";
$del = mysqli_query($conn,$delete);
header("location: record.php");
?>