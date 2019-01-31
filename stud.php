
<html>
<body>
<center>
<h1>Student Details</h1>
<form action="#" method="post">
<table>
<tr><td><p>Name:</p></td>
<td><input type="text" name="namee"></td></tr>
<tr><td><p>Address:</p></td>
<td><input type="text" name="ad"></td></tr>
<tr><td><p>Phone:</p></td>
<td><input type="text" name="ph"></td></tr>
</table>
<br>
<input type="submit" name="submit">
</center>
</body>
</html>
<?php
include 'dbcon.php';
if(isset($_POST["submit"]))
{
	$n=$_POST["namee"];
	$a=$_POST["ad"];
	$p=$_POST["ph"];
$sq="INSERT INTO `student`(`name`, `address`, `phone`)VALUES('$n','$a','$p')";
$ress=mysqli_query($con,$sq);
header("Location:view.php");


	}


	?>	