<?php
/**
 * IDSsignature functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package IDSsignature
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.5' );
}

if ( ! function_exists( 'idssignature_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function idssignature_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on IDSsignature, use a find and replace
		 * to change 'idssignature' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'idssignature', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'idssignature' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'idssignature_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'idssignature_setup' );

/** Register Post Type Projects **/
add_action('init', 'init_projects_pt');
function init_projects_pt(){
	register_post_type('project', array(
		'labels'             => array(
			'name'               => 'Projects',
			'singular_name'      => 'Project',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new Project',
			'edit_item'          => 'Edit Project',
			'new_item'           => 'New Project',
			'view_item'          => 'View Project',
			'search_items'       => 'Search Projects',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Projects'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'					 => 'dashicons-chart-line',
		'supports'           => array('title')
	) );
}
add_action( 'init', 'create_taxonomy_type' );
function create_taxonomy_type(){

	register_taxonomy( 'type', [ 'project' ], [
		'label'                 => '',
		'labels'                => [
			'name'              => 'Types',
			'singular_name'     => 'Type',
			'search_items'      => 'Search Types',
			'all_items'         => 'All Types',
			'view_item '        => 'View Type',
			'parent_item'       => 'Parent Type',
			'parent_item_colon' => 'Parent Type:',
			'edit_item'         => 'Edit Type',
			'update_item'       => 'Update Type',
			'add_new_item'      => 'Add New Type',
			'new_item_name'     => 'New Type Name',
			'menu_name'         => 'Type',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,

		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => true,
		'show_in_rest'          => true,
		'rest_base'             => null,
	] );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function idssignature_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'idssignature_content_width', 640 );
}
add_action( 'after_setup_theme', 'idssignature_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function idssignature_scripts() {


	wp_enqueue_style( 'fullpage-style', 'https://unpkg.com/fullpage.js/dist/fullpage.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'fullpage-style-ex', 'https://alvarotrigo.com/fullPage/examples/1examples.css', array(), _S_VERSION );

	wp_enqueue_style( 'idssignature-style', get_template_directory_uri() . '/dist/css/main.min.css', array(), _S_VERSION );

	// deregister default jQuery included with Wordpress
	wp_deregister_script( 'jquery' );

	$jquery_cdn = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js';
	wp_enqueue_script( 'jquery', $jquery_cdn, array(), '3.4.1', true );

	wp_enqueue_script( 'idssignature-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'idssignature-fullpage', get_template_directory_uri() . '/assets/js/fullpage.scrollHorizontally.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'idssignature-fullpage-scroll', get_template_directory_uri() . '/assets/js/scrolloverflow.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'idssignature-fullpage-extensions', 'https://unpkg.com/fullpage.js/dist/fullpage.extensions.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'idssignature-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/app.min.js', array(), _S_VERSION, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'idssignature_scripts', 50 );

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
