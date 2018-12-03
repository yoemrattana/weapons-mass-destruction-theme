<?php
/*
    Template Name: Nuclear Page
 * */
 get_header();
?>

<section class="block-wrapper p-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="more-news block color-default">
					<h3 class="block-title"><span><?php echo pll__('Nuclear Weapons') ?></span></h3>

					<div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">
						<?php $arg = ['post_type' => 'nuclear_weapons', 'orderby' => 'post_id', 'posts_per_page'=>8, 'order' => 'DESC']; ?>
            			<?php $nuclear_weapons = new WP_Query($arg) ?>
            			<?php $count_nuclear = 0 ?>
						<?php while ( $nuclear_weapons->have_posts() ) : $nuclear_weapons->the_post(); ?>
						<?php if ( $count_nuclear % 2 == 0 ) : ?>	
							<div class="item">
						<?php endif; ?>		
								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="<?php the_permalink(); ?>">
											<img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" />
										</a>
									</div>
									<!-- <a class="post-cat" href="#"><?php the_title(); ?></a> -->
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							 			</h2>
							 			<div class="post-meta">
							 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
							 				<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								 			<span class="post-date"><?php echo $post_date ?></span>
							 			</div>
							 			<p><?php the_excerpt() ?></p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 1 end -->

								
								<div class="gap-30"></div>
								

								
							<?php if ( $count_nuclear % 2 != 0 ) : ?>
							</div>
							<?php endif ?>

						<?php $count_nuclear++ ?>
						<?php endwhile; ?>

					</div><!-- More news carousel end -->
				</div><!--More news block end -->
			</div><!-- Content Col end -->

			<div class="col-lg-4 col-sm-12">
				<div class="sidebar sidebar-right">

					<div class="widget color-default">
						<h3 class="block-title"><span><?php echo pll__('Latest') ?></span></h3>
						<div class="list-post-block">
							<ul class="list-post review-post-list">
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

					
				</div><!--Sidebar right end -->
			</div><!-- Sidebar col end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 3rd block end -->


<?php
  get_footer();