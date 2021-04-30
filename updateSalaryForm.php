<?php
require_once('Connection.php');
 $getID = $_GET['dID'];
 $sID = $_GET['sID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Salary Form</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
   <center>
   <h1 style="background-color:powderblue;">Update Salary Form</h1>
       <form class="form-horizontal" action="" method="GET">
	   
	     <br><br><br><br><br><br><br><br>
	   
            <div class="form-input">
			
				<div class="textbox">
                    <input type="hidden" value="<?php echo "$getID" ?>" name="id" id="id">
                </div>
			
				<div class="textbox">
					<label>Salary:</label>
                    <input type="number" value="<?php echo "$sID" ?>" min="1" max="100000000" name="salary" id="salary" placeholder="Enter salary">
                </div>
            </div>
            <br>
            <div class="form-input">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
			<button type="button" onclick="window.location.href='salary.php';">
                Back
            </button>
        </form>
   </center>
</body>
</html>

<?php

if(isset($_GET['submit']))
{
	 $getID = $_GET['id'];
	 $sID = $_GET['salary'];
	
	$sql= "UPDATE addemp SET salary = '$sID' WHERE ID = '$getID' ";
	
	$data = mysqli_query($conn,$sql);
	
	if($data)
	{
		echo "<script>alert('Record Updated')</script>";
		header("Location: salary.php");
	}
	else
	{
		echo "Failed";
	}
	
}
?>