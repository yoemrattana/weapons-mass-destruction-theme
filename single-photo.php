<?php
/*
    Template Name: Photo Page
 * */
get_header();
$single_photo_id = $post->ID;	
 $arg = [
	'post_type' 		=> 'photo',
	'orderby' 			=> 'post_id', 
	'posts_per_page'	=> -1, 
	'order' 			=> 'DESC'
];

$photos = new WP_Query($arg);

?>

<div class="gap-20"></div>
<section class="block-wrapper p-bottom-0 no-padding">
	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-sm-12">
				<div class="sidebar sidebar-right">
					<div class="widget color-red">
						<h3 class="block-title"><span><?php echo pll__('Category') ?></span></h3>
						<div class="card">
							<div class="body-card">
								<div class="cat-photo">
									<ul class="list-arrow">
									<li><a href="<?php echo home_url( '/photos' ) ?>" class="active"><?php echo pll__( 'All Photos' ) ?></a></li>
									<?php while ( $photos->have_posts() ) : $photos->the_post(); ?>
										<li <?php echo get_the_ID() == $single_photo_id? 'class="active-cat-photo"' : '' ?>><a href="<?php the_permalink(); ?>"><?php echo wp_html_excerpt( get_the_title(), 40, '...' ); ?></a></li>
									<?php endwhile ?>
								</ul>
								</div>	
							</div>
						</div><!-- List post block end -->
					</div><!-- Latest Review Widget end -->
				</div><!--Sidebar right end -->
			</div><!-- Sidebar col end -->

			<div class="col-lg-8 col-md-12">
				<div class="more-news block color-red">
					<h3 class="block-title">
						<span><?php echo pll__('Photos') ?></span>
					</h3>
					<div class="gallery-title">
						<h3><?php the_title() ?></h3>
					</div>
					<div id="more-news-slide" class="owl-carousel1 owl-theme1 more-news-slide1">
            			
					<?php
					    $images = acf_photo_gallery( 'photo_gallery', $single_photo_id );
					    if( count($images) ):
					    	echo '<div id="gallery" style="display:none;">';
					        //Cool, we got some data so now let's loop over it
					        foreach($images as $image):
					            $id = $image['id']; // The attachment id of the media
					            $title = $image['title']; //The title
					            $caption= $image['caption']; //The caption
					            $full_image_url= $image['full_image_url']; //Full size image url
					            //$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
					            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
					            $url= $image['url']; //Goto any link when clicked
					            $target= $image['target']; //Open normal or new tab
					            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
					            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
					?>
						<a href="http://unitegallery.net">
							<img alt="<?php echo $title ?>"
							    src="<?php echo $full_image_url ?>"
							    data-image="<?php echo $full_image_url ?>"
							    data-description="<?php echo $caption ?>"
							    style="display:none">
						</a>
					
					<?php endforeach; echo '</div>';endif; ?>
					
					</div><!-- More news carousel end -->
				</div><!--More news block end -->				
			</div><!-- Content Col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 3rd block end -->

<div class="gap-30"></div>

<?php
  get_footer();