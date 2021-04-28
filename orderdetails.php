<?php
include 'connection.php';

$select = "select * from orderdetails where action='ordered' and user_id ='$uid'";
$result = mysqli_query($con,$select);
$prod= mysqli_fetch_array($result);
