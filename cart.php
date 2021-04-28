<?php include 'userheader1.php'; ?>
<?php
include 'connection.php';

if(isset($_POST['addcart']))
{

	$pid = $_POST['id'];
	$pname = $_POST["pname"];
	$price = $_POST["price"];
	$type  = $_POST["type"];
	$imgpath = $_POST["imgpath"];
	$description = $_POST["description"];
	$quantity = $_POST['quantity'];
	$uid = $_GET['uid'];

	$select = "select product_id from cart where product_id='$pid' and user_id ='$uid' and action='cart'";
	$result = mysqli_query($con,$select);
	$prod= mysqli_fetch_array($result);

	// echo $prod['product_id'];
	// $ans=is_null($prod);
	// is_null($prod) ? print_r("True\n") : print_r("False\n");
	// echo $result->num_rows;
	
	if(is_null($prod)==FALSE && $result->num_rows > 0 )
	{
		if(in_array($pid, $prod, TRUE))
		{
			echo '<script language="javascript">';
			echo 'alert("Product already added to cart")';
			echo '</script>';
		}
		
	}

	elseif(is_null($prod)==FALSE)
	{
		if(in_array($pid, $prod, TRUE))
		{
			echo '<script language="javascript">';
			echo 'alert("Product already added to cart")';
			echo '</script>';
		}
	}
	else{
		$sql1 = "insert into cart(user_id, type, product_id, product_name, description, imagepath, price, quantity,action) values ('$uid','$type','$pid','$pname','$description','$imgpath','$price','$quantity','cart')";

		if($con->query($sql1) == TRUE){
			echo '<script language="javascript">';
			echo 'alert("Product added to cart Successfully")';
			echo '</script>';

		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Error in adding product")';
			echo '</script>';
		}
		
		
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
	<link rel="stylesheet" type="text/css" href="header_footer.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		img{
			/*width: 20vw;*/
			height: 20vh;
		}
		td,th{
			text-align: center;
			vertical-align: middle !important;
			width: 12%;
			font-family: 'Times new roman';

		}
		@media screen and (min-width: 801px){
			.card{
				display: none !important;
			}
			.table{
				display: block;
			}
			.borders{
				display: block!important;
			}
			.sorders{
				display: none!important;
			}
		}
		@media screen and (max-width: 800px){
			.card{
				display: block;
			}
			#btn1{
				display: none;
			}
			.table{
				display: none;
			}
			.borders{
				display: none!important;
			}
			.sorders{
				display: block;
			}
			#footer{
				bottom: 0px;
				position: relative;
				width: 100%;
			}
		}
		
		
	</style>
