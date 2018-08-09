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
				<div class="content_text_block rellax" data-rellax-speed="1">
					<?php the_content() ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-5 rellax" data-rellax-speed="1">
				<!-- <div class="can_animation">
					
				</div> -->
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/still.png" alt="Drink" class="can">
			</div>
		</div>
	</section>
	<section class="component ingredients black_bg">
		<div class="">
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
								<h3>TURMERIC</h3>
								<p>Declared as the new ‘Superfood’ by Nutritionists, Turmeric has a 4000 year old history of use for health conditions in Asia. Frequently cited as a powerful anti-oxidant and anti-inflammatory, it is known to support digestive health. Research has suggested that Turmeric’s active ingredient (Curcumin) could help to support normal liver function by speeding up the detox process of the nasty toxins left behind by alcohol. </p>
								<p>Believe the Hype.</p>
							</div>
						</div>
						<div class="ingredient black">
							<div class="ingredient_image col-sm-6">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/black_yellow.svg" alt="Black">
							</div>
							<div class="ingredient_copy col-sm-6">
								<h3>BLACK PEPPER</h3>
								<p>Native to South East Asia, Black Pepper is a rich source of minerals and vitamins with anti-inflammatory properties, its active ingredient (Piperine) is also known to boost absorption of other nutrients, especially the Curcumin compound in Turmeric. </p>
							</div>
						</div>
						<div class="ingredient ginseng">
							<div class="ingredient_image col-sm-6">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/ginseng_yellow.svg" alt="ginseng">
							</div>
							<div class="ingredient_copy col-sm-6">
								<h3>GINSENG</h3>
								<p>Discovered 1000s of years ago in China and Korea, Ginseng has gained prominence globally for its association as a natural stimulant. However, research has also suggested that Ginseng could help the liver to neutralize the toxic agents in alcohol.</p>
								
							</div>
						</div>
						<div class="ingredient electrolyte">
							<div class="ingredient_image col-sm-6">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/electrolyte_yellow.svg" alt="electrolyte">
							</div>
							<div class="ingredient_copy col-sm-6">
								<h3>ELECTROLYTES</h3>
								<p>Magnesium, Calcium, Sodium and Potassium collectively help the body’s rehydration process and replacement of essential salts to help restore a healthy balance in your body.</p>
							</div>
						</div>
						<div class="ingredient ginger">
							<div class="ingredient_image col-sm-6">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/ginger_yellow.svg" alt="ginger">
							</div>
							<div class="ingredient_copy col-sm-6">
								<h3>GINGER EXTRACT</h3>
								<p>Another powerful addition to the DRGN mix, dating back over 2000 years in Chinese medicine, ginger has long been used to relieve nausea and easing an upset stomach.</p>
							</div>
						</div>
						<div class="ingredient glutamine">
							<div class="ingredient_image col-sm-6">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/glutamine_yellow.svg" alt="L">
							</div>
							<div class="ingredient_copy col-sm-6">
								<h3>L-GLUTAMINE</h3>
								<p>Glutamine helps to support the immune system, muscles and digestive system. Alcohol can suppress the body’s Glutamine level, which can cause a more restless sleep and lower energy levels the morning after.</p>
							</div>
						</div>
						<div class="ingredient vitamins">
							<div class="ingredient_image col-sm-6">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/ingredients/vitamins_yellow.svg" alt="vitamins">
							</div>
							<div class="ingredient_copy col-sm-6">
								<h3>VITAMINS</h3>
								<p>Vitamins B6, B12 and C contribute to the reduction of tiredness and fatigue and to the normal function of the immune system. Vitamin B2 and E contribute to the protection of cells from oxidative stress.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="slider-nav">
					<div class="owl-thumb-item tumeric">						
						<span>TURMERIC</span>
					</div>
					<div class="owl-thumb-item black">						
						<span>BLACK PEPPER</span>
					</div>
					<div class="owl-thumb-item ginseng">
						<span>GINSENG</span>
					</div>
					<div class="owl-thumb-item electrolyte">
						 <span>ELECTROLYTES</span>
					</div>
					<div class="owl-thumb-item ginger">
						 <span>GINGER EXTRACT</span>
					</div>
					<div class="owl-thumb-item glutamine">
						 <span>L-GLUTAMINE</span>
					</div>
					<div class="owl-thumb-item vitamins">
						 <span>VITAMINS</span>
					</div>
				</div>
			</div>

			<div class="free_from">
				<div class="container">
				
					<header>
						<h3>Free From</h3>
						<p>What stays out is as important as what goes in</p>
					</header>
					<div class="col-md-6 col-sm-6 colourings">
						<div class="free_from_image col-md-4">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/pen.png" alt="Pen">
						</div>
						<div class="col-md-8">
							<h5>COLOURINGS</h5>
							<p>Nothing is artificial about the colour of DRGN. It’s vivid shade comes from the natural and powerful ingredient Turmeric</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 caffeine">
						<div class="free_from_image col-md-4">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/flavours.png" alt="Flowers">
						</div>
						<div class="col-md-8">
							<h5>CAFFEINE</h5>
							<p>Our carefully chosen ingredients help to maintain normal energy metabolism, not mask the effects of tiredness.</p>
						</div>
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
			<div class="drgnology_tabs tabs tabs-style-line">
				<nav>
					<ul>
						<li>
							<a href="#section-line-1">
								<span class="icon_01"></span>
								<div class="drink_name">
									<p>SMOKING<br />DRGN</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#section-line-2">
								<span class="icon_02"></span>
								<div class="drink_name">
									<p>SMOKING<br />DRGN</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#section-line-3">
								<span class="icon_03"></span>
								<div class="drink_name">
									<p>SMOKING<br />DRGN</p>
								</div>
							</a>
						</li>
						<li>
							<a href="#section-line-4">
								<span class="icon_04"></span>
								<div class="drink_name">
									<p>SMOKING<br />DRGN</p>
								</div>
							</a>
						</li>
						
					</ul>
				</nav>
				<div class="content-wrap tabs_content">
					<section id="section-line-1">
						<div class="col-sm-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-rock.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-rock.png" alt="">
											<span>Rock Tumbler</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											<span>Alcohol</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											<span>Additional</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-6 nopadding drink_block drink_recipe">
							<div class="owl-recipe owl-carousel">
								<div class="item recipe_slide">
									<p>Recipe Panel 1</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 2</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 3</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 4</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
							</div>
						</div>
					</section>
					
					<section id="section-line-2">
						<div class="col-md-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-2_gold.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-2_gold_small.png" alt="">
											<span>Rock Tumbler</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											<span>Alcohol</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											<span>Additional</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 nopadding drink_block drink_recipe">
							<div class="owl-recipe owl-carousel">
								<div class="item recipe_slide">
									<p>Recipe Panel 2</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 2</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 3</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 4</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
							</div>
						</div>
					</section>
					<section id="section-line-3">
						<div class="col-md-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-3_gold.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-3_gold_small.png" alt="">
											<span>Rock Tumbler</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											<span>Alcohol</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											<span>Additional</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 nopadding drink_block drink_recipe">
							<div class="owl-recipe owl-carousel">
								<div class="item recipe_slide">
									<p>Recipe Panel 3</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 2</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 3</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 4</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
							</div>
						</div>
					</section>
					<section id="section-line-4">
						<div class="col-md-6 nopadding drink_block drink_requirements">
							<div class="drink_requirements_content">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-1_gold.png" alt="" class="drink_hero">
								<div class="requirement_list">
									<p>THINGS YOU NEED</p>
									<ul>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/icon-1_gold_small.png" alt="">
											<span>Rock Tumbler</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-alcohol.png" alt="">
											<span>Alcohol</span>
										</li>
										<li>
											<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/drgnology/DRGN-icon-additionals.png" alt="">
											<span>Additional</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 nopadding drink_block drink_recipe">
							<div class="owl-recipe owl-carousel">
								<div class="item recipe_slide">
									<p>Recipe Panel 4</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 2</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 3</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
								<div class="item recipe_slide">
									<p>RECIPE 4</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								</div>
							</div>
						</div>
					</section>
					
					</div><!-- /content -->
					</div><!-- /tabs -->
				</div>
			</section>

			<!-- Insta feed -->
			<section class="component insta_feed">
				<div class="">
					<?php echo do_shortcode('[instagram-feed]'); ?>
				</div>
			</section>
			<footer class="entry-footer">
				<?php drgn_entry_footer(); ?>
				</footer><!-- .entry-footer -->
				</article><!-- #post-<?php the_ID(); ?> -->