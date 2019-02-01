<?php
/*
    Template Name: Policy Page
 * */
 get_header();
?>
<div class="gap-20"></div>
<section class="block-wrapper p-bottom-0 no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="more-news block color-default">
					<h3 class="block-title">
						<span><?php echo pll__( 'Policy' ) ?></span>
					</h3>
					<div class="row">
						<div class="col-sm-12">
							<div class="content-page">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
									<?php the_content();?>
									
								<?php endwhile; endif; ?>
							</div>
						</div>
			      	</div><!-- Post block row end -->
				</div><!--More news block end -->				
			</div><!-- Content Col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 3rd block end -->

<div class="gap-30"></div>

<?php
  get_footer();