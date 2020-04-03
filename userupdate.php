<?php 
session_start();
include('connect.php');
// if (!isset($_SESSION['id'])) 
// 	{
// 		echo "<script>alert('Please Login Account.');</script>";
// 		echo "<script>window.location='userlogin.php';</script>";
// 	}
if (isset($_SESSION['id'])) 
{
	$userid=$_SESSION['id'];
	$select="Select * from Users where UserID='$userid'";
	$run=mysqli_query($connection,$select);
	$ret=mysqli_fetch_array($run);
	$fullname=$ret['FullName'];
	$email=$ret['Email'];
	$pass=$ret['Password'];
	$dob=$ret['DateOfBirth'];
	$address=$ret['PostalAdress'];
	$code=$ret['PostCode'];
}
if (isset($_POST['btnupdate'])) 
{
	$id=$_POST['txtid'];
	$name=$_POST['txtfullname'];
	$Email=$_POST['txtemail'];
	$Password=$_POST['txtpassword'];
	$DOB=$_POST['txtdob'];
	$Address=$_POST['txtaddress'];
	$Code=$_POST['txtcode'];

	 $Update="Update Users
			 Set FullName='$name',
			 Email='$Email',
			 Password='$Password',
			 DateOfBirth='$DOB',
			 PostalAdress='$Address',
			 PostCode='$Code'
			 where UserID='$id'";

	$runupdate=mysqli_query($connection,$Update);

	if ($runupdate) 
	{
		echo "<script>alert('User Update Successful')</script>";
		echo "<script>window.location='userupdate.php'</script>";
	}
	else
	{
		echo "<script>alert('Invalid User')</script>";
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

 		<input type="hidden" name="txtid" value="<?php echo $userid ?>">

 		<tr><td>Full Name</td>
 		<td><input type="text" name="txtfullname" value="<?php echo $fullname ?>" required></td></tr>

 		<tr><td>Email</td>
 		<td><input type="email" name="txtemail" value="<?php echo $email ?>" required></td></tr>

 		<tr><td>password</td>
 		<td><input type="text" name="txtpassword" value="<?php echo $pass ?>" required></td></tr>

 		<tr><td>Date Of Birth</td>
 		<td><input type="date" name="txtdob" value="<?php echo $dob ?>" required></td></tr>

  		<tr><td>Postal Address</td>
 		<td><input type="text" name="txtaddress" value="<?php echo $address ?>" required></td></tr>

 		<tr><td>Post Code</td>
 		<td><input type="text" name="txtcode" value="<?php echo $code ?>" required></td></tr>

 		<tr>
 		<td><input type="submit" name="btnupdate" value="Update"></td>
 		<td><input type="reset" name="btnclear" value="Clear"></td></tr>

 		
 	</table>
 </form>
 </body>
 </html>