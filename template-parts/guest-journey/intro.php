<section id="gjintro" class="section section-gjintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-7 col-xl-7 section-gjintro__leftcol">
				<div class="section-gjintro__content-wrapper" data-animate="fade-left" data-delay="0.2s">
					<p class="section-gjintro__subtitle" data-animate-child><?php the_field( 'overview_subtitle' ); ?></p>
					<h1 class="section-gjintro__title" data-animate-child><?php the_field( 'overview_title' ); ?></h1>
					<p class="section-gjintro__text" data-animate-child><?php the_field( 'overview_description' ); ?></p>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-5 col-xl-5 section-gjintro__rightcol">
				<div class="section-gjintro__img-pack">
					<img class="section-gjintro__img-abtop" src="<?php echo esc_url( wp_upload_dir()['url'] . '/GJT_overview.png' ); ?>" data-animate="fade-right">
				</div>
			</div>
		</div>
	</div>
</section>
