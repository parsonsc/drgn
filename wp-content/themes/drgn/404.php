<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package drgn
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<header class="entry-header banner">
					<div class="container">
						
						<div class="banner_item banner_404  banner_desktop">
							<div class="banner_content">
								<h1 class="page-title"><?php esc_html_e( 'Oops! Something went wrong.', 'drgn' ); ?></h1>
							</div>
						</div>
						<div class="banner_item  banner_404 banner_mobile">	
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/legal_mobile.jpg" alt="">	
							<div class="banner_content">
								<h1 class="page-title"><?php esc_html_e( 'Oops! Something went wrong.', 'drgn' ); ?></h1>
							</div>
						</div>
					</div>
				</header><!-- .entry-header -->
			

				<section class="component ">
				<div class="container container_small">
					<h2>Why not pour yourself a DRGN and try again later, or visit one of these links</h2>
					<ul>
						<a href="<?php echo get_page_link( get_page_by_title( homepage )->ID ); ?>">DRGN ></a><br />
						<a href="social">SOCIAL ></a><br />
						<a href="trade-press">TRADE & PRESS ></a><br />
						<a href="our-story">OUR STORY></a><br />
						<a href="social#signup">SUBSCRIBE ></a><br />
						
						<a href="privacy-policy">PRIVACY POLICY ></a><br />
						<a href="terms-conditions">TERMS OF USE ></a>											
					</ul>
				</div>
			</section>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
