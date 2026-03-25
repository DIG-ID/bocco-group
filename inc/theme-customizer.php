<?php
/**
 * Theme Customizer registration and configuration.
 *
 * @package    BoccoGroup
 * @subpackage Admin
 */

/**
 * Register theme Customizer panels, sections, settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize The Customizer manager instance.
 * @return void
 */
function boccog_theme_customizer_register( $wp_customize ) {

	$wp_customize->add_panel(
		'boccog_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Bocco Group Options', 'bocco-group' ),
			'description'    => __( 'Options for the Bocco Group Theme', 'bocco-group' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/mega-menu.php' );
	require get_parent_theme_file_path( '/inc/customizer/newsletter.php' );
	require get_parent_theme_file_path( '/inc/customizer/404.php' );
	require get_parent_theme_file_path( '/inc/customizer/footer.php' );
	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}

add_action( 'customize_register', 'boccog_theme_customizer_register' );
