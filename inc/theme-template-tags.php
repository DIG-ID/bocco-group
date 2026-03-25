<?php
/**
 * Custom theme template tags.
 *
 * @package    BoccoGroup
 * @subpackage Modules
 */

/**
 * Output the opening tag for the main content area.
 *
 * @return void
 */
function boccog_theme_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'boccog_theme_before_main_content' );

/**
 * Output the closing tag for the main content area.
 *
 * @return void
 */
function boccog_theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'boccog_theme_after_main_content' );
