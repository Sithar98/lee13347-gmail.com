<!-- Country -->
<?php
include('connect.php');
$dropcountry="Drop table Country";
$rundropcountry=mysqli_query($connect,$dropcountry);
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
			CountryImage1 varchar(255),
			CountryImage2 varchar(255),
			CountryImage3 varchar(255)
		)";
$createrun=mysqli_query($connect, $create);
if($createrun)
{
	echo "<p>Country Table Created Sucessful!</p>";
}
else
{
	echo mysqli_error($connect);
}
$insertcountry="INSERT into Country values(1,'Yangon',85,2019,'The air in Yangon has been heavily polluted by the influx of vehicles in recent years, said Dr Kyaw Nyein Aye, an environmental specialist with the Ecological Laboratory (Eco-Lab), a group in Kamaryut Township that measures soil and water pollution for civil society groups.','Image/Image1.jpg','Image/Image2.jpg','Image/Image3.jpg')";
$runinsertcountry=mysqli_query($connect,$insertcountry);
if ($runinsertcountry) 
{
	echo "<p>Country Insert Sucessful!</p>";
}
?>








$cimg1=$_FILES['img1']['name'];
$folder="Image/";
if ($cimg1)
{

$filename=$folder."_".$cimg1;
$copy=copy($FILES['img1']['tmp_name'],$filename);

if (!$copy)
{
	exit("problem occured.Cannot upload image!")
}


}