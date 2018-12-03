<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package news
 */

get_header();
?>

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					
					<div class="single-post">
						
						<div class="post-title-area">
							<!-- <a class="post-cat" href="#">Health</a> -->
							<h2 class="post-title">
				 				<?php the_title() ?>
				 			</h2>
				 			<div class="post-meta">
								<!-- <span class="post-author">
									By <a href="#">John Doe</a>
								</span> -->
								<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								
								<span class="post-date"><i class="fa fa-clock-o"></i> <?php echo $post_date ?></span>
								<!-- <span class="post-hits"><i class="fa fa-eye"></i> 21</span>
								<span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span>01</span></a></span> -->
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="post-media post-featured-image">
								<a href="<?php echo  get_field('image')['url']?>" class="gallery-popup"><img src="<?php echo  get_field('image')['url']?>" class="img-fluid" alt=""></a>
							</div>
							<div class="entry-content">
								
								<?php echo get_field('description') ?>
							</div><!-- Entery content end -->
							
						</div><!-- post-content end -->

					</div><!-- Single post end -->

				</div><!-- Content Col end -->


				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">
						

						<div class="widget color-default">
						<h3 class="block-title"><span><?php echo pll__('Latest') ?></span></h3>
						<div class="list-post-block">
							<ul class="list-post review-post-list">
								<?php $arg = ['post_type' => 'nuclear_weapons', 'orderby' => 'post_id', 'posts_per_page'=>8, 'order' => 'DESC']; ?>
            					<?php $nuclear_weapons = new WP_Query($arg) ?>
								<?php while ( $nuclear_weapons->have_posts() ) : $nuclear_weapons->the_post(); ?>
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="<?php the_permalink(); ?>">
												<img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title">
								 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								 			</h2>
								 			
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->
								<?php endwhile; ?>

							</ul><!-- List post end -->
						</div><!-- List post block end -->
					</div><!-- Latest Review Widget end -->

					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

<?php
get_footer();
