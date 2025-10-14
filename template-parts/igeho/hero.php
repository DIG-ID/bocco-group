<section id="section-banner" class="section section-banner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-8 col-lg-6 order-1 order-sm-1 order-md-1 order-lg-0 order-xl-0">
				<h1 class="section-banner__title"><?php the_field( 'hero_title' ); ?></h1>
				<p class="section-banner__subtitle-1"><span>mit</span> Apero & Häppchen</p>
				<p class="section-banner__subtitle-2"><span>und</span> DJ Sil van Ried</p>
			</div>
			<div class="col-10 col-lg-6 order-0 order-sm-0 order-md-0 order-lg-1 order-xl-1 mb-5 mb-lg-0">
				<?php
				$image = get_field( 'hero_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full' );
				endif;
				?>
			</div>
		</div>
	</div>
</section>