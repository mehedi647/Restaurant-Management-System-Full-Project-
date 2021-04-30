<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
   <center>
   <h1 style="background-color:powderblue;">Add Employee</h1>
       <form class="form-horizontal" action="addemp_code.php" method="POST" onsubmit="return validation();">
	   
	     <br><br><br><br><br><br><br><br>
	   
            <div class="form-input">
                <div class="textbox">
                    <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname">
                </div>

                <div class="textbox">
                    <input type="text" name="lastname" id="lastname" placeholder="Enter Lastname">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Gender:</label>
                    <div class="col-sm-6">
                        <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                    </div>
                </div>
                <div class="textbox">
                    <input type="email" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="textbox">
                    <input type="password" name="password" id="pwd" placeholder="Enter password">
                </div>
				<div class="textbox">
					<label>Salary:</label>
                    <input type="number" value="1" min="1" max="100000000" name="salary" id="salary" placeholder="Enter salary">
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
		<div id="erresult" style="color:red"></div>

<script type="text/javascript">
function validation()
{
	var firstname = document.getElementById('firstname').value;
	var lastname = document.getElementById('lastname').value;
	var gender = document.getElementById('gender').value;
	var email = document.getElementById('email').value;
	var pwd = document.getElementById('pwd').value;
	if(firstname == '' || lastname == '' || gender == '' || email == '' || pwd == '')
	{
		document.getElementById('erresult').innerHTML = "All fields are required";
		return false;
	}
	else
	{
		return true;
	}
}
</script>
   </center>
</body>
</html>