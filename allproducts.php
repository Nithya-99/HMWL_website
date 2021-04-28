<?php include 'adminheader1.php'; ?>
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
		td, th{
			padding: 5px 0;
			font-size: 20px;
			font-family: 'Times New Roman';
			width: 3%;
			margin: 8px;
			text-align: center !important;
			vertical-align: middle !important;
		}
		img{
			height: 20vh;
		}
		table{
			width: 100%;
			border-collapse: separate;
			border-spacing: 50px 0;			
		}
		
		th{
			padding: 10px 0;
			background: #7586bf;
		}

		@media screen and (min-width: 801px){
			.card{
				display: none !important;
			}
			.table{
				display: block;
			}
			
		}
		@media screen and (max-width: 800px){
			.card{
				display: block;
			}
			
			.table{
				display: none !important;
			}
			
		}
	</style>
</head>
<body>
	<h2 class="text-center">All Products</h2>
	<div style="height: auto;">
		<?php
		require_once('connection.php');

		$query="select * from products";
		$result=mysqli_query($con,$query);
		if($result->num_rows > 0){
			while($product=mysqli_fetch_assoc($result)){
				?>
				<div class="card mb-3">
					<img class="card-img-top" src="<?php echo $product['imagepath']; ?>" style="width:50vw; " alt="Card image cap"> 
					<div class="card-body">
						<h5 class="card-title"><?php echo $product['p_name']; ?></h5>
						<p class="card-text"><?php echo $product['description']; ?></p>

						<form method='POST' action="allproducts.php?pid=<?php echo $product['p_id']; ?>">
							<p class="card-text"><b>Price:</b> Rs: <input style='text-align:left; width:50%' type='number' name='price' min=100 value="<?php echo $product['p_amount']; ?>"></p><button type='submit' name='update' class='btn btn-success'>Update</button></p><p>
								<button type='submit' name='delete' class='card-link btn btn-danger'>Remove</button>
							</p>
						</form>

					</div>
				</div>
			<?php } 

		} ?> 
		<div class="table-responsive" style="height: auto;">
			<?php
			echo "<center> <table class='table table-hover table-bordered'>";
			require_once('connection.php');

			$query="select * from products";
			$result=mysqli_query($con,$query);
			if($result->num_rows > 0){
				echo "<tr>";
				echo "<th> Product ID</th>";
				echo "<th> Product Name</th>";
				echo "<th> Price</th>";
				echo "<th> Type</th>";
				echo "<th> Image</th>";
				echo "<th> Description</th>";
				echo "<th> Action</th>";
				echo "</tr>";
				while($product=mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $product['p_id'] . "</td>";
					echo "<td>" . $product['p_name'] . "</td>";
					echo "<td><form method='POST' action='allproducts.php?pid=$product[p_id]'><input style='text-align:center; width:50%' type='number' name='price' min=100 value=".$product['p_amount']."><br><br><button type='submit' name='update' class='btn btn-success'>Update</button></form></td>";
					echo "<td>" . $product['type'] . "</td>";
					echo "<td><img src=".$product['imagepath']."></td>";
					echo "<td>" . $product['description'] . "</td>";
					echo "<td><form method='POST' action='allproducts.php?pid=$product[p_id]&price=$product[p_amount]'><button type='submit' name='delete' class='btn btn-danger'>Remove</button></form></td>";
					echo "</tr>";
				}
			}
			echo "</center> </table>";
			?>
		</div>
	</div>
	<div id="footer" style="position: relative;">
		<?php include 'footer.php'; ?>
	</div>
	
</body>
</html>

<?php
if(isset($_POST['update']))
{
	$pid = $_GET['pid'];
	$price = $_POST['price'];

	$sql1 = "update products set p_amount = '$price' where p_id='$pid'";
	if($con->query($sql1) == TRUE){
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Successfully Updated');
			window.location.href='./allproducts.php';
			</script>");

	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Error in Updating');
			window.location.href='./allproducts.php';
			</script>");

		// echo($con->error);
	}
}
if(isset($_POST['delete']))
{
	$pid = $_GET['pid'];

	$sql1 = "delete from products where p_id='$pid'";
	if($con->query($sql1) == TRUE){
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Deleted Successfully');
			window.location.href='./allproducts.php';
			</script>");

	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Error in Deleting');
			window.location.href='./allproducts.php';
			</script>");

		// echo($con->error);
	}
}

?>
