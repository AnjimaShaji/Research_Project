<?php
	include 'dbconnect.php';
    $name=$_POST['rnme'];
	$add=$_POST['radd'];
	$loc=$_POST['loc'];      
	$phn=$_POST['phn'];
    $url=$_POST['url'];
	$email=$_POST['email'];
	$image=$_FILES["img"]["name"];
	$sel1="select * from `tbl_registration` where h_email='$email'";
	$qry1=mysqli_query($con,$sel1);
	$num=mysqli_num_rows($qry1);
	 if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Email already exists!!Try with another..')
		   window.location.href='admin_add_resort.php';</script>");
	  }
	  else
	  {
		   move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql="INSERT INTO `tbl_addresort`(`h_name`, `h_address`, `h_location`, `h_phone`, `h_url`,`h_email`,`h_image`,`h_status`)VALUES('$name','$add','$loc','$phn','$url','$email','$image','1')";
	$varresult=mysqli_query($con,$varsql);
	header("Location:admin_add_resort.php");
	  }
?>
