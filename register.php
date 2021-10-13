<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("market",$link);
	
	if(isset($_POST['submit']))
	{
		$name =  $_POST['name'];
		$pass = $_POST['pass'];
		$uname = $_POST['uname'];
		$city = $_POST['city'];
		$gen = $_POST['gen'];
		$add = $_POST['add'];
		
		$sql = "INSERT INTO  `market`.`user` (`id` ,`fullname` ,`username` ,`password` ,`city` ,`gender` ,`address`)VALUES (NULL ,  '$name',  '$uname',  '$pass',  '$city',  '$gen',  '$add');";
		
		$sql=mysql_query($sql,$link);
		
	 echo "<h4>You Are Registered..  </h4>"; }?>
	


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>APMC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfont -->
	
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Icomoon Icons -->
	<link rel="stylesheet" href="css/icomoon-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lte IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
		<!-- Header -->
		<header id="fh5co-header" role="banner">
			<div class="container">
				<!-- Logo -->
				<div id="fh5co-logo">
					<a href="index.php">
						<img src="images/logo.png" alt="Work Logo">					</a>				</div>
				<!-- Logo -->
				
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				
				<!-- Main Nav -->
				<div id="fh5co-main-nav">
					<nav id="fh5co-nav" role="navigation">
						<ul>
							<li >
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="explore.php">Explore</a>
							</li>
							<li>
								<a href="cart.php">Cart</a>
							</li>
							<li class="fh5co-active">
								<a href="register.php">Register</a>
							</li>
							
						</ul>
						<a href="user/login.php" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action">Log In</a>
					</nav>
				</div>
				<!-- Main Nav -->
			</div>
		</header>
		<!-- Header -->

		<main role="main">
		
			<!-- Start Intro -->
			<div id="fh5co-intro">
				<div class="container">
					<h1 ><u>Register </u></h1>
					<div class="container">
					<div class="row">
						<div class="col-md-12">
							
							<div class="fh5co-spacer fh5co-spacer-xs"></div>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<form action="register.php" method="post">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name" class="sr-only">User Name</label>
										<input placeholder="Name" name="name" id="name" type="text" class="form-control input-lg">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email" class="sr-only">Email</label>
										<input placeholder="User Name" name="uname" id="email" type="text" class="form-control input-lg">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="Password" class="sr-only">Password</label>
										<input placeholder="Password" name="pass" id="Password" type="text" class="form-control input-lg">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="City" class="sr-only">City</label>
										<input placeholder="City" id="City" name="city" type="text" class="form-control input-lg">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="gender" class="sr-only">Gender</label>
										<select class="form-control input-lg" name="gen" id="gender">
										  <option>--Gender--</option>
										  <option>Male</option>
										  <option>Female</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="Address" class="sr-only"></label>
										<textarea placeholder="Address" id="Address" name="add" class="form-control input-lg" rows="3"></textarea>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" name="submit" value="Send">

										<input type="reset" class="btn btn-outline btn-md" value="Reset">
									</div>	
								</div>
								
								
							</form>	
						</div>
						
					</div>

				</div>
							
						</div>
				</div>
			</div>
			<!-- End Intro -->
			
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
					
							</div>
						</div>
						
					</div>
					<!-- End More Works -->


				</div>
			</div>
			<!-- End Work -->

			<div class="fh5co-spacer fh5co-spacer-md"></div>
			
			<!-- Start  Let's Chat -->
			
		</main>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				
					<center>
						<p class="fh5co-copyright">
							<small>(c)APMD 2017 <a href="index.php">APMC</a>. All Rights Reserved. <br>
Designed by: VRAJESH BHIMAJIANI &amp;  </small>
						</p>
					</center>
				
			</div>
		</footer>
		
		<!-- Go To Top -->
		
		
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Velocity -->
		<script src="js/velocity.min.js"></script>
		<!-- Google Map -->
		
		<script src="js/google_map.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
