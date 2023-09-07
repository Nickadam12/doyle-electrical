<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/blog_bg.jpg)no-repeat center bottom;">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-md-8 col-sm-8 col-10 text-center">
				<h2>
					<?php
					printf(
						/* translators: %s: Search term. */
						esc_html__( 'Results for "%s"', 'twentytwentyone' ),
						'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
					);
					?>
				</h2>
			</div>
		</div>
	</div>
</div>
<section class="mt-80">
	<div class="container">
		<div class="row justify-content-center">
			<?php 
				if ( have_posts() ) {
			?>
			<div class="col-lg-8 col-md-12">
				<?php
					while ( have_posts() ) {
						the_post();

						get_template_part( 'template-parts/content/content', 'excerpt' );
					}
					// Previous/next page navigation.
					twenty_twenty_one_the_posts_navigation();
				?>
				<!--<ul class="d-flex justify-content-center nav_blog">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				</ul>-->
			</div>
			<div class="col-lg-4 col-md-12 ml-auto xs-sm-mt-40">
				<?php get_sidebar(); ?>
			</div>
			<?php } else { ?>
					<h2>No Post Found!!</h2>
			<?php } ?>
		</div>
	</div>
</section>
<?php
get_footer();
?>