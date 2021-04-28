<!DOCTYPE html>
<html>
<head>
	<title>HandmadeLove</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="header1.css">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	</style>
</head>
<body>


	<nav class="navbar navbar-expand-lg sticky-top">
		<div class="container" style="margin: 0px;">
			<a class="navbar-brand" href="index.php"><img src="./images/Handmadewithlove.png" alt="Handmadewithlove" class="logo"></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="hideshow()">
				<span class="navbar-toggler-icon" style="background-image: url('./images/menu.svg');"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent" >
			<ul class="navbar-nav ml-auto">
				
				<li class="nav-item active">
					<a class="nav-link" href="./loginform.php">Login <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./registrationform.php">SignUp</a>
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
