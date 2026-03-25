<?php
/**
 * Theme functions and definitions.
 *
 * @package    BoccoGroup
 * @subpackage Admin
 */

/**
 * Setup theme features, menus and image sizes.
 *
 * @return void
 */
function boccog_theme_setup() {

	register_nav_menus(
		array(
			'main-nav'   => __( 'Main Menu', 'bocco-group' ),
			'footer-nav' => __( 'Footer Menu', 'bocco-group' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_theme_support( 'widgets' );

	add_theme_support( 'widgets-block-editor' );

	add_image_size( 'custom', 1920, 900, array( 'center', 'center' ) );

}
add_action( 'after_setup_theme', 'boccog_theme_setup' );

/**
 * Register sidebars and widgetized areas.
 *
 * @return void
 */
function boccog_theme_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer Widgets',
			'id'            => 'footer_widgets',
			'before_widget' => '<div id="%1$s" class="col-12 col-sm-6 col-md-6 col-lg-6 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

}
add_action( 'widgets_init', 'boccog_theme_widgets_init' );

/**
 * Enqueue front-end styles and scripts.
 *
 * @return void
 */
function boccog_theme_enqueue_styles() {

	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	if ( ! is_admin() ) :
		wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, true );
		if ( is_page_template( 'page-templates/page-contacts.php' ) ) :
			wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo', array(), $theme_version, true );
			wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/dist/google-maps.js', array( 'jquery' ), $theme_version, true );
		endif;
	endif;

}
add_action( 'wp_enqueue_scripts', 'boccog_theme_enqueue_styles' );

/**
 * Add preload hint for the main stylesheet to speed up CSS discovery.
 *
 * @return void
 */
function boccog_preload_main_css() {
	if ( is_admin() ) {
		return;
	}
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	$css_url       = esc_url( get_stylesheet_directory_uri() . '/dist/main.css?ver=' . $theme_version );
	echo '<link rel="preload" href="' . $css_url . '" as="style">' . "\n";
}
add_action( 'wp_head', 'boccog_preload_main_css', 1 );

/**
 * Set the ACF Google Maps API key.
 *
 * @return void
 */
function boccog_acf_init() {
	acf_update_setting( 'google_api_key', 'AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo' );
}
add_action( 'acf/init', 'boccog_acf_init' );

/**
 * Validation: image
 * Control: text, WP_Customize_Image_Control
 *
 * @uses    wp_check_filetype()        https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @uses    in_array()                http://php.net/manual/en/function.in-array.php
 */
function boccog_sanitize_image( $file, $setting ) {

	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon',
		'svg'          => 'image/svg+xml',
		'svgz'         => 'image/svg+xml',
	);

	// Check file type from file name
	$file_ext = wp_check_filetype( $file, $mimes );

	// If file has a valid mime type return it, otherwise return default
	return ( $file_ext['ext'] ? $file : $setting->default );
}

add_filter( 'get_the_archive_title', function ( $title ) {
	if ( is_category() ) :
		$title = single_cat_title( '', false );
	elseif ( is_tag() ) :
		$title = single_tag_title( '', false );
	elseif ( is_author() ) :
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	elseif ( is_tax() ) : //for custom post types
		$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
	elseif ( is_post_type_archive() ) :
		$title = post_type_archive_title( '', false );
	endif;
	return $title;
});

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/theme-customizer.php';

// Custom navigation walker.
require get_template_directory() . '/inc/custom-nav-walker.php';

// Theme custom admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';
