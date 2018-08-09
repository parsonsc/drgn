<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drgn
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="inner_content">
			<div class="col-sm-4 col-md-3 nopadding footer_logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home""><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/slide_logo.png" alt="DRGN"></a>
			</div>
			<div class="col-sm-4 col-md-3 footer_nav">
				<nav id="site-navigation" class="main-navigation menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'drgn' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'footer-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="col-sm-4 col-md-3 email_subscribe">
				<h3>Get In Touch</h3>
				<a href="mailto:hello@drgndrink.com">hello@drgndrink.com</a>
				<p class="address">DRGN Global Ltd,<br />47 Marylebone Lane,<br />London W1U 2NT,<br />United Kingdom</p>
				
			</div>
			<div class="col-sm-4 col-md-3 social_links email_subscribe">
				<h3>Stay tuned</h3>
				<a href="social/#signup" class="cta">Subscribe to our newsletter</a>
				<ul>
					<li><a href="https://www.instagram.com/drgn_drink/" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a href="https://www.facebook.com/DRGN-Drink-347739882417086/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://twitter.com/drgndrink" target="_blank"><i class="fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="footer_navbar">
			<nav class="footer_subnav">
				<ul>
					<li>
						<a href="privacy-policy">Privacy Policy</a>
					</li>
					<li>
						<a href="terms-conditions">Terms of use</a>
					</li>
				</ul>
			</nav>
			<div class="copyright">DRGN is a registered Trademark of DRGN Holdings Ltd</div>
		</div>
	</footer>
</div><!-- #page -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/jquery-2.1.4.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/rellax.min.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/plugins.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/main.js"></script>
<script>
	var rellax = new Rellax('.rellax', {
		// center: true
		callback: function(position) {
		// callback every position change
		console.log(position);
		}
	});	

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		centerMode: true,
		fade: true,
		asNavFor: '.slider-nav',

		responsive: [	

		    {
		      breakpoint: 480,
		      settings: {
		      	adaptiveHeight: true,
		        arrows: true,
				prevArrow:"<img class='a-left control-c prev slick-prev' src='wp-content/themes/drgn/static/images/layout/chevron_white_left.png'>",
      			nextArrow:"<img class='a-right control-c next slick-next' src='wp-content/themes/drgn/static/images/layout/chevron_white_right.png'>",
		      }
		    }
	  	]
	});


	$('.slider-nav').slick({
	  	slidesToShow: 5,
	  	slidesToScroll: 1,
	  	asNavFor: '.slider-for',
	  	dots: false,
	  	centerMode: true,
	  	focusOnSelect: true,
	  	infinite: true,
	  	responsive: [
	  		{
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        
		      }
		    },
	   
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	      }
	    }
	  ]
	});

	$('.drgnology_slider_for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow:"<img class='a-left control-c prev slick-prev' src='wp-content/themes/drgn/static/images/layout/small_arrow_left.png'>",
      	nextArrow:"<img class='a-right control-c next slick-next' src='wp-content/themes/drgn/static/images/layout/small_arrows_right.png'>",
		centerMode: true,
		fade: true,
		dots: true,
		asNavFor: '.slider-nav',

		responsive: [	
			{
		      breakpoint: 1024,
		      settings: {
		        adaptiveHeight: true
		      }
		    },

		    {
		      breakpoint: 480,
		      settings: {
		      	 adaptiveHeight: true
		      }
		    }
	  	]
	});


	$('.drgnology_slider_nav').slick({
	  	slidesToShow: 4,
	  	slidesToScroll: 1,
	  	asNavFor: '.drgnology_slider_for',
	  	dots: false,
	  	centerMode: false,
	  	focusOnSelect: true,
	  	infinite: false,
	  	responsive: [
	   
	    {
	      breakpoint: 480,
	      settings: {
	        
	      }
	    }
	  ]
	});
	$('.drgnology_slider_for').on('beforeChange', function(event,slick,slide,nextSlide) {
        $('.drgnology_slider_nav').find('.slick-slide').removeClass('slick-current').eq(nextSlide).addClass('slick-current');
    });


$( document ).ready(function() {
    $(".share").click(function(){
      $(".share_options").show();
    })
  });
	

	

	

</script>
<?php wp_footer(); ?>

</body>
</html>
