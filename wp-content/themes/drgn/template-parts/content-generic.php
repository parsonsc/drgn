<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package drgn
*/
?>
<header class="entry-header banner">
	<div class="">
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div class="banner_item banner_desktop" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;">
			<div class="banner_content">	
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					
				<?php endif; ?>
			</div>
		</div>

		<!-- Mobile banner -->
		<div class="banner_item banner_mobile">
			<?php kdmfi_the_featured_image( 'featured-mobile', 'full' ); ?>
			<div class="banner_content">	
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					
				<?php endif; ?>
			</div>
		</div>
	</div>	
</header><!-- .entry-header -->

<section class="component ">
	<div class="container container_small">
		<h2 class="title"><?php the_title(); ?></h2>
					<?php the_content(); ?>
	</div>
</section>
