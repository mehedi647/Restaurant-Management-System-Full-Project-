<!--
Here, we write code for registration.
-->
<?php
require_once('Connection.php');
$fname = $lname = $gender = $email = $password = $pwd = $salary = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$salary = $_POST['salary'];

$sql = "INSERT INTO addemp (Firstname,Lastname,Gender,Email,Password,salary) VALUES ('$fname','$lname','$gender','$email','$password','$salary')";
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