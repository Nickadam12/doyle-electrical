<?php
/**
 * Template Name: Area We Serve Page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); 
$top_banner= get_field('top_banner', $post->ID);
if(! empty($top_banner)): 
?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo $top_banner; ?>)no-repeat center bottom;">
<?php else: ?>
<div class="internal-banner tb-equal bg-cover" style="background:#000 url(<?php echo get_template_directory_uri(); ?>/img/area_serve_bg.jpg)no-repeat center bottom;">
<?php endif; ?>
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 col-md-8 col-sm-10 col-10 text-center">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>
<div class="mt-80">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-10 col-md-11">
				<div class="text-center">
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
		<div class="row justify-content-around">				
			<div class="col-lg-12 col-md-12">
				<div class="we_serve">	
					<ul class="nav d-flex mb-50" id="myTab" role="tablist">
						<?php 
							$args = get_terms([
								'hide_empty' => false,
								 'order'      =>  'ASC',
							]);
							$terms = get_terms('area_type', $args);
							if ( true === is_array( $terms ) ) {
							$i=1;
							foreach ($terms as $term) {
							$active = ($i==1)? 'active' : '';
						?>
						<li class="nav-item" role="presentation">
							<button class="nav-link <?php echo $active; ?>" id="home-tab" data-toggle="tab" data-target="#serve_type_<?php echo $i; ?>" type="button" role="tab" aria-controls="home" aria-selected="true"><?php echo esc_html( $term->name ); ?></button>
						</li>
						<?php 
							$i++; } }
						?>	
					</ul>
		<div class="tab-content" id="myTabContent">
						<?php 
							$args = get_terms([
								'hide_empty' => false,
								 'order'      =>  'ASC',
								]);
							$terms = get_terms('area_type', $args);
							if ( true === is_array( $terms ) ) {
							$j=1;
							foreach ($terms as $term) {
							$active_tab = ($j==1)? 'show active' : '';
						?>
					
						<div class="tab-pane fade <?php echo $active_tab; ?>" id="serve_type_<?php echo $j; ?>" role="tabpanel" aria-labelledby="home-tab">
							<?php 
								$args214 = array(
									'post_type' => 'doyle_serve',
									'order'=> 'DESC',
									'posts_per_page' =>-1,
									'tax_query' => array(
												array(
												'taxonomy'  => 'area_type',
												'field'     => 'ID',
												'terms'     => array($term->term_id),
									))
								); 
								$loop214 = new WP_Query($args214);
								while($loop214->have_posts()) : $loop214->the_post();
									the_content();
								endwhile; wp_reset_postdata();
							?>
						</div>
						<?php 
							$j++; 
							}  } 
						?> 
					</div>
				</div>
			</div>			
		</div>			
	</div>
</section>
<?php get_footer(); ?>