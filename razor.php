<?php include 'userheader1.php'; ?>

<?php
include 'connection.php';
require_once('config.php'); 
$uid = $_POST['uid'];
$total=$_POST['total'];
$pay=$_POST['payment'];
$quantity=$_POST['quantity'];
$rn=$_POST['roomno'];
$app=$_POST['appartment'];
$city=$_POST['city'];
$pin=$_POST['pincode'];
$pname=$_POST['pname'];
$imgpath=$_POST['imgpath'];
$price=$_POST['price'];


$a=rand(100,500);
$b=rand(300,900);
$oid="$a"."$b";


?>

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
    <script src="validate.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba!important;
        border-color: #7266ba!important;
        font-size: 14px;
        padding: 10px;
        /* position: relative;*/
    }
    .form{
        vertical-align: middle!important;
        background: rgba(2, 54, 87, 0.8);
        padding: 20px;

    }
    @media screen and (max-width: 800px){
        #footer{
            bottom: 0px;
            width: 100%;
            position: relative;
        }
    }
</style>
</head>
<body style="background-image: url('./images/img4.jpg');">
    <div> 
        <form action="charge.php?uid=<?php echo $uid; ?>&t=<?php echo $total; ?>&pay=<?php echo $pay; ?>&rn=<?php echo $rn; ?>&app=<?php echo $app; ?>&city=<?php echo $city; ?>&pin=<?php echo $pin; ?>&quantity=<?php echo $quantity; ?>&oid=<?php echo $oid; ?>&pname=<?php echo $pname; ?>&imgpath=<?php echo $imgpath; ?>&price=<?php echo $price; ?>" class="form" method="POST" style="margin-top: 200px;">
            <!-- Note that the amount is in paise = 50 INR -->

            <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo $razor_api_key; ?>"
            data-amount="<?php echo $total*100; ?>"
            data-buttontext="Pay with Razorpay"
            data-name="Handmade with Love"
            data-description="Best Quality Always!"
            data-image="./images/Handmadewithlove.png"
            data-prefill.name="Handmade products"
            data-prefill.email="xyz@mail.com"
            data-theme.color="#0a3254"
            ></script>
            <input type="hidden" value="Hidden Element" name="hidden">
        </form>
    </div>
    <div id="footer">
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
