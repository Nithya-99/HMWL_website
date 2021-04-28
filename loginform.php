<?php include 'header1.php';?>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.header{
			top: 0px;
			position: sticky;
			z-index: 3;
		}
		@media screen and (min-width: 628px) {
			#footer{
				position: fixed !important;
		}
	</style>
</head>
<body style="background-image: url('./images/img4.jpg');">
	<div style="" class="form" method="POST">
		<form action="login.php" class="form1" id="form1" method="POST">
			<h3 align='center'>Login</h3>
			<!-- <span onclick="document.getElementById('login-form').style.display='none'" class="close" title="Close Modal">×</span>  -->
			<div class="container">

				<input type="text" placeholder="Enter username" name="uname" id="uname" required> 


				<input type="password" placeholder="Enter Password" name="psw" id="psw" required> 

				<div class="clearfix"> 
					<button class="btn" name="login" type="submit">Login</button> 
					<!--<button type="button" onclick="document.getElementById('form-login').style.display='none'" class="cancelbtn">Cancel</button>--> 
					<p class="message">Not Registered? <a href="registrationform.php">Register</a></p>
					<p class="message"> <a href="forgotpassword.php">Forgot Password</a></p>
				</div> 
			</div> 
		</form> 
	</div>
	<div id="footer" style="position: relative; bottom: 0px">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>