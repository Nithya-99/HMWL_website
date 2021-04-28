<?php
//session_start();

include 'connection.php';

$crpw = $_POST["crpw"];
$npw  = $_POST["npw"];
$repw = $_POST["repw"]; 
$uid = $_GET['uid'];

$r = mysqli_query($con,"select password from user where user_id='$uid'");
$pw=mysqli_fetch_assoc($r);

$oldpw=$pw;
$opw=implode('', $oldpw);

if($crpw === $opw)
{
	if($npw === $repw)
	{
		$sql1 = "update user set password = '$npw' where user_id='$uid'";
		if($con->query($sql1) == TRUE)
		{
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Password Updated Successfully');
			window.location.href='./myprofile.php';
			</script>");
			// header("location:./myprofile.php");		
		}
		else
		{
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Error in changing Password');
			window.location.href='./myprofile.php';
			</script>");
			// header("location:./myprofile.php");

		}
	}
	else
	{
		// header("location:./myprofile.php");
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Re-entered Password Does not match');
			window.location.href='./myprofile.php';
			</script>");
			// header("location:./myprofile.php");
	}

}
else
{
	echo ("<script LANGUAGE='JavaScript'>
			window.alert('Invalid Current Password');
			window.location.href='./myprofile.php';
			</script>");
	
	// header("location:./myprofile.php");	
}

?>
