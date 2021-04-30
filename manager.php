<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manager</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: latha;
            color: white;
            background: url(manager.jpg);
            background-size: cover;


        }

        form,
        input[type="button"]:hover {
            background-color: orange;
        }

    </style>
</head>

<body>



    <input type="text" id="search" placeholder="Search food by name" class="food-search"> &nbsp;&nbsp;

    <input class="ssearch" type="submit" name="submit" value="Search">

    <br><br>

    <div class="navbar">


        <div class="dropdown">
            <button class="dropbtn">Profile Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Change Profile Picture</a>
                <a href="#">Change Password</a>
                <a href="#">Change Personal Info</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Employee Hiring
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="addemp.php">Add employees</a>
                <a href="deleteEmp.php">Delete employees</a>
            </div>
        </div>

        <a href="salary.php">Accounts</a>
        <a href="#">Order Confirmation</a>

        <div class="dropdown">
            <button class="dropbtn">Payment Method
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Cash</a>
                <a href="#">Cadit card</a>
                <a href="#">Bikash</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Menu card Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="addFood.php">Add Food</a>
                <a href="deleteFood.php">Delete Food</a>
                <a href="#">Price Update</a>
            </div>
        </div>


        <a href="managerLogin.php">Sign Out</a>

    </div>


    <div class="wd">
        <h1>Food Details</h1><br>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Food</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>

            <tbody id="output">

            </tbody>
        </table>
    </div>
	
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keypress(function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });
            });
        });

    </script>

</body>

</html>
<br><br><br><br>
<div class="footer">
<br><p>Copyright@2021_Restaurant Management System</p>
</div>

