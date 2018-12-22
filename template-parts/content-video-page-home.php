<?php $arg = [
	'post_type' 	=> 'video', 
	'orderby' 		=> 'post_id', 
	'posts_per_page'=> 8, 
	'order' 		=> 'DESC', ] 
?>
<?php $videos = new WP_Query($arg) ?>

<div class="col-lg-6">
	<div class="block color-blue">
		<h3 class="block-title"><span><?php echo pll__('Videos'); ?></span></h3>
		<div class="row" style="margin: 0">
			<div class="fotorama" 
				data-width="700" 
				data-ratio="700/426" 
				data-max-width="100%"
				data-nav="thumbs"
			>

				<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
					<a href="https://www.youtube.com/watch?v=<?php the_field( 'video' ) ?>" data-video="true">
						<img src="<?php echo  get_field('image')['url']?>">
					</a>
				<?php endwhile ?>	 
			</div>
		</div>
	</div><!-- Block end -->
</div><!-- Gadget Col end -->