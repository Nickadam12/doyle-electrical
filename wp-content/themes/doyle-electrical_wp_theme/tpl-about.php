<?php
/**
 * Template Name: About Page
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
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/about_bg.jpg)no-repeat center bottom;">
<?php endif; ?>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 col-md-8 col-sm-8 col-10 text-center">
					<h2><strong>About</strong> Us</h2>
				</div>
			</div>
		</div>
</div>
<div class="mt-80">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-11 col-md-11">
					<div class="text-center xs-p30" style="border:5px solid #00b3fe; padding:50px;">
						<?php 
							while(have_posts()): the_post();
								the_content();
							endwhile;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<section class="mt-80 position-relative">
		<div class="container">

			<div class="row justify-content-center align-items-center">				
				<div class="col-lg-8 col-md-12 text-center h2-uppercase">
					<p style="color: #00b3fe; margin: 0px;">standard dummy text</p>
					<h2>Why choose us</h2>
					<div class="mt-10"></div>

					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>				
			</div>

			<div class="row justify-content-around column_mb3 mt-50">				
				
				<?php echo get_template_part('small', 'icon'); ?>	
				
			</div>			
		</div>
	</section>

<section class="position-relative mt-80">
		<div class="container">			
			<div class="d-flex flex-wrap justify-content-around align-items-center col-we_are cta" style="background:#252525; padding: 50px; position: relative;">			
				
				<?php echo get_template_part('common', 'cta'); ?>
				
			</div>			
		</div>
	</section>	
	
	<section class="mt-80 position-relative">
		<div class="container">

			<div class="row justify-content-around align-items-center">	

				<div class="col-lg-6 col-md-12 h2-uppercase h3_400">
					
					<?php 
						echo get_field('right_content', $post->ID);
					?>
					
				</div>

				<div class="col-lg-5 col-md-12 xs-sm-mt-40">
					<img src="<?php echo get_field('left_image', $post->ID); ?>" class="img-responsive">
				</div>

			</div>				
		</div>
	</section>

	<section class="mt-80 position-relative">
		<div class="container">

			<div class="row justify-content-center align-items-center">				
				<div class="col-lg-6 col-md-12 text-center h2-uppercase">
					<h2>Our recent work</h2>
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
<?php get_footer(); ?>