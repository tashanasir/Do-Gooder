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
		<link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
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


			<div id="header" class="sticky header-md clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left scrollTo" href="#top">
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

					<h1>EVENTS</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Events</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					
					<!-- LIST OPTIONS -->
					<div class="clearfix shop-list-options margin-bottom-20">

						<ul class="pagination nomargin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>

						<div class="options-left">
							<select>
								<option value="pos_asc">Position ASC</option>
								<option value="pos_desc">Position DESC</option>
								<option value="name_asc">Name ASC</option>
								<option value="name_desc">Name DESC</option>
								<option value="price_asc">Price ASC</option>
								<option value="price_desc">Price DESC</option>
							</select>
							
							<a class="btn fa fa-th" href="shop-4col-left.html"><!-- grid --></a>
							<a class="btn active fa fa-list" href="shop-1col-left.html"><!-- list --></a>
						</div>

					</div>
					<!-- /LIST OPTIONS -->


					<ul class="shop-item-list row list-inline nomargin">

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p13.jpg" alt="shop first image" />
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="shop hover image" />
									</a>
									<!-- /product image(s) -->

									<!-- product more info -->
									<div class="shop-item-info">
										<span class="label label-success">NEW</span>
										<span class="label label-danger">SALE</span>
									</div>
									<!-- /product more info -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Cotton 100% - Pink Shirt</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->
									
									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										<span class="line-through">$98.00</span>
										$78.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p11.jpg" alt="shop hover image" />
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p3.jpg" alt="shop first image" />
									</a>
									<!-- /product image(s) -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Black Long Lady Shirt</h2>
									
									<!-- rating -->
									<div class="rating rating-0 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$128.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<span class="out-of-stock text-warning">out of stock</span><!-- add .clean to remove css characteres -->
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p12.jpg" alt="shop first image" />
									</a>
									<!-- /product image(s) -->
									
									<!-- countdown -->
									<div class="shop-item-counter">
										<div class="countdown" data-from="January 31, 2018 15:03:26" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
									</div>
									<!-- /countdown -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Night Dress For Ladies</h2>
									
									<!-- rating -->
									<div class="rating rating-1 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$34.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="3" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="3" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<!-- CAROUSEL -->
										<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
											<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p10.jpg" alt="">
											<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p1.jpg" alt="">
											<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="">
										</div>
										<!-- /CAROUSEL -->
									</a>
									<!-- /product image(s) -->


									<!-- product more info -->
									<div class="shop-item-info">
										<span class="label label-success">NEW</span>
									</div>
									<!-- /product more info -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Long Grey Dress - Special</h2>
									
									<!-- rating -->
									<div class="rating rating-5 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$76.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="4" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="4" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p9.jpg" alt="shop first image" />
									</a>
									<!-- /product image(s) -->


									<!-- product more info -->
									<div class="shop-item-info">
										<span class="label label-danger">SALE</span>
									</div>
									<!-- /product more info -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Grey Lady Hat</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										<span class="line-through">$67.00</span>
										$21.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="5" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="5" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p8.jpg" alt="shop first image" />
									</a>
									<!-- /product image(s) -->

									<!-- countdown -->
									<div class="shop-item-counter">
										<div class="countdown" data-from="December 31, 2017 08:22:01" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
									</div>
									<!-- /countdown -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Beach Black Lady Suit</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$56.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="6" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="6" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p7.jpg" alt="shop first image" />
									</a>
									<!-- /product image(s) -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Town Dress - Black</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$154.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="7" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="7" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p6.jpg" alt="shop first image" />
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="shop hover image" />
									</a>
									<!-- /product image(s) -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Chick Lady Fashion</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$167.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="8" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="8" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<!-- CAROUSEL -->
										<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3500, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
											<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p5.jpg" alt="">
											<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p1.jpg" alt="">
										</div>
										<!-- /CAROUSEL -->
									</a>
									<!-- /product image(s) -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Pink Dress 100% Cotton</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$44.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="9" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="9" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p4.jpg" alt="shop first image" />
									</a>
									<!-- /product image(s) -->
								</div>
								
								<div class="shop-item-summary">
									<h2>White And Black</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$31.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="10" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="10" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p11.jpg" alt="shop first image" />
									</a>
									<!-- /product image(s) -->

									<!-- countdown -->
									<div class="shop-item-counter">
										<div class="countdown" data-from="January 12, 2018 12:34:55" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
									</div>
									<!-- /countdown -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Long Black Top</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										$99.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="11" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="11" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

						<!-- ITEM -->
						<li class="col-lg-12">

							<div class="shop-item clearfix">

								<div class="thumbnail">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p2.jpg" alt="shop first image" />
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p12.jpg" alt="shop hover image" />
									</a>
									<!-- /product image(s) -->

									<!-- product more info -->
									<div class="shop-item-info">
										<span class="label label-success">NEW</span>
										<span class="label label-danger">SALE</span>
									</div>
									<!-- /product more info -->
								</div>
								
								<div class="shop-item-summary">
									<h2>Black Fashion Hat</h2>
									
									<!-- rating -->
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
									<!-- /rating -->

									<p><!-- product short description -->
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p><!-- /product short description -->

									<!-- price -->
									<div class="shop-item-price">
										<span class="line-through">$77.00</span>
										$65.00
									</div>
									<!-- /price -->

									<!-- buttons -->
									<div class="shop-item-buttons">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
										<!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
										<a class="btn btn-default add-wishlist" href="#" data-item-id="12" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
										<a class="btn btn-default add-compare" href="#" data-item-id="12" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
									</div>
									<!-- /buttons -->
								</div>

							</div>

						</li>
						<!-- /ITEM -->

					</ul>

					<hr />

					<!-- Pagination Default -->
					<div class="text-center">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
					<!-- /Pagination Default -->
					
				</div>
			</section>
			<!-- / -->




			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row margin-top-60 margin-bottom-40 size-13">

						<!-- col #1 -->
						<div class="col-md-4 col-sm-4">

							<!-- Footer Logo -->
							<img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

							<p>
								Incredibly beautiful responsive Bootstrap Template for Corporate and Creative Professionals.
							</p>

							<h2>(800) 123-4567</h2>

							<!-- Social Icons -->
							<div class="clearfix">

								<a href="#" class="social-icon social-icon-sm social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>

							</div>
							<!-- /Social Icons -->

						</div>
						<!-- /col #1 -->

						<!-- col #2 -->
						<div class="col-md-8 col-sm-8">

							<div class="row">

								<div class="col-md-5 hidden-sm hidden-xs">
									<h4 class="letter-spacing-1">RECENT NEWS</h4>
									<ul class="list-unstyled footer-list half-paddings">
										<li>
											<a class="block" href="#">New CSS3 Transitions this Year</a>
											<small>June 29, 2015</small>
										</li>
										<li>
											<a class="block" href="#">Inteligent Transitions In UX Design</a>
											<small>June 29, 2015</small>
										</li>
										<li>
											<a class="block" href="#">Lorem Ipsum Dolor</a>
											<small>June 29, 2015</small>
										</li>
										<li>
											<a class="block" href="#">New CSS3 Transitions this Year</a>
											<small>June 29, 2015</small>
										</li>
									</ul>
								</div>

								<div class="col-md-3 hidden-sm hidden-xs">
									<h4 class="letter-spacing-1">EXPLORE US</h4>
									<ul class="list-unstyled footer-list half-paddings noborder">
										<li><a class="block" href="#"><i class="fa fa-angle-right"></i> About Us</a></li>
										<li><a class="block" href="#"><i class="fa fa-angle-right"></i> About Me</a></li>
										<li><a class="block" href="#"><i class="fa fa-angle-right"></i> About Our Team</a></li>
										<li><a class="block" href="#"><i class="fa fa-angle-right"></i> Services</a></li>
										<li><a class="block" href="#"><i class="fa fa-angle-right"></i> Careers</a></li>
										<li><a class="block" href="#"><i class="fa fa-angle-right"></i> Gallery</a></li>
										<li><a class="block" href="#"><i class="fa fa-angle-right"></i> FAQ</a></li>
									</ul>
								</div>

								<div class="col-md-4">
									<h4 class="letter-spacing-1">SECURE PAYMENT</h4>
									<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet.</p>
									<p>	<!-- see assets/images/cc/ for more icons -->
										<img src="assets/images/cc/Visa.png" alt="" />
										<img src="assets/images/cc/Mastercard.png" alt="" />
										<img src="assets/images/cc/Maestro.png" alt="" />
										<img src="assets/images/cc/PayPal.png" alt="" />
									</p>
								</div>

							</div>

						</div>
						<!-- /col #2 -->

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

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="assets/js/view/demo.shop.js"></script>
	</body>
</html>