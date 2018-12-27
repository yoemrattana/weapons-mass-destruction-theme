<?php $arg = [
	'post_type' 	=> 'news_pt', 
	'orderby' 		=> 'post_id',
	'posts_per_page'=> 6, 
	'order' 		=> 'DESC']; 
?>
<?php $news = new WP_Query( $arg ) ?>

<section class="block-wrapper no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				
				<div class="latest-news block color-blue">
					<h3 class="block-title"><span><?php echo pll__('News') ?></span></h3>
					<div class="block-item">
						<div class="row">
							<?php while ( $news->have_posts() ) : $news->the_post(); ?>
							<div class="col-sm-4">
								<div class="post-block-style post-grid clearfix">
									<div class="post-thumb">
										<a href="<?php the_permalink(); ?>">
											<img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" />
										</a>
									</div>
									<?php 
										$category = get_the_category( get_the_ID() ); 
									?>
									<a class="post-cat" href="#"><?php echo pll__( $category[0]->cat_name ); ?></a>
									<div class="post-content">
							 			<h2 class="post-title title-small limit-excerpt">
							 				<a href="<?php the_permalink(); ?>"><?php echo wp_html_excerpt( get_the_title(), 53, '...' ); ?></a>
							 			</h2>
							 			<div class="post-meta">
							 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
							 				<?php $post_date = get_the_date( 'd-m-Y' ) ?>
									 		<span class="post-date"><i class="fa fa-clock-o"></i><?php echo $post_date ?></span>
									 		
							 				<span class="post-comment pull-right"><i class="fa fa-eye"></i>
											<a href="#" class="comments-link"><span><?php echo getPostViews(get_the_ID()) ?></span></a></span>
							 			</div>
							 			<p><?php echo wp_html_excerpt( get_the_excerpt(), 150, '...' ) ?></p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Col 1 end -->
							<?php endwhile; ?>
							
						</div> <!-- row end -->
					</div> <!-- block-item end-->
				</div><!--- Latest news end -->
			</div><!-- Content Col end -->

			<!-- Sidebar -->

			<div class="col-lg-4 col-md-12">
				<div class="sidebar sidebar-right">
					<?php get_template_part( 'template-parts/widget-facebook', 'page-home' ); ?>
					<?php get_template_part( 'template-parts/widget-event', 'page-home' ); ?>
				</div><!-- Sidebar right end -->
			</div><!-- Sidebar Col end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- First block end -->