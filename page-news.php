<?php
/*
    Template Name: News Page
 * */
 get_header();
?>
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
<?php $arg = [
	'post_type' 		=> 'news_pt',
	'orderby' 			=> 'post_id', 
	'posts_per_page'	=> 8, 
	'order' 			=> 'DESC', 
	'paged' 			=> $paged ]; 
?>
<?php $news = new WP_Query($arg) ?>

<div class="gap-20"></div>
<section class="block-wrapper p-bottom-0 no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="more-news block color-blue">
					<h3 class="block-title">
						<span><?php echo pll__('News') ?></span>
					</h3>
					<div id="more-news-slide" class="owl-carousel1 owl-theme1 more-news-slide1">
					    <div class="block-item">
							<div class="row">
								<?php while ( $news->have_posts() ) : $news->the_post(); ?>
									<div class="item">							
										<div class="post-block-style post-float-half clearfix">
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
									 			<h2 class="post-title">
									 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									 			</h2>
									 			<div class="post-meta">
									 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
									 				<?php $post_date = get_the_date( 'd-m-Y' ) ?>
										 			<span class="post-date"><i class="fa fa-clock-o"></i><?php echo $post_date ?></span>
										 			<span class="post-comment pull-right"><i class="fa fa-eye"></i>
												<a href="#" class="comments-link"><span><?php echo getPostViews(get_the_ID()) ?></span></a></span>
									 			</div>
									 			<p><?php echo wp_html_excerpt( get_the_excerpt(), 150, '...' )  ?></p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style 1 end -->

										<div class="gap-10"></div>

									</div>
									
								<?php endwhile; ?>      			
							</div>	
						</div>		
					</div><!-- More news carousel end -->
				</div><!--More news block end -->
				<div class="paging">
					<?php echo bootstrap_pagination($news); ?>
				</div>

			</div><!-- Content Col end -->

			<div class="col-lg-4 col-sm-12">
				<div class="sidebar sidebar-right">
					<?php get_template_part( 'template-parts/widget-news', 'page-news' ); ?>

					<?php get_template_part( 'template-parts/widget-event', 'page-news' ); ?>

					<?php get_template_part( 'template-parts/widget-facebook', 'page-news' ); ?>
				</div><!--Sidebar right end -->
				
			</div><!-- Sidebar col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 3rd block end -->

<div class="gap-30"></div>


<?php
  get_footer();