<!DOCTYPE html>
<html lang="zxx" class="no-js')}}">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Magazine</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{asset('assets/magazine/css/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/jquery-ui.css')}}">
		<link rel="stylesheet" href="{{asset('assets/magazine/css/main.css')}}">
	</head>
	<body>
		<header>
			
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
								<li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>support@colorlib.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="index.html">
								<img class="img-fluid" src="{{asset('assets/magazine/img/logo.png')}}" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="{{asset('assets/magazine/img/banner-ad.jpg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('misteri')}}">misteri</a></li>
							<li><a href="{{url('horor')}}">horor</a></li>
							<li class="menu-has-children"><a href="">pengetahuan</a>
							<ul>
								<li><a href="{{url('sejarah')}}">sejarah</a></li>
								<li><a href="{{url('budaya')}}">budaya</a></li>
							</ul>
                        </li>
                        <li class="menu-has-children"><a href="">gaya hidup</a>
							<ul>
								<li><a href="{{url('kuliner')}}">kulier</a></li>
								<li><a href="{{url('travelling')}}">traveling</a></li>
							</ul>
						</li>
						<li><a href="{{url('about')}}">About</a></li>
						<li><a href="{{url('kontak')}}">Contact</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
									</div>
			</div>
		</header>
		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
                                <h4 class="cat-title">artikel</h4>
                                <div id="isinya">

                                </div>
							</div>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="{{asset('assets/magazine/img/banner-ad.jpg')}}" alt="">
							</div>
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							<!-- End relavent-story-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Kategori</h6>
									<div class="editors-pick-post">
										
										<div class="post-lists">
                                            <div id="kategori">

                                            </div>
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="{{asset('assets/magazine/img/sidebar-ads.jpg')}}" alt="">
								</div>
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">artikel Tag</h6>
									<div class="single-list flex-row d-flex">
										<div class="details">
											<div id="tag">

											</div>
											<!-- {{-- <a href="image-post.html">
												<h6>Help Finding Information
												Online is so easy</h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
											</ul> --}} -->
										</div>
									</div>
									</div>
								</div>
								
			<!-- End latest-post Area -->
		</div>
		
		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Top Products</h4>
						<ul>
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Resources</h4>
						<ul>
							<li><a href="#">Guides</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Experts</a></li>
							<li><a href="#">Agencies</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Instragram Feed</h4>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="{{asset('assets/magazine/img/i1.jpg')}}" alt=""></li>
							<li><img src="{{asset('assets/magazine/img/i2.jpg')}}" alt=""></li>
							<li><img src="{{asset('assets/magazine/img/i3.jpg')}}" alt=""></li>
							<li><img src="{{asset('assets/magazine/img/i4.jpg')}}" alt=""></li>
							<li><img src="{{asset('assets/magazine/img/i5.jpg')}}" alt=""></li>
							<li><img src="{{asset('assets/magazine/img/i6.jpg')}}" alt=""></li>
							<li><img src="{{asset('assets/magazine/img/i7.jpg')}}" alt=""></li>
							<li><img src="{{asset('assets/magazine/img/i8.jpg')}}" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="footer-bottom row align-items-center">
					<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-md-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->
		<script src="{{asset('assets/magazine/js/vendor/jquery-2.2.4.min.js')}}"></script>
		<script src="('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{asset('assets/magazine/js/vendor/bootstrap.min.js')}}"></script>
		<script src="('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="{{asset('assets/magazine/js/easing.min.js')}}"></script>
		<script src="{{asset('assets/magazine/js/hoverIntent.js')}}"></script>
		<script src="{{asset('assets/magazine/js/superfish.min.js')}}"></script>
		<script src="{{asset('assets/magazine/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('assets/magazine/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/magazine/js/mn-accordion.js')}}"></script>
		<script src="{{asset('assets/magazine/js/jquery-ui.js')}}"></script>
		<script src="{{asset('assets/magazine/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('assets/magazine/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/magazine/js/mail-script.js')}}"></script>
        <script src="{{asset('assets/magazine/js/main.js')}}"></script>
        <script src="{{asset('js/frontend.js')}}"></script>
	</body>
</html>