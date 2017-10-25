<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Invoice</title>
	
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
							<button class="btn btn-primary"><a href="#">Howdy, {{ Auth::user()->name }}</a></button>
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
							<h1>Invoice</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>




				


<style type="text/css">
.panel {
    border: 1px solid #f4511e; 
    border-radius:0;
    transition: box-shadow 0.9s;
}

.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}

.panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
}

.panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 0px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;

}

.panel-footer {
    background-color: #1f1f14 !important;
}

.panel-footer h3 {
    font-size: 32px;
}

.panel-footer h4 {
    color: #aaa;
    font-size: 14px;
}

.panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
}

</style>

	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row animate-box"></div>
				<div class="row animate-box">
                    <div class="col-md-12">
                       <div class="panel panel-default text-center">
                           <div class="panel-heading">
          					<h1><h2>Your Invoice Information</h2>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p></h1>
        					</div>
							@foreach ($shipping_details as $shipping_detail)
        						<div class="panel-body">
									<h2>Customer Information</h2>
									<table class="table table-hover">
    									<tbody>
      									<tr>
        									<td>{{ $shipping_detail->Fullname }}</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->age }} years Old</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->gender }}</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->Mobile_number }}</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->nationality }}</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->email }}</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->address }}</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->municipality }}</td>
      									</tr>
      									<tr>
        									<td>{{ $shipping_detail->message }}</td>
      									</tr>
    									</tbody>
  									</table>
                                </div>
							@endforeach

                                <div class="panel-footer">
										<h2>Shopping Cart Information</h2>

							<table class="table table-bordered">
    							<thead style="text-align: center;">
      							<tr>
        							<th style="text-align: center;">Product Name</th>
        							<th style="text-align: center;">Product Description</th>
        							<th style="text-align: center;">Product Price</th>
      							</tr>
    							</thead>
    							<?php $i=0; ?>
    							@foreach ($products_item as $prod)
    							<tbody>
      							<tr class="success">
        							<td>{{ $prod->product_name }}</td>
        							<td>{{ $prod->product_description }}</td>
        							<td>{{ $prod->product_price }}.00</td>
      							</tr>
  									<?php
										$i += $prod->product_price;
									?>
								@endforeach		
    							</tbody>
  							</table>
								<h3>Total Amount to be paid: &#8369;<?php echo $i; ?>.00</h3>
								<hr>
								<h2>Payment Method</h2>
                          		@foreach ($payment_details as $payment_detail)
									<input class="form-control" value=" {{ $payment_detail->type_of_payment }} " style="text-align: center;">
    							@endforeach
    								<br>
                                         <div class="row animate-box">
					<form class="form">
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Cancel Order</button>
						</div>
						<div class="col-md-6 col-sm-6">
							<button class="btn btn-block" style="background-color: #ffaa00; color: black">
							<a href="/thankyoupage">Pay Your Order Items</a>
							</button>
						</div>
				    </form>
				</div>
                                        </div>
                                      </div> 
                                   </div>  

                                </div> 
                            </div>
                        </div>
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
					<p>Be the first to know about our new products.</p>
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

