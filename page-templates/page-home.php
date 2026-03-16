<?php
/**
 * Template Name: Home Page Template
 *
 * @package BoccoGroup
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/home-page/banner' );
	get_template_part( 'template-parts/home-page/highlights' );
	get_template_part( 'template-parts/home-page/products' );
	get_template_part( 'template-parts/home-page/services' );
	get_template_part( 'template-parts/home-page/call-to-action' );
	get_template_part( 'template-parts/home-page/testimonials' );
	get_template_part( 'template-parts/home-page/partners' );
do_action( 'after_main_content' );
get_footer();
