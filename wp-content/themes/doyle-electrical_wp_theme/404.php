<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/about_bg.jpg)no-repeat center bottom;">
<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 col-md-8 col-sm-8 col-10 text-center">
					<h2><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h2>
				</div>
			</div>
		</div>
</div>
<div class="tb-equal pb-none">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12 col-md-12">
					<div class="text-center xs-p30" style="border:5px solid #00b3fe; padding:50px;">
						<h2><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></h2>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
get_footer();
?>