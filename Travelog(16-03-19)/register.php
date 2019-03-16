<?php include "dbconnect.php";?>
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
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="login.php">login</a></div>
							<div class="user_box_register user_box_link"><a href="register.php">register</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>
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
								<li class="main_nav_item"><a href="index.html">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="offers.html">offers</a></li>
								<li class="main_nav_item"><a href="blog.html">news</a></li>
								<li class="main_nav_item"><a href="contact.html">contact</a></li>
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
				<h3>New Account?</h3>
			
			

			
			
			<?php
			if(isset($_GET['error']))
				echo $_GET['error'];
			?>
			
		
			
			
			<!--<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="nme" id="nme" class="form-control" placeholder="Type of User" required onchange="Validate();">
					</div>
			!-->
			
		
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="nme" id="nme" class="form-control" placeholder="First Name" required onchange="Validate();">
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
					<input type="text" name="lnme" id="lnme" class="form-control" placeholder="Last Name" required onchange="Validate();">
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
						<input type="text" name="add" id="add" class="form-control" placeholder="Address" required onchange="Validname();">
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
					<input type="date" name="dob" class="form-control" placeholder="Date of Birth">
					</div>
					<div ><div style="padding-top: 7px;padding-bottom: 23px;">
					<span class="lnr lnr-users"></span>
					&nbsp&nbsp&nbsp <input type="radio"  name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					</div>
					
			<div class="form-holder">
			<span class="lnr lnr-user"></span>			
			<select class="tkvsoft" name="type"  required>
			<option>&nbsp &nbsp &nbsp &nbsp Select Type  </option>
			<option value ="1">Customer</option>
			<option value ="2">Resort Manager</option>
			</select>
			</div>
			
			
			
			
			<div id="tkvsoft" style="display:none;">
			<div class="form-holder">
			<span class="lnr lnr-user"></span>			
			<select class="tkvsoft" name="type"  required>
			<option>&nbsp &nbsp &nbsp &nbsp Job Designation</option>
			<option value ="1">Manager</option>
			<option value ="2">Receptionist</option>
			<option value ="3">Sales Executive</option>
			</select>
			</div>
			<div class="form-holder">
			<span class="lnr lnr-user"></span>
			<input type="text" name="nme" id="nme" class="form-control" placeholder="Resort Name" required onchange="Validate();">
			</div>
			
			
			
			
			
			
			
			
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			<div class="form-holder">
			<span class="lnr lnr-phone-handset"></span>
			<input type="text" name="phn" id="phn" class="form-control" placeholder="Phone Number" required onchange="Validat();">
			</div>
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
						<input type="email" name="email" id="email" class="form-control" placeholder="E-Mail" required onchange="return Validata();">
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
		
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" required onchange="return Validp();">
					</div>
<script>		
function Validp() 
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,8}$/)) 
    {
        alert('Password should contain atleast a character and a Number with length atleast 6 and atmost 8');
		
		     document.getElementById('pwd').value = "";
        return false;
    }

    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="confirm" id="confirm" class="form-control" placeholder="Confirm Password" required onchange="return check();">
					</div>
					<script>
	function check(){
			if(document.getElementById("confirm").value!=document.getElementById("confirm").value)
			{
				document.getElementById("message").style.color='red';
				document.getElementById("message");
				alert('Passwords does not Match');
				
		            document.getElementById('confirm').value = "";
            }
		else{
			document.getElementById("message").style.color='green';
			document.getElementById("message");
		}
			}
	</script>
					<div>
					
					<button type="submit" name="submit" value="Register">Register
						</button></div>
					<br><center><a href="login.php">Sign In</a>
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
								<li class="footer_nav_item"><a href="index.html">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="contact.html">contact</a></li>
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


<div class="Titto">Titto</div>

			<script>
			
		
$(document).ready(function()
{
	
	
	
$(".tkvsoft").on('change', function()
	{
		
		
		var t=this;
		
		if($(t).val()==2)
		$("#tkvsoft").show();
	else
		$("#tkvsoft").hide();
		
		
	});
			
	});		
			</script>







</body>
</html>
