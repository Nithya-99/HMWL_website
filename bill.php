<?php include 'userheader1.php'; ?>
<?php
include 'connection.php';

// $select = "select * from orders where user_id=1";
// $result = mysqli_query($con,$select);
// $prod= mysqli_fetch_array($result);
$total=$_GET['total'];
$pay=$_GET['pay'];
$rn=$_GET['rn'];
$app=$_GET['app'];
$city=$_GET['city'];
$pin=$_GET['pin'];
$oid=$_GET['oid'];
$uid = $_GET['uid'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Handmade with Love</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<script src="validate.js"></script>
	<style type="text/css">
		.form{
			background: rgba(2, 54, 87, 0.8);
			padding: 20px;

		}
		input[type=text],label{
			font-size: 20px;
			font-family: 'Times new roman';
			text-align: center;
		}
		textarea{
			font-size: 20px !important;
			font-family: 'Times new roman' !important;
			text-align: center !important;
		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('./images/img4.jpg');">
	<form class="form" name='orders' id="orders" action="sendbill.php" method="POST" style="margin-top: 20px; height: auto;">
		<h3 align='center'>Bill</h3>
		<!-- <span onclick="document.getElementById('login-form').style.display='none'" class="close" title="Close Modal">×</span>  -->
		<div class="container">
			<input type="hidden" name="uid" id="uid" required value="<?php echo $uid; ?>" readonly>			
			<br><label>Order ID</label>
			<input type="text" name="oid" id="oid" required value="<?php echo $oid; ?>" readonly>			
			<br><label>Total</label>
			<input type="text" name="total" id="total" required value="<?php echo $_GET['total']; ?>" readonly>
			<label>Payment Method</label>
			<input type="text" name="method" id="method" required value="<?php echo $_GET['pay']; ?>" readonly>
			<br><label>Shipping Address</label>
			<textarea type="text"  name="roomno" id="roomno" required><?php echo $rn ?> &nbsp; <?php echo $app ?> &nbsp;<?php echo $city ?> &nbsp; <?php echo $pin; ?></textarea>

			<div class="clearfix"> 
				<br><button class="btn" name="bill">OK</button><br>
			</div>

		</div> 
	</form> 
	<div id="footer">
		<?php include 'footer.php'; ?>
	</div>

</body>
</html>
