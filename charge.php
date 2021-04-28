<?php

include 'connection.php';
$uid = $_GET['uid'];
$total=$_GET['t'];
$pay=$_GET['pay'];
$quantity=$_GET['quantity'];
$rn=$_GET['rn'];
$app=$_GET['app'];
$city=$_GET['city'];
$pin=$_GET['pin'];
$oid=$_GET['oid'];
$pname=$_GET['pname'];
$imgpath=$_GET['imgpath'];
$price=$_GET['price'];


if($_POST){

	$razorpay_payment_id = $_POST['razorpay_payment_id'];
	$sql1 = "insert into orders(order_id,user_id,RoomNo, Appartment, city, pincode, PaymentMethod, OrderAmount, quantity,imgpath,price,pname) values ('$oid','$uid','$rn', '$app', '$city','$pin','$pay','$total','$quantity','$imgpath','$price','$pname')";
	$update = "update cart set action='ordered', order_id='$oid' where user_id='$uid' and action='cart'";

	if($con->query($sql1) == TRUE && $con->query($update)){
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Order Placed Successfully');
			window.location.href='./bill.php?total=$total&pay=$pay&rn=$rn&app=$app&city=$city&pin=$pin&oid=$oid&uid=$uid';
			</script>");
		
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Error in Placing Order');
			window.location.href='./cart.php';
			</script>");
		
		// echo
	}
	//echo "Razorpay success ID: ". $razorpay_payment_id;
}

?>
