<?php
/**
 * komanda functions and definitions
 *
 * @package komanda
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function komanda_setup() {
	load_theme_textdomain( 'komanda', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'komanda' ),
		)
	);
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

	add_theme_support(
		'custom-background',
		apply_filters(
			'komanda_custom_background_args',
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

add_action( 'after_setup_theme', 'komanda_setup' );
/**
 *
 * @global int $content_width
 */
function komanda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'komanda_content_width', 640 );
}

add_action( 'after_setup_theme', 'komanda_content_width', 0 );
/**
 * Register widget area.
 */
function komanda_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'komanda' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'komanda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'komanda_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function komanda_scripts() {
	wp_enqueue_style( 'komanda-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'komanda-style-normalize', get_template_directory_uri() . '/assets/css/normalize.css');
	wp_enqueue_style( 'komanda-style-fancybox', get_template_directory_uri() . '/assets/css/fancybox.css');
	wp_enqueue_style( 'komanda-style-slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'komanda-style-main', get_template_directory_uri() . '/assets/css/main.css', ['komanda-style-normalize']);

	wp_enqueue_script( 'komanda-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'komanda-js-fancybox', get_template_directory_uri() . '/assets/js/fancybox.js', array('jquery'),'', true );
	wp_enqueue_script( 'komanda-js-slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), '', true );
	wp_enqueue_script( 'komanda-js-lazysizes', get_template_directory_uri() . '/assets/js/lazysizes.js', array('jquery'),'', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'komanda_scripts' );

if ( class_exists( 'WooCommerce' ) ) {
	require_once(get_template_directory() . '/inc/woo-c.php');
}

/***
 * kmnd_register_post_type
 * 
 */
require get_template_directory() . '/inc/kmnd_register_post_type.php';
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

$KmndYoastBreadcrumb_file = get_template_directory() . '/inc/seo/KmndYoastBreadcrumb.php';
if( file_exists($KmndYoastBreadcrumb_file) ){
	require_once $KmndYoastBreadcrumb_file;
}
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * required theme plugins.
 */
$required_plugins_file = get_template_directory() . '/kmnd-theme_settings/kmndThemeInit.php';
if(file_exists($required_plugins_file) ){
	include $required_plugins_file;
}

/** add class in body */
add_filter('body_class', function( $classes ){
		$classes[] = implode(' ', ['kmnd-theme'] );
	return $classes;
} );

function getUrlLogoHeader(){
	if( get_custom_logo() ){
		$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
		return $custom_logo__url[0]; 
	}elseif( get_field('logo_header','options') ){
		return get_field('logo_header','options');
	}else{
		return null;
	}
}
function komanda_link_font_family(){
	if( class_exists('ACF') && get_field('urls_font-family', 'options') ){
		$rows = get_field('urls_font-family', 'options');
			print_r('<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
			foreach( $rows as $row ){
				printf( '<link rel="stylesheet" href="%s">', str_replace(" ", '', $row['url_font-fam']) ) . '\n';
			}
	}
}
// add categorie gutenberg
function rstheme_block_categories($block_categories){
    return array_merge(
        [
            [        
                'slug'=>'tamplate_kmnd',
                'title'=> __('Theme templates','komanda'),
                'icon'=>'feedback',
            ]
        ], $block_categories
    );
}
if ( version_compare( $GLOBALS['wp_version'], '5.8-alpha-1', '<' ) ) {
    add_filter( 'block_categories', 'rstheme_block_categories', 10, 2 );
} else {
    add_filter('block_categories_all','rstheme_block_categories', 10, 2);
}
////redirect 301
function rudr_url_redirects() {
    /* in this array: old URLs=>new URLs  */
    $redirect_rules = [
          [
          'old' => '/header/',
          'new' => '/'
          ],
          [
            'old' => '/footer/',
            'new' => '/'
          ],
		  [
			'old' => '/kmnd-popup/',
			'new' => '/'
		  ],
        ];

    foreach( $redirect_rules as $rule ) :
		 if (stripos(urldecode($_SERVER['REQUEST_URI']),  $rule['old']) !== false) {
        	wp_redirect( site_url( $rule['new'] ), 301 );
        	exit();
    	}
    endforeach;
  }
  add_action('template_redirect', 'rudr_url_redirects');
//seo shema
/**
 * The data markup navigation menu, wp_nav_menu
**/
 function nav_menu_schema($content) {
	$pattern = "<a";
	$replacement = '<a itemprop="url"';
	$content = str_replace($pattern, $replacement, $content);
	return $content;
}
add_filter('wp_nav_menu', 'nav_menu_schema');
/** modal tab admin*/
add_action('admin_menu', 'my_plugin_add_thickbox');
function my_plugin_add_thickbox() {
    add_thickbox();
}
