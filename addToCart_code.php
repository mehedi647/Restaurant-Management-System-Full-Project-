<?php
require_once('Connection.php');

$food = $_GET['fID'];
$Price = $_GET['pID'];

$sql = "INSERT INTO foodcart (Food,Price) VALUES ('$food','$Price')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: thank.php");
}
else
{
	echo "Error :".$sql;
}

?>