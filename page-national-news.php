<?php
/*
    Template Name: National News Page
 * */
 get_header();
 
?>

<div class="gap-20"></div>
<section class="block-wrapper p-bottom-0 no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="more-news block color-blue">
					<h3 class="block-title">
						<span><?php echo pll__('National News') ?></span>
					</h3>
					<div id="more-news-slide" class="owl-carousel1 owl-theme1 more-news-slide1">
						<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
						<?php $arg = [
							'post_type' 		=> 'news_pt',
							'category_name'		=> 'National,National-en',
							'orderby' 			=> 'post_id', 
							'posts_per_page'	=> 8, 
							'order' 			=> 'DESC', 
							'paged' 			=> $paged ]; 
						?>
            			<?php $news = new WP_Query($arg) ?>
            			
						<?php while ( $news->have_posts() ) : $news->the_post(); ?>
							<div class="item">							
								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="<?php the_permalink(); ?>">
											<img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#"><?php echo pll__('National News'); ?></a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							 			</h2>
							 			<div class="post-meta">
							 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
							 				<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								 			<span class="post-date"><?php echo $post_date ?></span>
							 			</div>
							 			<p><?php echo wp_html_excerpt( get_the_excerpt(), 150, '...' )  ?></p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 1 end -->

								<div class="gap-20"></div>

							</div>
							
						<?php endwhile; ?>
						
					</div><!-- More news carousel end -->
				</div><!--More news block end -->
			
				<?php echo bootstrap_pagination($news); ?>
				
			</div><!-- Content Col end -->

			<div class="col-lg-4 col-sm-12">
				<?php get_template_part( 'template-parts/widget-news', 'page-national-news' ); ?>
				<div class="gap-20"></div>
				<?php get_template_part( 'template-parts/widget-event', 'page-national-news' ); ?>
				<div class="gap-20"></div>
				<?php get_template_part( 'template-parts/widget-facebook', 'page-national-news' ); ?>
			</div><!-- Sidebar col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 3rd block end -->

<div class="gap-30"></div>


<?php
  get_footer();