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
	<li>

	

		<div class="col-md-6 nopadding">
			<div class="timeline_info">	
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'drgn' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'drgn' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</div>

		<div class="timeline_image right col-md-6 nopadding os-animation"  data-os-animation="fadeIn" data-os-animation-delay="0.5s">
			<?php drgn_post_thumbnail(); ?>
		</div>
	</li>

	<footer class="entry-footer">
		<?php drgn_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
