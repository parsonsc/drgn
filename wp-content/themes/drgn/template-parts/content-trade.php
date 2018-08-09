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
		
		<div class="contact_form_container container_small nopadding">
			<div class="arrows white_arrows">
				<span class="white_arrow_01 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_02 rellax" data-rellax-speed="1"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_03 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
				<span class="white_arrow_04 rellax" data-rellax-speed="2"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/white_arrow_01.svg" alt=""></span>
			</div>
			<!-- Contact us form -->
			<link href="https://d1gwclp1pmzk26.cloudfront.net/agile/forms/v1/agile-form-min.css" rel="stylesheet">
			<form class="form-view contact_form" id="agile-form" action="https://drgndrink.agilecrm.com/formsubmit" style="max-width:450px;" method="GET">
				
				<div class="contact_form">
					<div style="display: none; height: 0px; width: 0px;">
						<input type="hidden" id="_agile_form_name" name="_agile_form_name" value="Contact Form">
						<input type="hidden" id="_agile_domain" name="_agile_domain" value="drgndrink">
						<input type="hidden" id="_agile_api" name="_agile_api" value="aoqk5785tcctvuq8lp42779mdc">
						<input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="#">
						<input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
						<input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg" value="Thank you. Your details have successfully been received. Look out for the latest news from DGRN.">
						<input type="hidden" id="_agile_form_id_tags" name="tags" value="">
						<input type="hidden" id="_agile_form_id" name="_agile_form_id" value="6212000178765824">
					</div>
					<div class="col-md-12">
						<h2>Send us a message</h2>
						<div class="form-item col-md-6 nopadding enquirytype">
							<label class="agile-label" for="agilefield-1">Enquiry Type<span class="agile-span-asterisk"> *</span></label>
							<div class="agile-field-xlarge agile-field">
							    <select name="agilefield-1" class="agile-height-default" id="agilefield-1" required="">
							    	<option value="">Select</option>
							    	<option value="On-Trade Enquiry">On-Trade Enquiry</option>
							    	<option value="Off-Trade Enquiry">Off-Trade Enquiry</option>
							    	<option value="Press Enquiry">Press Enquiry</option>
							    </select>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 nopadding">
						<div class="form-item col-md-6">
							<label class="agile-label" for="agilefield-3">First Name<span class="agile-span-asterisk"> *</span></label>
							<div class="agile-field-xlarge agile-field">
								<input maxlength="250" id="agilefield-3" name="first_name" type="text" placeholder="First Name*" class="agile-height-default" required="">
							</div>
							<div class="agile-custom-clear"></div>
						</div>
						<div class="form-item col-md-6" >
							<label class="agile-label" for="agilefield-4">Last Name<span class="agile-span-asterisk"> *</span></label>
							<div class="agile-field-xlarge agile-field">
								<input maxlength="250" id="agilefield-4" name="last_name" type="text" placeholder="Last Name*" class="agile-height-default" required="">
							</div>
							<div class="agile-custom-clear"></div>
						</div>
						<div class="form-item col-md-6" >
							<label class="agile-label" for="agilefield-5">Email<span class="agile-span-asterisk"> *</span></label>
							<div class="agile-field-xlarge agile-field">
								<input maxlength="250" id="agilefield-5" name="email" type="email" placeholder="Email*" class="agile-height-default" required="">
							</div>
							<div class="agile-custom-clear"></div>
						</div>
						<div class="form-item col-md-6" >
							<label class="agile-label" for="agilefield-6">Telephone</label>
							<div class="agile-field-xlarge agile-field">
								<input maxlength="250" id="agilefield-6" name="phone" type="text" placeholder="Telephone" class="agile-height-default">
							</div>
							<div class="agile-custom-clear"></div>
						</div>
						<div class="form-item location col-md-6" >
							<!-- <label class="agile-label" for="agilefield-7">Location<span class="agile-span-asterisk"> *</span></label> -->
							<!-- <div class="agile-field-xlarge agile-field">
									<select id="agilefield-7" name="agilefield-7" class="agile-height-default" required="">
											<option value="">Location*</option>
											<option value="Location 1">Location 1</option>
											<option value="Location 2">Location 2</option>
									</select>
							</div> -->
							<label class="agile-label" for="agilefield-7">Location<span class="agile-span-asterisk"> *</span></label>
							<div class="agile-field-xlarge agile-field">
								<select id="agilefield-7" name="agilefield-7" class="agile-height-default" required="">
									<option value="">Location*</option>
									
									<option value="">Select</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Åland Islands">Åland Islands</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
									<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="Brunei Darussalam">Brunei Darussalam</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Côte d'Ivoire">Côte d'Ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curaçao">Curaçao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
									<option value="Korea, Republic of">Korea, Republic of</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao">Macao</option>
									<option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
									<option value="Moldova, Republic of">Moldova, Republic of</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Réunion">Réunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Barthélemy">Saint Barthélemy</option>
									<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Martin (French part)">Saint Martin (French part)</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan, Province of China">Taiwan, Province of China</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-Leste">Timor-Leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States">United States</option>
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Virgin Islands, British">Virgin Islands, British</option>
									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="form-item col-md-6" >
							<label class="agile-label" for="agilefield-8">postcode</label>
							<div class="agile-field-xlarge agile-field">
								<input maxlength="250" id="agilefield-8" name="zip" type="text" placeholder="Postcode" class="agile-height-default">
							</div>
							<div class="agile-custom-clear"></div>
						</div>
						<div class="col-sm-8 ">
							<div class="form-item">
								<label class="agile-label" for="agilefield-9">Text Area<span class="agile-span-asterisk"> *</span></label>
								<div class="agile-field-xlarge agile-field">
									<textarea maxlength="250" id="agilefield-9" name="note" placeholder="Message*" required="" class="agile-height-default" rows="10" cols="50"></textarea>
								</div>
								<div class="agile-custom-clear"></div>
							</div>
							<div class="form-item email_newsletter_signup">
								
								<div class="">
									<div>
										<label for="multiple_checkboxes_1528812773533-0" class="i-checks">
											<input type="checkbox" name="multiple_checkboxes_1528812773533-0" id="multiple_checkboxes_1528812773533-0" value="I would like to receive updates of the latest DRGN drink news, events and product info via the means of communication I have provided." ><i></i>
											I would like to receive updates of the latest DRGN drink news, events and product info via the means of communication I have provided.
										</label>
									</div>
								</div>
								<p class="agile-text-element" style="text-align:left ;font-size:12px ">*We will always store your personal details securely. We’ll use them to provide the information that you have requested, and communicate with you in the way(s) that you have agreed to. For full details see privacy policy</p>
								
							</div>
							<div class="form-item">
								<label class="agile-label">&nbsp;</label>
								<div class="agile-field agile-button-field">
									<button type="submit" class="agile-button">Send</button>
									<br><span id="agile-error-msg" class="success_message"></span>
								</div>
							</div>
						</div>
						<div class="col-sm-4 ">
							<div class="form-item">
								<div class="contact_details wpcf7-form-control-wrap">
									<h3>Contact</h3>
									<a href="mailto:hello@drgndrink.com" style="font-size: 16px;">hello@drgndrink.com</a>
									
									<p class="address">DRGN Global Ltd, <br />
										47 Marylebone Lane,	London, <br />
									United kingdom, W1U 2NT</p>
									<div class="social_links">
										<ul>
											<li><a href="https://www.instagram.com/drgn_drink/" target="_blank"><i class="fab fa-instagram"></i></a></li>
											<li><a href="https://www.facebook.com/DRGN-Drink-347739882417086/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="https://twitter.com/drgndrink" target="_blank"><i class="fab fa-twitter"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</form>
			<script type="text/javascript">
			(function(a){var b=a.onload,p=true;isCaptcha=false;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};var formLen=document.forms.length;for(i=0;i<formLen;i++){if(document.forms.item(i).getAttribute("id")== "agile-form"){a.document.forms.item(i).onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v5(this)}catch(b){this.submit()}}}}})(window);
				</script>
			</div>
			
			
			
			
			<section class="related_news">
				<div class="container_small">
					<div class="media_pack">
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
						?>
					</div>
				</div>
			</section>
			
			<section class="related_news">
				<div class="">
					<div class="more_news_grid">
						<div class="container_small">
							
							
							<h2>News ></h2>
							<ul class="row">
								
								<?php
								if ( get_query_var('paged') ) $paged = get_query_var('paged');
								if ( get_query_var('page') ) $paged = get_query_var('page');
								$query = new WP_Query( array( 'post_type' => 'news_article', 'paged' => $paged ) );
								if ( $query->have_posts() ) : ?>
								<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								
								
								<li class="col-sm-6 nopadding">
									<a href="<?php echo get_permalink( $post->ID ); ?>">
										<div class="news_block">
											<div class="news_thumbnail col-sm-4 nopadding">
												<?php drgn_post_thumbnail(); ?>
											</div>
											<div class="news_copy col-sm-8 nopadding">
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
				</div>
			</section>
			
			
			</article><!-- #post-<?php the_ID(); ?> -->