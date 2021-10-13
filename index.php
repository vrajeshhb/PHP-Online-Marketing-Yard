<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("market",$link);
	

?>
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
			<div class="container" style="margin-bottom:0px">
				<!-- Logo -->
				<div id="fh5co-logo">
					<a href="index.php">
						<img src="images/logo.png" alt="Work Logo">					</a>				</div>
				<!-- Logo -->
				
				<!-- Mobile Toggle Menu Button -->
				<a href="#" ><i></i></a>
				
				<!-- Main Nav -->
				<div id="fh5co-main-nav">
				
					<nav  role="navigation">
						<ul>
							<li class="fh5co-active">
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="explore.php">Explore</a>
							</li>
							<li>
								<a href="cart.php">Cart</a>
							</li>
							<li>
								<a href="register.php">Register</a>
							</li>
							
						</ul>
						<a href="user/login.php" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action">Log In</a>
					</nav>
					
				</div>
				
				<!-- Main Nav -->
			</div>
<hr style="margin-bottom:-60px">
		</header>
		<!-- Header -->
<h1 style="padding-left:200px; margin-top:0px;" ><u>Marketing Yard. </u></h1>
	
						<img src="images/main.png" width="1365" height="236"/>
			<!-- Start Intro -->
			<div style="margin-top:0px;" id="fh5co-intro">
				<div class="container">					
							<div class="">
								<h3>APMC operate on two principles:</h3>
	<ul>							
<li>Ensure that farmers are not exploited by intermediaries (or money lenders) who compel farmers to sell their produce at the farm gate for an extremely low price.</li><br>
<li>All food produce should first be brought to a market yard and then sold through auction</li>
             
		</ul>						
							</div>
						</div>
				</div>
			</div>
			<!-- End Intro -->
			
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
					<?php
	$q="SELECT * FROM  `tblproduct` LIMIT 0 , 30";
	$sql=mysql_query($q,$link);
	$exit = 0;
				while($res = mysql_fetch_array($sql))
				{
					?>
					<div class="row">
						<div style="background-color:#FFFFFF" class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="#" class="fh5co-work-item js-fh5co-work-item">
								<img width="480px" height="400px" src="<?php echo 'data:image;base64,'.$res[4].' '; ?>" alt="Image" >
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
								<div class="fh5co-overlay-text js-fh5co-overlay-text">
									<h2><u><?php echo "$res[1]"; ?></u></h2><br>
									<ul class="fh5co-categories">
										<li><?php echo "$res[3]"; ?></li><br>
										<li><?php echo "Rs. $res[5] "; ?></li>

									</ul>
								</div>
							</a>
						</div>						
					<?php
							$exit = $exit+1;
							if($exit == 5){break;}
						}
					?>
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
