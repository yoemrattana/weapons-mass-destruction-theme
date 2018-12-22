<?php
/*
    Template Name: Video Page
 * */
 get_header();
?>
<div class="gap-20"></div>
<section class="block-wrapper p-bottom-0 no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="more-news block color-blue">
					<h3 class="block-title">
						<span><?php echo pll__('Vidoes') ?></span>
					</h3>

					<div class="row">
						<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
						<?php $arg = [
							'post_type' 	=> 'video', 
							'orderby' 		=> 'post_id', 
							'posts_per_page'=> 8, 
							'order' 		=> 'DESC', 
							'paged' 		=> $paged]; 
						?>
            			<?php $videos = new WP_Query($arg) ?>
            			
						<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
			      		<div class="col-md-3">
				      		<div class="post-block-style clearfix">
								<div class="post-thumb">
									<img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" />
									<a class="popup" href="https://www.youtube.com/embed/<?php the_field( 'video' ) ?>?autoplay=1&amp;loop=1">
				                  	<div class="video-icon">
				                  		<i class="fa fa-play"></i>
				               		</div>
				            		</a>
							   	</div><!-- Post thumb end -->
								<div class="post-content">
						 			<h2 class="post-title title-small">
						 				<a class="popup" href="https://www.youtube.com/embed/<?php the_field( 'video' ) ?>?autoplay=1&amp;loop=1"><?php echo wp_html_excerpt( get_the_title(), 150, '...' ) ?></a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Block style end -->
			      		</div><!-- Col 1 end -->
			      		<?php endwhile ?>
			      	</div><!-- Post block row end -->

				</div><!--More news block end -->
				
			</div><!-- Content Col end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 3rd block end -->

<div class="gap-30"></div>

<?php
  get_footer();