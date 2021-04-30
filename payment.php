<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="payment.css">

</head>
<body>

	<div id="wrapper">
		<div class="payment">
		
		<div class="payment_product">
			<div>
				<h2>Smokey Hamburger</h2>
				<div class="price">
					120 Tk
				</div>
			</div>
		</div>
		<div class="payment_bill">
			<h1>Restaurent Management System</h1>
			<br>
			<h3>Receipt Summery</h3>
			<ul>
				<li>
					<span>120 x 1 item</span>
					<span>120 Tk</span>
				</li>
				<li>
					<span>Total</span>
					<span>120 Tk</span>
				</li>
			</ul>
			<hr>
			<h3>Payment Information</h3>
			<form action="thank.php" class="payment_form">
				<div class="form-input">
					<input type="text" placeholder="Debit/Credit - Card Number" style="width: 100%">
				</div>
				<h3>OR</h3>
				<div class="form-input">
					<input type="text" placeholder="BKash / Nagad Number" style="width: 100%">
				</div>
				<br><br>
				<button type="submit">ORDER NOW</button>
			</form>
		</div>
		
			
		
	</div>

	</div>

</body>
</html>