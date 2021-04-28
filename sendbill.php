<?php

include 'connection.php';

if(isset($_POST['bill']))
{
	$total=$_POST['total'];
	$pay=$_POST['method'];
	$oid=$_POST['oid'];
	$uid = $_POST['uid'];



	$query = "select email from user where user_id = '$uid'";

	$result=mysqli_query($con,$query);

	$email = mysqli_fetch_assoc($result);


	if($result->num_rows>0)	
	{
		$to = $email['email'];
		$subject = "Order Placement Bill";

		$message = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		Order Details<br>-----------------------------------------------<br>".
		"<br>Your Order is placed successfully : 
		<br>Here is your Order ID  :".$oid."
		<br>Total Amount  Rs :".$total."
		<br>Method of payment:".$pay."
		<br>Your order will be delivered soon.
		<br>Happy shopping!!
		<br> Sincerely, <br>
		HandmadewithLove Team
		</body>
		</html>
		";

// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
		$headers .= 'From: <nithyakanna99@example.com>' . "\r\n";
			//$headers .= 'Cc: myboss@example.com' . "\r\n";

		$sentmail=mail($to,$subject,$message,$headers);
		if($sentmail)
		{
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Order summary is sent to your registered email');
				window.location.href='./products.php';
				</script>");
		}
		else
		{			
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something Wrong with Sending Email to You, Please Check Your Internet Connection....');
				window.location.href='./bill.php';
				</script>");	
		}
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Email ID does not exists!');
			window.location.href='./bill.php';
			</script>");	

	}
}


?>
