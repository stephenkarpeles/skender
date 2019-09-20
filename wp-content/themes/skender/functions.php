<?php
/**
 * skender functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skender
 */

if ( ! function_exists( 'skender_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function skender_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on skender, use a find and replace
		 * to change 'skender' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'skender', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'skender' ),
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
		add_theme_support( 'custom-background', apply_filters( 'skender_custom_background_args', array(
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
add_action( 'after_setup_theme', 'skender_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skender_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'skender_content_width', 640 );
}
add_action( 'after_setup_theme', 'skender_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skender_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'skender' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'skender' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'skender_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function skender_scripts() {
	wp_enqueue_style( 'skender-style', get_stylesheet_uri() );

	wp_enqueue_script( 'skender-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'skender-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  wp_enqueue_script("jquery");

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skender_scripts' );

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

/**
 * Enables SVG uploads.
 */
function pd_custom_mtypes( $m ){
  $m['svg'] = 'image/svg+xml';
  $m['svgz'] = 'image/svg+xml';
  return $m;
}
add_filter( 'upload_mimes', 'pd_custom_mtypes' );

/**
* Register new custom post types
*/
add_action( 'init', 'skender_post_types_init' );
function skender_post_types_init() { 
  
  $project_labels = array(
    'name'               => _x( 'Projects', 'post type general name', 'skender' ),
    'singular_name'      => _x( 'Project', 'post type singular name', 'skender' ),
    'menu_name'          => _x( 'Projects', 'admin menu', 'skender' ),
    'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'skender' ),
    'add_new'            => _x( 'Add New', 'Project', 'skender' ),
    'add_new_item'       => __( 'Add New Project', 'skender' ),
    'new_item'           => __( 'New Project', 'skender' ),
    'edit_item'          => __( 'Edit Project', 'skender' ),
    'view_item'          => __( 'View Project', 'skender' ),
    'all_items'          => __( 'All Projects', 'skender' ),
    'search_items'       => __( 'Search Projects', 'skender' ),
    'parent_item_colon'  => __( 'Parent Projects:', 'skender' ),
    'not_found'          => __( 'No Projects found.', 'skender' ),
    'not_found_in_trash' => __( 'No Projects found in Trash.', 'skender' )
  );
  $project_args = array(
    'labels'             => $project_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'project' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-building',
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
  );
  register_post_type( 'project', $project_args );

  $team_labels = array(
    'name'               => _x( 'Team Members', 'post type general name', 'skender' ),
    'singular_name'      => _x( 'Team Member', 'post type singular name', 'skender' ),
    'menu_name'          => _x( 'Team', 'admin menu', 'skender' ),
    'name_admin_bar'     => _x( 'Team Member', 'add new on admin bar', 'skender' ),
    'add_new'            => _x( 'Add New', 'team member', 'skender' ),
    'add_new_item'       => __( 'Add New Team Member', 'skender' ),
    'new_item'           => __( 'New Team Member', 'skender' ),
    'edit_item'          => __( 'Edit Team Member', 'skender' ),
    'view_item'          => __( 'View Team Member', 'skender' ),
    'all_items'          => __( 'All Team Members', 'skender' ),
    'search_items'       => __( 'Search Team Members', 'skender' ),
    'parent_item_colon'  => __( 'Parent Team Members:', 'skender' ),
    'not_found'          => __( 'No Team Members found.', 'skender' ),
    'not_found_in_trash' => __( 'No Team Members found in Trash.', 'skender' )
  );
  $team_args = array(
    'labels'             => $team_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'team-member' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-admin-users',
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
  );
  register_post_type( 'team', $team_args );

  $news_media_labels = array(
    'name'               => _x( 'News/Media', 'post type general name', 'skender' ),
    'singular_name'      => _x( 'News/Media', 'post type singular name', 'skender' ),
    'menu_name'          => _x( 'News/Media', 'admin menu', 'skender' ),
    'name_admin_bar'     => _x( 'News/Media', 'add new on admin bar', 'skender' ),
    'add_new'            => _x( 'Add New', 'News & Media', 'skender' ),
    'add_new_item'       => __( 'Add New Item', 'skender' ),
    'new_item'           => __( 'New Item', 'skender' ),
    'edit_item'          => __( 'Edit Item', 'skender' ),
    'view_item'          => __( 'View Item', 'skender' ),
    'all_items'          => __( 'All News/Media', 'skender' ),
    'search_items'       => __( 'Search News/Media', 'skender' ),
    'parent_item_colon'  => __( 'Parent News/Media:', 'skender' ),
    'not_found'          => __( 'No News/Media found.', 'skender' ),
    'not_found_in_trash' => __( 'No News/Media found in Trash.', 'skender' )
  );
  $news_media_args = array(
    'labels'             => $news_media_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'news-media-item' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_icon'          => 'dashicons-format-chat',
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
  );
  register_post_type( 'news-media', $news_media_args );

}

// Register taxonomies

add_action( 'init', 'skender_create_taxonomies', 0 );

function skender_create_taxonomies() {
  
  $labels = array(
    'name'              => _x( 'Project Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Project Categories' ),
    'all_items'         => __( 'All Project Categories' ),
    'parent_item'       => __( 'Parent Project Category' ),
    'parent_item_colon' => __( 'Parent Project Category:' ),
    'edit_item'         => __( 'Edit Project Category' ),
    'update_item'       => __( 'Update Project Category' ),
    'add_new_item'      => __( 'Add New Project Category' ),
    'new_item_name'     => __( 'New Project Category Name' ),
    'menu_name'         => __( 'Project Categories' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'project-category' ),
  );

  register_taxonomy( 'project-category', array( 'project' ), $args );

}


/**
* Setup Isotope
*/
function add_isotope() {
    wp_register_script( 'isotope', get_template_directory_uri().'/js/isotope.min.js', array('jquery'),  true );
    wp_register_script( 'isotope-init', get_template_directory_uri().'/js/isotope-init.js', array('jquery', 'isotope'),  true );
 
    wp_enqueue_script('isotope-init');
}
 
add_action( 'wp_enqueue_scripts', 'add_isotope' );
