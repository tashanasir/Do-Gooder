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
			<section class="page-header dark page-header-xs">
				

				<div class="container">

					<h1>FAQ</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Frequently Asked Questions</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">

					<!-- FILTER -->
					<ul class="nav nav-pills mix-filter margin-bottom-30">
						<li data-filter="all" class="filter active"><a href="#">All</a></li>
						<li data-filter="development" class="filter"><a href="#">Development</a></li>
						<li data-filter="photography" class="filter"><a href="#">Photography</a></li>
						<li data-filter="design" class="filter"><a href="#">Design</a></li>
					</ul>
					<!-- /FILTER -->

					<div class="row mix-grid">

						<!-- LEFT COLUMNS -->
						<div class="col-md-9">

							<!-- TOGGLES -->
							<div class="toggle toggle-transparent toggle-bordered-simple">

								<div class="toggle mix design"><!-- toggle -->
									<label>1. Nulla lacinia iaculis nulla non pulvinar?</label>
									<div class="toggle-content">
										<p class="clearfix">
											<img class="hidden-sm pull-left img-responsive" src="assets/images/demo/girl_looking-min_thumb.jpg" alt="Careers" />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix photography"><!-- toggle -->
									<label>2. Lacinia iaculis nulla non pulvinar?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

										<div class="row">

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

										</div>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix design"><!-- toggle -->
									<label>3. Quisque rutrum pellentesque imperdiet?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

										<div class="row">

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="assets/images/demo/1200x800/10-min.jpg" class="item-image lightbox" data-plugin-options='{"type":"image"}'>
														<img class="img-responsive" src="assets/images/demo/451x300/10-min.jpg" alt="" />
													</a>
												</div>

											</div>

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="http://www.youtube.com/watch?v=W7Las-MJnJo" class="item-image lightbox" data-plugin-options='{"type":"iframe"}'>
														<img class="img-responsive" src="assets/images/demo/451x300/11-min.jpg" alt="" />
													</a>
												</div>

											</div>

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="assets/images/demo/1200x800/25-min.jpg" class="item-image lightbox" data-plugin-options='{"type":"image"}'>
														<img class="img-responsive" src="assets/images/demo/451x300/25-min.jpg" alt="" />
													</a>
												</div>

											</div>

										</div>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix development"><!-- toggle -->
									<label>4. Iaculis nulla non pulvinar?</label>
									<div class="toggle-content">
										<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix photography"><!-- toggle -->
									<label>5. Lorem ipsum dolor sit amet, consectetur?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix design"><!-- toggle -->
									<label>6. Cum sociis natoque penatibus et magnis?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix development"><!-- toggle -->
									<label>7. Ut eu risus enim, ut pulvinar lectus?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix development"><!-- toggle -->
									<label>8. Nulla lacinia iaculis nulla non pulvinar?</label>
									<div class="toggle-content">
										<p class="clearfix">
											<img class="hidden-sm pull-left img-responsive" src="assets/images/demo/girl_looking-min_thumb.jpg" alt="Careers">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix design"><!-- toggle -->
									<label>9. Lacinia iaculis nulla non pulvinar?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

										<div class="row">

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

											<div class="col-md-4 col-sm-6">

												<ul class="list-icon check-square"><!-- block 2 -->
													<li>Nulla lacinia iaculis nulla</li>
													<li>Cum sociis natoque penatibus</li>
													<li>Magnis dis parturient montes</li>
												</ul>

											</div>

										</div>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix design"><!-- toggle -->
									<label>10. Quisque rutrum pellentesque imperdiet?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

										<div class="row">

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="assets/images/demo/1200x800/10-min.jpg" class="item-image lightbox" data-plugin-options='{"type":"image"}'>
														<img class="img-responsive" src="assets/images/demo/451x300/10-min.jpg" alt="" />
													</a>
												</div>

											</div>

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="http://www.youtube.com/watch?v=W7Las-MJnJo" class="item-image lightbox" data-plugin-options='{"type":"iframe"}'>
														<img class="img-responsive" src="assets/images/demo/451x300/11-min.jpg" alt="" />
													</a>
												</div>

											</div>

											<div class="col-md-4 col-sm-6">

												<div class="box-content thumbnail text-center">
													<a href="assets/images/demo/1200x800/25-min.jpg" class="item-image lightbox" data-plugin-options='{"type":"image"}'>
														<img class="img-responsive" src="assets/images/demo/451x300/25-min.jpg" alt="" />
													</a>
												</div>

											</div>

										</div>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix photography"><!-- toggle -->
									<label>11. Iaculis nulla non pulvinar?</label>
									<div class="toggle-content">
										<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

								<div class="toggle mix development"><!-- toggle -->
									<label>12. Lorem ipsum dolor sit amet, consectetur?</label>
									<div class="toggle-content">
										<p class="clearfix">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
											<br /><br />
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.
										</p>

									</div>
								</div><!-- /toggle -->

							</div>
							<!-- /TOGGLES -->

							<!-- CALLOUT -->
							<div class="callout alert alert-border margin-top-60 margin-bottom-60">

								<div class="row">

									<div class="col-md-9 col-sm-12"><!-- left text -->
										<h4>Call now at <strong>+800-565-2390</strong> and get 15% discount!</strong></h4>
										<p class="font-lato size-17">
											We truly care about our users and our product.
										</p>
									</div><!-- /left text -->

									
									<div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
										<a href="#purchase" rel="nofollow" target="_blank" class="btn btn-default btn-lg">PURCHASE NOW</a>
									</div><!-- /right btn -->

								</div>

							</div>
							<!-- /CALLOUT -->

						</div>
						<!-- /LEFT COLUMNS -->

						<!-- RIGHT COLUMNS -->
						<div class="col-md-3">

							<!-- POPULAR QUESTIONS -->
							<h4><strong>Poular</strong> Topics</h4>
							<p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet.</em></p>

							<hr />

							<ul class="list-unstyled"><!-- block 1 -->
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Consectetur adipiscing elit</a></li>
								<li><a href="#">Quisque rutrum pellentesque</a></li>
							</ul><!-- /block 1 -->

							<hr />

							<!-- ASK A QUSTION -->
							<h4><strong>Ask</strong> a question</h4>
							<form action="#" method="post" class="sky-form clearfix">

								<label class="input">
									<i class="ico-prepend fa fa-user"></i>
									<input type="text" placeholder="Name">
								</label>

								<label class="input">
									<i class="ico-prepend fa fa-envelope"></i>
									<input type="text" placeholder="Email">
								</label>

								<label class="textarea">
									<i class="ico-prepend fa fa-comment"></i>
									<textarea rows="3" placeholder="Type your question..."></textarea>
								</label>

								<button class="btn btn-primary btn-sm pull-right">SUBMIT YOUR QUESTION</button>

							</form>

							<hr />

							<!-- FLICKR WIDGET -->
							<h4 class="size-16 margin-bottom-10"><strong>Flickr</strong> Photo</h4>
							<div class="widget-flickr clearfix lightbox margin-bottom-60" data-id="37304598@N02" data-limit="8"></div>

						</div>
						<!-- /RIGHT COLUMNS -->

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