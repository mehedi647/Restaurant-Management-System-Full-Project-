<?php
require_once('Connection.php');

$sql = "SELECT * FROM food WHERE Food LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		echo " <tr>
				<th>".$row['ID']."</th>
				<th>".$row['Food']."</th>
				<th>".$row['Price']."</th>
			   </tr>";
	}
}
else
{
	echo "<tr><td> 0 result found </td></tr>";
}

?>