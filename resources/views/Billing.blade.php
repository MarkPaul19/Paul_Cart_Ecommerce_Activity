<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Billing</title>
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
					<div id="gtco-logo"><a href="index.html">Paul's Apparel</a></div>
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
							<h1>Billing</h1></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
		
<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Payment Method</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>

<div class="gtco-container">
  <table class="table table-bordered">
    <thead style="text-align: center">
      <tr>
        <th style="text-align: center">Type Of Payment Method</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        	<form class="form-inline" action="/add_payment" method="POST">
        		{{ csrf_field() }}
				<div class="form-group">
  					<label for="sel1">Select Payment</label>
  						<select class="form-control" id="sel1" name="type_of_payment">
    					<option style="color: black">Cash On Delivery</option>
    					<option style="color: black">Paypal</option>
    					<option style="color: black">Credit Card</option>
    					<option style="color: black">BDO Installments</option>
						<option style="color: black">Paymaya</option>
  					</select>
				</div>
				<div class="col-md-6 col-sm-6">
							<button class="btn btn-block" style="background-color: white">
							<a href="/home">Back</a>
							</button>
						</div>
				<div class="col-md-6 col-sm-6">
					<button type="submit" class="btn btn-block" style="background-color: #ff8000;">
					Go to Shipping
					</button>
				</div>
			</form>
        </td>
      </tr>
    </tbody>
  </table>
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

