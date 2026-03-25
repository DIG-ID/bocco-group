<?php $hero = get_field( 'hero' ); ?>
<?php if ( $hero ) : ?>
	<section id="section-hero" class="section-hero">
		<div class="container">
			<div class="row justify-content-lg-between">
				<div class="col-12 col-sm-12-col-md-12 col-lg-6">
					<div class="logo">
						<?php get_template_part( 'template-parts/main-logo' ); ?>
					</div>
					<p class="section-hero__subtitle"><?php echo esc_html( $hero['subtitle'] ); ?></p>
					<h1 class="section-hero__title"><?php echo wp_kses_post( $hero['title'] ); ?></h1>
					<a href="<?php echo esc_url( $hero['button_url'] ); ?>" class="btn d-inline-block"><?php echo esc_html( $hero['button_text'] ); ?></a>
				</div>
				<div class="col-12 col-sm-12-col-md-12 col-lg-6">
					<?php echo wp_get_attachment_image( $hero['image'], 'full', false, array( 'fetchpriority' => 'high', 'loading' => 'eager' ) ); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
