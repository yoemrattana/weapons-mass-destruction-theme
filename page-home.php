<?php
/*
    Template Name: Home Page
 * */
define( "DONOTCACHEPAGE", true ); 
get_header(); 
?>
<section class="featured-post-area no-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php echo do_shortcode('[metaslider id="410"]'); ?>
			</div>
		</div>
	</div>
</section>

<div class="gap-20"></div>

<section class="block-wrapper no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<?php $arg = [
					'post_type' 	=> 'news_pt', 
					'orderby' 		=> 'post_id',
					'posts_per_page'=> 9, 
					'order' 		=> 'DESC']; 
				?>
            	<?php $news = new WP_Query($arg) ?>
				<div class="latest-news block color-blue">
					<h3 class="block-title"><span><?php echo pll__('News') ?></span></h3>

					<div class="row">
						<?php while ( $news->have_posts() ) : $news->the_post(); ?>
						<div class="col-md-4">
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
						 			
					 			</div><!-- Post content end -->
							</div><!-- Post Block style end -->
						</div><!-- Col 1 end -->
						<?php endwhile; ?>
					</div>

					

				</div><!--- Latest news end -->



				<div class="gap-10"></div>

				
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

<section class="block-wrapper no-padding">
	<div class="container">
		<div class="block color-blue">
			<h3 class="block-title" style="margin-bottom: 0;"><span><?php echo pll__( 'Press Release and Publication' ) ?></span></h3>

			<div class="row">
				<!-- Press Release -->
				<div class="col-lg-6 col-md-6">
					<div class="list-post-block">
						<ul class="list-post">
						<?php $arg = [
							'post_type' => 'press_release',
							'orderby' => 'post_id', 
							'posts_per_page'=>3, 
							'order' => 'DESC', 
						]; 
						?>
            			<?php $presses_release = new WP_Query($arg) ?>
						<?php while ( $presses_release->have_posts() ) : $presses_release->the_post(); ?>
							<li class="clearfix">
								<div class="post-block-style post-float clearfix">
									<div class="post-thumb">
										<a href="<?php the_permalink(); ?>">
											<img class="img-fluid" src="<?php echo get_field( 'image' )['url'] ?>" alt="" style="width:70px"/>
										</a>
										<a class="post-cat" href="#"><?php echo pll__( 'Press Release' ) ?></a>
									</div><!-- Post thumb end -->

									<div class="post-content">
							 			<h2 class="post-title title-small">
							 				<a class="post-title-widget" href="<?php the_permalink(); ?>"><?php echo wp_html_excerpt( get_the_title(), 150, '...' ) ?> </a>
							 			</h2>
							 			<div class="post-meta">
							 				<?php $post_date = get_the_date( 'd-m-Y' ) ?>
								 			<span class="post-date"><i class="fa fa-clock-o"></i><?php echo $post_date ?></span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post block style end -->
							</li><!-- Li 1 end -->
						<?php endwhile ?>	

						</ul><!-- List post end -->
					</div><!-- List post block end -->
				</div><!-- Col 1 end -->
				<!-- Publication -->
				<div class="col-lg-6 col-md-6">
					<div class="list-post-block">
						<ul class="list-post">
						<?php $arg = [
							'post_type' 	=> 'publication',
							'orderby' 		=> 'post_id', 
							'posts_per_page'=>3, 
							'order' 		=> 'DESC', 
						]; 
						?>
            			<?php $publications = new WP_Query($arg) ?>
						<?php while ( $publications->have_posts() ) : $publications->the_post(); ?>
							<li class="clearfix">
								<div class="post-block-style post-float clearfix">
									<div class="post-thumb">
										<a href="<?php the_permalink(); ?>">
											<img class="img-fluid" src="<?php echo get_field( 'image' )['url'] ?>" alt=""  style="width:70px"/>
										</a>
										<a class="post-cat" href="#"><?php echo pll__( 'Publication' ) ?></a>
									</div><!-- Post thumb end -->

									<div class="post-content">
							 			<h2 class="post-title title-small">
							 				<a class="post-title-widget" href="<?php the_permalink(); ?>"><?php echo wp_html_excerpt( get_the_title(), 150, '...' ) ?> </a>
							 			</h2>
							 			<div class="post-meta">
							 				<?php $post_date = get_the_date( 'd-m-Y' ) ?>
								 			<span class="post-date"><i class="fa fa-clock-o"></i><?php echo $post_date ?></span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post block style end -->
							</li><!-- Li 1 end -->
						<?php endwhile ?>	

						</ul><!-- List post end -->
					</div><!-- List post block end -->
				</div><!-- Col 2 end -->
			</div><!-- Row end -->
		</div><!-- Block Lifestyle end -->
	<!-- </div> -->
</section>

<section class="block-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="block color-blue">
					<h3 class="block-title"><span><?php echo pll__('Photo') ?></span></h3>
					<?php

						$post_ids = get_posts(array(
						    'fields'          	=> 'ids',
						    'posts_per_page'  	=> 9,
						    'post_type' 		=> 'photo'
						));
						$images = acf_photo_gallery( 'photo_gallery', $post_ids[0] );
						$j = 0;
					?>
					<?php if ( count($images)) : ?>
						<div class="row" style="padding-left: 16px;padding-right: 16px;">
						<?php foreach ( $images as $image ) : ?>
							<?php if ($j == 6) continue; ?>
							<div class="col-md-4" style="padding: 0">
					      		<div class="post-block-style clearfix">
									<div class="post-thumb">
										
										<a class="popup" href="<?php echo $image['full_image_url']?>">
					                  		<img class="img-fluid" src="<?php echo $image['full_image_url']?>" alt="<?php echo $image['title'] ?>" />
					            		</a>
								   	</div><!-- Post thumb end -->
								</div><!-- Post Block style end -->
				      		</div><!-- Col 1 end -->
				      		<?php $j++ ?>
						<?php endforeach ?>
						</div>
					<?php endif ?>

				</div><!-- Block end -->
			</div><!-- Travel Col end -->

			<div class="col-lg-6">
				<div class="block color-blue">
					<h3 class="block-title"><span><?php echo pll__('Videos'); ?></span></h3>
					<div id="gallery-video" style="display:none;">
						<?php $arg = [
							'post_type' 	=> 'video', 
							'orderby' 		=> 'post_id', 
							'posts_per_page'=> 8, 
							'order' 		=> 'DESC', ] 
						?>
            			<?php $videos = new WP_Query($arg) ?>
            			<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
							<img alt="<?php the_title() ?>"
							 data-type="youtube"
							 data-videoid="<?php the_field( 'video' ) ?>"
							 data-description="<?php the_title() ?>">
						<?php endwhile ?>	 
					</div>
				</div><!-- Block end -->
			</div><!-- Gadget Col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 2nd block end -->

<div class="gap-20"></div>

<?php
  get_footer();
