<?php include 'userheader1.php'; ?>
<?php

// if(!isset($_SESSION))
// {
// 	session_start();
// }

if(!isset($_SESSION['uid']))
{

	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Login First');
		window.location.href='./loginform.php';
		</script>");
}
else
{

	$uid = $_SESSION['uid'];


	require_once('connection.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Handmade with Love</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="header_footer.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		input[type=text],input[type=number],textarea{
			border: none!important;
		}
		p{
			text-align: left;
		}
		img{
			margin-right: 10px;
		}
		@media screen and (max-width: 600px){
			img.responsive{
				display: block !important;
				max-width: 90%;
				background-size: cover;

			}
			.card-body{
				display: block !important;
				max-width: 100%;
				height: auto;

			}
		}

		@media screen and (min-width: 601px) and (max-width: 900px){
			img.responsive{
				display: block !important;
				max-width: 40%;
				float:left;
				padding: 20px 20px 20px 20px;
				background-size: cover;
			}
			.card-body{
				display: block !important;
				max-width: 100%;
				height: auto;
			}
			#footer{

			}

		}

		@media screen and (min-width: 901px) and (max-width: 1000px){
			img.responsive{
				display: block !important;
				max-width: 50%;
				float:left;
				padding: 20px 20px 20px 20px;
				background-size: cover;
			}
			.card-body{
				display: block !important;
				max-width: 100%;
				height: auto;
			}

		}

		@media screen and (min-width: 1001px) and (max-width: 1100px){
			img.responsive{
				display: block !important;
				max-width: 40%;
				float:left;
				padding: 20px 20px 20px 20px;
				background-size: cover;
			}
			.card-body{
				display: block !important;
				max-width: 100%;
				height: auto;
			}

		}

		@media screen and (min-width: 1101px){
			.card{
				width:50vw;
			}
			img.responsive{
				display: block !important;
				max-width: 40%;
				float:left;
				padding: 20px 20px 20px 20px;
				background-size: cover;
				height: 40vh;
				width: 20vw;
			}
			
			.card-body{
				display: block !important;
				max-width: 100%;
				height: auto;
			}
			input[type=text],input[type=number],textarea{
				border: none;
			}
		}
		section{
			margin-top: 200px;
		}

	</style>
</head>
<body style="background-image: url('./images/img4.jpg');">
	
	<h1 style="font-family:Gabriola;font-weight: bold;color:black; background: #c0d1e2; text-align: center;">Order Details</h1>
	<div>
	<?php
	// $sql="select orders.order_id,cart.imagepath,cart.product_name,cart.price,orders.OrderTimeAndDate,order.quantity from orders,cart WHERE orders.user_id=cart.user_id and cart.user_id='$uid' and cart.action='ordered'";
		$sql="select * from cart where user_id='$uid' and action='ordered'";
		$result = $con->query($sql);
		if($result->num_rows > 0){
			while ($order = mysqli_fetch_assoc($result)){
				?>
				<center>
					<div class="card mb-3" style="margin-top:10px;">
						<div class="card-body" style="vertical-align: middle !important;">

							<img class="img-fluid responsive" src="<?php echo $order['imagepath']; ?>" alt="Card image cap">
							<form action = "#" method = 'POST'>
								<p class="card-text"><b>Order ID: </b><input type = 'text' name = 'price' value = "<?php echo $order['order_id']; ?>" readonly> </p>
								<p class="card-text"><b>Ordered On: </b><input type = 'text' name = 'price' value = "<?php echo $order['orderedOn']; ?>" readonly> </p>
								<p class="card-title"><b>Product Name: </b><input type = 'text' name = 'pname' value = "<?php echo $order['product_name']; ?>" size = 40 readonly></p>
								<p class="card-text" ><b>Quantity: </b><input type='number' style="border: 1px solid black; margin: 5px; text-align: left;" name='quantity' value="<?php echo $order['quantity']; ?>" min=1 readonly></p>
								<p class="card-text"><b>Price:</b> Rs. <input type = 'text' name = 'price' value = "<?php echo $order['price']*$order['quantity']; ?>" readonly> </p>

							</form>
						</div>
					</div>
				</center>
				<?php
				
			}
		}
		elseif($result->num_rows==0){
			echo '<h1 style="font-family:Gabriola;color:white;font-weight:bolder; font-size:44px;height:15em; text-align:center">No Orders Placed Yet!!</h1>';

		}
		?>
	</div>
<!-- 	<div style="height: 10rem"></div> -->	
		<div id="footer" style="position: relative;">
		<?php include 'footer.php';?>	

	</div>

</body>
</html>
