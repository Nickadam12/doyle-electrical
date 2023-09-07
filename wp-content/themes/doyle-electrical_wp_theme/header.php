<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-4.1.3.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css" />        
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style1.css" />		
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive1.css" />
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="overflow-hidden <?php if(is_front_page()): ''; else: echo 'internal-page'; endif; ?>">
 <div class="menu-mask"></div>
        <!-- MOBILE MENU HOLDER -->
	<div class="mobile-menu-holder">
		<div class="modal-menu-container">
			<div class="exit-mobile"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_close_popup.svg" class="img-responsive" /></div>
				<?php 
					wp_nav_menu( 
							array( 
							'menu' => 'main_menu',
							'container_class' => '',
							'menu_id' => '',
							'container' => '',
							'menu_class'  => 'menu-mobile'
							)
						); 
				?>
		</div>
	</div>
<!-- /Mobile Menu Holder -->
<!-- Header -->
<header class="main-header header-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12 xs-sm-d-flex xs-sm-align-center">
                        <div class="logo">
                            <a href="<?php echo home_url('/'); ?>">
                            	<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" />
                            </a>
                        </div>
						<button type="button" class="nav-button d-none xs-sm-d-flex menu">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_menu.svg" style="width:24px;" />
                        </button>
                    </div>
                    <div class="col-md-9 ml-auto xs-sm-d-none">
                    <nav class="nav-holder d-flex align-items-center justify-content-end">
					<?php 
						wp_nav_menu( 
								array( 
								'menu' => 'main_menu',
								'container_class' => '',
								'menu_id' => 'menu-nav',
								'container' => '',
								'menu_class'  => 'menu-nav'
								)
							); 
					?>
                        <a href="tel:<?php echo clean(get_field('header_phone_number', 7)); ?>" class="btn-green"><i class="fa fa-phone"></i> <?php echo get_field('header_phone_number', 7); ?></a>
                    </nav> 
                    </div>                  
                </div>
            </div>
</header>
<!-- /Header -->