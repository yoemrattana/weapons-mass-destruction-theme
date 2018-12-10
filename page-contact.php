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
					<?php get_template_part( 'template-parts/widget-news', 'page-international-news' ); ?>
					<div class="gap-20"></div>
					<?php get_template_part( 'template-parts/widget-event', 'page-international-news' ); ?>
					<div class="gap-20"></div>
					<?php get_template_part( 'template-parts/widget-facebook', 'page-international-news' ); ?>

				</div><!-- Sidebar right end -->
			</div><!-- Sidebar Col end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
	</section><!-- First block end -->

<div class="gap-20"></div>


<?php
  get_footer();
