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