<html>
	<?php
include 'dbcon.php';
session_start();

$kid=$_GET['uid'];

	 $sql=mysqli_query($con,"SELECT * FROM `student` where id='$kid'");
	
while($row=mysqli_fetch_array($sql))
{


?>
<body>
<center>
<h1>Student Details</h1>
<form action="#" method="post">
<table>
<tr><td>Name:</td>
<td><input type="text" name="uname" value="<?php echo $row['name'];?>"></td></tr>
<tr><td>Address:</td>
<td><input type="text" name="add" value="<?php echo $row['address'];?>"></td></tr>
<tr><td>Phone:</td>
<td><input type="text" name="phn" value="<?php echo $row['phone'];?>"></td></tr>
</table>
<br>
<input type="submit" name="submit">
</center>
</body>
<?php
if(isset($_POST["submit"]))
{
	$n=$_POST["uname"];
	$a=$_POST["add"];
	$p=$_POST["phn"];

$sql=mysqli_query($con,"UPDATE `student` SET `name`='$n',`address`='$a',`phone`='$p' where id='$kid'");
header("Location:view.php");


	}


	?>	
	
	 </body>
</html>
<?php
}

?>