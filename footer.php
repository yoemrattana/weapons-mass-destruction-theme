
<!--  footer -->
<footer id="footer" class="footer">

	<div class="footer-info text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-info-content">
						<div class="footer-logo">
							<img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/assets/images/logos/logo-no-title.png" alt="logo" width=130px  />
						</div>
						<h5 class="organization-title">អាជ្ញាធរជាតិអាវុធគីមី</h5>
						<!-- <p class="footer-info-phone"><i class="fa fa-phone"></i> <?php echo get_field( 'phone', 165 ) ?></p>
						<p class="footer-info-email"><i class="fa fa-envelope-o"></i> <?php echo get_field( 'email', 165 ) ?></p> -->
						<ul class="unstyled footer-social">
							<li>
								<a title="Facebook" href="https://web.facebook.com/NACWCambodia/" target="_blank">
									<span class="social-icon"><i class="fa fa-facebook-square" style="color:#1e88e5"></i></span>
								</a>
								<a title="Telegram" href="https://t.me/NACWCambodia" target="_blank">
									<span class="social-icon"><i class="fa fa-telegram" style="color:#1e88e5"></i></span>
								</a>
							</li>
						</ul>
						<div class="footer-contact">
							<p class="title-contact">ទំនាក់ទំនង</p>
							<p>pengby.ngor@gmail.com</p>
							<p>0889989899</p>
						</div>
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

		<!-- <div id="back-to-top" class="back-to-top">
			<button class="btn btn-primary" title="Back to Top">
				<i class="fa fa-angle-up"></i>
			</button>
		</div> -->

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


<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/holder.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/offcanvas.js"></script>

<!-- fotorama -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/js/fotorama-4.4.3.min.js"></script>
<!-- unitegallery -->
<script type='text/javascript' src='<?php bloginfo('stylesheet_directory');?>/assets/unitegallery/js/unitegallery.min.js'></script>	
<script type='text/javascript' src='<?php bloginfo('stylesheet_directory');?>/assets/unitegallery/themes/tiles/ug-theme-tiles.js'></script>
<!-- light gallery -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/assets/lightGallery/dist/js/lightgallery-all.min.js"></script>

<?php wp_footer(); ?>
</div> <!-- end inner-body-->

<!-- facebook widget start -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- facebook widget end -->

<!-- unitegallery -->
<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery("#gallery").unitegallery({
			tiles_type:"justified"
		});

	});
	$(document).ready(function(){
        $('#video-gallery').lightGallery();
    });
	
	
</script>

</body>
</html>
