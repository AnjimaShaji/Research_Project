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
								<li class="main_nav_item"><a href="admin_home.php">home</a></li>
								<li class="main_nav_item"><a href="admin_add_resort.php">Add Resort</a></li>
								<li class="main_nav_item"><a href="admin_approve_request.php">Approve Requests</a></li>
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
</div>	
 <script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


		<?php session_start();
include 'dbconnect.php';

if(!isset($_SESSION['r_id']))
	{
		header("location:login.php");
	}
	?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><form method="post" action="" name="form1">
<center>
<table width="45%"  cellspacing="0" cellpadding="0">
  <tr>
      <td width="75">Location</td>
      <td width="50">:</td>
      <td  width="150">
   <select name="location" onChange="getState(this.value)">
   <option value="">Select Location</option>
   <?php while ($row=mysql_fetch_array($result)) { ?>
   <option value=<?php echo $row['loc_id']?>><?php echo $row['loc_name']?></option>
   <?php } ?>
  </select>
      </td>
</tr>
<tr style="">
    <td>Resort</td>
    <td width="50">:</td>
    <td >
 <div id="statediv">
       <select name="resort" >
  <option>Select Resort</option>
        </select>
 </div>
    </td>
</tr>
  </table>
</center>
</form>
getState(countryId) { 
    var strURL="findState.php?country="+countryId;
  var req = getXMLHTTP();
  if (req) {
   req.onreadystatechange = function() {
    if (req.readyState == 4) {
     // only if "OK"
     if (req.status == 200) {      
      document.getElementById('statediv').innerHTML=req.responseText;
      document.getElementById('citydiv').innerHTML='<select name="city">'+
      '<option>Select City</option>'+'</select>';      
     } else {
      alert("Problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
   req.open("GET", strURL, true);
   req.send(null);
  }  
 }

