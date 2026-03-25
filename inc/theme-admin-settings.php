<?php
/**
 * Customise WordPress admin look and feel.
 *
 * @package    BoccoGroup
 * @subpackage Admin
 */

/**
 * Disable default dashboard widgets.
 *
 * @return void
 */
function boccog_disable_dashboard_widgets() {
	global $wp_meta_boxes;
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts'] );
}
add_action( 'wp_dashboard_setup', 'boccog_disable_dashboard_widgets', 999 );


/************* CUSTOM LOGIN PAGE *****************/

/**
 * Enqueue custom login page stylesheet.
 *
 * @return void
 */
function boccog_login_css() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'admin-login-css', get_theme_file_uri( '/dist/admin-login.css' ), array(), $theme_version );
}
add_action( 'login_enqueue_scripts', 'boccog_login_css', 10 );

/**
 * Change the login page logo link to the site home URL.
 *
 * @return string
 */
function boccog_login_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'boccog_login_url' );

/**
 * Change the login page logo alt text to the site name.
 *
 * @return string
 */
function boccog_login_title() {
	return get_option( 'blogname' );
}
add_filter( 'login_headertext', 'boccog_login_title' );

/**
 * Output inline CSS to replace the login page logo image.
 *
 * @return void
 */
function boccog_login_logo() {
	echo '<style>
	h1 a {
		background-image: url(' . esc_url( get_template_directory_uri() ) . '/src/images/Logo_Bocco.svg) !important;
	}
	</style>';
}
add_action( 'login_head', 'boccog_login_logo' );


/************* CUSTOMIZE ADMIN *******************/

/**
 * Remove the WordPress logo from the admin bar.
 *
 * @param WP_Admin_Bar $wp_admin_bar The admin bar instance.
 * @return void
 */
function boccog_remove_wp_admin_bar_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'boccog_remove_wp_admin_bar_logo', 999 );
