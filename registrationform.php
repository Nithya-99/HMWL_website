<?php include 'header1.php';?>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.header{
			top: 0px;
			position: sticky;
			z-index: 3;
		}
		
	</style>
</head>
<body style="background-image: url('./images/img4.jpg');">
 
	<div class="form" method="POST">
		<form  class="form1" id='form1' name="signin" action="register.php" onsubmit="return validateData()" method="POST">
			<h3 align='center'>Sign Up</h3>
			<!-- <span onclick="document.getElementById('register-form').style.display='none'" class="close" title="Close Modal">×</span>  -->
			<div class="container">


				<input type="text" placeholder="Enter Name" name="name" required>


				<input type="text" placeholder="Enter Email" name="email" required> 


				<input type="text" placeholder="Enter Mobile-number" max="10" min="10" name="mobile" required>

				<label>Gender</label>
				<fieldset>
					<input type="radio" name="gender" value="Male" class="col-2">Male
					<input type="radio" name="gender" value="Female" class="col-2">Female
					<input type="radio" name="gender" value="Others" class="col-2">Others<br>
				</fieldset>

				<input type="text" placeholder="Enter Username" name="uname1" required>


				<input type="password" placeholder="Enter Password" name="psw1" required> 


				<input type="password" placeholder="Re-enter Password" name="cpsw" required>

				<div class="clearfix">  
					<button class="btn" type="submit">Sign Up</button> 
					<!--<button type="button" onclick="document.getElementById('form-signup').style.display='none'" class="cancelbtn">Cancel</button>-->
					<p class="message">Already Registered? <a href="loginform.php">Login</a></p>
				</div> 
			</div> 
		</form>
	</div>
	<div id="footer">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
