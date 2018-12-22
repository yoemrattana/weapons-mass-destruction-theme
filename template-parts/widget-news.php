<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package news
 */
$arg = [
	'post_type' 		=> 'news_pt',
	'orderby' 			=> 'post_id', 
	'posts_per_page'	=> 8, 
	'order' 			=> 'DESC'
]; 
$news = new WP_Query($arg);

?>

<div class="widget color-blue">
	<h3 class="block-title"><span><?php echo pll__('Latest') ?></span></h3>
	<div class="list-post-block">
		<ul class="list-post review-post-list">
			<?php while ( $news->have_posts() ) : $news->the_post(); ?>
				<li class="clearfix">
					<div class="post-block-style post-float clearfix">
						<div class="post-thumb">
							<a href="<?php the_permalink(); ?>">
								<img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="<?php the_title() ?>" />
							</a>
						</div><!-- Post thumb end -->
						<div class="post-content">
				 			<h2 class="post-title">
				 				<a class="post-title-widget" href="<?php the_permalink(); ?>"><?php echo wp_html_excerpt( get_the_title(), 70, '...' ); ?></a>
				 			</h2>								 			
			 			</div><!-- Post content end -->
					</div><!-- Post block style end -->
				</li><!-- Li 1 end -->
				
			<?php endwhile; ?>
		</ul><!-- List post end -->
	</div><!-- List post block end -->
</div>