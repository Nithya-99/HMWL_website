<?php include 'header1.php';?>

<! DOCTYPE html> 
<head>
	<title>Handmade with Love</title>
	<script src="validate.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="header_footer.css">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.form{
			background: rgba(2, 54, 87, 0.8);
			padding: 20px;
		}
	</style>
</head>

<body style="background-image: url('./images/img4.jpg');">
	<div style="height: auto;">
		<form action="forgotpassword.php" class="form" id="form1" style="margin-top: 80px;" method="POST">
			<h3 align='center'>Forgot Password</h3>
			<div class="container">
				<input type="email" placeholder="Email ID" name="email" id="email" required>

				<div class="clearfix"> 
					<button class="fpw" name="fpw" type="submit">Retrieve</button> 
				</div> 
			</div> 
		</form> 
	</div>
	<div id="footer">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
<?php

include 'connection.php';

if(isset($_POST['fpw']))
{


	$eid = $_POST['email'];	

	$query = "select password from user where email = '$eid'";

	$result=mysqli_query($con,$query);

	$password = mysqli_fetch_assoc($result);


	if($result->num_rows>0)	
	{
		$to = $eid;
		$subject = "Password Recovery";

		$message = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		Password Recovery <br>-----------------------------------------------<br>".
		"<br> Your Email Id is : ".$eid.
		"<br>Here is your password  :".$password['password']."
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
				window.alert('Your Password has been sent to Your Email id.............');
				window.location.href='./loginform.php';
				</script>");
		}
		else
		{			
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Something Wrong with Sending Email to You, Please Check Your Internet Connection....');
				window.location.href='./loginform.php';
				</script>");	
		}
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Sorry This Email id is Not Regester with us.....');
			window.location.href='./loginform.php';
			</script>");	

	}
}


?>

