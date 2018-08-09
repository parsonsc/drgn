<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package drgn
*/
?>

<section class="component news_article rellax" data-rellax-speed="0">
	<div class="container">
		<article id="post-<?php the_ID(); ?>" class="news_item">
			<div class="article_image">
				<?php drgn_post_thumbnail(); ?>
			</div>
			<div class="item_content">
				<div class="item_content_copy">
					<h2 class="title"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				
					
					<div class="share cta">
						share
					</div>
					<div class="share_options">
						<?php echo do_shortcode('[addthis tool="addthis_sharing_toolbox"]'); ?>
					</div>
				</div>
			</div>			
			
		</article>
	</div>
</section>

<section class="related_news">
	<div class="container">
		<div class="more_news_grid">
			<h2>News ></h2>
			<ul class="">			
				<?php
				if ( get_query_var('paged') ) $paged = get_query_var('paged');
				if ( get_query_var('page') ) $paged = get_query_var('page');

				$query = new WP_Query( array( 'post_type' => 'news_article', 'posts_per_page' => 4, 'paged' => $paged  ) );

				if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>					 
				
				<li class="col-md-6 nopadding">
					<a href="<?php echo get_permalink( $post->ID ); ?>">
						<div class="news_block">
							<div class="news_thumbnail col-md-4 col-sm-4  nopadding">
								<?php drgn_post_thumbnail(); ?>
							</div>
							<div class="news_copy col-md-8 col-sm-8 nopadding">
								<h3 class="title"><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>


							</div>						
						</div>
					</a>
				</li>

				<?php endwhile; wp_reset_postdata(); ?>
				<!-- show pagination here -->
				<?php else : ?>
				<!-- show 404 error here -->
				<?php endif; ?>

			</ul>
		</div>
	</div>
</section>