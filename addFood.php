<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Food</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
   <center>
   <h1 style="background-color:powderblue;">Add Food</h1>
       <form class="form-horizontal" action="addFood_code.php" method="POST">
	   
	     <br><br><br><br><br><br><br><br>
	   
            <div class="form-input">
                <div class="textbox">
                    <input type="text" name="foodname" id="foodname" placeholder="foodname">
                </div>

				<div class="textbox">
					<label>Price:</label>
                    <input type="number" value="1" min="1" max="100000000" name="price" id="price" placeholder="Enter price">
                </div>
            </div>
            <br>
            <div class="form-input">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
			<button type="button" onclick="window.location.href='manager.php';">
                Back
            </button>
        </form>
   </center>
</body>
</html>