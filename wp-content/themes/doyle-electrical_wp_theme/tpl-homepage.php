<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

	<div class="internal-banner xs-sm-mt-40">
		<div class="container-fluid" style="padding:0px; max-width: 100%;">
			<div class="row align-items-center xs-sm-justify-center">
				
				<div class="col-lg-8 col-md-12 col-sm-10 order-2 xs-sm-mt-40">
					<div class="home_slider owl-carousel owl-theme">
					 <?php 
						$args214 = array(
							'post_type' => 'doyle_slider',
							'order'=> 'DESC',
							'posts_per_page' =>-1,
						); 
						$loop214 = new WP_Query($args214);
						while($loop214->have_posts()) : $loop214->the_post();
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
					?> 
						<figure><img src="<?php echo $thumbnail[0]; ?>" class="img-responsive"></figure>
					 <?php endwhile; wp_reset_postdata(); ?>	
					</div>
				</div>

				<div class="col-lg-3 col-md-8 col-sm-8 col-10 offset-1 xs-sm-t-center">
					<?php 
						echo get_field('slider_content', $post->ID);
					?>
					<div class="mt-30"></div>					
					<a class="tel_us" href="<?php echo get_permalink(9); ?>">Get in touch</a>
				</div>			

			</div>
		</div>
	</div>
<section class="mt-50 position-relative">
		<div class="container">			
			<div class="row justify-content-around column_mb3">				
				<?php echo get_template_part('small', 'icon'); ?>
				
			</div>			
		</div>
	</section>
<<section class="position-relative mt-80">
		<div class="container">
			
			<div class="row justify-content-end align-items-center">				
				<div class="col-lg-12 col-md-12 text-center text-uppercase">
					<h2>about Doyle’s Electrical Services</h2>
				</div>				
			</div>
			
			<div class="row align-items-center mt-50">				
				<div class="col-lg-6 col-md-12 order-2 pl-50 xs-sm-mt-40">
					<div class="author_box1">
						<?php 
							while(have_posts()): the_post(); 
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
							the_content();
						?>
						

					</div>
				</div>

				<div class="col-lg-6 col-md-12">
					<img src="<?php echo $thumbnail[0]; ?>" class="img-responsive">
				</div>
				<?php endwhile; ?>				
			</div>

		</div>
	</section>
<section class="mt-80 tb-equal position-relative half-light">
		<div class="container">
			
			<div class="row justify-content-end align-items-center">				
				<div class="col-lg-12 col-md-12 text-center text-uppercase">
					<p style="margin:0px; color:#00b3fe;">standard dummy text</p>
					<h2>Our Services</h2>
				</div>				
			</div>
			
			<div class="row justify-content-center mt-50">

				<?php 
					$args214 = array(
						'post_type' => 'doyle_service',
						'order'=> 'DESC',
						'posts_per_page' =>-1,
					); 
					$loop214 = new WP_Query($args214);
					while($loop214->have_posts()) : $loop214->the_post();
					$thumnail_image = get_field('thumnail_image', $post->ID);
					$small_content = get_field('small_content', $post->ID);
				?>
				<div class="col-lg-4 col-md-12">
					<div class="author_box">
						<img src="<?php echo $thumnail_image; ?>" class="img-responsive">
						<h3><?php the_title(); ?></h3>
						<div class="mt-10"></div>
						<?php echo $small_content; ?>
					</div>
				</div>
		<?php endwhile; wp_reset_postdata(); ?>
				
			</div>

			<div class="row justify-content-center mt-50">
				<a class="btn-green" href="#">Get More Details</a>
			</div>

		</div>
	</section>
<section class="position-relative">
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
					<h2>Our recent work</h2>
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
<section class="mt-80 position-relative">
		<div class="container">

			<div class="row justify-content-center align-items-center">				
				<div class="col-lg-6 col-md-12 text-center h2-uppercase">
					<h2>Read our reviews</h2>
					<div class="mt-10"></div>

					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>				
			</div>

			<div class="row justify-content-center align-items-center mt-50">				
				<div class="col-lg-9 col-md-12 col-sm-8 col-11 text-center">
				<?php echo get_template_part('client', 'review'); ?>
					
				</div>				
			</div>

		</div>
	</section>
	
<?php
get_footer();
?>