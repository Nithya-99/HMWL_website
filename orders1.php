<?php include 'userheader1.php'; ?>
<?php
require_once('config.php');
$t=$_GET['total'];
$uid=$_GET['uid'];
$quantity=$_GET['quantity'];
$pname=$_GET['pname'];
$imgpath=$_GET['imgpath'];
$price=$_GET['price'];
//echo $t;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Handmade with Love</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="header_footer.css">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<script src="validate.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.form{
			background: rgba(2, 54, 87, 0.8);
			padding: 20px;

		}
		@media screen and (min-width: 470px) and (max-width: 628px){
			#footer{
				position: relative;
		}
	</style>
</head>
<body style="background-image: url('./images/img4.jpg');">
	<div>
		<form class="form" name='orders' id="orders" method="POST" style="margin-top: 20px;">
			<h3 align='center'>Place Order</h3>
			<div class="container">

				<input type="hidden" name="uid" id="uid" value="<?php echo $uid; ?>" required>
				<input type="hidden" name="imgpath" id="imgpath" value="<?php echo $imgpath; ?>" required>
				<input type="hidden" name="pname" id="pname" value="<?php echo $pname; ?>" required>
				<input type="hidden" name="price" id="price" value="<?php echo $price; ?>" required>
				<label>Total no of Products</label>
				<input type="text" name="quantity" id="quantity" value="<?php echo $quantity; ?>" required readonly> 
				<input placeholder="Room No" type="text"  name="roomno" id="roomno" required> 
				<input placeholder="Appartment" type="text"  name="appartment" id="appartment" required> 
				<input placeholder="City" type="text"  name="city" id="city" required> 
				<input placeholder="Pincode" type="number"  name="pincode" id="pincode" required> 
				<br><br><label>Total</label>
				<input type="text" name="total" id="total" required value="<?php echo $t; ?>" readonly>

				<label>Payment Method</label>
				<fieldset>
					<input type="radio" name="payment" onclick="disable()" value="COD" class="col-2">COD
					<input type="radio" name="payment" onclick="disable()" value="RazorPay" class="col-2">RazorPay<br>
				</fieldset>
				
				<div class="clearfix"> 
					<button class="btn" name="cod" id="cod" disabled="true" onclick="paycod()">Proceed</button><br><br>
					<button class="btn" name="online" id="online" disabled="true" onclick="payonline()">Razor Pay</button><br><br>
					
				</div> 
			</div> 
		</form> 
		
	</div>
	<div id="footer" style="position: relative; width: 100%; bottom: 0px;">
		<?php include 'footer.php'; ?>
	</div>

	
	<script type="text/javascript">

		function paycod()
		{
			document.getElementById("orders").action='cod.php';
		}
		
		function payonline()
		{
			document.getElementById("orders").action = "razor.php";
		}
		function disable()
		{
			var pay = document.orders.payment.value;
			//alert(pay);
			if(pay == 'COD'){
				document.getElementById('cod').disabled=false;
				document.getElementById('online').disabled=true;
			}
			if(pay == 'RazorPay'){
				document.getElementById('online').disabled=false;
				document.getElementById('cod').disabled=true;
			}

		}

	</script>
	
</body>
</html>

