<?php 
include('connect.php');
include('header.php');
if (isset($_POST['btnsave']))
{
$fullname=$_POST['txtfullname'];
$email=$_POST['txtemail'];
$password=$_POST['txtpassword'];
$dob=$_POST['txtdateofbirth'];
$gender=$_POST['rdogender'];
$address=$_POST['txtpostaladdress'];
$postalcode=$_POST=['txtpostalcode'];

echo $insertuser="INSERT INTO users(FullName,Email,Password,DateofBirth,Gender,PostalAddress,PostalCode)
VALUES ('$fullname','$email','$password','$dob','$gender','$address','$postalcode')";

$insertuserrun=mysqli_query($connection,$insertuser);
if ($insertuserrun) 
{
	// echo "<script>window.alert('User Account Created')</script>";
	// echo "<script>window.location('userlogin.php')</script>";
}
else
{
echo mysqli_error($connection);
// echo "<script>window.location='user_register.php'</script>";
}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>user registration</title>
</head>
<body>
<form action="user register.php" method="POST">
	<table align="center">
		<tr>
			<td>FullName:</td>
			<td><input type="text" name="txtfullname" placeholder="Enter your Full Name" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="txtemail" placeholder="Enter your Email" required></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="txtpassword" placeholder="Enter your Password" required></td>
		</tr>
		<tr>
			<td>DateofBirth:</td>
			<td><input type="date" name="txtdateofbirth" required></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="rdogender" value="Male">Male
				<input type="radio" name="rdogender" value="Female">Female
				<input type="radio" name="rdogender" value="Other">Other</td>
		</tr>
		<tr>
			<td>PostalAddress:</td>
			<td><textarea name="txtpostaladdress"></textarea></td>
		</tr>
		<tr>
			<td>PostalCode:</td>
			<td><input type="text" name="txtpostalcode" placeholder="Enter your PostalCode" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="btnsave" value="Save">
				<input type="reset" name="btncancel" value="Cancel"></td>
		</tr> 


	</table>
	

</form>
</body>
</html>
<?php 
include('footer.php');
 ?>