<section id="section-cta" class="section section-cta">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-8 col-sm-6 col-md-8 col-lg-9">
				<p class="section-cta__title" data-animate="fade-left"><?php the_field( 'call_to_action_title' ); ?></p>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php the_field( 'call_to_action_page_link' ); ?>" class="btn section-cta__btn" data-animate="fade-right"><?php esc_html_e( 'Kontaktieren Sie uns', 'bocco-goup' ); ?></a>
			</div>
		</div>
	</div>
</section>
