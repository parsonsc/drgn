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
	
	<!-- Arrows -->
	<div class="arrows yellow_arrows">
		<div class="inner_content">
			<div class="arrows_content">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/yellow_arrows.png" alt="" class="rellax" data-rellax-speed="-3">
			</div>
		</div>
	</div>

	<?php drgn_post_thumbnail(); ?>

						<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
	
	<?php $value = get_field( "text_field" ); ?>
	<section class="about component">
		<div class="container">
			<div class="arrows white_arrows">		
				<span class="white_arrow_01 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				
			</div>
			
			<div class="col-md-6 right">
				<div class="content_text_block rellax" data-rellax-speed="1">
					<?php the_field('about_drgn'); ?>
				</div>
			</div>
			<div class="col-md-6 rellax" data-rellax-speed="1">
				<img src="<?php the_field('drgn_can'); ?>" alt="Drgn Drink" class="can"
			</div>
		</div>
	</section>

	<section class="component ingredients black_bg">
			<div class="container">
				<header>
					<h2>Ingredients</h2>
					<p>Discover what makes DRGN different</p>
				</header>

				

					
				</div>
				<div class="free_from">
					<header>
						<h3>Free From</h3>
						<p>What stays out is as important as what goes in</p>
					</header>

					<div class="col-md-6 colourings">
						<div class="free_from_image col-md-4">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/pen.png" alt="Pen">
						</div>			

						<div class="col-md-8">
							<h5>COLOURINGS</h5>
							<p>Nothing is artificial about the colour of DRGN. It’s vivid shade comes from the natural and powerful ingredient turmeric</p>
						</div>
					</div>
					<div class="col-md-6 caffeine">
						<div class="free_from_image col-md-4">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/flavours.png" alt="Flowers">
						</div>
						<div class="col-md-8">
							<h5>CAFFEINE</h5>
							<p>Our carefully chosen ingreedients help to maintain normal energy metabolism, not mask the effects of tiredness.</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		






	<footer class="entry-footer">
		<?php drgn_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
