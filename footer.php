
<!--  footer -->
<footer id="footer" class="footer">

	<div class="footer-info text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-info-content">
						<div class="footer-logo">
							<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/assets/images/logos/logo.png" alt="logo"  />
						</div>
						<h5 class="organization-title">អាជ្ញាធរជាតិអាវុធគីមី</h5>
						<p class="footer-info-phone"><i class="fa fa-phone"></i> <?php echo get_field( 'phone', 165 ) ?></p>
						<p class="footer-info-email"><i class="fa fa-envelope-o"></i> <?php echo get_field( 'email', 165 ) ?></p>
						<ul class="unstyled footer-social">
							<li>
								<!-- <a title="Rss" href="#">
									<span class="social-icon"><i class="fa fa-rss"></i></span>
								</a> -->
								<a title="Facebook" href="https://web.facebook.com/NACWCambodia/" target="_blank">
									<span class="social-icon"><i class="fa fa-facebook-square" style="color:blue"></i></span>
								</a>
								<!-- <a title="Twitter" href="#">
									<span class="social-icon"><i class="fa fa-twitter"></i></span>
								</a>
								<a title="Google+" href="#">
									<span class="social-icon"><i class="fa fa-google-plus"></i></span>
								</a> -->
								<!-- <a title="Linkdin" href="#">
									<span class="social-icon"><i class="fa fa-linkedin"></i></span>
								</a>
								<a title="Skype" href="#">
									<span class="social-icon"><i class="fa fa-skype"></i></span>
								</a>
								<a title="Skype" href="#">
									<span class="social-icon"><i class="fa fa-dribbble"></i></span>
								</a>
								<a title="Skype" href="#">
									<span class="social-icon"><i class="fa fa-pinterest"></i></span>
								</a>
								<a title="Skype" href="#">
									<span class="social-icon"><i class="fa fa-instagram"></i></span>
								</a> -->
							</li>
						</ul>
					</div><!-- Footer info content end -->
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Footer info end -->

</footer><!-- Footer end -->

<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="copyright-info">
					<span>Copyright © 2018</span>
				</div>
			</div>
		</div><!-- Row end -->

		<div id="back-to-top" class="back-to-top">
			<button class="btn btn-primary" title="Back to Top">
				<i class="fa fa-angle-up"></i>
			</button>
		</div>

	</div><!-- Container end -->
</div><!-- Copyright end -->

<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.js"></script>
<!-- Popper Jquery -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/popper.min.js"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/owl.carousel.min.js"></script>
<!-- Color box -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.colorbox.js"></script>
<!-- Smoothscroll -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/smoothscroll.js"></script>
<!-- Template custom -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js"></script>

<script type='text/javascript' src='<?php bloginfo('stylesheet_directory');?>/assets/unitegallery/js/unitegallery.min.js'></script>	
<?php if ( is_page( 'home' ) ) : ?>
<script type='text/javascript' src='<?php bloginfo('stylesheet_directory');?>/assets/unitegallery/themes/default/ug-theme-default.js'></script>
<?php endif ?>
<script type='text/javascript' src='<?php bloginfo('stylesheet_directory');?>/assets/unitegallery/themes/tiles/ug-theme-tiles.js'></script>

<?php wp_footer(); ?>
</div> <!-- end inner-body-->


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery("#gallery-photo").unitegallery({
				tiles_type:"justified"
		});
		jQuery("#gallery-video").unitegallery();


	});

</script>

</body>
</html>
