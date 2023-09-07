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
$top_banner = get_field('top_banner', $post->ID);
if(! empty($top_banner)): 
?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo $top_banner; ?>)no-repeat center bottom;">
<?php else: ?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/about_bg.jpg)no-repeat center bottom;">
<?php endif; ?>
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-lg-6 col-md-8 col-sm-8 col-10 text-center">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
</div>
</div>
<div class="tb-equal pb-none">
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="col-lg-12 col-md-12">
			<div class="text-center xs-p30">
				<?php 
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</div>
</div>
<?php
get_footer();
?>
