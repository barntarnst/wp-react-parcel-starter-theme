<?php
namespace WP_REACT_PARCEL_STARTER;
/**
 * WP_REACT_PARCEL_STARTER functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_REACT_PARCEL_STARTER
 */
if ( ! function_exists( __NAMESPACE__ . '\\setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wordpress_starter_theme, use a find and replace
		 * to change 'wordpress_starter_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wordpress_starter_theme', get_template_directory() . '/languages' );
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
    add_image_size( 'hd', 1920, 1200); 
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wordpress_starter_theme' ),
		) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'gallery',
			'caption',
    ) );
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
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wordpress_starter_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wordpress_starter_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', __NAMESPACE__ . '\\widgets_init' );
/**
 * Register footer widget
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function widgets_footer_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'wordpress_starter_theme' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'wordpress_starter_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', __NAMESPACE__ . '\\widgets_footer_init' );
/**
 * Enqueue scripts and styles.
 */
function scripts() {
  wp_enqueue_style( 'style.css', get_template_directory_uri() . '/dist/index.css', false, '1.0.0', 'all');
	wp_enqueue_script( 'wordpress_starter_theme-main', get_template_directory_uri() . '/dist/index.js', array(), '20151216', true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\scripts' );
/* function custom_editor_styles() {
	add_editor_style('/dist/css/editor-styles.css');
}
add_action('init', __NAMESPACE__ . '\\custom_editor_styles'); */
/**
 * Helper function to turn post data into json print
 *
 */
function printJsonPost () {
	$postData = (array)get_post();
	$acf = get_fields();
	$postData['acf'] = $acf;
	$postData['thumbnail'] = get_the_post_thumbnail_url(get_the_ID(),'hd');
	return json_encode($postData);
}
/**
 * Add support for svg
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', __NAMESPACE__ . '\\cc_mime_types');
/**
 * Add  key for Google maps for ACF google map field
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_acf_google_map_api( $api ){
	$api['key'] = 'YOUR_KEY_HERE';
	return $api;

}
add_filter('acf/fields/google_map/api', __NAMESPACE__ . '\\my_acf_google_map_api');