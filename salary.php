<!DOCTYPE html>
<html>
<head>
	<title>Salary Info</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Salary Information</title>
</head>

<style>
	body{
		padding: 0;
		margin: 0;
		font-family: Verdana, Geneva, Tahoma, sans-serif;
	}

	table{
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		border-collapse: collapse;
		width: 800px;
		height: 200px;
		border: 1px solid #bdc3c7;
		box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0.2)
	}

	tr{
		transition: all .2s ease-in;
		cursor: pointer;
	}
     
     th,td{
     	padding: 12px;
     	text-align: left;
     	border-bottom: 1px solid #ddd;
     }
     
     #header{
     	background-color: #16a085;
     	color: #fff;
     }

     h1{
     	font-weight: 600;
     	text-align: center;
     	background-color: #16a085;
     	color: #fff;
     	padding: 10px 0px;
     }

     tr:hover{
     	background-color: #f5f5f5;
     	transform: scale(1.02);
     	box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0.2)
	}

	/*media query*/

	@media only screen and (max-width: 768px){
		table{
		width: 90%;
	}
</style>


<body>

<h1>Salary Information Chart</h1>
<hr>

<table>
	<tr id="header">
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Salary</th>
		<th>Operation</th>
	</tr>
	
	<?php
		require_once('Connection.php');
		$sql = "SELECT ID,Firstname,Lastname,Email,Salary FROM addemp";
		$result = $conn -> query($sql);
		
		if($result-> num_rows > 0)
		{
			while($row = $result-> fetch_assoc())
			{
				echo "<tr>
				<td>".$row["ID"]."</td>
				<td>".$row["Firstname"]."</td>
				<td>".$row["Lastname"]."</td>
				<td>".$row["Email"]."</td>
				<td>".$row["Salary"]."</td>
				<td><a href = 'updateSalaryForm.php?dID=$row[ID] & sID=$row[Salary]'>Update salary</td>
				</tr>";
			}
			echo"</table>";
		}
		else
		{
			echo "0 result";
		}
		$conn-> close();
	?>
	<button style="float:right; background-color: #cb202d; border: none; color: #ffffff; font-size: 16px;font-weight: 600;	border-radius: 5px;	width: 160px; height: 50px;" onclick="window.location.href='manager.php';">Back</button>
</table>
</body>
</html>