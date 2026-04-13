<section id="servicesintro" class="section section-servicesintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicesintro__leftcol">
				<div class="section-servicesintro__img-pack" data-animate="fade-left">
					<img class="section-cmcontent-3__img-svg" src="<?php echo esc_url( wp_upload_dir()['url'] . '/02_Header.svg' ); ?>">
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicesintro__rightcol">
				<div class="section-servicesintro__content-wrapper" data-animate="fade-right" data-animate-stagger="0.15">
					<p class="section-servicesintro__subtitle" data-animate-child><?php the_field( 'overview_subtitle' ); ?></p>
					<h1 class="section-servicesintro__title" data-animate-child><?php the_field( 'overview_title' ); ?></h1>
					<p class="section-servicesintro__text" data-animate-child><?php the_field( 'overview_description' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
