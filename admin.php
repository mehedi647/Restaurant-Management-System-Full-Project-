<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: latha;
            color: white;
            background: url(pic3.jpeg);
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
        <!-- <a href="#Profile Update">Profile Update</a> -->
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



        <a href="#accounts">Accounts</a>

        <!-- <a href="#Rating and Feedback">Rating and Feedback</a> -->

        <!-- <a href="adminLogin.php">Sign Out</a> -->


        <div class="dropdown">
            <button class="dropbtn">Order History
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Order History 1</a>
                <a href="#">Order History 2</a>
                <a href="#">Order History 3</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Offer
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Flat Tk 200 Off On First Order</a>
                <a href="#">Flat Tk 300 Off On Tk 2000 to Above</a>
                <a href="#">Flat Tk 400 Off On Tk 4500 to Above</a>
            </div>
        </div>

        <!-- <a href="#Offer">Offer</a> -->

        <div class="dropdown">
            <button class="dropbtn">Coupon Code
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">FO200</a>
                <a href="#">RMS300</a>
                <a href="#">RMS400</a>
            </div>
        </div>

        <!-- <a href="#Coupon Code">Coupon Code</a> -->

        <!-- <a href="#Voucher">Voucher</a> -->

        <div class="dropdown">
            <button class="dropbtn">Gift Card
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">50 tk</a>
                <a href="#">100 tk</a>
                <a href="#">150 tk</a>
            </div>
        </div>

        <a href="#Rating and Feedback">Rating and Feedback</a>

        <a href="adminLogin.php">Sign Out</a>


    </div>
    <!-- <a href="#Rating and Feedback">Rating and Feedback</a> -->
    <!-- <a href="adminLogin.php">Sign Out</a> -->

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

