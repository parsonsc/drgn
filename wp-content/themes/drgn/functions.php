<?php
/**
 * drgn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package drgn
 */

if ( ! function_exists( 'drgn_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function drgn_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on drgn, use a find and replace
		 * to change 'drgn' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'drgn', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );



		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'drgn' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'drgn_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'drgn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drgn_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'drgn_content_width', 640 );
}
add_action( 'after_setup_theme', 'drgn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function drgn_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'drgn' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'drgn' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'drgn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function drgn_scripts() {
	wp_enqueue_style( 'drgn-style', get_stylesheet_uri() );
	wp_enqueue_style( 'drgn-style', get_template_directory_uri() . '/css/drgn.css',false,'1.1','all');


	wp_enqueue_script( 'drgn-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'drgn-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'drgn_scripts' );


function drgn_styles() {
	wp_register_style('drgn_stylesheet', get_template_directory_uri() . '/static/css/drgn.css');
	wp_enqueue_style('drgn_stylesheet');
}
  
add_action( 'wp_enqueue_scripts', 'drgn_styles' );

function my_scripts() {
	

	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr-2.7.1.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'modernizr_custom', get_stylesheet_directory_uri() . '/js/modernizr.custom.js', array( 'jquery' ) );
	wp_enqueue_script( 'j', get_stylesheet_directory_uri() . '/js/jquery-2.1.4.js' );
	wp_enqueue_script( 'plugins', get_stylesheet_directory_uri() . '/js/plugins.js' );
	wp_enqueue_script( 'rellax', get_stylesheet_directory_uri() . '/js/rellax.min.js' );
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );

function custom_loginlogo() {
	echo '<style type="text/css">
		h1 a {
			background-image: url('.get_bloginfo('template_directory').'/static/images/layout/slide_logo.png) !important; 
			width: 190px!important;
			background-size: 100%!important;


		}
	</style>';
}
add_action('login_head', 'custom_loginlogo');



add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'featured-mobile',
    'desc' => 'Your description here.',
    'label_name' => 'Mobile Featured Image',
    'label_set' => 'Set mobile featured image',
    'label_remove' => 'Remove mobile featured',
    'label_use' => 'Set featured mobile',
    'post_type' => array( 'page', 'post', 'slider', 'slide', 'slides', 'slick_slider' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_post_type_support( 'page', 'excerpt' );