<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
?>
<div class="blog_left">
	<?php
		if(has_post_thumbnail()):
	?>
		<img src="<?php echo $thumbnail[0]; ?>" class="img-responsive mb-20">
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/post1.png mb-20" class="img-responsive">
	<?php endif; ?>

	<p class="date"><?php the_author(); ?>   |   Jan 26, 2023 </p>
	<h3><?php the_title(); ?></h3>
	<div class="mt-10"></div>
	<?php the_excerpt(); ?>

	<div class="mt-30"></div>
	<a class="tel_us" href="<?php the_permalink(); ?>">Read More</a>
</div>