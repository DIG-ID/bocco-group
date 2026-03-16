<?php
/**
 * Template Name: Landing Page - Webinar
 *
 * @package BoccoGroup
 */

get_header( 'webinar' );
do_action( 'before_main_content' );
	get_template_part( 'template-parts/webinar/hero' );
	get_template_part( 'template-parts/webinar/intro' );
	get_template_part( 'template-parts/webinar/loop' );
	// get_template_part( 'template-parts/webinar/newsletter' );
do_action( 'after_main_content' );
get_footer( 'webinar' );
