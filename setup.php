<?php
include('connect.php');
$dropuser="Drop table Users";
$runuserdrop=mysqli_query($connection,$dropuser);
if ($runuserdrop) 
{
	echo "<p>User Table Drop Successful</p>";
}
$create="CREATE table Users
		(
			UserID int Auto_Increment not null Primary Key,
			FullName varchar (50),
			Password varchar (50),
			DateOfBirth varchar (50),
			Gender varchar (50),
			Email varchar (50),
			PostalAdress varchar (255),
			PostCode varchar (20)
		)" ;
$createrun=mysqli_query($connection, $create);
if($createrun)
{
	echo "<p>Users Table Created Sucessfully</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertuser="INSERT into Users values(1,'John Smith','123','1998-12-29','Male','John@gmail.com','United Kindom','PC_00123')";
$runinsertuser=mysqli_query($connection,$insertuser);
if ($runinsertuser) 
{
	echo "<p>User Insert Sucessful!</p>";
}
?>


<!-- Feedback -->
<?php
$dropfeedback="Drop table Feedback";
$rundropfeedback=mysqli_query($connection,$dropfeedback);
if ($rundropfeedback) 
{
	echo "<p>Feedback Table Drop Successful</p>";
}
$create="CREATE table Feedback
		(
			FeedbackID int Auto_Increment not null Primary Key,
			UserID int,
			FeedbackDate varchar(20),
			Comment varchar(255)
		)";
$createrun=mysqli_query($connection, $create);
if($createrun)
{
	echo "<p>Feedback Table Created Sucessfully</p>";
}
else
{
	echo mysqli_error($connect);
}
$insertfeedback="INSERT into Feedback values(1,1,'2020-01-10','It is useful to view this site')";
$runinsertfeedback=mysqli_query($connection,$insertfeedback);
if ($runinsertfeedback) 
{
	echo "<p>Feedback Insert Sucessful!</p>";
}
?>

<!-- Country -->
<?php
$dropcountry="Drop table Country";
$rundropcountry=mysqli_query($connection,$dropcountry);
if ($rundropcountry) 
{
	echo "<p>Country Table Drop Successful</p>";
}
$create="CREATE table Country
		(
			CountryID int Auto_Increment not null Primary Key,
			CountryName varchar(30),
			Pollutionrate int,
			Year int,
			Description varchar(255),
			Image1 varchar(255),
			Image2 varchar(255),
			Image3 varchar(255)
		)";
$createrun=mysqli_query($connection, $create);
if($createrun)
{
	echo "<p>Country Table Created Sucessful!</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertcountry="INSERT into Country values(1,'Yangon',85,2019,'The air in Yangon has been heavily polluted by the influx of vehicles in recent years, said Dr Kyaw Nyein Aye, an environmental specialist with the Ecological Laboratory (Eco-Lab), a group in Kamaryut Township that measures soil and water pollution for civil society groups.','Image/Image1.jpg','Image/Image2.jpg','Image/Image3.jpg')";
$runinsertcountry=mysqli_query($connection,$insertcountry);
if ($runinsertcountry) 
{
	echo "<p>Country Insert Sucessful!</p>";
}
?>


<!-- Question -->
<?php
$dropquestion="Drop table QandA";
$rundropquestion=mysqli_query($connection,$dropquestion);
if ($rundropquestion) 
{
	echo "<p>QandA Table Drop Successful</p>";
}
$create="CREATE table QandA
		(
			QuestionID int Auto_Increment not null Primary Key,
			UserID int,
			Question varchar(255),
			QuestionDate varchar(30),
			Answer varchar(255)
		)";
$createrun=mysqli_query($connection, $create);
if($createrun)
{
	echo "<p>QandA Table Created Sucessful!</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertquestion="INSERT into QandA values(1,1,'How can i create another account!','2020-01-10','You can create account by register page!')";
$runinsertquestion=mysqli_query($connection,$insertquestion);
if ($runinsertquestion)
{
	echo "<p>QandA Insert Sucessful!</p>";
}
?>
