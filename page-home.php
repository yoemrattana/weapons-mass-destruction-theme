<?php
/*
    Template Name: Home Page
 * */
define( "DONOTCACHEPAGE", true ); 
get_header(); 
?>
<!-- slideshow -->
<?php get_template_part( 'template-parts/content-slideshow-page-home', 'page-home' ); ?>

<div class="gap-20"></div>

<!-- news -->
<?php get_template_part( 'template-parts/content-news-page-home', 'page-home' ); ?>

<!-- press-release and publication -->
<?php get_template_part( 'template-parts/content-press-publication-page-home', 'page-home' ); ?>

<section class="block-wrapper">
	<div class="container">
		<div class="row">

			<!-- photo -->
			<?php get_template_part( 'template-parts/content-photo-page-home', 'page-home' ); ?>

			<!-- video -->
			<?php get_template_part( 'template-parts/content-video-page-home', 'page-home' ); ?>

		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 2nd block end -->

<div class="gap-20"></div>

<?php
  get_footer();
