<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shipping</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo"><a href="/home">Paul's Apparel</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
							<li><a href="/home">Home</a></li>
						<li>
							<li class="has-dropdown">
							<button class="btn btn-primary"><a href="#">Hello, {{ Auth::user()->name }}</a></button>
							<ul class="dropdown">
								<li>
									<a href="{{ route('logout') }}"
                                			onclick="event.preventDefault();
                                			document.getElementById('logout-form').submit();">Logout
                           			 </a>
                            				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           					{{ csrf_field() }}
                          				</form>
									</li>
								</ul>
							</li>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Shipping Method</h1></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
		
<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>Fill Out This Form</h3>
					<form action="/shipping" method="POST">
						{{ csrf_field() }}
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">Full Name</label>
								<input type="text" class="form-control" placeholder="Your firstname" name="Fullname" required/>
							</div>
							<div class="col-md-6">
								<label for="age">Age</label>
								<input type="number" id="address" class="form-control" placeholder="Your Age" name="age" required/>
							</div>
							<div class="col-md-6">
								<label for="gender">Gender</label>
								<input type="text" id="lname" class="form-control" placeholder="Your Gender" name="gender" required/>
							</div>
							<div class="col-md-6">
								<label for="mobilenumber">Mobile Number</label>
								<input type="Number" id="lname" class="form-control" placeholder="Your Phone Number" name="Mobile_number" required/>
							</div>
							<div class="col-md-6">
								<label for="nationality">Nationality</label>
								<input type="text" id="lname" class="form-control" placeholder="Your Citezenship" name="nationality" required/>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" class="form-control" placeholder="Your email address" name="email" required/>
							</div>
							<div class="col-md-12">
								<label for="address">Complete Address</label>
								<input type="text" id="email" class="form-control" placeholder="Your Address" name="address" required/>
							</div>
							<div class="col-md-12">
								<label for="municipality">Town or Municipality</label>
								<input type="text" class="form-control" placeholder="Your Municipality" name="municipality" required/>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something" required/></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Submit" class="btn btn-primary btn-block">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>USA Office</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

					<div class="gtco-contact-info">
						<h3>Australia Office</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

				</div>
			</div>
			
		</div>
	</div>
	
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Your name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	
<hr>
	
	
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2017 All Rights Reserved.</small> 
						<small class="block">La Verdad Christian College | E-Commerce Website Shopping Cart</small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

