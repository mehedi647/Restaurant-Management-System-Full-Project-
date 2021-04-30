<?php
require_once('Connection.php');

$deleteID = $_GET['dID'];
$sql = "DELETE FROM food WHERE ID = '$deleteID' ";

$data = mysqli_query($conn,$sql);

if($data)
{
	echo "<script>alert('Record deleted')</script>";
	header("Location: deleteFood.php");
}
else
{
	echo "<font color='red'>Failed to delete";
}

?>