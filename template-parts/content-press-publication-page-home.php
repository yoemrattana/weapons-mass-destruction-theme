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
										<a href="<?php echo get_field('pdf')['url']; ?>" target="_blank">
											<img class="img-fluid" src="<?php echo get_field( 'image' )['url'] ?>" alt="" style="width:70px"/>
										</a>
										<a class="post-cat" href="#"><?php echo pll__( 'Press Release' ) ?></a>
									</div><!-- Post thumb end -->

									<div class="post-content press-content">
							 			<h2 class="post-title title-small">
							 				<a class="post-title-widget" href="<?php echo get_field('pdf')['url']; ?>" target="_blank"><?php echo wp_html_excerpt( get_the_title(), 150, '...' ) ?> </a>
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
										<a href="<?php echo get_field('pdf')['url']; ?>" target="_blank">
											<img class="img-fluid" src="<?php echo get_field( 'image' )['url'] ?>" alt=""  style="width:70px"/>
										</a>
										<a class="post-cat" href="#"><?php echo pll__( 'Publication' ) ?></a>
									</div><!-- Post thumb end -->

									<div class="post-content press-content">
							 			<h2 class="post-title title-small">
							 				<a class="post-title-widget" href="<?php echo get_field('pdf')['url']; ?>" target="_blank"><?php echo wp_html_excerpt( get_the_title(), 150, '...' ) ?> </a>
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