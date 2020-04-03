<?php 
include 'connect.php';

$Question="Select q.*,u.FullName from qanda q, Users u where u.UserID=q.UserID";
$run=mysqli_query($connection,$Question);
$count=mysqli_num_rows($run);


 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 <table width="100%" border="1"> 
 	<th>QuestionID</th>
 	<th>UserID</th>
 	<th>Question</th>
 	<th>Question Date</th>
 	<th>Answer</th>
 	<th>Action</th>
<?php 
for ($i=0; $i <$count ; $i++)
 { 
	$ret=mysqli_fetch_array($run);


echo "<tr>";
echo "<td>".$ret['QuestionID']."</td>";
echo "<td>".$ret['FullName']."</td>";
echo "<td>".$ret['Question']."</td>";
echo "<td>".$ret['QuestionDate']."</td>";
echo "<td>".$ret['Answer']."</td>";
echo "<td><a href='Answer.php?QID=".$ret['QuestionID']."'>Answer</a></td>";
echo "</tr>";
}

 ?>
 </table>
 </form>
 </body>
 </html>