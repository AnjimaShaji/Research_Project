<html>
<body>
<center>
<?php
include 'dbcon1.php';
?>
<h1>Country Details</h1>
<form action="#" method="post">
<table>
<tr><td><p>Country</p></td>
<td><input type="text" name="con"></td></tr>
</table>
<br>
<input type="submit" name="submit">
</center>
</body>
<?php

if(isset($_POST["submit"]))
{
	
	$c=$_POST['con'];
	$sql="INSERT INTO `country`(`cname`)VALUES('$c')";
	$res=mysqli_query($conn,$sql);
	header("Location:state.php");
}
 ?>