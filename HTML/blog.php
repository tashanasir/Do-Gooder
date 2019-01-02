<?php ?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Do-Gooder</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">



		<!-- wrapper -->
		<div id="wrapper">
<!-- Top Bar -->
			<div id="topBar">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome">Welcome to Do-Gooder, <strong>Tasha Nasir</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>
							<ul class="dropdown-menu">
								<li ><a tabindex="-1" href="reviews.php"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
								<li class="active"><a tabindex="-1" href="settings.php"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="logout.php"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>
						</li>
						<li class="active"><a href="login-register.php.html">LOGIN/REGISTER</a></li>
					</ul>
				</div>
			</div>
			<!-- /Top Bar -->
			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky header-md clearfix">

						<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>


						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="assets/images/1.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
							<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li ><!-- HOME -->
										<a href="index.php">
											HOME
										</a>
									</li>
									<li><!-- EVENTS -->
										<a href="events.php">
											EVENTS
										</a>
									</li>
									<li><!-- BLOG -->
										<a class="external" href="blog.php">
											BLOG
										</a>
									</li>
									<li><!-- CONTACT -->
										<a href="contact.php">
											CONTACT
										</a>
									</li>
									<li><!-- FAQ -->
										<a href="faq.php">
											FAQ
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->
			</div>


			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			<section class="page-header dark page-header-xs">
				<div class="container">

					<h1>BLOG</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Blog</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">

					<!-- POST ITEM -->
					<div class="blog-post-item">

						<!-- OWL SLIDER -->
						<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
							<div>
								<img class="img-responsive" src="assets/images/demo/content_slider/23-min.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/content_slider/21-min.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="assets/images/demo/content_slider/3-min.jpg" alt="">
							</div>
						</div>
						<!-- /OWL SLIDER -->

						<h2><a href="blog-single-default.html">BLOG CAROUSEL POST</a></h2>

						<ul class="blog-post-info list-inline">
							<li>
								<a href="#">
									<i class="fa fa-clock-o"></i> 
									<span class="font-lato">June 29, 2015</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comment-o"></i> 
									<span class="font-lato">28 Comments</span>
								</a>
							</li>
							<li>
								<i class="fa fa-folder-open-o"></i> 

								<a class="category" href="#">
									<span class="font-lato">Design</span>
								</a>
								<a class="category" href="#">
									<span class="font-lato">Photography</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-user"></i> 
									<span class="font-lato">John Doe</span>
								</a>
							</li>
						</ul>

						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

						<a href="blog-single-default.html" class="btn btn-reveal btn-default">
							<i class="fa fa-plus"></i>
							<span>Read More</span>
						</a>

					</div>
					<!-- /POST ITEM -->


					<!-- POST ITEM -->
					<div class="blog-post-item">

						<!-- IMAGE -->
						<figure class="margin-bottom-20">
							<img class="img-responsive" src="assets/images/demo/content_slider/10-min.jpg" alt="">
						</figure>

						<h2><a href="blog-single-default.html">BLOG IMAGE POST</a></h2>

						<ul class="blog-post-info list-inline">
							<li>
								<a href="#">
									<i class="fa fa-clock-o"></i> 
									<span class="font-lato">June 29, 2015</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comment-o"></i> 
									<span class="font-lato">28 Comments</span>
								</a>
							</li>
							<li>
								<i class="fa fa-folder-open-o"></i> 

								<a class="category" href="#">
									<span class="font-lato">Design</span>
								</a>
								<a class="category" href="#">
									<span class="font-lato">Photography</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-user"></i> 
									<span class="font-lato">John Doe</span>
								</a>
							</li>
						</ul>

						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

						<a href="blog-single-default.html" class="btn btn-reveal btn-default">
							<i class="fa fa-plus"></i>
							<span>Read More</span>
						</a>

					</div>
					<!-- /POST ITEM -->


					<!-- POST ITEM -->
					<div class="blog-post-item">

						<!-- VIDEO -->
						<div class="margin-bottom-20">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
							</div>
						</div>

						<h2><a href="blog-single-default.html">BLOG VIDEO POST</a></h2>

						<ul class="blog-post-info list-inline">
							<li>
								<a href="#">
									<i class="fa fa-clock-o"></i> 
									<span class="font-lato">June 29, 2015</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comment-o"></i> 
									<span class="font-lato">28 Comments</span>
								</a>
							</li>
							<li>
								<i class="fa fa-folder-open-o"></i> 

								<a class="category" href="#">
									<span class="font-lato">Design</span>
								</a>
								<a class="category" href="#">
									<span class="font-lato">Photography</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-user"></i> 
									<span class="font-lato">John Doe</span>
								</a>
							</li>
						</ul>

						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

						<a href="blog-single-default.html" class="btn btn-reveal btn-default">
							<i class="fa fa-plus"></i>
							<span>Read More</span>
						</a>

					</div>
					<!-- /POST ITEM -->


					<!-- POST ITEM -->
					<div class="blog-post-item">

						<!-- VIDEO -->
						<div class="margin-bottom-20">
							<iframe width="100%" height="366" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/154936822&color=a94545&auto_play=false&hide_related=false&visual=true"></iframe>
						</div>

						<h2><a href="blog-single-default.html">BLOG SOUND CLOUD POST</a></h2>

						<ul class="blog-post-info list-inline">
							<li>
								<a href="#">
									<i class="fa fa-clock-o"></i> 
									<span class="font-lato">June 29, 2015</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comment-o"></i> 
									<span class="font-lato">28 Comments</span>
								</a>
							</li>
							<li>
								<i class="fa fa-folder-open-o"></i> 

								<a class="category" href="#">
									<span class="font-lato">Design</span>
								</a>
								<a class="category" href="#">
									<span class="font-lato">Photography</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-user"></i> 
									<span class="font-lato">John Doe</span>
								</a>
							</li>
						</ul>

						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

						<a href="blog-single-default.html" class="btn btn-reveal btn-default">
							<i class="fa fa-plus"></i>
							<span>Read More</span>
						</a>

					</div>
					<!-- /POST ITEM -->


					<!-- POST ITEM -->
					<div class="blog-post-item">

						<h2><a href="blog-single-default.html">BLOG SIMPLE POST</a></h2>

						<ul class="blog-post-info list-inline">
							<li>
								<a href="#">
									<i class="fa fa-clock-o"></i> 
									<span class="font-lato">June 29, 2015</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-comment-o"></i> 
									<span class="font-lato">28 Comments</span>
								</a>
							</li>
							<li>
								<i class="fa fa-folder-open-o"></i> 

								<a class="category" href="#">
									<span class="font-lato">Design</span>
								</a>
								<a class="category" href="#">
									<span class="font-lato">Photography</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-user"></i> 
									<span class="font-lato">John Doe</span>
								</a>
							</li>
						</ul>

						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

						<a href="blog-single-default.html" class="btn btn-reveal btn-default">
							<i class="fa fa-plus"></i>
							<span>Read More</span>
						</a>

					</div>
					<!-- /POST ITEM -->


					<!-- PAGINATION -->
					<div class="text-center">
						<!-- Pagination Default -->
						<ul class="pagination nomargin">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
						<!-- /Pagination Default -->
					</div>
					<!-- /PAGINATION -->

				</div>
			</section>
			<!-- / -->




			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2015</small>
								</li>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>
	</body>
</html>