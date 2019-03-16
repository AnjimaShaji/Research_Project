<?php
	include 'dbconnect.php';
    $name=$_POST['nme'];
	$lname=$_POST['lnme'];
	$add=$_POST['add'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];        
	$phn=$_POST['phn'];
    $email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$pwd=md5($pwd);
	$confirm=$_POST['confirm'];
	$sel1="select * from `tbl_registration` where `r_email`='$email'";
	$qry1=mysqli_query($con,$sel1);
	$num=mysqli_num_rows($qry1);
	 if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Email already exists!!Try with another..')
		   window.location.href='register.php';</script>");
	  }
	  else
	  {
	$varsql="INSERT INTO `tbl_registration`(`r_name`, `r_lname`,`r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`, `r_status`)
	VALUES('$name','$lname','$add','$dob','$gender','$phn','$email','1')";
	$varresult=mysqli_query($con,$varsql);
	$z=mysqli_insert_id($con);
	$varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$email','$pwd','1','$z','1')");
	header("Location:login.php");
	  }
?>
