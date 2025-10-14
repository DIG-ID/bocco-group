<?php
/**
 * Template Name: Landing Page - IGEHO
 */

get_header( 'landing-page' );
do_action( 'before_main_content' );
get_template_part( 'template-parts/igeho/hero' );
get_template_part( 'template-parts/igeho/info' );
get_template_part( 'template-parts/igeho/form' );
get_template_part( 'template-parts/igeho/logos' );
do_action( 'after_main_content' );
get_footer( 'webinar' );
