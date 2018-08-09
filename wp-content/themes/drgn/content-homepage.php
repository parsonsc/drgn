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
	<!-- End arrows -->
	<?php drgn_post_thumbnail(); ?>
	<?php $value = get_field( "text_field" ); ?>

	<section class="about component">
		<div class="container">
			<div class="arrows white_arrows">
				<span class="white_arrow_01 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_02 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_03 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_04 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
			</div>
			
			<div class="col-md-6 col-sm-7 right">
				<div class="content_text_block rellax desktop_only" data-rellax-speed="1">
					<?php the_content() ?>
				</div>
				<div class="content_text_block mobile_only">
					<?php the_content() ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-5 rellax desktop_only" data-rellax-speed="3">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/still.png" alt="Drink" class="can">
			</div>
			<div class="col-md-6 col-sm-5  mobile_only">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/still.png" alt="Drink" class="can">
			</div>
		</div>
	</section>

	<section class="component ingredients black_bg">
		<header>
			<div class="container">
				<h2>Ingredients</h2>
				<p>Discover what makes DRGN different</p>
			</div>
		</header>


		<div class="ingredients_slider">
			<div class="container">
				<div class="slider-for">
					<div class="ingredient tumeric">
						<div class="ingredient_image col-sm-6">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/turmeric_yellow.svg" alt="Black">
						</div>
						<div class="ingredient_copy col-sm-6">
							<?php
							$post_id = 391;
							$queried_post = get_post($post_id);
							?>
							<h3><?php echo $queried_post->post_title; ?></h3>
							<?php echo $queried_post->post_content; ?>
						</div>
					</div>
					<div class="ingredient black">
						<div class="ingredient_image col-sm-6">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/black_yellow.svg" alt="Black">
						</div>
						<div class="ingredient_copy col-sm-6">
							<?php
							$post_id = 392;
							$queried_post = get_post($post_id);
							?>
							<h3><?php echo $queried_post->post_title; ?></h3>
							<?php echo $queried_post->post_content; ?>
						</div>
					</div>
					<div class="ingredient ginseng">
						<div class="ingredient_image col-sm-6">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/ginseng_yellow.svg" alt="ginseng">
						</div>
						<div class="ingredient_copy col-sm-6">
							<?php
							$post_id = 393;
							$queried_post = get_post($post_id);
							?>
							<h3><?php echo $queried_post->post_title; ?></h3>
							<?php echo $queried_post->post_content; ?>
							
						</div>
					</div>
					<div class="ingredient electrolyte">
						<div class="ingredient_image col-sm-6">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/electrolyte_yellow.svg" alt="electrolyte">
						</div>
						<div class="ingredient_copy col-sm-6">
							<?php
							$post_id = 394;
							$queried_post = get_post($post_id);
							?>
							<h3><?php echo $queried_post->post_title; ?></h3>
							<?php echo $queried_post->post_content; ?>
						</div>
					</div>
					<div class="ingredient ginger">
						<div class="ingredient_image col-sm-6">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/ginger_yellow.svg" alt="ginger">
						</div>
						<div class="ingredient_copy col-sm-6">
							<?php
							$post_id = 395;
							$queried_post = get_post($post_id);
							?>
							<h3><?php echo $queried_post->post_title; ?></h3>
							<?php echo $queried_post->post_content; ?>
						</div>
					</div>
					<div class="ingredient glutamine">
						<div class="ingredient_image col-sm-6">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/glutamine_yellow.svg" alt="L">
						</div>
						<div class="ingredient_copy col-sm-6">
							<?php
							$post_id = 396;
							$queried_post = get_post($post_id);
							?>
							<h3><?php echo $queried_post->post_title; ?></h3>
							<?php echo $queried_post->post_content; ?>
						</div>
					</div>
					<div class="ingredient vitamins">
						<div class="ingredient_image col-sm-6">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/vitamins_yellow.svg" alt="vitamins">
						</div>
						<div class="ingredient_copy col-sm-6">
							<?php
							$post_id = 397;
							$queried_post = get_post($post_id);
							?>
							<h3><?php echo $queried_post->post_title; ?></h3>
							<?php echo $queried_post->post_content; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-nav">
				<div class="owl-thumb-item tumeric">
					<?php
					$post_id = 391;
					$queried_post = get_post($post_id);
					?>					
					<span><?php echo $queried_post->post_title; ?></span>
				</div>
				<div class="owl-thumb-item black">
					<?php
					$post_id = 392;
					$queried_post = get_post($post_id);
					?>					
					<span><?php echo $queried_post->post_title; ?></span>
				</div>
				<div class="owl-thumb-item ginseng">
					<?php
					$post_id = 393;
					$queried_post = get_post($post_id);
					?>					
					<span><?php echo $queried_post->post_title; ?></span>
				</div>
				<div class="owl-thumb-item electrolyte">
					<?php
					$post_id = 394;
					$queried_post = get_post($post_id);
					?>					
					<span><?php echo $queried_post->post_title; ?></span>
				</div>
				<div class="owl-thumb-item ginger">
					<?php
					$post_id = 395;
					$queried_post = get_post($post_id);
					?>					
					<span><?php echo $queried_post->post_title; ?></span>
				</div>
				<div class="owl-thumb-item glutamine">
					<?php
					$post_id = 396;
					$queried_post = get_post($post_id);
					?>					
					<span><?php echo $queried_post->post_title; ?></span>
				</div>
				<div class="owl-thumb-item vitamins">
					<?php
					$post_id = 397;
					$queried_post = get_post($post_id);
					?>					
					<span><?php echo $queried_post->post_title; ?></span>
				</div>
			</div>
		</div>

		<div class="free_from">
			<div class="container">					
				<header>
					<h3><?php the_field('free_from_title'); ?></h3>
					<p><?php the_field('free_from_into_text'); ?></p>
				</header>
				<div class="col-md-6 col-sm-6 colourings">
					<div class="free_from_image col-md-4">
						<img src="<?php the_field('free_from_1_image'); ?>" alt="Pen">
					</div>
					<div class="col-md-8">
						<h5><?php the_field('free_from_1_title'); ?></h5>
						<p><?php the_field('free_from_1_copy'); ?></p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 caffeine">
					<div class="free_from_image col-md-4">
						<img src="<?php the_field('free_from_column_2_image'); ?>" alt="Pen">
					</div>
					<div class="col-md-8">
						<h5><?php the_field('free_from_column_2_title'); ?></h5>
						<p><?php the_field('free_from_column_2_copy'); ?></p>
					</div>
				</div>
			</div>				
		</div>
	</section>
	<section class="component drgnology">
		<div class="container nopadding">
			<header>
				<h2>DRGNology</h2>
				<p>Explore a world of flavour with our cocktail recipes</p>
			</header>
			
			<div class="drgnology_tabs">
				<!-- Drgnology nav -->
				<div class="drgnology_nav">				
					<div class="drgnology_slider_nav">
						<div class="drgnology_item">
							<span class="icon_01"></span>
							<div class="drink_name">
								<?php
								$post_id = 399;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								echo $title;									
								?>								
							</div>
						</div>
						<div class="drgnology_item">
							<span class="icon_02"></span>
							<div class="drink_name">
								<?php
								$post_id = 400;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								echo $title;									
								?>
							</div>
						</div>
						<div class="drgnology_item">
							<span class="icon_03"></span>
							<div class="drink_name">
								<?php
								$post_id = 401;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								echo $title;									
								?>
							</div>
						</div>
						<div class="drgnology_item">
							<span class="icon_04"></span>
							<div class="drink_name">
								<?php
								$post_id = 402;
								$queried_post = get_post($post_id);
								$title = $queried_post->post_title;
								echo $title;									
								?>
							</div>
						</div>
					</div>
				</div>
				<!-- End Nav -->

				<!-- Slider content -->
				<div class="drgnology_slider_for">
					<section id="section-line-1" class="drgnology_info">
						<div class="col-md-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-4_gold.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-rock.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 nopadding drink_block drink_recipe">
							<div class="">
								<div class="item recipe_slide">
									<?php
									$post_id = 399;
									$title = $queried_post->post_title;
									echo $title;
									$queried_post = get_post($post_id);
									echo $queried_post->post_content;
									?>
								</div>
							</div>
						</div>
					</section>
					<section id="section-line-2" class="drgnology_info">
						<div class="col-md-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-2_gold.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-2_gold_small.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 nopadding drink_block drink_recipe">
							<div class="">
								<div class="item recipe_slide">
									<?php
									$post_id = 400;
									$title = $queried_post->post_title;
									echo $title;
									$queried_post = get_post($post_id);
									echo $queried_post->post_content;
									?>
								</div>
							</div>
						</div>
					</section>
					
					
					<section id="section-line-3" class="drgnology_info">
						<div class="col-md-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-3_gold.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-3_gold_small.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 nopadding drink_block drink_recipe">
							<div class="">
								<div class="item recipe_slide">
									<?php
									$post_id = 401;
									$title = $queried_post->post_title;
									echo $title;
									$queried_post = get_post($post_id);
									echo $queried_post->post_content;
									?>
								</div>
							</div>
						</div>
					</section>
					
					<section id="section-line-4" class="drgnology_info">
						<div class="col-md-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-1_gold.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-1_gold_small.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 nopadding drink_block drink_recipe">
							<div class="">
								<div class="item recipe_slide">
									<?php
									$post_id = 402;
									$title = $queried_post->post_title;
									echo $title;
									$queried_post = get_post($post_id);
									echo $queried_post->post_content;
									?>
								</div>
							</div>
						</div>
					</section>
				</div>
			
			<!-- End slider content -->
			</div>
		</div>
	</section>

	<section class="component insta_feed">
		<div class="">
			<?php echo do_shortcode('[instagram-feed]'); ?>
		</div>
	</section>

</article>