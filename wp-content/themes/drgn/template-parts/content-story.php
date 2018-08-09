<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drgn
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header banner">
		<div class="container">
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
	

	<section class="component story_timeline rellax" data-rellax-speed="0">
		<div class="container nopadding">
			<div class="arrows white_arrows">
				<span class="white_arrow_01 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_02 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_03 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_04 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
			</div>
			<ul>
				<?php
					if ( get_query_var('paged') ) $paged = get_query_var('paged');
					if ( get_query_var('page') ) $paged = get_query_var('page');

					$query = new WP_Query( array( 'post_type' => 'story', 'paged' => $paged ) );

					if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						 
						     
					<li>
						<div class="col-sm-6  text">
							<div class="timeline_info">			
								<h2 class="title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>
						</div>
						<div class="timeline_image right col-sm-6  os-animation"  data-os-animation="fadeIn" data-os-animation-delay="0.5s">
							<?php drgn_post_thumbnail(); ?>
						</div>
					</li>


					<?php endwhile; wp_reset_postdata(); ?>
					<!-- show pagination here -->
					<?php else : ?>
					<!-- show 404 error here -->
					<?php endif; ?>
			</ul>
		</div><!-- .entry-content -->			
	</section>	

	<section class="component story_drgn black_bg">
		<div class="story_drgn_content">
			<header>
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/logo_mobile.svg" alt="">
			</header>

			<div class="col-sm-6 story_drgn_item">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/DRGN-turmeric.png" alt="">
				<h4>Turmeric</h4>
			</div>
			<div class="col-sm-6 story_drgn_item">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/DRGN-vitality.png" alt="">
				<h4>Vitality</h4>
			</div>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->








