<?php
/*
    Template Name: Video Page
 * */
 get_header();
?>
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
<?php $arg = [
	'post_type' 	=> 'video', 
	'orderby' 		=> 'post_id', 
	'posts_per_page'=> 8, 
	'order' 		=> 'DESC', 
	'paged' 		=> $paged]; 
?>
<?php $videos = new WP_Query($arg) ?>
<div class="gap-20"></div>
<section class="block-wrapper p-bottom-0 no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="more-news block color-blue">
					<h3 class="block-title">
						<span><?php echo pll__('Vidoes') ?></span>
					</h3>
					<div class="row" id="video-gallery">
						<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
			      			<div class="col-md-4 col-sm-6 col-xs-12 m-b-30" data-src="https://www.youtube.com/watch?v=<?php echo get_field('video') ?>" data-sub-html="<?php the_title() ?>">
			      				<div class="post-block-style clearfix">
			      					<div class="post-thumb"> 
				      					<a href="">
			                                <img class="img-fluid" src="<?php echo get_field( 'image' )['url'] ?>">
			                                <div class="video-icon">
						                  		<i class="fa fa-play"></i>
						               		</div>
			                            </a>
				      				</div> <!-- post-thumb end -->
				      				<div class="post-content">
				      					<div class="post-meta">
							 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
							 				<?php $post_date = get_the_date( 'd-m-Y' ) ?>
									 		<span class="post-date"><i class="fa fa-clock-o"></i><?php echo $post_date ?></span>	
							 			</div>
							 			<h2 class="post-title title-small block-with-text">
							 				<a href=""><?php the_title() ?></a>
							 			</h2>
						 			</div><!-- Post content end -->
								</div>
			      			</div>
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