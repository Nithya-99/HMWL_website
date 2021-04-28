<?php
$server     = "localhost:3306";
$username   = "root";
$password   = "";
$database   = "miniproject";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
   die("Error : " . $con->connect_error);
}
?>

