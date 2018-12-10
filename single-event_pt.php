<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package news
 */

get_header();
?>
	<section class="block-wrapper no-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">					
					<div class="single-post">						
						<div class="post-title-area">
							<a class="post-cat" href="<?php echo home_url( '/events' ) ?>"><?php echo pll__('Event') ?></a>
							<h2 class="post-title">
				 				<?php the_title() ?>
				 			</h2>
				 			<div class="post-meta">
								<!-- <span class="post-author">
									By <a href="#">John Doe</a>
								</span> -->
								<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								
								<span class="post-date"><i class="fa fa-clock-o"></i> <?php echo $post_date ?></span>
								<!-- <span class="post-hits"><i class="fa fa-eye"></i> 21</span>
								<span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span>01</span></a></span> -->
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="post-media post-featured-image">
								<a href="<?php echo  get_field('image')['url']?>" class="gallery-popup"><img src="<?php echo  get_field('image')['url']?>" class="img-fluid" alt=""></a>
							</div>
							<div class="entry-content">
								
								<?php echo get_field('description') ?>
							</div><!-- Entery content end -->
							
						</div><!-- post-content end -->

					</div><!-- Single post end -->
					<div class="gap-20"></div>
					<h3 class="post-title"><?php echo pll__( 'Photo' ) ?></h3>
					<?php
					    //Get the images ids from the post_metadata
					    $images = acf_photo_gallery('gallery', $post->ID);
					    //Check if return array has anything in it
					    if( count($images) ):
					    	echo '<div id="gallery-photo" style="display:none;">';
					        //Cool, we got some data so now let's loop over it
					        foreach($images as $image):
					            $id = $image['id']; // The attachment id of the media
					            $title = $image['title']; //The title
					            $caption= $image['caption']; //The caption
					            $full_image_url= $image['full_image_url']; //Full size image url
					            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
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
					<div class="gap-20"></div>
					<h3 class="post-title"><?php echo pll__( 'Videos' ) ?></h3>
					<div class="single-video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('video') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div><!-- Content Col end -->


				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">
						<?php get_template_part( 'template-parts/widget-news', 'page-international-news' ); ?>
						<div class="gap-20"></div>
						<?php get_template_part( 'template-parts/widget-event', 'page-international-news' ); ?>
						<div class="gap-20"></div>
						<?php get_template_part( 'template-parts/widget-facebook', 'page-international-news' ); ?>
					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

<?php
get_footer();
