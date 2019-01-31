
<html>
<body>
<center>
<?php
include 'dbcon1.php';
?>
<h1>Country Details</h1>
<form action="#" method="post">
<table>
<tr><td><p>Name:</p></td>
<td><input type="text" name="namee"></td></tr>


			   <tr><td><p>Country</p></td>
<td>
               <select name="con" required> " ;
                  <option value="">---select district---</option>';<?php
         $query=mysqli_query($conn,"SELECT * FROM `country`");
		 $query_display=mysqli_query($conn,"SELECT * FROM `country`");
		 while($row=mysqli_fetch_array($query)){
		 echo "<option value=".$row['cname'].">".$row['cname'].'</option>';
		 }echo ' </select>'?>
              </tr>
</table>
<br>
<input type="submit" name="submit">
</center>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
	$n=$_POST['namee'];
	$c=$_POST['con'];
	$sql="INSERT INTO `user`(`uname`,`cname`)VALUES($n,$c)";
	$res=mysqli_query($conn,$sql);
}
 ?>


																									



</body>
</html>	