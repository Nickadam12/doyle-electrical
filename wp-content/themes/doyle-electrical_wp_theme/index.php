<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/blog_bg.jpg)no-repeat center bottom;">

<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-lg-6 col-md-8 col-sm-8 col-10 text-center">
			<h2>Our Blog</h2>
		</div>
	</div>
</div>
</div>
<section class="mt-80">
		<div class="container">
			<div class="row justify-content-center">
				
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

			</div>
		</div>
</section>	
<?php
get_footer();
?>