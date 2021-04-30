<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="style.css">

</head>


<body>
    <div class="login-box">
        <h1>Admin Login</h1><br>


        <form class="form-horizontal" method="POST" action="adminlogin_code.php" onsubmit="return validation();" >
            <div class="form-input">
                <div class="textbox">
                    <label for="email"></label>
                    <i class="fa fa-user fa-2x cust" area-hidden="true"></i>
                    <input type="email" name="email" id="email" placeholder="Enter email">
                </div>



                <div class="textbox">
                    <label for="pwd"></label>
                    <i class="fa fa-lock fa-2x cust" area-hidden="true"></i>
                    <input type="password" name="password" id="pwd" placeholder="Enter password">
                </div>
            </div>
            <br>
            <div class="form-input">

                <button type="submit" name="login" class="btn btn-primary">Login</button>

            </div><br>
            <form method="post" action="adminlogin_code.php">
            <button type="button" onclick="window.location.href='adminRagistration.php';">
                Sign Up
            </button>

            <button type="button" onclick="window.location.href='home.php';">
                Back
            </button>
            <br><br>

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me<br>
            </label>

            &nbsp; &nbsp; &nbsp; &nbsp;
            <br>

            <span class="psw"><a href="#">Forget password?</a></span><br>
            </form>

    
    </form>
    </div>
    <br>

<div id="erresult" style="color:red"></div>

<script type="text/javascript">
function validation()
{
	var email = document.getElementById('email').value;
	var pwd = document.getElementById('pwd').value;
	if(email == '' || pwd == '')
	{
		document.getElementById('erresult').innerHTML = "Email and password required";
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
