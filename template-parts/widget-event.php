<div class="widget color-default">
	<h3 class="block-title"><span><?php echo pll__('Event') ?></span></h3>

	<div id="post-slide" class="owl-carousel owl-theme post-slide">
		<?php $arg = [
			'post_type' 		=> 'event_pt',
			'orderby' 			=> 'post_id', 
			'posts_per_page'	=> 8, 
			'order' 			=> 'DESC', 
			'paged' 			=> $paged ]; 
		?>
		<?php $events = new WP_Query($arg) ?>
		<?php while ( $events->have_posts() ) : $events->the_post(); ?>
			<div class="item">
				<div class="post-overaly-style text-center clearfix">
				   <div class="post-thumb">
				      <a href="<?php the_permalink(); ?>">
				         <img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="<?php the_title() ?>" />
				      </a>
				   </div><!-- Post thumb end -->
				   <div class="post-content">
				      <!-- <a class="post-cat" href="#">Gadgets</a> -->
				      <h2 class="post-title">
				         <a href="<?php the_permalink(); ?>"><?php echo wp_html_excerpt( get_the_title(), 150, '...' ); ?></a>
				      </h2>
				      <div class="post-meta">
				      	<?php $post_date = get_the_date( 'l F j, Y' ) ?>
				 		<span class="post-date"><?php echo $post_date ?></span>  
				      </div>
				   </div><!-- Post content end -->
				</div><!-- Post Overaly Article 1 end -->
			</div><!-- Item 1 end -->
		<?php endwhile ?>
	</div><!-- Post slide carousel end -->

</div><!-- Trending news end -->