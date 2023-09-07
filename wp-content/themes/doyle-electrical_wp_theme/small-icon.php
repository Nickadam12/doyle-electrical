<?php 
	$args214 = array(
		'post_type' => 'doyle_icon',
		'order'=> 'DESC',
		'posts_per_page' =>-1,
	); 
	$loop214 = new WP_Query($args214);
	while($loop214->have_posts()) : $loop214->the_post();
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
?> 
<div class="col-lg-3 col-md-6 col-sm-6 col-11">
	<div class="d-flex services">	
		<span><img src="<?php echo $thumbnail[0]; ?>"></span>
			<div>					
				<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
			</div>
	</div>
</div>
<?php endwhile; wp_reset_postdata(); ?>