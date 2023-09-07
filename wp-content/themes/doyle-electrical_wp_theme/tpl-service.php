<?php
/**
 * Template Name: Service Page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); 
$top_banner = get_field('top_banner', $post->ID);
if(! empty($top_banner)): 
?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo $top_banner; ?>)no-repeat center bottom;">
<?php else: ?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/service_bg.jpg)no-repeat center bottom;">
<?php endif; ?>
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-md-8 col-sm-10 col-10 text-center">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>
<?php 
	$args214 = array(
		'post_type' => 'doyle_service',
		'order'=> 'DESC',
		'posts_per_page' =>-1,
	); 
	$loop214 = new WP_Query($args214);
	$i=1;
	while($loop214->have_posts()) : $loop214->the_post();
	$tp_equal = ($i%2==0)? 'tb-equal' : '';
	$black_box = ($i%2==0)? 'black-box' : '';
	$white = ($i%2==0)? 'white' : '';
	$order = ($i%2==0)? 'order-2 xs-sm-order-none h2_themec dark_platform' : '';
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
?>
<section class="mt-80 position-relative <?php echo $tp_equal; ?> <?php echo $black_box; ?>">
	<div class="container">
		<div class="row justify-content-around">	
			<div class="col-lg-6 col-md-12 h2-uppercase <?php echo $order; ?>">
				<h2><?php the_title(); ?></h2>
				<div class="mt-10"></div>
				<?php the_content(); ?>
			</div>
			<div class="col-lg-5 col-md-12 xs-sm-mt-40">
				<div class="position-relative"><div class="fixnumer <?php echo $white; ?>">0<?php echo $i; ?></div>
				<img src="<?php echo $thumbnail[0]; ?>" class="img-responsive"></div>
			</div>
		</div>				
	</div>
</section>
<?php $i++; endwhile; wp_reset_postdata(); ?>	
<section class="position-relative mt-150">
	<div class="container">			
		<div class="d-flex flex-wrap justify-content-around align-items-center col-we_are cta" style="background:#252525; padding: 50px; position: relative;">			
			<?php echo get_template_part('common', 'cta'); ?>
		</div>			
	</div>
</section>
<section class="mt-80 position-relative">
	<div class="container">
		<div class="row justify-content-center align-items-center">				
			<div class="col-lg-6 col-md-12 text-center h2-uppercase">
				<p style="color: #00b3fe; margin: 0px;">standard dummy text</p>
				<h2>Our Recent Work</h2>
				<div class="mt-10"></div>

				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>				
		</div>
		<div class="row justify-content-around mt-40 column_mb3">
			<?php 
				$args214 = array(
					'post_type' => 'doyle_recent_work',
					'order'=> 'DESC',
					'posts_per_page' =>-1,
				); 
				$loop214 = new WP_Query($args214);
				while($loop214->have_posts()) : $loop214->the_post();
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
			?>  
			<div class="col-lg-4 col-md-12">
				<img src="<?php echo $thumbnail[0]; ?>" class="img-responsive">
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
		</div>			
	</div>
</section>
<?php get_footer(); ?>