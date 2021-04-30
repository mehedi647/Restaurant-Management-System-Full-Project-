<!--
Here, we write code for registration.
-->
<?php
require_once('Connection.php');

$foodname = $_POST['foodname'];
$price = $_POST['price'];


$sql = "INSERT INTO food (Food,Price) VALUES ('$foodname','$price')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: manager.php");
}
else
{
	echo "Error :".$sql;
}
?>