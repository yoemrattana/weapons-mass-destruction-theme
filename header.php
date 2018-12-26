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
$lang = get_bloginfo("language");
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
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/font-awesome/css/font-awesome.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/colorbox.css">
	<!-- font Khmer -->
	<link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Moul" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bokor" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Angkor|Odor+Mean+Chey" rel="stylesheet">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/offcanvas.css">
	<!-- fotorama -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/fotorama.css">
	<!-- unitegallery -->
	<link rel='stylesheet' href='<?php bloginfo('stylesheet_directory');?>/assets/unitegallery/css/unite-gallery.css' type='text/css' />

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
					<div class="ts-date">
						<i class="fa fa-calendar-check-o"></i><?php echo date( 'd-m-Y' ) ?>
					</div>
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
						
					</ul>
				</div><!--/ Top bar left end -->

				<div class="col-md-4 top-social text-lg-right text-md-center">
					<ul class="unstyled">
						<li>
							<a  title="Facebook" href="https://web.facebook.com/NACWCambodia/">
								<span class="social-icon"><i class="fa fa-facebook-square" style="color:#1e88e5"></i></span>
							</a>
							<a title="Telegram" href="0889989899">
								<span class="social-icon"><i class="fa fa-telegram" style="color:#1e88e5"></i></span>
							</a>
							<!--<a title="Google+" href="#">
								<span class="social-icon"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="Linkdin" href="#">
								<span class="social-icon"><i class="fa fa-linkedin"></i></span>
							</a> -->
							<!-- <a title="Rss" href="#">
								<span class="social-icon"><i class="fa fa-rss"></i></span>
							</a> -->
							<!-- <a title="Skype" href="#">
								<span class="social-icon"><i class="fa fa-skype"></i></span>
							</a> -->
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
				<div class="col-md-12 col-sm-12">
					<div class="logo">
						<a href="<?php echo home_url( '/' ) ?>">
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logos/logo-no-title.png" width=130>
							<div class="logo-title">
								<h1>អាជ្ញាធរជាតិអាវុធគីមី</h1>
							</div>
						</a>
					</div>

				</div><!-- logo col end -->

				<!--  <div class="col-md-9 col-sm-12 header-right">
					<div class="ad-banner float-right">
						<a href="#"><img src="images/banner-ads/ad-top-header.png" class="img-fluid" alt=""></a>
					</div>
				</div>-->
				<!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header><!--/ Header end -->

	<div class="main-nav clearfix">
		<div class="container" style="max-width: 100%; padding: 0">
			<div class="row">
				<nav class="navbar navbar-expand-lg col">
					<div class="site-nav-inner float-left">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- End of Navbar toggler -->

						<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<?php if ( $lang == 'km' ) : ?>
									<li>
										<a class="nav-name" href="<?php echo home_url( '/' ) ?>"><?php echo pll__("Home") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__("News") ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="<?php echo home_url( '/news' ) ?>"><?php echo pll__( 'All' ) ?></a></li>
											<li><a href="<?php echo home_url( '/national-news' ) ?>"><?php echo pll__( 'National' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/international-news' ) ?>"><?php echo pll__( 'International' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo site_url( '/events' ) ?>"><?php echo pll__("Event") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'Media' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo home_url( '/photos' ) ?>"><?php echo pll__( 'Photo' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/videos' ) ?>"><?php echo pll__( 'Videos' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/presses-release' ) ?>"><?php echo pll__( 'Press Release' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/publications' ) ?>"><?php echo pll__( 'Publication' ) ?></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'About' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo home_url( '/about' ) ?>"><?php echo pll__( 'About' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/organization' ) ?>"><?php echo pll__( 'Organization' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo home_url( '/mission-vision' ) ?>"><?php echo pll__("Mission/Vision") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'Weapon of Mass Destruction' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo home_url( '/weapon-of-mass-destruction' ) ?>"><?php echo pll__( 'Weapon of Mass Destruction' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/nuclear-weapons' ) ?>"><?php echo pll__( 'Nuclear' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/missile' ) ?>"><?php echo pll__( 'Missile' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/chemical' ) ?>"><?php echo pll__( 'Chemical' ) ?></a></li>
											<li ><a href="<?php echo home_url( '/biological' ) ?>"><?php echo pll__( 'Biological' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a class="nav-name" href="<?php echo home_url( '/contact' ) ?>"><?php echo pll__("Contact") ?></a>
									</li>
								<?php else : ?>
									<li>
										<a class="nav-name" href="<?php echo site_url( '/home-en' ) ?>"><?php echo pll__("Home") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__("News") ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="<?php echo site_url( '/news-en' ) ?>"><?php echo pll__( 'All' ) ?></a></li>
											<li><a href="<?php echo site_url( '/national-news-en' ) ?>"><?php echo pll__( 'National' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/international-news-en' ) ?>"><?php echo pll__( 'International' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo site_url( '/events-en' ) ?>"><?php echo pll__("Event") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'Media' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo site_url( '/photos-en' ) ?>"><?php echo pll__( 'Photo' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/videos-en' ) ?>"><?php echo pll__( 'Videos' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/presses-release-en' ) ?>"><?php echo pll__( 'Press Release' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/publications-en' ) ?>"><?php echo pll__( 'Publication' ) ?></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'About' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo site_url( '/about-en' ) ?>"><?php echo pll__( 'About' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/organization-en' ) ?>"><?php echo pll__( 'Organization' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo site_url( '/mission-vision-en' ) ?>"><?php echo pll__("Mission/Vision") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'Weapon of Mass Destruction' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo site_url( '/weapon-of-mass-destruction-en' ) ?>"><?php echo pll__( 'Weapon of Mass Destruction' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/nuclear-weapons-en' ) ?>"><?php echo pll__( 'Nuclear' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/missile-en' ) ?>"><?php echo pll__( 'Missile' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/chemical-en' ) ?>"><?php echo pll__( 'Chemical' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/biological-en' ) ?>"><?php echo pll__( 'Biological' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a class="nav-name" href="<?php echo site_url( '/contact-en' ) ?>"><?php echo pll__("Contact") ?></a>
									</li>
								<?php endif; ?>
								
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

	<div class="main-nav-mb clearfix">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-blue">
					<a class="navbar-brand mr-auto mr-lg-0" href="#">អាជ្ញាធរជាតិអាវុធគីមី</a>
					<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">

						<ul class="nav navbar-nav">
							<?php if ( $lang == 'km' ) : ?>
								<li>
									<a class="nav-name" href="<?php echo home_url( '/' ) ?>">ទំព័រដើម</a>
								</li>
								<li class="nav-item dropdown">
									<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__("News") ?> <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo home_url( '/news' ) ?>"><?php echo pll__( 'All' ) ?></a></li>
										<li><a href="<?php echo home_url( '/national-news' ) ?>"><?php echo pll__( 'National' ) ?></a></li>
										<li ><a href="<?php echo home_url( '/international-news' ) ?>"><?php echo pll__( 'International' ) ?></a></li>
									</ul>
								</li>
								<li>
									<a href="<?php echo site_url( '/events' ) ?>"><?php echo pll__("Event") ?></a>
								</li>
								<li class="nav-item dropdown">
									<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'Media' ) ?> <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li ><a href="<?php echo home_url( '/photos' ) ?>"><?php echo pll__( 'Photo' ) ?></a></li>
										<li ><a href="<?php echo home_url( '/videos' ) ?>"><?php echo pll__( 'Videos' ) ?></a></li>
										<li ><a href="<?php echo home_url( '/presses-release' ) ?>"><?php echo pll__( 'Press Release' ) ?></a></li>
										<li ><a href="<?php echo home_url( '/publications' ) ?>"><?php echo pll__( 'Publication' ) ?></a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a href="#" class="nav-link" data-toggle="dropdown">អំពីយើង <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li ><a href="<?php echo home_url( '/about' ) ?>">អំពីយើង</a></li>
										<li ><a href="<?php echo home_url( '/organization' ) ?>"><?php echo pll__( 'Organization' ) ?></a></li>
									</ul>
								</li>
								<li>
									<a href="<?php echo home_url( '/mission-vision' ) ?>"><?php echo pll__("Mission/Vision") ?></a>
								</li>
								<li class="nav-item dropdown">
									<a href="#" class="nav-link" data-toggle="dropdown">អាវុធប្រល័យលោក <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li ><a href="<?php echo home_url( '/weapon-of-mass-destruction' ) ?>">អាវុធប្រល័យលោក</a></li>
										<li ><a href="<?php echo home_url( '/nuclear-weapons' ) ?>"><?php echo pll__( 'Nuclear' ) ?></a></li>
										<li ><a href="<?php echo home_url( '/missile' ) ?>"><?php echo pll__( 'Missile' ) ?></a></li>
										<li ><a href="<?php echo home_url( '/chemical' ) ?>"><?php echo pll__( 'Chemical' ) ?></a></li>
										<li ><a href="<?php echo home_url( '/biological' ) ?>"><?php echo pll__( 'Biological' ) ?></a></li>
									</ul>
								</li>
								<li>
									<a class="nav-name" href="<?php echo home_url( '/contact' ) ?>"><?php echo pll__("Contact") ?></a>
								</li>
								<?php else : ?>
									<li>
										<a class="nav-name" href="<?php echo site_url( '/home-en' ) ?>"><?php echo pll__("Home") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__("News") ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="<?php echo site_url( '/news-en' ) ?>"><?php echo pll__( 'All' ) ?></a></li>
											<li><a href="<?php echo site_url( '/national-news-en' ) ?>"><?php echo pll__( 'National' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/international-news-en' ) ?>"><?php echo pll__( 'International' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo site_url( '/events-en' ) ?>"><?php echo pll__("Event") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'Media' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo site_url( '/photos-en' ) ?>"><?php echo pll__( 'Photo' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/videos-en' ) ?>"><?php echo pll__( 'Videos' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/presses-release-en' ) ?>"><?php echo pll__( 'Press Release' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/publications-en' ) ?>"><?php echo pll__( 'Publication' ) ?></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'About' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo site_url( '/about-en' ) ?>"><?php echo pll__( 'About' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/organization-en' ) ?>"><?php echo pll__( 'Organization' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo site_url( '/mission-vision-en' ) ?>"><?php echo pll__("Mission/Vision") ?></a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown"><?php echo pll__( 'Weapon of Mass Destruction' ) ?> <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li ><a href="<?php echo site_url( '/weapon-of-mass-destruction-en' ) ?>"><?php echo pll__( 'Weapon of Mass Destruction' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/nuclear-weapons-en' ) ?>"><?php echo pll__( 'Nuclear' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/missile-en' ) ?>"><?php echo pll__( 'Missile' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/chemical-en' ) ?>"><?php echo pll__( 'Chemical' ) ?></a></li>
											<li ><a href="<?php echo site_url( '/biological-en' ) ?>"><?php echo pll__( 'Biological' ) ?></a></li>
										</ul>
									</li>
									<li>
										<a class="nav-name" href="<?php echo site_url( '/contact-en' ) ?>"><?php echo pll__("Contact") ?></a>
									</li>

								<?php endif; ?>
								<!-- Features menu end -->
							</ul><!--/ Nav ul end -->
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
								
							</ul>
						</div>
					</nav>	
				</div>
			</div>
	</div>	