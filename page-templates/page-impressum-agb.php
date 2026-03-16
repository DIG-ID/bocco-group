<?php
/**
 * Template Name: Legal Info Page Template
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
							<h1 class="page-title text-center"><?php echo get_the_title(); ?></h1>
						</div>
					</div>
				</div>
			</header>
			<section class="page-content about-us-content">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-12 col-lg-6 legal-info-box">
							<?php echo get_field('legal_info_content'); ?>
						</div>
					</div>
				</div>
			</section>
		</article>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer();
