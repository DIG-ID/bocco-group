<?php
/**
 * The template for displaying services archive pages
 */

get_header(); ?>

<?php do_action( 'before_main_content' ); ?>

<?php if ( have_posts() ) : ?>

	<header class="page-header p-0 position-relative">
		<div class="wrap">
			<div class="canvas">
				<div class="blob b1"></div>
				<div class="blob b2"></div>
				<div class="blob b3"></div>
				<div class="blob b4"></div>
				<div class="blob b5"></div>
				<div class="blob b6"></div>
				<div class="blob b7"></div>
			</div>
		</div>
		<h1 class="page-title animated-bg text-center"><?php esc_html_e( 'Presseartikel', 'bocco-group' ); ?></h1>
	</header><!-- .page-header -->
	<section class="page-content press-content">
		<div class="container">
			<div class="row" data-animate="fade-up" data-animate-stagger="0.25">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
						<div class="col-12 col-md-6 col-lg-6 col-xl-4" data-animate-child>
							<article id="press-<?php the_ID(); ?>" <?php post_class(); ?>>
								<p class="press-publisher"><?php the_field( 'press_publisher' ); ?></p>
								<!-- <p class="press-date"><?php //the_date( 'j F Y' ); ?></p> -->
								<h2 class="press-title"><?php the_title(); ?></h2>
								<a href="<?php the_field( 'press_pdf_file' ); ?>" target="blank" class="press-btn"><?php esc_html_e( 'Mehr erfahren', 'bocco-group' ); ?></a>
							</article>
						</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php do_action( 'after_main_content' ); ?>

<?php get_footer();
