<?php
require_once('connection.php');

$total = $_GET['t'];
$uid=$_GET['q'];
$sql = "select sum(cart.quantity), user.name, cart.product_name, cart.imagepath, cart.price from cart inner join user where cart.user_id=user.user_id AND cart.user_id=? and action='cart'";

$stmt = $con->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($pcount, $name, $pname, $imgpath, $price);
$stmt->fetch();
$stmt->close();

// echo "<table style='margin:10px'>";
echo "<center>";
echo"<table id='torder' style='border:2px;width=50%; margin:10px;'>";
echo "<tr>";
echo "<th>Customer Name</th>";
echo "<td>" . $name . "</td>";
echo "<tr></tr>";
echo "<th>Total Product</th>";
echo "<td>" . $pcount . "</td>";
echo "</tr>";
echo "<th>Total Amount</th>";
echo "<td>Rs. " . $total . "</td>";
echo "</tr>";
echo "</table>";
echo "<form  action = 'orders1.php?uid=$uid&total=$total&quantity=$pcount&imgpath=$imgpath&pname=$pname&price=$price' method = 'POST'>";
echo "<button  type='submit' name='place' style='margin:3px;background-color: #4CAF50;color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;'>Place Order</button></form>";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style>
		table,th,td {
			border : 1px solid black;
			border-collapse: collapse;
			
		}
		button{
			/* Green */
			/*border: none;*/
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		#torder{
			width: 50%;
		}
		th,td {
			padding: 5px;
			text-align: center!important;
		}
	</style>
</head>
<body>
</body>
</html>