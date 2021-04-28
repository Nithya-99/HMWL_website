<?php include 'userheader1.php';?>
<?php
// session_start();
$uid= $_SESSION['uid'];
require_once('connection.php');

$query="select * from products where type='Bangles'";
$result=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Handmade with Love</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="products.css">
	<script src="./bootstrap/jquery.min.js"></script>
	<script src="./bootstrap/popper.min.js"></script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
	</style>
</head>
<body style="background-image: url('./images/img4.jpg'); z-index: 2;">
<h2 class="text-center" style="color: #fff;">Bangles</h2>
	<div class="product" style="height: 100rem;height: auto;">
		
		<?php while($product=mysqli_fetch_assoc($result)): ?>

			<div class="card col-md-2">
				<h4><?= $product['p_name'];?></h4>
				<center><img class="card-image" src="<?= $product['imagepath'];?>" /></center>
				<p class="price">Rs. <?= $product['p_amount']; ?></p>
				<?php
				echo "<a href='displaydetails.php?uid=$uid&id=$product[p_id]'><button type='button' style='width:100%;' class='btn btn-success' name='viewproduct' id='viewproduct'>View Product</button></a>" ?>
			</div>

		<?php endwhile; ?>
	</div>
	<div class="footer1" style="position: relative; bottom: 0">
		<?php include 'footer.php';?>	

	</div>

</body>
</html>

