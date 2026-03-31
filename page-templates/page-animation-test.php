<?php
/**
 * Template Name: Animation Test Template
 *
 * @package BoccoGroup
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/animation-test/banner' );
do_action( 'after_main_content' );
get_footer();
