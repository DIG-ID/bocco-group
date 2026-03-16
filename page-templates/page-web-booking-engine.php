<?php
/**
 * Template Name: Web Booking Engine Page Template
 * Template Post Type: post, page, products
 *
 * @package BoccoGroup
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/webbookingengine/intro' );
	get_template_part( 'template-parts/webbookingengine/content-1' );
	get_template_part( 'template-parts/webbookingengine/content-2' );
	get_template_part( 'template-parts/modules/product-outro' );
do_action( 'after_main_content' );
get_footer();
