<?php include 'adminheader1.php';?>
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
</head>
<body style="background-image: url('./images/img4.jpg');">
	<div class="form" method="POST" style="height: 35em">
		<form action="insertproduct.php" class="form1" id="form1" method="POST">
			<h3 align='center'>Insert Products</h3>
			<!-- <span onclick="document.getElementById('login-form').style.display='none'" class="close" title="Close Modal">×</span>  -->
			<div class="container">
				<input type="text" placeholder="Product name" name="pname" id="pname" required>
				<input type="number" placeholder="Price" name="price" id="price" required> 
				<!-- <input type="text" placeholder="Type" name="type" id="type" required> -->
				<select name="type">
					<option value="Jewelleryset">Jewellery Set</option>
					<option value="Bangles">Bangles</option>
					<option value="Earrings">Earrings</option>
					<option value="Necklace">Necklace</option>
				</select>
				<input type="text" placeholder="Image Path" name="imgpath" id="imgpath" required value='./images/'>
				<textarea type="text" placeholder="Description" name="description" id="description" required></textarea>

				<div class="clearfix"> 
					<button class="insertbtn" name="insert" type="submit">Add</button> 
				</div> 
			</div> 
		</form> 
	</div>
	<div id="footer" style="position: relative; bottom: 0px;">
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['insert']))
{
	$pname    = $_POST["pname"];
	$price   = $_POST["price"];
	$type  = $_POST["type"];
	$imgpath = $_POST["imgpath"];
	$description  = $_POST["description"];
	$sql1 = "insert into products(p_name,p_amount, type,  imagepath, description) values('$pname', '$price',  '$type','$imgpath', '$description')";

	if($con->query($sql1) == TRUE){
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Product added Successfully');
			window.location.href='./insertproduct.php';
			</script>");		
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Error in adding product');
			window.location.href='./insertproduct.php';
			</script>");
			
		
		// echo($con->error);
	}
}
?>
