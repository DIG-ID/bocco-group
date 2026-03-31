<?php
/**
 * The template for displaying services archive pages
 */

get_header(); ?>

<?php do_action( 'before_main_content' ); ?>

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title text-center"><?php esc_html_e( 'Presseartikel', 'bocco-group' ); ?></h1>	
	</header><!-- .page-header -->

  <?php endif; ?>

<?php do_action( 'after_main_content' ); ?>

<?php get_footer();