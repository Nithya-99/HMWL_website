<?php
session_start();

include 'connection.php';

$name    = $_POST["name"];
$email   = $_POST["email"];
$mobile  = $_POST["mobile"];
$gender = $_POST["gender"];
$uname  = $_POST["uname1"];
$pw     = $_POST["psw1"];
$cpw     = $_POST["cpsw"];

if($cpw === $pw)
{
	$sql1 = "insert into user(name,email, mobile,  gender, username, password) values('$name', '$email',  '$mobile','$gender', '$uname', '$pw')";

	if($con->query($sql1) == TRUE){
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Succesfully Registered');
			window.location.href='./loginform.php';
			</script>");
		//header("location:./loginform.php");
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Registration Failed, Username already taken');
			window.location.href='./registrationform.php';
			</script>");
		// echo($con->error);
	}
}
else{
	echo ("<script LANGUAGE='JavaScript'>
			window.alert('Your Password Does not Match, Please Try again');
			window.location.href='./registrationform.php';
			</script>");
	
}

?>
