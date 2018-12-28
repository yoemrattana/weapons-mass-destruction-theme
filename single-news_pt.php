<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package news
 */

get_header();

setPostViews(get_the_ID());
?>
	<div class="gap-10"></div>
	<section class="block-wrapper no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">					
					<div class="single-post">						
						<div class="post-title-area">
							<a class="post-cat" href="<?php echo home_url( '/news' ) ?>"><?php echo pll__('News') ?></a>
							<h2 class="post-title">
				 				<?php the_title() ?>
				 			</h2>
				 			<div class="post-meta">
								<!-- <span class="post-author">
									By <a href="#">John Doe</a>
								</span> -->
								<?php $post_date = get_the_date( 'd-m-Y' ) ?>
								
								<span class="post-date"><i class="fa fa-clock-o"></i> <?php echo $post_date ?></span>
								<!-- <span class="post-hits"><i class="fa fa-eye"></i> 21</span>
								<span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span>01</span></a></span> -->
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="post-media post-featured-image">
								<a href="<?php echo get_field('image')['url']?>" class="gallery-popup"><img src="<?php echo get_field('image')['url']?>" class="img-fluid" alt=""></a>
							</div>
							<div class="entry-content">
								<?php echo get_field('description') ?>
							</div><!-- Entery content end -->
							
						</div><!-- post-content end -->

					</div><!-- Single post end -->

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

<?php
get_footer();
