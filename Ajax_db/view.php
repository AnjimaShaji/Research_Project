 <html>
<h1>DETAILS</h1>
<body>
<form action="#" method="post" >
<?php 
include 'dbcon.php';
$query= mysqli_query($con,"select * from user");
?>
<table border=2;> 
<a href="index.php">Add</a>
						<tr><td>SLNO</td>
						
						<td> NAME</td>
						<td> COUNTRY</td>
						<td> STATE</td>
						
						<td> DISTICT</td>
						</tr>
<?php
$i=0;						
while($row=mysqli_fetch_array($query))
{	$i++;
	echo "<tr><td>".$i."</td>";
	$cid=$row['countryID'];
	$q=mysqli_query($con,"select country_name from country where countryID='$cid'");
	$c=mysqli_fetch_array($q);
	$sid=$row['stateID'];
	$qu=mysqli_query($con,"select name from state where id='$sid'");
	$s=mysqli_fetch_array($qu);
	$did=$row['id'];
	$que=mysqli_query($con,"select name from district where id='$did'");
	$d=mysqli_fetch_array($que);
	echo "<td>".$row['name']."</td>";
	echo "<td>".$c['country_name']."</td>";
	echo "<td>".$s['name']."</td>";
	echo "<td>".$d['name']."</td></tr>";
	
}?>
</table>	

</form>
</body>
</html>
