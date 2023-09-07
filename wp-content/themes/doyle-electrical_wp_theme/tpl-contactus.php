<?php
/**
 * Template Name: Contact Page
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
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/contact_bg.jpg)no-repeat center bottom;">
<?php endif; ?>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 col-md-8 col-sm-8 col-10 text-center">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
</div>
<section class="mt-80">
		<div class="container">
			<div class="row justify-content-around">
				
				<div class="col-lg-7 col-md-11">
					
					<div class="mb-30">
						<h2 style="font-weight: 400;">Get In Touch</h2>
						<p>Lorem Ipsum is simply dummy text and typesetting industry.</p>
					</div>

					<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form"]'); ?>
				</div>

				<div class="col-lg-4 col-md-11 xs-sm-mt-40">

					<div class="information">

						<h3>More Information</h3>
						<div class="mt-20"></div>
								
						<div class="d-flex info">
							<i class="fa fa-map-marker"></i>
							<?php echo get_field('contact_address', $post->ID); ?>
						</div>
						
						<div class="d-flex info">
							<i class="fa fa-phone"></i>
							<p><strong>Phone Number</strong><br><a class="mailto" href="tel:<?php echo clean(get_field('contact_phone', $post->ID)); ?>"><?php echo get_field('contact_phone', $post->ID); ?></a></p>
						</div>
						
						<div class="d-flex info">
							<i class="fa fa-envelope"></i>
							<p><strong>Email Address</strong><br><a class="mailto" href="mailto:<?php echo get_field('contact_email', $post->ID); ?>"><?php echo get_field('contact_email', $post->ID); ?></a></p>
						</div>
						
					</div>

				</div>

			</div>
		</div>
	</section>

	<section class="mt-80 position-relative">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-10 col-md-11">
					<?php echo get_field('contact_map', $post->ID); ?>
				</div>

			</div>
		</div>
		<img style="position: absolute; right: 0px; bottom: -80px; z-index: -1;" src="img/windo_cartoon.png" class="img-responsive">
	</section>
<?php get_footer(); ?>