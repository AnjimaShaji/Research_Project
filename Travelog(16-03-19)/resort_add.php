<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelog</title>
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
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo" style="
    margin-left: -150px;"><a href="#"><img src="images/logo.png" alt="">travelog</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="resort_home.php">home</a></li>
								<li class="main_nav_item"><a href="resort_add.php">Add Resort</a></li>
								<li class="main_nav_item"><a href="resort_profile.php">Profile</a></li>
								<li class="main_nav_item"><a href="admin_view_rating.php">View Rating</a></li>
								<li class="main_nav_item"><a href="view_feedback.php">View Feedback</a></li>
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
	<?php session_start();
include 'dbconnect.php';

if(!isset($_SESSION['r_id']))
	{
		header("location:login.php");
	}
	?>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper" style="background-image:url('images/bg-01.jpg');">
			<div class="inner" >
				<form action="resort_add_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
					<h3>New Resort??</h3>
					<div class="form-holder">
					
					
					
					
						<span class="lnr lnr-user"></span>
						<input type="text" name="rname" id="rnme" class="form-control" placeholder="Resort Name" required onchange="Validate();">
						</div>
						<div> 
						<span class="lnr lnr-apartment"></span>&nbsp &nbsp &nbsp &nbsp
						Star Classification &nbsp &nbsp <select name="class" Required>&nbsp &nbsp
						<option>----Select--</option>
						<option value="1">1-Star</option>
						<option value="2">2-Star</option>
						<option value="3">3-Star</option>
						<option value="4">4-Star</option>
						<option value="5">5-Star</option></select>
						<!--<input type="text" name="rtype" id="rtype" class="form-control" placeholder="Resort Classification" required onchange="Validate();">
						!--></div><div></div>

					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="radd" id="radd" class="form-control" placeholder="Resort Address" required onchange="Validname();">
					</div>
					
					
					<!--<input type="text" name="radd" id="radd" class="form-control" placeholder="District" required onchange="Validname();">
					!-->
					<div class="form-holder">
					<span class="lnr lnr-user"></span> &nbsp &nbsp &nbsp &nbsp 
					&nbsp &nbsp District &nbsp &nbsp <select name="dis_name" required>
					<option>--Select--</option>
					<?php
					$res=mysqli_query($con,"SELECT * FROM `tbl_district` where d_status='1'");
					$r=mysqli_num_rows($res);
					while($row=mysqli_fetch_array($res))
					{  
					?>
					<option value = <?php echo $row['d_id'];?>>	  <?php echo $row['d_name']; ?></option>
					<?php
					}
					?>
					</div> <div></div>
					<div></div
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="state" id="radd" class="form-control" placeholder="State" required onchange="Validname();">
					</div>
					
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="pin" id="radd" class="form-control" placeholder="PIN Code" required onchange="Validname();">
					</div>

					<div class="form-holder">
					<span class="lnr lnr-location"></span>
					<input type="text" name="loc" class="form-control" placeholder="Location">
					</div>
					
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="rdes" id="radd" class="form-control" placeholder="Description About Resort" required onchange="Validname();">
					</div>
					
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>&nbsp &nbsp &nbsp &nbsp Check-Out Time
					<input type="time" name="checkin" id="radd" class="form-control" placeholder="Check-In Time" required onchange="Validname();">
					</div>
					
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Room Aminities &nbsp &nbsp 
					 <select name="aminities"   Required>
					 &nbsp &nbsp <option Value="0"> Room Safe</option>
					<option value="1">Refrigerator</option>
					<option value="2">Bathtub</option>
					<option value="3">Shower</option>
					<option value="4">TV</option>
					<option value="5">Flat Screen TV</option>
					<option value="6">Desk</option>
					<option value="7">Balcony/Patio</option>
					</select>
					<!--Dropdown with check box!-->
					</div>
					
					
					
					
					
					<div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input type="text" name="phone" id="phn" class="form-control" placeholder="Phone Number" required onchange="Validat();">
					</div>

					<div class="form-holder">
						<span class="lnr lnr-link"></span>
						<input type="text" name="url" id="url" class="form-control" placeholder="Website Link" required onchange="return Validata();">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" id="email" class="form-control" placeholder="Resort Email" required onchange="return Validata();">
					</div>
					
					<div class="form-holder">
						<span class="lnr lnr-picture"></span>
						<!-- upload upto 20 images!-->
						<input type="file" name="img" id="img" class="form-control"  required onchange="return Validp();">
					</div>
					
					<div>
					<button type="submit" name="submit" value="Add">Add
						</button></div>
						<br>
						<center><a href="admin_resort_view.php">View Resorts</a>
					
				</form>
			
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
							
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="admin_home.php">home</a></li>
								<li class="main_nav_item"><a href="admin_add_resort.php">Add Resort</a></li>
								<li class="main_nav_item"><a href="admin_approve_requests.php">Approve Requests</a></li>
								<li class="main_nav_item"><a href="admin_view_rating.php">View Rating</a></li>
								<li class="main_nav_item"><a href="view_feedback.php">View Feedback</a></li>
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
