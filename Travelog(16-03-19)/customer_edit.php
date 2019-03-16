<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
$res=mysqli_query($con,"SELECT * FROM tbl_registration where r_id='$kid'");
$fetch=mysqli_fetch_array($res);
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}?>
<html lang="en">
<head>
<title>Travellog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<div class="super_container">
	<!-- Header -->
	<header class="header">
		<!-- Top Bar -->
	
		<!-- Main Navigation -->
		<nav class="main_nav">
			<div class="container" >
				<div class="row" >
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start" style="    margin-top: -32px;">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelog</a></div>
						</div>
						<div class="main_nav_container ml-auto" >
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="customer_home.php">Home</a></li>
								<li class="main_nav_item"><a href="#">Profile</a></li>
								<li class="main_nav_item"><a href="cust_search.php">Resorts</a></li>
								<li class="main_nav_item"><a href="blog.html">Feedback</a></li>
								<li class="main_nav_item"><a href="logout.php">Logout</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>
						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>
	</header>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner" >
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="register_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
					<h3>EDIT USER DETAILS</h3>
			<?php
$b=$_SESSION['r_id'];
$result=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$b'");
	while($row=mysqli_fetch_array($result))
	{
		?> 
						
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="nme" id="nme" value ="<?php echo $row['r_name'];?>" class="form-control" placeholder="First Name" required onchange="Validate();">
					</div>
<script>		
function Validate() 
{
    var val = document.getElementById('nme').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('nme').value = "";
        return false;
    }

    return true;
}
</script>
	
		<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="lnme" id="lnme" value ="<?php echo$row['r_lname'];?>" class="form-control" placeholder="Last Name" required onchange="Validate();">
					</div>
<script>		
function Validate() 
{
    var val = document.getElementById('lnme').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('lnme').value = "";
        return false;
    }

    return true;
}
</script>
					<div class="form-holder">
						<span class="lnr lnr-apartment"></span>
						<input type="text" name="add" id="add" value ="<?php echo $row['r_address'];?>" class="form-control" placeholder="Address" required onchange="Validname();">
					</div>
<script>		
function Validname() 
{
    var val = document.getElementById('add').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('add').value = "";
        return false;
    }

    return true;
}
</script>
					<div class="form-holder">
						<span class="lnr lnr-calendar-full"></span>
						<input type="date" name="dob" value ="<?php echo $row['r_dob'];?>" class="form-control" placeholder="Date of Birth">
					</div>
					<?php
					if($row['r_gender']=="male"){?>
					<div >
					
					
					<div style="padding-top: 7px;padding-bottom: 23px;">
						<span class="lnr lnr-users"></span>
						  &nbsp&nbsp&nbsp <input type="radio"  name="gender" value="male" checked="checked"> Male<input type="radio" name="gender" value="female"> Female
						
						<?php 
					}
						else { ?> <input type="radio"  name="gender" value="male"> Male<input type="radio" name="gender" value="female" checked="checked"> Female
						<?php
						}?>	
					</div>
				
					</div>
					
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" name="phn" id="phn" value ="<?php echo $row['r_phone'];?>" class="form-control" placeholder="Phone Number" required onchange="Validat();">
					</div>
<script>
function Validat() 
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        alert('Only Numbers are allowed and must contain 10 number');
	
		
		            document.getElementById('phn').value = "";
        return false;
    }

    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" value ="<?php echo $row['r_email'];?>" id="email" class="form-control" placeholder="E-Mail" required onchange="return Validata();">
					</div>
<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Enter a Valid Email');
		
		     document.getElementById('email').value = "";
        return false;
    }

    return true;
}

</script>
		
					
					<div>
					
					<button type="submit" name="submit" value="Register">Submit
						</button></div>
						
			<?php
	}

?>	
						
		
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="main_nav_item"><a href="customer_home.php">Home</a></li>
								<li class="main_nav_item"><a href="#">Profile</a></li>
								<li class="main_nav_item"><a href="cust_search.php">Resorts</a></li>
								<li class="main_nav_item"><a href="blog.html">Feedback</a></li>
								<li class="main_nav_item"><a href="logout.php">Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
