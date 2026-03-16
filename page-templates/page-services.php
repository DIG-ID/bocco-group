<?php
/**
 * Template Name: Services Page Template
 *
 * @package BoccoGroup
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/services/intro' );
	get_template_part( 'template-parts/services/content-1' );
	get_template_part( 'template-parts/services/content-2' );
do_action( 'after_main_content' );
get_footer();
