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
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null );
		wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array( 'google-fonts' ), $theme_version );
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
 * Add preconnect hints for Google Fonts to speed up font loading.
 *
 * @param array  $urls          Resource URLs.
 * @param string $relation_type Relation type (preconnect, dns-prefetch, etc.).
 * @return array
 */
function boccog_google_fonts_preconnect( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
		);
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'boccog_google_fonts_preconnect', 10, 2 );

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
 * Dequeue unused WordPress default scripts and styles for performance.
 *
 * Removes: emoji scripts, block editor styles (unused in classic theme),
 * jQuery Migrate, Dashicons on the front end, and Contact Form 7 assets
 * on pages that do not use a CF7 form.
 *
 * @return void
 */
function boccog_dequeue_unused_assets() {

	// Emoji — not used in this site.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Block editor styles — classic theme, Gutenberg blocks not used on the front end.
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-themes' );

	// jQuery Migrate — only needed for very old plugins/code targeting jQuery < 1.9.
	wp_dequeue_script( 'jquery-migrate' );

	// Dashicons — dequeue for non-logged-in visitors only; logged-in users
	// need them for the admin bar icons on the front end.
	if ( ! is_user_logged_in() ) {
		wp_dequeue_style( 'dashicons' );
	}

	// Contact Form 7 — load only on pages that actually contain a CF7 form.
	$cf7_templates = array(
		'page-templates/page-contacts.php',
		'page-templates/page-demo-request.php',
		'page-templates/page-landing-page.php',
		'page-templates/page-webinar.php',
		'page-templates/page-igeho.php',
	);

	if ( ! is_page_template( $cf7_templates ) ) {
		wp_dequeue_style( 'contact-form-7' );
		wp_dequeue_script( 'contact-form-7' );
	}

}
add_action( 'wp_enqueue_scripts', 'boccog_dequeue_unused_assets', 100 );

/**
 * Disable the WordPress emoji DNS prefetch link tag.
 *
 * @param array $urls          URLs to prefetch.
 * @param string $relation_type The relation type (dns-prefetch, preconnect, etc.).
 * @return array
 */
function boccog_remove_emoji_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		$urls = array_filter(
			$urls,
			function ( $url ) {
				return false === strpos( $url, 's.w.org' );
			}
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'boccog_remove_emoji_dns_prefetch', 10, 2 );

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
