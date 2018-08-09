<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drgn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site site_container marble">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'drgn' ); ?></a>
	
	<header id="masthead" class="site-header header">
		<div class="inner_content">
			<div class="site_branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					
					<?php
				endif;
				$drgn_description = get_bloginfo( 'description', 'display' );
				if ( $drgn_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $drgn_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->


			<div class="mobile_menu_button"><button id="trigger-overlay" type="button">Menu</button></div>
			<div class="overlay overlay-hugeinc">
				<button type="button" class="overlay-close"></button>
				<nav id="site-navigation" class="main-navigation menu">
					
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
					<div class="mobile_social_nav social_links">							
						<ul>
							<li><a href="https://www.instagram.com/drgn_drink/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/DRGN-Drink-347739882417086/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/drgndrink" target="_blank"><i class="fab fa-twitter"></i></a></li>
						</ul>
						
					</div>
				</nav>						
			</div>
		</div>
	</header>
	
	

	<div id="content" class="site-content">
