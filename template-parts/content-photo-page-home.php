<?php
	$post_ids = get_posts(array(
	    'fields'          	=> 'ids',
	    'posts_per_page'  	=> 9,
	    'post_type' 		=> 'photo'
	));
	$images = acf_photo_gallery( 'photo_gallery', $post_ids[0] );	
?>

<div class="col-lg-6">
	<div class="block color-blue">
		<h3 class="block-title"><span><?php echo pll__('Photo') ?></span></h3>
		<?php if ( count($images)) : ?>
			<div class="row" style="padding-left: 16px;padding-right: 16px; padding-bottom: 16px">
				<div class="fotorama"
				    data-autoplay="true"
				    data-width="700"
				    data-ratio="3/2"
				    data-max-width="100%"
				    data-nav="thumbs">
					<?php foreach ( $images as $image ) : ?>						
						<a href="<?php echo $image['full_image_url']?>"></a>		
					<?php endforeach ?>
				</div>
			</div>
		<?php endif ?>
	</div><!-- Block end -->
</div><!-- Travel Col end -->