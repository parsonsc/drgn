<?php
/**
 * Template Name: Trade/Press Page
 *
 * @package WordPress
 * @subpackage DRGN
 * @since 
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				
			
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content-trade', get_post_type() );

					endwhile;

					the_posts_navigation();

				

				endif;
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>