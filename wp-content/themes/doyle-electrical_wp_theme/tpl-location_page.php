<?php
/**
 * Template Name: Common Location Page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); 
?>
<div class="internal-banner position-relative tb-equal landing_banner">
		<div class="container">
			<div class="row justify-content-around">

				<div class="col-lg-5 col-md-5 mt-30 xs-sm-mt-none">
					<?php 
						while(have_posts()): the_post();
							the_content();
						endwhile;
					?>
				</div> 

				<div class="col-lg-5 col-md-6 col-sm-10 col-11 ml-auto xxs-mlnone position-relative xs-mt-40">
					<div class="fix-toprectangle"></div>
				<?php 
				echo do_shortcode('[contact-form-7 id="126" title="Location Contact Form"]'); 
				?>

				</div>

			</div>
		</div>
		<a class="circle_btn" href="#"><i class="fa fa-angle-down"></i></a>
		<img src="<?php echo get_template_directory_uri(); ?>/img/landing_banner_shape-bottom.png" class="img-responsive" style="position: absolute; bottom: 0px; left: 0; right: 0; margin: auto; width:100%;">
	</div> 

	<section class="position-relative">
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

	<section class="mt-80 position-relative">
		<div class="container">

			<div class="row justify-content-around">	
				<div class="col-lg-5 col-md-12 h2-uppercase h2span">
					<h2><?php echo get_field('left_image_top_title', $post->ID); ?></h2>
					<div class="mb-20"></div>
					<img src="<?php echo get_field('left_section_image', $post->ID); ?>" class="img-responsive">
				</div>

				<div class="col-lg-6 col-md-12 h2-uppercase h3_400 xs-sm-mt-40">
					<?php echo get_field('right_section_content', $post->ID); ?>
				</div>			
			</div>				
		</div>
	</section>

	<section class="mt-80 position-relative">
		<div class="container-fluid" style="padding: 0px;">

			<div class="row justify-content-around">	

				<div class="col-lg-6 col-md-12" style="padding: 0px;">					
					<img src="<?php echo get_field('second_section_image', $post->ID); ?>" class="img-responsive">
				</div>

				<div class="col-lg-6 col-md-12  h2-uppercase h2span" style="padding: 0px;">
					
					<div class="white_content pr-50">
						<?php echo get_field('second_section_content', $post->ID); ?>
					</div>

				</div>			

			</div>				
		</div>
	</section>

	<section class="mt-80 position-relative">
		<div class="container">

			<div class="row justify-content-around">	

				<div class="col-lg-12 col-md-12 h2-uppercase h2span h3_400 mb-30">
					<?php echo get_field('third_section_content', $post->ID); ?>
				</div>

				<div class="col-lg-6 col-md-12">
					<?php echo get_field('third_section_content', $post->ID); ?>
				</div>

				<div class="col-lg-6 col-md-12 xs-sm-mt-40">
					<img src="<?php echo get_field('third_section_image', $post->ID); ?>img/industrial-85.jpg" class="img-responsive">
				</div>			

			</div>				
		</div>
	</section>

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
					<h2>read our review</h2>
					<div class="mt-10"></div>

					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>				
			</div>

			<div class="row justify-content-center align-items-center mt-50">				
				<div class="col-lg-9 col-md-10 col-sm-8 col-11 text-center">
						<?php echo get_template_part('client', 'review'); ?>
				</div>				
			</div>

		</div>
	</section>

	<section class="mt-80 position-relative">
		<div class="container">

			<div class="row justify-content-center align-items-center">				
				<div class="col-lg-9 col-md-12 text-center h2-uppercase">
					<p style="color: #00b3fe; margin: 0px;">standard dummy text</p>
					<h2>Why Choose us</h2>
					<div class="mt-10"></div>

					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>				
			</div>

			<div class="row justify-content-around column_mb3 mt-50">				
				<?php echo get_template_part('small', 'icon'); ?>
					
				
			</div>			
		</div>
	</section>	
<?php get_footer(); ?>