<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Paul's Apparel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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

</head>
<body>
           
    <div class="gtco-loader"></div>
    
    <div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="gtco-logo"><a href="">Paul's Apparel</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="">Home</a></li>
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
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
                        @endif
                        </li>
                        <li class="has-dropdown">
                            <button class="btn" style="background-color: gray">

                            <a href="/#">You Cart</a>
                            </button>
                            <ul class="dropdown">
                                <li><a href="/product">Go to Cart</a></li>
                            </ul>
                        </li>   
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Shop Now!</h1>
                            <h2>We Offer New Item's For You</h2>
                            <p>
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Sign Up</a> 
                                <a href="{{ route('login') }}" class="btn btn-white btn-outline btn-lg">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

 <div id="gtco-services">
        <div class="gtco-container">
            
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>What We Offer</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row animate-box">
                
                <div class="gtco-tabs">
                    <ul class="gtco-tab-nav">
                        <li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-command"></i></span><span class="hidden-xs">Clothes And Dresses</span></a></li>
                        <li><a href="#" data-tab="4"><span class="icon visible-xs"><i class="icon-box"></i></span><span class="hidden-xs">Laptops</span></a></li>
                    </ul>

                    <!-- Tabs -->
                    <div class="gtco-tab-content-wrap">

                        <div class="gtco-tab-content tab-content active" data-tab-content="1">
                            <div class="col-md-6">
                                <div class="gtco-video gtco-bg" style="background-image: url(images/shoe1.png); ">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                             @foreach ($products as $product)
                            <div class="col-md-6">
                                <h2>{{ $product->product_name}}</h2>
                                <h4>Description:</h4>
                                <p>{{ $product->product_description}}</p>
                                <h4>Price:</h4>
                                <p style="color: orange;font-size: 25px">&#8369; {{ $product->product_price}}</p>
                                <h4>Old Price:</h4>
                                <p style="color: red;font-size: 20px">&#8369; <del>25,000.00</del></p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><a href="addcart/{{$product->id}}" class="btn btn-primary btn-outline">Add to cart</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                       

                        <div class="gtco-tab-content tab-content" data-tab-content="4">
                            <div class="col-md-6">
                                <div class="gtco-video gtco-bg" style="background-image: url(images/sleeves.png); ">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2>{{ $product->product_name}}</h2>
                                <h4>Description:</h4>
                                <p>{{ $product->product_description}}</p>
                                <h4>Price:</h4>
                                <p style="color: orange;font-size: 25px">&#8369; {{ $product->product_price}}</p>
                                <h4>Old Price:</h4>
                                <p style="color: red;font-size: 20px">&#8369; <del>25,000.00</del></p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p><a href="addcart/{{$product->id}}" class="btn btn-primary btn-outline">Add to cart</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
 @endforeach
    <div id="gtco-counter" class="gtco-bg gtco-cover gtco-counter" style="background-image:url(images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-eye"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Creativity Fuel</span>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-anchor"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-briefcase"></i>
                                </span>
                                <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Projects Done</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="feature-center">
                                <span class="icon">
                                    <i class="icon-clock"></i>
                                </span>

                                <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                                <span class="counter-label">Hours Spent</span>

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
