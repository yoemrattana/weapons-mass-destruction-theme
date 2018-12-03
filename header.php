<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package news
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/colorbox.css">

	<link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
</head>

<!-- <body <?php body_class(); ?>> -->
<body>
<div class="body-inner">
	<div id="top-bar" class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<ul class="unstyled top-nav">
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'container'       => '',
								'items_wrap' 		=> '<li id="" class="">%3$s</li>'
								//'container'       => 'nav navbar-nav',
								//'container_class' => 'navbar-collapse collapse',
								//'menu_class'      => 'nav navbar-nav'
							))
						?>
						<!-- <li><a href="#">Khmer</a></li>
						<li><a href="#">English</a></li> -->
					</ul>
				</div><!--/ Top bar left end -->

				<div class="col-md-4 top-social text-lg-right text-md-center">
					<ul class="unstyled">
						<li>
							<a title="Facebook" href="#">
								<span class="social-icon"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Twitter" href="#">
								<span class="social-icon"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="social-icon"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="Linkdin" href="#">
								<span class="social-icon"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Rss" href="#">
								<span class="social-icon"><i class="fa fa-rss"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="social-icon"><i class="fa fa-skype"></i></span>
							</a>
						</li>
					</ul><!-- Ul end -->
				</div><!--/ Top social col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</div><!--/ Topbar end -->

	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="logo">
						<a href="<?php echo home_url( '/' ) ?>">
							<!-- <img src="images/logos/logo.png" alt=""> -->
							<!-- <img src="https://front.un-arm.org/img/unoda-en.png"> -->
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logos/logo.png">
						</a>
					</div>
				</div><!-- logo col end -->

				<!-- <div class="col-md-9 col-sm-12 header-right">
					<div class="ad-banner float-right">
						<a href="#"><img src="images/banner-ads/ad-top-header.png" class="img-fluid" alt=""></a>
					</div>
				</div> -->
				<!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header><!--/ Header end -->

	<div class="main-nav clearfix">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg col">
					<div class="site-nav-inner float-left">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- End of Navbar toggler -->

						<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav" style="font-family: Hanuman;">
								<li <?php echo is_page( 'home' ) || is_page( 'home-en' ) ? 'class="active"' : ''?>>
									<a class="nav-name" href="<?php echo home_url( '/' ) ?>"><?php echo pll__("Home") ?></a>
								</li>
								<li <?php echo is_page( 'nuclear-weapons' ) || is_page( 'nuclear-weapons-en' ) ? 'class="active"' : ''?>>
									<a href="<?php echo home_url( '/nuclear-weapons' ) ?>"><?php echo pll__("Nuclear Weapons") ?></a>
								</li>
								<li <?php echo is_page( 'radioactive' ) || is_page( 'radioactive-en' ) ? 'class="active"' : ''?>>
									<a href="<?php echo home_url( '/radioactive' ) ?>"><?php echo pll__("Radioactive") ?></a>
								</li>
								
								<!-- <li class="nav-item dropdown active">
									<a href="#" class="nav-link" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="active"><a href="index.html">Home 1</a></li>
										<li><a href="index-2.html">Home 2</a></li>
										<li><a href="index-3.html">Home 3</a></li>
										<li><a href="index-4.html">Home 4</a></li>
										<li><a href="index-5.html">Home 5</a></li>
									</ul>
								</li> -->

								<!-- <li>
									<a href="category-style4.html">Travel</a>
								</li> -->

								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a href="#.">Category Layouts</a>
											<ul class="dropdown-menu">
												<li><a href="category-style1.html">Category Style 1</a></li>
												<li><a href="category-style2.html">Category Style 2</a></li>
												<li><a href="category-style3.html">Category Style 3</a></li>
												<li><a href="category-style4.html">Category Style 4</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Post Formates</a>
											<ul class="dropdown-menu">
												<li><a href="single-post1.html">Single Post 1</a></li>
												<li><a href="single-post2.html">Single Post 2</a></li>
												<li><a href="single-post3.html">Single Post 3</a></li>
												<li><a href="single-post4.html">Single Post 4</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Sidebar</a>
											<ul class="dropdown-menu">
												<li><a href="left-sidebar.html">Left Sidebar</a></li>
												<li><a href="single-post1.html">Right Sidebar</a></li>
												<li><a href="no-sidebar.html">No Sidebar</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Shortcodes</a>
											<ul class="dropdown-menu">
												<li><a href="typography.html">Typography</a></li>
												<li><a href="blockquote.html">Blockquotes</a></li>
												<li><a href="tabs.html">Tabs</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Pages</a>
											<ul class="dropdown-menu">
												<li><a href="author.html">Author</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
									</ul>
								</li> -->
								<!-- Features menu end -->
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->

				<!-- <div class="nav-search">
					<span id="search"><i class="fa fa-search"></i></span>
				</div> -->

				<div class="search-block" style="display: none;">
					<input type="text" class="form-control" placeholder="Type what you want and enter">
					<span class="search-close">&times;</span>
				</div><!-- Site search end -->

			</div><!--/ Row end -->
		</div><!--/ Container end -->

	</div><!-- Menu wrapper end -->

	<div class="gap-40"></div>
