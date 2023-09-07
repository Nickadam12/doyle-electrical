<div class="testimonail owl-carousel owl-theme">
	<?php 
	$args214 = array(
		'post_type' => 'doyle_review',
		'order'=> 'DESC',
		'posts_per_page' =>-1,
	); 
	$loop214 = new WP_Query($args214);
	while($loop214->have_posts()) : $loop214->the_post();
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
?> 
<div>
	<h3><?php the_title(); ?></h3>
	<div class="mt-10"></div>
		<?php the_content(); ?>
	<div class="d-flex flex-wrap align-items-center justify-content-center mt-40 text-left" style="gap:25px;">
		<img src="<?php echo $thumbnail[0]; ?>" style="width:auto;">
		<div class="starz xxs-t-center">
			<div class="d-flex align-items-center" style="gap:10px;">
				<h4>5 Star Rating</h4>
				<div class="d-flex starzi" style="gap:5px;">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
			</div>
			<small>Read Our <a href="#">22 Reviews</a></small>
		</div>
	</div>
</div><!-- 1 -->
<?php endwhile; wp_reset_postdata(); ?>
</div>