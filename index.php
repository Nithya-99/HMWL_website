<?php include 'header1.php';?>
<?php

if(!isset($_SESSION))
{
	session_start();
}
if(isset($_GET['logout'])) 
{
	unset($_SESSION['user']);
	if(isset($_SESSION['Admin'])) 
	{
		unset($_SESSION['Admin']);
	}
	if(isset($_SESSION['cart']))
	{
// unset($_SESSION['cart']);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Handmade with Love</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.carousel-item{
			height: 90vh;
			min-height: 300px;
			background: no-repeat center center scroll;
			-webkit-background-size:cover;
			background-size: cover;
		}
		
		img{
			height: 100%;
			width: auto;
		}
		@media screen and (min-width: 601px) and (max-width: 800px){
			.carousel-item {
				height: 20vh;
			}
		}

		@media screen and (min-width: 301px) and (max-width: 600px) {
			.carousel-item {
				height: 10vh;
			}
		}

		@media screen and (min-width: 101px) and (max-width: 300px) {
			.carousel-item {
				height: 5vh;
			}
		}
		
	</style>
</head>
<body>
	<div id="slider" class="carousel slide" data-ride="carousel" style="z-index: 2;" >
		<ol class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active"></li>
			<li data-target="#slider" data-slide-to="1"></li>
			<li data-target="#slider" data-slide-to="2"></li>
			<li data-target="#slider" data-slide-to="3"></li>
			<li data-target="#slider" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner ">
			<div class="carousel-item">
				<img class="d-block w-100" src="./images/bluejhumkas.jpg" alt="bluejhumkas">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="./images/orangejewelleryset.jpeg" alt="orangejewelleryset">
			</div>
			<div class="carousel-item active">
				<img class="d-block w-100" src="./images/orangelotusearrings.jpg" alt="orangelotusearrings">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="./images/pinkgreenbangles.jpg" alt="pinkgreenbangles">
			</div>
						<div class="carousel-item">
				<img class="d-block w-100" src="./images/orangeearrings.jpg" alt="orangeearrings">
			</div>
		</div>
	</div>
</body>
</html>
<?php include 'footer.php'; ?>
