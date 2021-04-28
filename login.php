<?php 
require_once('connection.php');

session_start();
if(isset($_POST['login']))
{

	$query="select * from user where username='".$_POST['uname']."' and password='".$_POST['psw']."'";
	$result=mysqli_query($con,$query);

	$query2="select * from admin where username='".$_POST['uname']."' and password='".$_POST['psw']."'";
	$result2=mysqli_query($con,$query2);

	if(mysqli_fetch_assoc($result))
	{
		$query1="select user_id,name from user where username='".$_POST['uname']."'";
		$result1=mysqli_query($con,$query1);
		$r=mysqli_fetch_row($result1);
		$_SESSION['uid']=$r[0];
		$_SESSION['user']=$r[1];
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Login  Successful');
			window.location.href='./products.php';
			</script>");
		//header("location:products.php");
	}
	elseif (mysqli_fetch_assoc($result2)) {
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Login  Successful');
			window.location.href='./allproducts.php';
			</script>");
		//header("location:allproducts.php");
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Invalid credentials');
			window.location.href='./loginform.php';
			</script>");
		// echo "<script>alert('Register first')</script>";
		// redirect("location:loginform.php");
	}
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
			window.alert('Login first');
			window.location.href='./loginform.php';
			</script>");
}

?>