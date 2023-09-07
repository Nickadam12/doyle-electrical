<div class="pl-30 right_bar">

<h3>Search</h3>
<form action="<?php echo home_url('/'); ?>" method="get">
<input type="text" name="s" class="form-control search" placeholder="Search here">
</form>
<h3>Popular Post</h3>
<?php 
	query_posts( 'posts_per_page=5' );
	while(have_posts()): the_post();
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
?>
<div class="d-flex ppost">
<figure>
<?php
if(has_post_thumbnail()):
?>
<img src="<?php echo $thumbnail[0]; ?>" class="img-responsive mb-20">
<?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/post-sb1.jpg" class="img-responsive">
<?php endif; ?>
</figure>
<div>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<span><?php the_author(); ?> | <?php the_time('F j, Y')?></span>
</div>
</div>
<?php endwhile; ?>

<h3>Categories</h3>
<?php 
$terms = get_terms('category',array('hide_empty' => false)); 
	if ( !empty( $terms ) && !is_wp_error( $terms ) ){ 
	echo '<ul class="categories">'; 
		foreach ( $terms as $term ) { 
		$term = sanitize_term( $term, 'category' ); 
		$term_link = get_term_link( $term, 'category' ); 

		echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>'; 
	} 
	echo '</ul>';
}
?> 
</div>