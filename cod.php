<?php
include 'connection.php';

if(isset($_POST['cod']))
{
	$uid = $_POST['uid'];
	$total=$_POST['total'];
	$pay=$_POST['payment'];
	$quantity=$_POST['quantity'];
	$rn=$_POST['roomno'];
	$app=$_POST['appartment'];
	$city=$_POST['city'];
	$pin=$_POST['pincode'];
	$pname=$_POST['pname'];
	$imgpath=$_POST['imgpath'];
	$price=$_POST['price'];

	$a=rand(100,500);
	$b=rand(300,900);
    $oid="$a"."$b";
	
	$sql1 = "insert into orders(order_id,user_id,RoomNo, Appartment, city, pincode, PaymentMethod, OrderAmount, quantity,imgpath,price,pname) values ('$oid','$uid','$rn', '$app', '$city','$pin','$pay','$total','$quantity','$imgpath','$price','$pname')";
	$update = "update cart set action='ordered', order_id='$oid' where user_id='$uid' and action='cart'";

	if($con->query($sql1) == TRUE && $con->query($update)){
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Order Placed Successfully');
			window.location.href='bill.php?total=$total&pay=$pay&rn=$rn&app=$app&city=$city&pin=$pin&oid=$oid&uid=$uid';
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
}

?>
