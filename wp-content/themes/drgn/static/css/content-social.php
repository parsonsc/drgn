\<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	*	MultiEdit: Right,Bottom,Left
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
		<div class="arrows white_arrows">
			<span class="white_arrow_01 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
			<span class="white_arrow_02 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
			<span class="white_arrow_03 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
			<span class="white_arrow_04 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
		</div>
		<section class="entry-content story_timeline component">
			<div class="container_small">
				
				<h2>Events ></h2>
				<?php
				if ( get_query_var('paged') ) $paged = get_query_var('paged');
				if ( get_query_var('page') ) $paged = get_query_var('page');
				$query = new WP_Query( array( 'post_type' => 'events', 'paged' => $paged ) );
				if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				
				
				
				<div class="event" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
					<h2 class="title"><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="cta modal-link">Join us</a>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
				<!-- show pagination here -->
				<?php else : ?>
				<!-- show 404 error here -->
				<?php endif; ?>
			</div>
			</section><!-- .entry-content -->
			
			<!-- Insta feed -->
			<section class="component insta_feed">
				<div class="container_small">
					<h3>Feeds</h3>
					<?php echo do_shortcode('[instagram-feed]'); ?>
					
					<div class="twitter_handle">
						<a href="https://www.instagram.com/drgn_drink/" target="_blank" class="twitter_handle_link">Follow us @DRGNdrink</a>
						<a href="https://www.instagram.com/drgn_drink/" target="_blank" class="twitter_link">Instagram  ></a>
					</div>
				</div>
			</section>
			<section class="component twitter_feed">
				<div class="container container_small nopadding">
					<div class="feed_content">
						<ul>
							<?php echo do_shortcode("[AIGetTwitterFeeds ai_username='DRGNdrink' ai_numberoftweets='6']"); ?>
						</ul>
						<div class="twitter_handle">
							<a href="https://twitter.com/drgndrink" class="twitter_handle_link">Follow us @DRGNdrink</a>
							<a href="https://twitter.com/drgndrink" class="twitter_link">Twitter  ></a>
						</div>
					</div>
				</div>
			</section>
			<section class="component sign_up" id="signup">
				<div class="container container_small nopadding">
					<div class="entry-content">
						<div class="col-md-8 signup_form">
							<div class="col-sm-12">
								<h3>Stay Tuned </h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi animi magnam aliquam omnis officia. Neque dolorem vel, facilis, minus mollitia obcaecati exercitationem beatae volupt</p>
							</div>
							
							<!-- Contact us form -->
							
							<link href="https://d1gwclp1pmzk26.cloudfront.net/agile/forms/v1/agile-form-min.css" rel="stylesheet">
							<form class="form-view agile-form-transparent " id="agile-form" action="https://drgndrink.agilecrm.com/formsubmit" style="max-width:450px;" method="GET">
								<fieldset>
									<!-- Form Name -->
									<legend class="agile-hide-formname">Sign up form</legend>
									<p class="agile-form-description"></p>
									<div style="display: none; height: 0px; width: 0px;">
										<input type="hidden" id="_agile_form_name" name="_agile_form_name" value="Sign up form">
										<input type="hidden" id="_agile_domain" name="_agile_domain" value="drgndrink">
										<input type="hidden" id="_agile_api" name="_agile_api" value="aoqk5785tcctvuq8lp42779mdc">
										<input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="#">
										<input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
										<input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg" value="Thank You. Your details have successfully been received. Look out for the latest news from DGRN.">
										<input type="hidden" id="_agile_form_id_tags" name="tags" value="">
										<input type="hidden" id="_agile_form_id" name="_agile_form_id" value="5739719937753088">
									</div>
									<!-- Text input-->
									<div class="form-item  col-sm-6 required-control">
										<label class="agile-label" for="agilefield-1">First Name<span class="agile-span-asterisk"> *</span></label>
										<div class="agile-field-xlarge agile-field">
											<input maxlength="250" id="agilefield-1" name="first_name" type="text" placeholder="First Name*" class="agile-height-default" required="">
										</div>
										<div class="agile-custom-clear"></div>
									</div>
									<!-- Text input-->
									<div class="form-item col-sm-6  required-control">
										<label class="agile-label" for="agilefield-2">Last Name<span class="agile-span-asterisk"> *</span></label>
										<div class="agile-field-xlarge agile-field">
											<input maxlength="250" id="agilefield-2" name="last_name" type="text" placeholder="Last Name*" class="agile-height-default" required="">
										</div>
										<div class="agile-custom-clear"></div>
									</div>
									<!-- Text input-->
									<div class="form-item  col-sm-6 required-control">
										<label class="agile-label" for="email">Email<span class="agile-span-asterisk"> *</span></label>
										<div class="agile-field-xlarge agile-field">
											<input maxlength="250" id="email" name="email" type="email" placeholder="Email*" class="agile-height-default" required="">
										</div>
										<div class="agile-custom-clear"></div>
									</div>
									<!-- Text input-->
									<div class="form-item col-sm-6">
										<label class="agile-label" for="agilefield-4">Postcode</label>
										<div class="agile-field-xlarge agile-field">
											<input maxlength="250" id="agilefield-4" name="zip" type="text" placeholder="Postcode" class="agile-height-default">
										</div>
										<div class="agile-custom-clear"></div>
									</div>
									<!-- Multiple Checkboxes -->
									<div class="form-item email_newsletter_signup col-sm-12">
										<div class="form-item agile-form-inlinecheckboxes">
											
											<div class="">
												<div>
													<label for="multiple_checkboxes_1528808822659-0" class="i-checks">
														<input type="checkbox" name="multiple_checkboxes_1528808822659-0" id="multiple_checkboxes_1528808822659-0" value="Yes, I would like to receive updates of the latest DRGN drink news, events and product info via the means of communication I have provided."><i></i>
														Yes, I would like to receive updates of the latest DRGN drink news, events and product info via the means of communication I have provided.
													</label>
												</div>
												
											</div>
										</div>
										
											<p class="agile-text-element" style="text-align:left ;font-size:12px ">*We will always store your personal details securely. We’ll use them to provide the information that you have requested, and communicate with you in the way(s) that you have agreed to. For full details see privacy policy</p>
										
									</div>
									<!--recaptcha aglignment-->
									<!-- Button -->
									<div class="form-item">
										<label class="agile-label">&nbsp;</label>
										<div class="agile-field agile-button-field">
											<button type="submit" class="agile-button">Sign up</button>
											<br><span id="agile-error-msg"></span>
										</div>
									</div>
								</fieldset>
							</form>
							<script type="text/javascript">
							(function(a){var b=a.onload,p=true;isCaptcha=false;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};var formLen=document.forms.length;for(i=0;i<formLen;i++){if(document.forms.item(i).getAttribute("id")== "agile-form"){a.document.forms.item(i).onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v5(this)}catch(b){this.submit()}}}}})(window);
								</script>
								
							</div>
							<div class="col-md-4 contact_details">
								<div class="col-md-12 col-sm-12">
									<h3>Get In Touch</h3>
									<a href="mailto:hello@drgndrink.com">hello@drgndrink.com</a>
									
								</div>
								<div class="col-md-12 col-sm-12">
									<p class="address">DRGN Global Ltd,<br />47 Marylebone Lane,<br />London W1U 2NT,<br />United Kingdom</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				</article><!-- #post-<?php the_ID(); ?> -->