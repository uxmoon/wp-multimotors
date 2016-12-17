<?php
/**
 * multimotors functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package multimotors
 */

if ( ! function_exists( 'mmotors_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mmotors_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on multimotors, use a find and replace
	 * to change 'mmotors' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mmotors', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'mmotors' ),
		'secondary' => esc_html__( 'Secondary Menu', 'mmotors' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mmotors_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mmotors_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mmotors_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mmotors_content_width', 640 );
}
add_action( 'after_setup_theme', 'mmotors_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mmotors_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mmotors' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mmotors' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mmotors_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mmotors_scripts() {
	wp_enqueue_style( 'mmotors-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mmotors-google-fonts', 'https://fonts.googleapis.com/css?family=Ruda:400,700' );
	// wp_enqueue_style( 'mmotors-theme', get_template_directory_uri() . '/css/theme.css' );
	wp_enqueue_style( 'mmotors-search-filter', get_template_directory_uri() . '/css/search-filter.css' );
	wp_enqueue_style( 'mmotors-carousel', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'mmotors-carousel-theme', get_template_directory_uri() . '/css/slick-theme.css' );

	// wp_enqueue_script('jquery');
	wp_enqueue_script( 'mmotors-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'mmotors-carousel-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'mmotors-carousel-setup', get_template_directory_uri() . '/js/carousel.js', array('jquery'), '20151215', true );

	// wp_enqueue_script( 'mmotors-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mmotors_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Meta Boxes
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Tweaks for wordpress and plugins
 */
require get_template_directory() . '/inc/tweaks.php';
