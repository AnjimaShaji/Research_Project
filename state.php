<html>
<body>
<center>
<?php
include 'dbcon1.php';
?>
<h1>State Details</h1>
<form action="#" method="post">
<table>
<tr><td><p>State</p></td>
<td><input type="text" name="st"></td></tr>
</table>
<br>
<input type="submit" name="submit">
</center>
</body>
<?php

if(isset($_POST["submit"]))
{
	
	$s=$_POST['st'];
	$sql="INSERT INTO `state`(`sname`)VALUES('$s')";
	$res=mysqli_query($conn,$sql);
	header("Location:state.php");
}
 ?>