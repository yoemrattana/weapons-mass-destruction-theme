<?php
/*
    Template Name: Home Page
 * */
 get_header();
?>

<section class="block-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<?php $arg = ['post_type' => 'nuclear_weapons', 'orderby' => 'post_id', 'posts_per_page'=>16, 'order' => 'DESC']; ?>
            	<?php $nuclear_weapons = new WP_Query($arg) ?>
				<div class="latest-news block color-red">
					<h3 class="block-title"><span><?php echo pll__('Nuclear Weapons') ?></span></h3>
					<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
						<?php $count_nuclear = 0 ?>
						<?php while ( $nuclear_weapons->have_posts() ) : $nuclear_weapons->the_post(); ?>
						<?php if ( $count_nuclear % 2 == 0 ) : ?>	
						<div class="item">
						<?php endif ?>	
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style clearfix">
										<div class="post-thumb">
											<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" /></a>
										</div>
										<!-- <a class="post-cat" href="#">Health</a> -->
										<div class="post-content">
								 			<h2 class="post-title title-medium">
								 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								 			</h2>
								 			<div class="post-meta">
								 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
								 				<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								 				<span class="post-date"><?php echo $post_date ?></span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post Block style end -->
								</li><!-- Li end -->

								
								<?php if ( $count_nuclear % 2 == 0 ) : ?>
								<div class="gap-30"></div>
								<?php endif ?>	
								
						<?php if ( $count_nuclear % 2 != 0 ) : ?>
						</div>
						<?php endif ?>
						<?php $count_nuclear++ ?>
						<?php endwhile; ?>
						
					</div><!-- Latest News owl carousel end-->
				</div><!--- Latest news end -->

				<div class="gap-50"></div>

				<div class="gap-40"></div>

				<div class="block color-orange">
					<h3 class="block-title"><span><?php echo pll__("Radioactive") ?></span></h3>

					<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
						<?php $arg = ['post_type' => 'radioactive', 'orderby' => 'post_id', 'posts_per_page'=>16, 'order' => 'DESC']; ?>
            			<?php $radioactives = new WP_Query($arg) ?>
						<?php $count = 0 ?>
						<?php while ( $radioactives->have_posts() ) : $radioactives->the_post(); ?>
						<?php if ( $count % 2 == 0 ) : ?>	
						<div class="item">
						<?php endif ?>	
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style clearfix">
										<div class="post-thumb">
											<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" /></a>
										</div>
										<!-- <a class="post-cat" href="#">Health</a> -->
										<div class="post-content">
								 			<h2 class="post-title title-medium">
								 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								 			</h2>
								 			<div class="post-meta">
								 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
								 				<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								 				<span class="post-date"><?php echo $post_date ?></span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post Block style end -->
								</li><!-- Li end -->

								
								<?php if ( $count % 2 == 0 ) : ?>
								<div class="gap-30"></div>
								<?php endif ?>	
								
						<?php if ( $count % 2 != 0 ) : ?>
						</div>
						<?php endif ?>
						<?php $count++ ?>
						<?php endwhile; ?>

					</div><!-- Latest News owl carousel end-->
				</div><!-- Block Lifestyle end -->


			</div><!-- Content Col end -->


		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- First block end -->


<?php
  get_footer();
