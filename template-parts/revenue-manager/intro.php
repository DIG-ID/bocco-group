<section id="rmintro" class="section section-rmintro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-7 col-xl-7 section-rmintro__leftcol">
				<div class="section-rmintro__content-wrapper" data-animate="fade-left" data-animate-stagger="0.15">
					<p class="section-rmintro__subtitle" data-animate-child><?php the_field( 'overview_subtitle' ); ?></p>
					<h1 class="section-rmintro__title" data-animate-child><?php the_field( 'overview_title' ); ?></h1>
					<p class="section-rmintro__text" data-animate-child><?php the_field( 'overview_description' ); ?></p>
					<p class="section-rmintro__title-text" data-animate-child><?php esc_html_e( 'Rate Shopper', 'bocco-group' ); ?></p>
					<p class="section-rmintro__text" data-animate-child><?php esc_html_e( 'Der Rate Shopper versorgt Sie mit Informationen aus den Online-Buchungssystemen und verschafft Ihnen einen Überblick über die Preis- und Verfügbarkeitssituation der regionalen Mitbewerber.', 'bocco-group' ); ?></p>
					<p class="section-rmintro__title-text" data-animate-child><?php esc_html_e( 'Revenue Management System', 'bocco-group' ); ?></p>
					<p class="section-rmintro__text" data-animate-child><?php esc_html_e( 'Das Revenue Management System errechnet automatisch für jeden Tag im Jahr den optimalen Preis. Die Software analysiert Angebot und Nachfrage ihrer Destination, und kombiniert diese Daten mit der Auslastungssituation in ihrem Hotel.', 'bocco-group' ); ?></p>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-5 col-xl-5 section-rmintro__rightcol">
				<div class="section-rmintro__img-pack" data-animate="fade-right" data-animate-stagger="0.15">
					<img class="section-rmintro__img-abtop" src="<?php echo esc_url( wp_upload_dir()['url'] . '/RM_O_1.png' ); ?>" data-animate-child>
					<img class="section-rmintro__img-abbot" src="<?php echo esc_url( wp_upload_dir()['url'] . '/RM_O_2.png' ); ?>" data-animate-child>
				</div>
			</div>
		</div>
	</div>
</section>
