<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/singl_bg.jpg)no-repeat center bottom;">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-md-8 col-sm-8 col-10 text-center">
				<h2>Single Blog</h2>
			</div>
		</div>
	</div>
</div>
<section class="mt-80">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12">
				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content-single' );
					the_post_navigation(
						array(
							'prev_text' => '<span class="screen-reader-text1 pagination_prev_txt">' . __( '&larr; Prev', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( '', 'twentyseventeen' ) . '</span>',
							'next_text' => '<span class="screen-reader-text1 pagination_next_txt">' . __( 'Next &rarr;', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( '', 'twentyseventeen' ) . '</span>',
						)
					);
					endwhile;
				?>
				<!--<div class="d-flex justify-content-between">						
					<a class="tel_us" href="#">Prev</a>
					<a class="tel_us" href="#">Next</a>
				</div>-->
			</div>
			<div class="col-lg-4 col-md-12 ml-auto xs-sm-mt-40">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>	
<?php
get_footer();
?>