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
			<section class="page-header page-header-xs">
				<div class="container">

					<!-- breadcrumbs -->
					<ol class="breadcrumb breadcrumb-inverse">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li class="active">Felicia Doe</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					
					<!-- LEFT -->
					<div class="col-lg-3 col-md-3 col-sm-4">
					
						<div class="thumbnail text-center">
							<img src="assets/images/demo/people/460x700/8-min.jpg" alt="" />
							<h2 class="size-18 margin-top-10 margin-bottom-0">Felica Doe</h2>
							<h3 class="size-11 margin-top-0 margin-bottom-10 text-muted">DEVELOPER</h3>
						</div>

						<!-- completed -->
						<div class="margin-bottom-30">
							<label>88% completed profile</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
							</div>
						</div>
						<!-- /completed -->

						<!-- SIDE NAV -->
						<ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">
							<li class="list-group-item"><a href="page-profile.html"><i class="fa fa-eye"></i> PROFILE</a></li>
							<li class="list-group-item"><a href="page-profile-projects.html"><i class="fa fa-tasks"></i> PROJECTS</a></li>
							<li class="list-group-item active"><a href="page-profile-comments.html"><i class="fa fa-comments-o"></i> COMMENTS</a></li>
							<li class="list-group-item"><a href="page-profile-history.html"><i class="fa fa-history"></i> HISTORY</a></li>
							<li class="list-group-item"><a href="page-profile-settings.html"><i class="fa fa-gears"></i> SETTINGS</a></li>

							<li class="list-group-item list-toggle">   <!-- NOTE: "active" to be open on page load -->                
								<a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1">DROPDOWN EXAMPLE</a>
								<ul id="collapse-1" class="collapse"><!-- NOTE: "collapse in" to be open on page load -->
									<li><a href="#"><i class="fa fa-angle-right"></i> SUMBENU 1</a></li>
									<li>
										<span class="badge badge-red">New</span>
										<a href="#"><i class="fa fa-angle-right"></i> SUMBENU 2</a>
									</li>
									<li class="active"><a href="#"><i class="fa fa-angle-right"></i> SUMBENU 3</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i> SUMBENU 4</a></li>
								</ul>
							</li>
						</ul>
						<!-- /SIDE NAV -->


						<!-- info -->
						<div class="box-light margin-bottom-30"><!-- .box-light OR .box-light -->
							<div class="row margin-bottom-20">
								<div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
									<h2 class="size-30 margin-top-10 margin-bottom-0 font-raleway">12</h2>
									<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">PROJECTS</h3>
								</div>

								<div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
									<h2 class="size-30 margin-top-10 margin-bottom-0 font-raleway">34</h2>
									<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">TASKS</h3>
								</div>

								<div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
									<h2 class="size-30 margin-top-10 margin-bottom-0 font-raleway">32</h2>
									<h3 class="size-11 margin-top-0 margin-bottom-10 text-info">UPLOADS</h3>
								</div>
							</div>
							<!-- /info -->

							<div class="text-muted">
								<h2 class="size-18 text-muted margin-bottom-6"><b>About</b> Felicia Doe</h2>
								<p>Lorem ipsum dolor sit amet diam nonummy nibh dolore.</p>
								
								<ul class="list-unstyled nomargin">
									<li class="margin-bottom-10"><i class="fa fa-globe width-20 hidden-xs hidden-sm"></i> <a href="http://www.stepofweb.com">www.stepofweb.com</a></li>
									<li class="margin-bottom-10"><i class="fa fa-facebook width-20 hidden-xs hidden-sm"></i> <a href="http://www.facebook.com/stepofweb">stepofweb</a></li>
									<li class="margin-bottom-10"><i class="fa fa-twitter width-20 hidden-xs hidden-sm"></i> <a href="http://www.twitter.com/stepofweb">@stepofweb</a></li>
								</ul>
							</div>
						
						</div>

					</div>


					<!-- RIGHT -->
					<div class="col-lg-9 col-md-9 col-sm-8">

						<!-- FLIP BOX -->
						<div class="box-flip box-icon box-icon-center box-icon-round box-icon-large text-center nomargin">
							<div class="front">
								<div class="box1 noradius">
									<div class="box-icon-title">
										<i class="fa fa-comments-o"></i>
										<h2>Felica Doe &ndash; Comments</h2>
									</div>
									<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
								</div>
							</div>

							<div class="back">
								<div class="box2 noradius">
									<h4>WHO AM I?</h4>
									<hr />
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
								</div>
							</div>
						</div>
						<!-- /FLIP BOX -->


						<div class="box-light"><!-- .box-light OR .box-dark -->

							<div class="box-inner">
							
								<!-- COMMENT -->
								<ul class="comment list-unstyled">
									<li class="comment">

										<!-- avatar -->
										<img class="avatar" src="assets/images/demo/people/300x300/2-min.jpg" width="50" height="50" alt="avatar" />

										<!-- comment body -->
										<div class="comment-body"> 
											<a href="#" class="comment-author">
												<small class="text-muted pull-right"> 12 Minutes ago </small>
												<span>Melisa Doe</span>
											</a>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
												euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet 
												dolore magna aliquam tincidunt erat volutpat.  
											</p>
										</div><!-- /comment body -->

										<!-- options -->
										<ul class="list-inline size-11 margin-top-10">
											<li>
												<a href="#" class="text-info"><i class="fa fa-reply"></i> Reply</a>
											</li>
											<li>
												<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
											</li>
											<li>
												<a href="#" class="text-muted">Show All Comments (36)</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-danger">Delete</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-primary">Edit</a>
											</li>
										</ul>
									</li><!-- /options -->

									<li class="comment comment-reply">

										<!-- avatar -->
										<img class="avatar" src="assets/images/demo/people/300x300/3-min.jpg" width="50" height="50" alt="avatar" />

										<!-- comment body -->
										<div class="comment-body"> 
											<a href="#" class="comment-author">
												<small class="text-muted pull-right"> 4 Minutes ago </small>
												<span>Ioana Doe</span>
											</a>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy! <i class="fa fa-smile-o green"></i> 
											</p>
										</div><!-- /comment body -->

										<!-- options -->
										<ul class="list-inline size-11 margin-top-10">
											<li>
												<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-danger">Delete</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-primary">Edit</a>
											</li>
										</ul><!-- /options -->

									</li>

									<li class="comment comment-reply">

										<!-- avatar -->
										<img class="avatar" src="assets/images/demo/people/300x300/4-min.jpg" width="50" height="50" alt="avatar" />

										<!-- comment body -->
										<div class="comment-body"> 
											<a href="#" class="comment-author">
												<small class="text-muted pull-right"> a moment ago </small>
												<span>Simona Doe</span>
											</a>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy! <i class="fa fa-smile-o green"></i> 
											</p>
										</div><!-- /comment body -->

										<!-- options -->
										<ul class="list-inline size-11 margin-top-10">
											<li>
												<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-danger">Delete</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-primary">Edit</a>
											</li>
										</ul><!-- /options -->

									</li>
								</ul>
								<!-- /COMMENT -->

								<!-- COMMENT -->
								<ul class="comment list-unstyled">
									<li class="comment">

										<!-- avatar -->
										<img class="avatar" src="assets/images/demo/people/300x300/5-min.jpg" width="50" height="50" alt="avatar" />

										<!-- comment body -->
										<div class="comment-body"> 
											<a href="#" class="comment-author">
												<small class="text-muted pull-right"> 12 Minutes ago </small>
												<span>Melisa Doe</span>
											</a>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
												euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet 
												dolore magna aliquam tincidunt erat volutpat.  
											</p>
										</div><!-- /comment body -->

										<!-- options -->
										<ul class="list-inline size-11 margin-top-10">
											<li>
												<a href="#" class="text-info"><i class="fa fa-reply"></i> Reply</a>
											</li>
											<li>
												<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-danger">Delete</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-primary">Edit</a>
											</li>
										</ul>
									</li><!-- /options -->

									<li class="comment comment-reply">

										<!-- avatar -->
										<img class="avatar" src="assets/images/demo/people/300x300/6-min.jpg" width="50" height="50" alt="avatar" />

										<!-- comment body -->
										<div class="comment-body"> 
											<a href="#" class="comment-author">
												<small class="text-muted pull-right"> 4 Minutes ago </small>
												<span>Ioana Doe</span>
											</a>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy! <i class="fa fa-smile-o green"></i> 
											</p>
										</div><!-- /comment body -->

										<!-- options -->
										<ul class="list-inline size-11 margin-top-10">
											<li>
												<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-danger">Delete</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-primary">Edit</a>
											</li>
										</ul><!-- /options -->

									</li>

									<li class="comment comment-reply">

										<!-- avatar -->
										<img class="avatar" src="assets/images/demo/people/300x300/7-min.jpg" width="50" height="50" alt="avatar" />

										<!-- comment body -->
										<div class="comment-body"> 
											<a href="#" class="comment-author">
												<small class="text-muted pull-right"> a moment ago </small>
												<span>Simona Doe</span>
											</a>
											<p>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy! <i class="fa fa-smile-o green"></i> 
											</p>
										</div><!-- /comment body -->

										<!-- options -->
										<ul class="list-inline size-11 margin-top-10">
											<li>
												<a href="#" class="text-success"><i class="fa fa-thumbs-up"></i> Like</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-danger">Delete</a>
											</li>
											<li class="pull-right">
												<a href="#" class="text-primary">Edit</a>
											</li>
										</ul><!-- /options -->

									</li>
									<li>
										<div class="input-group">
											<input id="btn-input" type="text" class="form-control" placeholder="Type your message...">
											<span class="input-group-btn">
												<button class="btn btn-primary" id="btn-chat">
													<i class="fa fa-reply"></i> Reply
												</button> 
											</span>
										</div>
									</li>
								</ul>
								<!-- /COMMENT -->

							
							</div>

						</div>


						<form method="post" action="#" class="box-light margin-top-20"><!-- .box-light OR .box-dark -->
							<div class="box-inner">
								<h4 class="uppercase">LEAVE A MESSAGE TO <strong>FELICIA DOE</strong></h4>
								
								<textarea required class="form-control word-count" data-maxlength="100" rows="5" placeholder="Type your message here..."></textarea>
								<div class="text-muted text-right margin-top-3 size-12 margin-bottom-10">
									<span>0/100</span> Words
								</div>

								<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
							</div>
						</form>

					</div>
					
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