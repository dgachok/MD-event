<?php

/**
 * Mikhrin and Co Site functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mikhrin_and_Co_Site
 */

if ( ! function_exists( 'mikhrin_and_co_site_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function mikhrin_and_co_site_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mikhrin and Co Site, use a find and replace
	 * to change 'mikhrin-and-co-site' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mikhrin-and-co-site', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'mikhrin-and-co-site' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mikhrin_and_co_site_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mikhrin_and_co_site_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mikhrin_and_co_site_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mikhrin_and_co_site_content_width', 640 );
}
add_action( 'after_setup_theme', 'mikhrin_and_co_site_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mikhrin_and_co_site_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mikhrin-and-co-site' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mikhrin-and-co-site' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mikhrin_and_co_site_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mikhrin_and_co_site_scripts() {
		
	wp_enqueue_script( 'mikhrin-and-co-site-navigation', get_template_directory_uri() . '/src/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mikhrin-and-co-site-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_deregister_script( 'jquery' );

	wp_deregister_script( 'jquery-ui' );

	wp_register_script( 'jquery', get_template_directory_uri() . '/dist/js/jquery-2.2.4.min.js', array(), '2.2.4', false);

	wp_register_script( 'jquery-ui', get_template_directory_uri() . '/dist/js/jquery-ui.min.js', array(), '1.11.4', false);

	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array(), '3.3.6', false);

	wp_register_script( 'main', get_template_directory_uri() . '/dist/js/main.min.js', array(), '1.0.1', false);

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'jquery-ui');

	wp_enqueue_script( 'bootstrap-js');

	wp_enqueue_script( 'main' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mikhrin_and_co_site_scripts' );


function mikhrin_and_co_site_styles() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/dist/css/bootstrap.min.css');

	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/dist/css/fonts.css');

	wp_enqueue_style( 'base-style', get_template_directory_uri() . '/dist/css/style.min.css');



}
add_action('wp_enqueue_scripts', 'mikhrin_and_co_site_styles');

function main_page_template( $template ) {
	if( is_page('main')  ){
		if ( $new_template = locate_template( array( 'page-main.php','page-horeca.php' ) ) )
			return $new_template ;
		}
	return $template;
}

add_filter( 'template_include', 'main_page_template', 99 );

add_action('publish_page', 'add_custom_field_automatically');
add_action('publish_post', 'add_custom_field_automatically');
function add_custom_field_automatically($post_ID) {
	global $wpdb;
	if(!wp_is_post_revision($post_ID)) {
		add_post_meta($post_ID, 'price', '', true);
	}
}

function wpb_alter_comment_form_fields($fields) {
    unset($fields['url']);
    unset($fields['email']);
    return $fields;
}
add_filter('comment_form_default_fields', 'wpb_alter_comment_form_fields');


function custom_validate_comment_author() {
    if( empty( $_POST['author'] ) || ( !preg_match( '/[^\s]/', $_POST['author'] ) ) )
        wp_die( __('Ошибка! Пожалуйста, заполните поле Имя') );
}
add_action( 'pre_comment_on_post', 'custom_validate_comment_author' );

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
