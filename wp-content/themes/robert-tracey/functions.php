<?php
/**
 * Robert Tracey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Robert_Tracey
 */

if ( ! function_exists( 'robert_tracey_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function robert_tracey_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Robert Tracey, use a find and replace
		 * to change 'robert-tracey' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'robert-tracey', get_template_directory() . '/languages' );

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
		// register_nav_menus( array(
		// 	'menu-1' => esc_html__( 'Primary', 'robert-tracey' ),
		// ) );

		function register_my_menus() {
		  register_nav_menus(
		    array(
		      'robert-tracey' => __( 'Primary' ),
		      'footer_pages' => __( 'Footer Pages' ),
					'footer_wedding_items' => __( 'Footer Wedding Items' ),
					'footer_evening_items' => __( 'Footer Evening Items' )
		    )
		  );
		}
		add_action( 'init', 'register_my_menus' );

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
		add_theme_support( 'custom-background', apply_filters( 'robert_tracey_custom_background_args', array(
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
add_action( 'after_setup_theme', 'robert_tracey_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function robert_tracey_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'robert_tracey_content_width', 640 );
}
add_action( 'after_setup_theme', 'robert_tracey_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function robert_tracey_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'robert-tracey' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'robert-tracey' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'robert_tracey_widgets_init' );




/**
 * Custom Search Form Widget Area
 */
function search_form_widget_init() {

    register_sidebar( array(
        'name'          => 'Header Search Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="block-search">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'search_form_widget_init' );

/**
 * Custom Search Form Widget Area
 */
function home_layer_one_widget_init() {

    register_sidebar( array(
        'name'          => 'Home Layer One',
        'id'            => 'home-layer-one',
        'before_widget' => '<div class="home-layer-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'home_layer_one_widget_init' );

/**
 * Enqueue scripts and styles.
 */
function robert_tracey_scripts() {
	wp_enqueue_style( 'robert-tracey-style', get_stylesheet_uri() );

	wp_enqueue_script( 'robert-tracey-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'robert-tracey-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'robert_tracey_scripts' );

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

add_filter('wpseo_breadcrumb_single_link' ,'breadcrumbs_remove_links', 10 ,2);
function breadcrumbs_remove_links($link_output, $link ){

	if( $link['text'] == 'Clothing Items' ) {
		$link_output = '';
	}

	return $link_output;
}
