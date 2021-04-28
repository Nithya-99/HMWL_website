<?php include 'userheader1.php';?>
<?php

include 'connection.php';

// $price = $_GET['price'];
// $desc = $_GET['desc'];
// $img = $_GET['img'];
$id = $_GET['id'];
$uid=$_GET['uid'];

$query = "select * from products where p_id = '$id'";

$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Handmade with Love</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="header_footer.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		input[type=text],input[type=number],textarea{
			border: none;
		}
		@media screen and (min-width: 801px){
			.card-img-top, .card-body{
				display: none !important;
			}
			.table-responsive{
				display: block !important;
				width: 100%;
				padding:5px;
			}
			input[type=text],input[type=number],textarea{
				border: none;
			}
			td,input,textarea{
				padding: 5px 0;
				font-size: 20px;
				font-family: 'Times New Roman';
				margin: 8px;
				vertical-align: middle !important;
				background: unset;
			}
			textarea{
				vertical-align: middle !important;
			}
			button {
				background-color: #4CAF50; /* Green */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				-webkit-transition-duration: 0.4s; /* Safari */
				transition-duration: 0.4s;
			}
			button:hover{
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			}
		}
		@media screen and (max-width: 800px){
			.card-img-top, .card-body{
				display: block !important;
			}
			.table-responsive{
				display: none !important;
				
			}

		</style>
	</head>
	<body>
		<h1 style="font-family:Gabriola; text-align: center;"> Product Details </h1>
		<hr>
		<div  class="table-responsive" style="height: 50rem; height: auto;">
			<?php
			$query = "select * from products where p_id = '$id'";

			$result=mysqli_query($con,$query);
			while($product=mysqli_fetch_assoc($result))
			{


				echo "<center>";
				echo "<form  action = 'cart.php?uid=$uid&action=add&id=<?php echo $product[p_id]; ?>' method = 'POST'>";

				echo "<table width='100%' border= 0 cellpadding= 0 cellspacing = 5 align = center style = 'padding:5px;'> <tr>";
				echo " <td><input type = 'hidden' class = 'in7' name = 'id' value = '".$product['p_id']."' readonly> </td>";
				echo "</tr> <tr>";
				echo " <td rowspan= 7 style='text-align:center;'><input type = 'hidden' class = 'in7' name = 'imgpath' value = '".$product['imagepath']."' readonly><img src ='".$product['imagepath']."' style='height:50vh; margin-right:20px; margin-bottom:20px'><br></td>";
				echo " <td><b>Product Type:</b><td> <input type = 'text' class = 'in7' name = 'type' value = '".$product['type']."' readonly> </td>";
				echo "</tr> <tr>";
				echo " <td><b>Product Name: </b><td><input type = 'text' name = 'pname' class = 'in7' value = '".$product['p_name']."' size = 40 readonly> </td>";
				echo "</tr> <tr>";
				echo " <td><b>Description: </b><td><textarea style='border:none;' cols='40' rows='3'  name = 'description' class = 'in7' value =  size = 40 readonly>".$product['description']." </textarea></td>";
				echo "</tr> <tr>";
				echo " <td><b>Price:</b><td><input type = 'text' class = 'in7' name = 'price' value = '".$product['p_amount']."' readonly> </td>";
				echo "</tr> <tr>";
				echo "<td><b>Quantity:</b></td><td><input type = 'number' min = '1' max = '10'  value = '1' name = 'quantity' size = 1>";
				echo "</tr> <tr>";
				echo "<td colspan = 2><button type = 'submit' class = 'btn-success' name = 'addcart'> Add to Cart </button></td>";
				echo "</tr> <tr>";
				echo "<td colspan = 2>&nbsp;</td>";

			}

			echo "  </tr> </table>";
			echo "</form>";
			echo "</center>";

			
			?>
		</div>
		<?php
		$query = "select * from products where p_id = '$id'";
		$result=mysqli_query($con,$query);
		while($product=mysqli_fetch_assoc($result))
		{
			?>
		<div style="height: auto;">
			<img class="card-img-top" src="<?php echo $product['imagepath']; ?>" style="width:50vw; " alt="Card image cap"> 
			<div class="card-body">
				<form  action = "cart.php?uid=<?php echo $uid; ?>&action=add" method = 'POST'>
					<input type = 'hidden' name = 'id' value = "<?php echo $product['p_id']; ?>">
					<input type = 'hidden' name = 'imgpath' value = "<?php echo $product['imagepath']; ?>">
					<input type = 'hidden' name = 'type' value = "<?php echo $product['type']; ?>" >
					<p class="card-title"><input type = 'text' name = 'pname' value = "<?php echo $product['p_name']; ?>" size = 40 readonly></p>
					<p class="card-text"><textarea style='border:none;' cols='35' rows='3'  name = 'description' class = 'in7' value =  size = 20 readonly><?php echo $product['description']; ?></textarea></p>

					<p style="vertical-align: middle!important;"><b>Quantity:</b> <input type='number' style="border: 1px solid black; margin: 5px; text-align: center;" name='quantity' value="1" min=1 max=10></p>
					<p class="card-text"><b>Price:</b> Rs. <input type = 'text' class = 'in7' name = 'price' value = "<?php echo $product['p_amount']; ?>" readonly> </p>
					<button type='submit' name='addcart' class='btn btn-success'>Add To Cart</button>
				</form>

			</div>
		</div>
		<?php 
	}
	?>
	<div id="footer" style="position: relative; bottom: 0px; width: 100%">
		<?php include 'footer.php';?>

	</div>
</body>
</html>
