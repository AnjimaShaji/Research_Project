
<?php
	include "dbcon.php";
	?>
<html>
<center>

<table border=2 style="width:60%">

<h2><b><font color=green><u>Student Details</u></b></h2>

<a href="stud.php">Add</a>
<br>
<tr>
<td><p>Id</p></td>
<td><p>Name</p></td>

<td><p>Address</p></td>

<td><p>phone</p></td>
<td><p>Edit</p></td>
<td><p>Delete</p></td>
<tr>


<?php
	$res=mysqli_query($con,"SELECT * FROM `student`");
	while($row=mysqli_fetch_array($res))
	{
		
		echo "<tr><td><p>".$row['id']."</td>";
		echo "<td><p>".$row['name']."</td>";
		echo "<td><p>".$row['address']."</td>";
		echo "<td><p>".$row['phone']."</td>";
	
		
		
		
	
	?>
	<td><a href="edit.php?uid=<?php echo $row['id'];?>"><p><u>Edit</p></u></a></td>
	<td><a href="del.php?uid=<?php echo $row['id'];?>"><p><u>Delete</p></u></a></td></tr>
	<?php		
	}
	echo "</table>";
	
?>
</center>
</html>
	
	
		  