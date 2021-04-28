<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handmade with Love</title>
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<style type="text/css">
		.navbar{
			background: #fff;
			margin: 0px 0px 0px 0px;
			border-bottom: 3px solid #0a3254;
			padding: 8px 8px;
			height: 60px;
		}

		.navbar-brand{
			float: left;
		}

		.nav-item{
			float: right;
			margin-right: 0px;
		}

		.logo{
			height: 40px;
			margin: 5px 10px;
		}

		.nav-link {
			font-size: 16px;
			font-weight: bold;
			color: #fff;
			text-decoration: none;
		}

		.dropdown-menu a{
			font-size: 16px;
			font-weight: bold;
			color: #000;
			text-decoration: none;
		}

		.navbar-toggler {
			margin-bottom: 15px;
			border-color: #0a3254;
			border-width: 1px;
			z-index: 9;
		}
		.navbar-toggler-icon {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(9,55,244, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
		}

		#navbarSupportedContent ul li{
			border-left: 1px solid #fff;
			list-style-type: none;
			padding: 10px 25px;
			/*text-align: center;*/
			background-color: #0a3254;
			cursor: pointer;
			height: 57px;
			margin: 0px;
		}

	</style>
</head>
<body>


	<nav class="navbar navbar-expand-lg sticky-top">
		<div class="container" style="margin: 0px;">
			<a class="navbar-brand" href="allproducts.php"><img src="./images/Handmadewithlove.png" alt="Handmadewithlove" class="logo"></a>

			<button class="navbar-toggler" onclick="hideshow()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" style="background-image: url('./images/menu.svg');"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="allproducts.php">Products <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="insertproduct.php">Add</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?logout">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<script type="text/javascript">
		var i=0;
		function hideshow(){
			i=i+1;
			if(i%2==0){
				document.getElementById('navbarSupportedContent').style.visibility='hidden';
			}
			else if(i%2!=0){
				document.getElementById('navbarSupportedContent').style.visibility='visible';
			}
		}
	</script>
</body>
</html>