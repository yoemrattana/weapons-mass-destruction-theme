<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package news
 */

get_header();
?>

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				
				<div class="error-page text-center col">
					<div class="error-code">
						<h2><strong>404</strong></h2>
					</div>
					<div class="error-message">
						<h3>Oops... Page Not Found!</h3>
					</div>
					<div class="error-body">
						Try using the button below to go to main page of the site <br>
						<a href="<?php echo home_url( '/' ) ?>" class="btn btn-primary">Back to Home Page</a>
					</div>
				</div>

			</div><!-- Row end -->


		</div><!-- Container end -->
	</section><!-- First block end -->

<?php
get_footer();