</head>
<body>
	<h2 class="text-center" style="color: #000;">Cart</h2>

	<div style="height:150rem; height: auto;">
		<?php
		require_once('connection.php');

		$query="select * from cart where user_id='$uid' and action='cart'";
		$result = $con->query($query);	
		if($result->num_rows > 0){
			$total=0;
			while($product=mysqli_fetch_assoc($result)){
				$total = $total + ($product["quantity"] * $product["price"]);
				?>
				<div class="card mb-3">
					<img class="card-img-top" src="<?php echo $product['imagepath']; ?>" style="width:50vw; " alt="Card image cap"> 
					<div class="card-body">
						<h5 class="card-title"><?php echo $product['product_name']; ?></h5>
						<p class="card-text"><?php echo $product['description']; ?></p>

						<form method='POST' action="cart.php?pid=<?php echo $product['product_id']; ?>">
							<p style="vertical-align: middle!important;"><b>Quantity:</b> <input type='number' style="border: 1px solid black; margin: 5px; text-align: center;" name='quantity' min=1 max=10 value="<?php echo $product['quantity']; ?>"><button type='submit' name='incquantity' class='btn btn-success'>Add</button></p><p>
								<p class="card-text"><b>Price:</b> Rs <?php echo $product['price']; ?></p>
								<button type='submit' name='remove' class='card-link btn btn-danger'>Remove</button></p>
							</form>

						</div>
					</div>
				<?php } ?>
				<div class="card mb-3">
					<button class="btn btn-primary" onclick="showOrders('<?php echo $uid; ?>')">View Order</button>
					<div id="orders" class="sorders">Your Order will be listed here...</div>
				</div>
			<?php } ?> 

			<div class="table-responsive" style="height: auto;">
				<?php
				require_once('connection.php');

				$query="select * from cart where user_id='$uid' and action='cart'";
				$result = $con->query($query);		
				echo "<center> <table class='table table-hover table-bordered' style='height:auto'>";
				if($result->num_rows > 0){
					echo "<tr>";
					echo "<th> Product ID</th>";
					echo "<th> Product Name</th>";
					echo "<th> Quantity</th>";
					echo "<th> Type</th>";
					echo "<th> Image</th>";
					echo "<th> Description</th>";
					echo "<th> Action</th>";
					echo "<th> Price</th>";
					echo "</tr>";
					$total=0;
					while($product=mysqli_fetch_assoc($result)){

						echo "<tr>";
						echo "<td>" . $product['product_id'] . "</td>";
						echo "<td>" . $product['product_name'] . "</td>";
						echo "<td><form method='POST' action='cart.php?pid=$product[product_id]'><input type='number' name='quantity' min=1 max=10 value=".$product['quantity']."><br><br><button type='submit' name='incquantity' class='btn btn-success'>Add</button></form></td>";
						echo "<td>" . $product['type'] . "</td>";
						echo "<td><img src=".$product['imagepath']."></td>";
						echo "<td>" . $product['description'] . "</td>";
						echo "<td><form method='POST' action='cart.php?pid=$product[product_id]'><button type='submit' name='remove' class='btn btn-danger'>Remove</button></form></td>";
						echo "<td>" . $product['price'] .' Rs '. "</td>";
						echo "</tr>";

						$total = $total + ($product["quantity"] * $product["price"]);

					}
				// echo "<tr><td colspan='7' align='right'>Total</td><th align='right'>".$total."</th></td></tr>";
					echo "</center> </table>";
					echo "<button id=' btn1' class='btn btn-primary borders' onclick='showOrders1(". $uid .")'>View Order</button>
					<div id='orders1' class='borders'>Your Order will be listed here...</div>";


				}

				elseif($result->num_rows == 0){

					echo '<h1 style="font-family:Gabriola;color:red; height:15em">Cart is empty!!</h1>';
				}

				?>


			</div>



		</div>
		<script>
			function showOrders(str) {
				var xhttp;    
				if (str == "") {
					document.getElementById("orders").innerHTML = "";
					return;
				}
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("orders").innerHTML = this.responseText;
					}
				};
				xhttp.open("GET", "getorderdetails.php?t="+<?php echo $total; ?>+"&q="+str, true);
				xhttp.send();
			}
			function showOrders1(str) {
				var xhttp;    
				if (str == "") {
					document.getElementById("orders1").innerHTML = "";
					return;
				}
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("orders1").innerHTML = this.responseText;
					}
				};
				xhttp.open("GET", "getorderdetails.php?t="+<?php echo $total; ?>+"&q="+str, true);
				xhttp.send();
			}
		</script>
		<div id="footer" style="position: relative; bottom: 0px;">
			<?php include 'footer.php'; ?>

		</div>
	</body>
	</html>

	<?php
	if(isset($_POST['incquantity']))
	{
		$pid = $_GET['pid'];
		$quantity = $_POST['quantity'];

		$sql1 = "update cart set quantity = '$quantity' where product_id='$pid'";
		if($con->query($sql1) == TRUE){
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Successfully Increased the quantity');
				window.location.href='./cart.php';
				</script>");
			
		}
		else
		{
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Error in Increasing quantity');
				window.location.href='./cart.php';
				</script>");
			

		// echo($con->error);
		}
	}
	if(isset($_POST['remove']))
	{
		$pid = $_GET['pid'];

		$sql1 = "delete from cart where product_id='$pid'";
		if($con->query($sql1) == TRUE){
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Successfully Removed from cart');
				window.location.href='./cart.php';
				</script>");

		}
		else
		{
			echo ("<script LANGUAGE='JavaScript'>
				window.alert('Error in Removing from cart');
				window.location.href='./cart.php';
				</script>");


		// echo($con->error);
		}
	}

	?>
