<section id="wbeintro" class="section section-wbeintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-7 col-xl-7 section-wbeintro__leftcol">
				<div class="section-wbeintro__content-wrapper" data-animate="fade-left" data-animate-stagger="0.15">
					<p class="section-wbeintro__subtitle" data-animate-child><?php the_field( 'overview_subtitle' ); ?></p>
					<h1 class="section-wbeintro__title" data-animate-child><?php the_field( 'overview_title' ); ?></h1>
					<p class="section-wbeintro__text" data-animate-child><?php the_field( 'overview_description' ); ?></p>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-5 col-xl-5 section-wbeintro__rightcol">
				<div class="section-wbeintro__img-pack" data-animate="fade-right" data-animate-stagger="0.15">
					<img class="section-wbeintro__img-abfirst" src="<?php echo esc_url( wp_upload_dir()['url'] . '/WBE_O_1.png' ); ?>" data-animate-child>
					<img class="section-wbeintro__img-abtop" src="<?php echo esc_url( wp_upload_dir()['url'] . '/WBE_O_2.png' ); ?>" data-animate-child>
					<img class="section-wbeintro__img-abbot" src="<?php echo esc_url( wp_upload_dir()['url'] . '/WBE_O_3.png' ); ?>" data-animate-child>
				</div>
			</div>
		</div>
	</div>
</section>