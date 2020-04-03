<?php 
session_start();
include('connect.php');
include ('header.php');
if (isset($_SESSION['loginCount']))
	{
	if($_SESSION ['loginCount'] >=3)
	{
		echo "<script> window.alert ('Please Try Again in 10 Minutes')</script>";
		echo "<script> window.location = 'LoginTimer.php'</script>";
	}
	}
	else if (!isset($_SESSION['loginCount']))
	{
	$_SESSION['loginCount']=0;
	}
if (isset($_POST['btnlogin'])) 
{
	$name=$_POST['txtname'];
	$password=$_POST['txtpassword'];

	$select="SELECT * FROM Users where FullName='$name' AND Password='$password'";
	$run=mysqli_query($connection,$select);
	$count=mysqli_num_rows($run);

	if ($count==1) 
	{
		$ret=mysqli_fetch_array($run);

		$_SESSION['id']=$ret['UserID'];
		$_SESSION['name']=$ret['FullName'];
		$_SESSION['email']=$ret['Email'];

		echo "<script>alert('User Login Successful')</script>";
		unset($_SESSION['loginCount']);
		echo "<script>window.location='HomePage.php'</script>";
	}
	else
	{
		$_SESSION['loginCount']++;
 		echo "<script> window.alert ('Invalid! Login Attempt:".$_SESSION['loginCount']."')</script>";
 		echo" <script>alert ('Invalid USer') </script>";
	}

}

 ?>

<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
<table>
<tr><td>Full Name</td>
<td><input type="text" name="txtname" required></td></tr>
<tr><td>Password</td>
<td><input type="password" name="txtpassword" required></td></tr>
<tr>
<td><input type="submit" name="btnlogin" value="Login"></td></tr>
</table>
</form>
</body>
</html>
 <?php 
include ('footer.php');
  ?>