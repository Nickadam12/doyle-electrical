<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer class="position-relative mt-80 bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/footer_bg.jpg)no-repeat center; padding-top:80px;">
	<div class="container">
		<div class="row justify-content-around">
			<div class="col-lg-4 col-md-12 col-11 ulink xs-sm-mb-40">
				<h4>Our Story</h4>
				<div class="mt-20"></div>
				<?php echo get_field('our_story_content', 7); ?>	                
			</div>
			<div class="col-lg-2 col-md-3 col-11 ulink xs-mt-40">
				<h4>Quick Links</h4>
				<div class="mt-20"></div>
				<ul>
					<li><a href="index.html">Home</a></li>                  
					<li><a href="services.html">Our Services</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-5 col-11 ulink">
				<h4>Our Location</h4>
				<div class="mt-20"></div>
					<div class="text-left info_adderss">
						<span class="fa fa-map-marker"></span>
						 <p><?php echo get_field('footer_address', 7); ?></p>
					</div>
				<div class="text-left info_adderss">
					<span class="fa fa-envelope"></span>
					<a href="mailto:<?php echo get_field('footer_email', 7); ?>"> <?php echo get_field('footer_email', 7); ?></a>
				</div>
				<div class="text-left info_adderss">
					<span class="fa fa-phone"></span>
					<a href="tel:<?php echo clean(get_field('footer_phone', 7)); ?>"><?php echo get_field('footer_phone', 7); ?></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-11 ulink">
				<h4>Follow Us</h4>
				<div class="mt-20"></div>
				<ul class="social_info">
					<li>
						<a href="<?php echo get_field('facebook_url', 7); ?>" target="_balnk"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" class="img-responsive"></a>
						<p>find us on facebook</p>
					</li>
					<li>
						<a href="<?php echo get_field('instagram_url', 7); ?>" target="_balnk"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" class="img-responsive"></a>
						<p>find us on instagam</p>
					</li>
				</ul>
			</div>	            
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 text-center">
					<p>Copyright © 2023. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
	
</div>

<?php wp_footer(); ?>	
	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script-all1.js"></script>
</body>
</html>
