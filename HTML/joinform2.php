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
			<section class="page-header">
				<div class="container">

					<h1>FORM ELEMENTS</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shortcodes</a></li>
						<li class="active">Form Elements</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->





			<!-- -->
			<section>
				<div class="container">


					<div class="row">

						<div class="col-md-3 col-sm-3">

							<!-- side navigation -->
							<div class="side-nav">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>FORM ELEMENTS</h4>
								</div>

								<ul class="list-group list-unstyled">
									<li class="list-group-item"><a href="shortcode-forms.html">Smarty Elements</a></li>
									<li class="list-group-item"><a href="shortcode-forms-masked.html">Form Masked Inputs</a></li>
									<li class="list-group-item"><a href="shortcode-forms-pickers.html">Pickers <small class="text-muted">(date / time / color)</small></a></li>
									<li class="list-group-item"><a href="shortcode-forms-sliders.html">Sliders</a></li>
									<li class="list-group-item"><a href="shortcode-forms-validation.html">Validation Form</a></li>
									<li class="list-group-item"><a href="shortcode-forms-editors.html">HTML Editors</a></li>
									<li class="list-group-item active"><a href="shortcode-forms-ajax.html">Ajax Any Form <small class="text-danger">(unique)</small></a></li>
									<li class="list-group-item"><a href="shortcode-forms-autosuggest.html">Autosuggest</a></li>
								</ul>

							</div>
							<!-- /side navigation -->

						</div>

						<div class="col-md-9 col-sm-9">

							<div class="panel panel-default">
								<div class="panel-body">
									<p><b>Smarty use a smart PHP class written from scratch to catch all form fields , upload files and create a body email message, without touching the PHP code or the Javascript code. Just write the HTML form code and that's it!</b></p>


									<p>
										This might be a very unique feature because you can create multiple working forms and you don't have to write a single line of code in PHP or javascript.
										All forms will be sent automaticaly via email. Also, validation is included! You can add any form fields you like, no limit!
									</p>
								</div>
							</div>


						<!-- ------ -->
						<div class="panel panel-default">
							<div class="panel-heading panel-heading-transparent">
								<h2 class="panel-title bold">Ajax Working Form</h2>
							</div>

							<div class="panel-body">

								<form class="validate" action="php/contact.php" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
									<fieldset>
										<!-- required [php action request] -->
										<input type="hidden" name="action" value="contact_send" />

										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>First Name *</label>
													<input type="text" name="contact[first_name]" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Last Name *</label>
													<input type="text" name="contact[last_name]" value="" class="form-control required">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-6 col-sm-6">
													<label>Email *</label>
													<input type="email" name="contact[email]" value="" class="form-control required">
												</div>
												<div class="col-md-6 col-sm-6">
													<label>Phone</label>
													<input type="text" name="contact[phone]" value="" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label>
														File Attachment 
														<small class="text-muted">Curriculum Vitae - optional</small>
													</label>

													<!-- custom file upload -->
													<div class="fancy-file-upload fancy-file-primary">
														<i class="fa fa-upload"></i>
														<input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);" />
														<input type="text" class="form-control" placeholder="no file selected" readonly="" />
														<span class="button">Choose File</span>
													</div>
													<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

												</div>
											</div>
										</div>

									</fieldset>

									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn btn-3d btn-teal btn-block margin-top-30">
												SUBMIT
											</button>
										</div>
									</div>

								</form>

							</div>

							<div class="panel-footer">
								<a href="javascript:;" onclick="jQuery('#pre-0').slideToggle();" class="btn btn-success btn-xs">Show Code</a>
<pre id="pre-0" class="text-left noradius text-danger softhide margin-top-20 margin-bottom-0">
<span class="text-success">&lt;!-- 
	<b class="text-warning">.validate</b> 				- class used to activate validation plugin

	data-success="Sent! Thank you!" 	- used by toastr to print the message
	data-toastr-position="top-right"	- toastr message position:
		.top-right
		.top-left
		.bottom-right
		.bottom-left

	php/contact.php 			- action form required to be pointed here!

	<span class="text-info bold">NOTE: Add .required class for required fields.</span>
	All input elements name required to be array format: contact[first_name], contact[last_name], etc
 --&gt;</span>
&lt;form class="<b>validate</b>" action="<b>php/contact.php</b>" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right"&gt;
	&lt;fieldset&gt;
		&lt;!-- required [php action request] --&gt;
		&lt;input type="hidden" name="action" value="contact_send" /&gt;

		&lt;div class="row"&gt;
			&lt;div class="form-group"&gt;
				&lt;div class="col-md-6 col-sm-6"&gt;
					&lt;label&gt;First Name *&lt;/label&gt;
					&lt;input type="text" name="contact[first_name]" value="" class="form-control required"&gt;
				&lt;/div&gt;
				&lt;div class="col-md-6 col-sm-6"&gt;
					&lt;label&gt;Last Name *&lt;/label&gt;
					&lt;input type="text" name="contact[last_name]" value="" class="form-control required"&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;

		&lt;div class="row"&gt;
			&lt;div class="form-group"&gt;
				&lt;div class="col-md-6 col-sm-6"&gt;
					&lt;label&gt;Email *&lt;/label&gt;
					&lt;input type="email" name="contact[email]" value="" class="form-control required"&gt;
				&lt;/div&gt;
				&lt;div class="col-md-6 col-sm-6"&gt;
					&lt;label&gt;Phone&lt;/label&gt;
					&lt;input type="text" name="contact[phone]" value="" class="form-control"&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;

		&lt;div class="row"&gt;
			&lt;div class="form-group"&gt;
				&lt;div class="col-md-12"&gt;
					&lt;label&gt;
						File Attachment 
						&lt;small class="text-muted"&gt;Curriculum Vitae - optional&lt;/small&gt;
					&lt;/label&gt;

					&lt;!-- custom file upload --&gt;
					&lt;div class="fancy-file-upload fancy-file-primary"&gt;
						&lt;i class="fa fa-upload"&gt;&lt;/i&gt;
						&lt;input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);" /&gt;
						&lt;input type="text" class="form-control" placeholder="no file selected" readonly="" /&gt;
						&lt;span class="button"&gt;Choose File&lt;/span&gt;
					&lt;/div&gt;
					&lt;small class="text-muted block"&gt;Max file size: 10Mb (zip/pdf/jpg/png)&lt;/small&gt;

				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;

	&lt;/fieldset&gt;

	&lt;div class="row"&gt;
		&lt;div class="col-md-12"&gt;
			&lt;button type="submit" class="btn btn-3d btn-teal btn-block margin-top-30"&gt;
				SUBMIT
			&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;

&lt;/form&gt;
</pre>
							</div>
						</div>
						<!-- /----- -->



						</div>

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