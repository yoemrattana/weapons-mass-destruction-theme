<?php
/*
    Template Name: Contact Page
 * */
 get_header();

 $phone 	= get_field( 'phone' );
 $email 	= get_field( 'email' );
 $address 	= get_field( 'address' );
 $map 	  	= get_field( 'map' )	
?>

<section class="block-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">

				<div class="card">
					<div class="card-body">
						<div class="widget contact-info">

							<div class="row text-center">
				                <div class="col-md-4">
				                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
				                    <p><?php echo $address ?></p>
				                    
				                </div>

				                <div class="col-md-4">
				                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
				                    <p><?php echo $phone ?></p>
				                </div>

				                <div class="col-md-4">
				                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
				                    <p><?php echo $email ?></p>
				                </div>
				            </div>

						</div><!-- Widget end -->
					</div>
				</div>

				<div class="gap-20"></div>

				<div class="card">
					<div class="card-body">
						<div class="container-fluid">
						    <div class="map-responsive">
							   <?php echo $map ?>
							</div>
						</div>
					</div>
				</div>

			</div><!-- Content Col end -->

			<div class="col-lg-4 col-md-12">
				<div class="sidebar sidebar-right">
					<div class="widget">
						<h3 class="block-title"><span>Follow Us</span></h3>

						<ul class="social-icon">
							<li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div><!-- Widget Social end -->

					<div class="widget color-default">
						<h3 class="block-title"><span>Popular News</span></h3>

						<div class="post-overaly-style clearfix">
							<div class="post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/lifestyle/health4.jpg" alt="" />
								</a>
							</div>
							
							<div class="post-content">
					 			<a class="post-cat" href="#">Health</a>
					 			<h2 class="post-title title-small">
					 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
					 			</h2>
					 			<div class="post-meta">
					 				<span class="post-date">Feb 06, 2017</span>
					 			</div>
				 			</div><!-- Post content end -->
						</div><!-- Post Overaly Article end -->


						<div class="list-post-block">
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/tech/gadget3.jpg" alt="" />
											</a>
											<a class="post-cat" href="#">Gadgets</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Mar 13, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/travel5.jpg" alt="" />
											</a>
											<a class="post-cat" href="#">Travel</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Hynopedia helps female travelers find health care...</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Jan 11, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 2 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/tech/robot5.jpg" alt="" />
											</a>
											<a class="post-cat" href="#">Robotics</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Robots in hospitals can be quite handy to navigate around...</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Feb 19, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 3 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="images/news/lifestyle/food1.jpg" alt="" />
											</a>
											<a class="post-cat" href="#">Food</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Feb 27, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 4 end -->

							</ul><!-- List post end -->
						</div><!-- List post block end -->

					</div><!-- Popular news widget end -->

					<div class="widget text-center">
						<img class="banner img-fluid" src="images/banner-ads/ad-sidebar.png" alt="" />
					</div><!-- Sidebar Ad end -->

					<div class="widget m-bottom-0">
						<h3 class="block-title"><span>Newsletter</span></h3>
						<div class="ts-newsletter">
							<div class="newsletter-introtext">
								<h4>Get Updates</h4>
								<p>Subscribe our newsletter to get the best stories into your inbox!</p>
							</div>

							<div class="newsletter-form">
								<form action="#" method="post">
									<div class="form-group">
										<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
										<button class="btn btn-primary">Subscribe</button>
									</div>
								</form>
							</div>
						</div><!-- Newsletter end -->
					</div><!-- Newsletter widget end -->

				</div><!-- Sidebar right end -->
			</div><!-- Sidebar Col end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
	</section><!-- First block end -->

<div class="gap-20"></div>


<?php
  get_footer();
