<?php
/**
 * Template Name: Demo Request Page Template
 *
 * @package BoccoGroup
 */

?>
<?php get_header(); ?>
	<?php do_action( 'before_main_content' ); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-header">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col">
							<p class="page-subtitle text-center"><?php the_field( 'demo_request_subtitle' ); ?></p>
							<h1 class="page-title text-center"><?php echo wp_kses_post( wpautop( get_field( 'demo_request_title' ) ) ); ?></h1>
						</div>
					</div>
				</div>
			</header>
			<section class="page-content demo-request-content">
				<div class="container">
					<div class="row justify-content-center align-item-center">
						<div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7">
							<?php echo do_shortcode( get_field( 'demo_request_form' ) ); ?>
						</div>
					</div>
				</div>
			</section>
		</article>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer();
