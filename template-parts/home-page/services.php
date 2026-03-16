<section id="section-services" class="section section-services">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
				<?php
				$image = get_field( 'services_image' );
				$size  = 'full';
				if ( $image ) :
					echo wp_get_attachment_image( $image, $size, false, array( 'data-animate' => 'fade-left' ) );
				endif;
				?>
			</div>
			<div class="col-12 col-lg-6" data-animate="fade-right" data-animate-stagger="0.15">
				<p class="section-services__subtitle" data-animate-child><?php the_field( 'services_subtitle' ); ?></p>
				<h2 class="section-services__title" data-animate-child><?php the_field( 'services_title' ); ?></h2>
				<p class="section-services__description" data-animate-child><?php the_field( 'services_description' ); ?></p>
				<a href="/dienstleistungen/" class="btn section-services__btn" data-animate-child><?php esc_html_e( 'Mehr Erfahren', 'bocco-group' ); ?></a>
			</div>

		</div>
	</div>
</section>
