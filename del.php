<?php
include 'dbcon.php';
$kid=$_GET['uid'];
mysqli_query($con,"DELETE FROM `student` WHERE `id`='$kid'");
header("Location:view.php");
?>