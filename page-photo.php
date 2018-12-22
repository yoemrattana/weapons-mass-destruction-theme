<?php
/*
    Template Name: Photo Page
 * */
 get_header();

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
					<div class="widget color-blue">
						<h3 class="block-title"><span><?php echo pll__('Category') ?></span></h3>
						<div class="card">
							<div class="body-card">
								<div class="cat-photo">
									<ul class="list-round">
									<li class="active-cat-photo"><a href="<?php echo home_url( '/photos' ) ?>" ><?php echo pll__( 'All Photos' ) ?></a></li>
									<?php while ( $photos->have_posts() ) : $photos->the_post(); ?>
										<li><a href="<?php the_permalink(); ?>"><?php echo wp_html_excerpt( get_the_title(), 40, '...' ); ?></a></li>
									<?php endwhile ?>
								</ul>
								</div>	
							</div>
						</div><!-- List post block end -->
					</div><!-- Latest Review Widget end -->
				</div><!--Sidebar right end -->
			</div><!-- Sidebar col end -->

			<div class="col-lg-8 col-md-12">
				<div class="more-news block color-blue">
					<h3 class="block-title">
						<span><?php echo pll__('Photos') ?></span>
					</h3>
					<div id="more-news-slide" class="owl-carousel1 owl-theme1 more-news-slide1">
            			
						<?php
						$post_ids = get_posts(array(
						    'fields'          	=> 'ids',
						    'posts_per_page'  	=> -1,
						    'post_type' 		=> 'photo'
						));
						$tmp = [];
						$images = [];
						$i = 0;
						foreach ( $post_ids as $post_id ) {
							$tmp[] = acf_photo_gallery( 'photo_gallery', $post_id );
							$v = [];
							$v=$tmp;
							if ($i == 1) {
								$v = array_merge($tmp[$i-1], $tmp[$i]);
							} else if ( $i > 1 ) {
								$v = array_merge($images, $tmp[$i]);
							}
							$images = $v;
							$i++;
						}
						// $tmp = array_merge($tmp);
						
						//var_dump($images);
						// $post_id = get_the_ID();
					 //    //Get the images ids from the post_metadata
					 //    $images1 = acf_photo_gallery( 'photo_gallery', 108 );
					 //    $images2 = acf_photo_gallery( 'photo_gallery', 107 );
					 //    $images3 = acf_photo_gallery( 'photo_gallery', 114 );
					 //    $images = array_merge($images1, $images2, $images3);
					    //var_dump($images);
					    //Check if return array has anything in it
					    if( count($images) ):
					    	echo '<div id="gallery-photo" style="display:none;">';
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
					
					<?php endforeach; 
						echo '</div>';
					endif; ?>
					
					</div><!-- More news carousel end -->
				</div><!--More news block end -->
			
				
			</div><!-- Content Col end -->

			
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 3rd block end -->

<div class="gap-30"></div>

<?php
  get_footer();