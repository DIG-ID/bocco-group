<?php
/**
 * Template Name: Landing Page
 *
 * @package BoccoGroup
 */

get_header( 'landing-page' );
do_action( 'before_main_content' );
	get_template_part( 'template-parts/landing-page/hero' );
	get_template_part( 'template-parts/landing-page/highlights' );
	get_template_part( 'template-parts/landing-page/html-templates' );
	get_template_part( 'template-parts/landing-page/offers' );
	get_template_part( 'template-parts/landing-page/contact-form' );
do_action( 'after_main_content' );
get_footer( 'landing-page' );
