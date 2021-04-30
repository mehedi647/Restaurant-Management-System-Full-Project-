<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Delivery Man Ragistration Page</title>
    <link rel="stylesheet" href="style2.css">

</head>



<body>
    <div class="login-box">
        <h1>Delivery Man Sign Up</h1><br>


        <form class="form-horizontal" action="deliveryRegistration_code.php" method="POST" onsubmit="return validation();" >
            <div class="form-input">
                <div class="textbox">
                    <label for="firstname"></label>
                    <i class="fa fa-user fa-1x cust" area-hidden="true"></i>
                    <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname">
                </div>


                <div class="textbox">
                    <label for="lastname"></label>
                    <i class="fa fa-user fa-1x cust" area-hidden="true"></i>
                    <input type="text" name="lastname" id="lastname" placeholder="Enter Lastname">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="lastname">Gender:</label>
                    <div class="col-sm-6">
                        <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                    </div>
                </div>
                <div class="textbox">
                    <label for="email"></label>
                    <i class="fas fa-envelope-open-text fa-1x cust" area-hidden="true"></i>
                    <input type="email" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="textbox">
                    <label for="pwd"></label>
                    <i class="fa fa-lock fa-1x cust" area-hidden="true"></i>
                    <input type="password" name="password" id="pwd" placeholder="Enter password">
                </div>
            </div>
            <br>
            <div class="form-input">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
			<button type="button" onclick="window.location.href='Deliverylogin.php';">
                Back
            </button>
        </form>
    </div>

    &nbsp; &nbsp; &nbsp; &nbsp;
    <br>

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


</body>

</html>
