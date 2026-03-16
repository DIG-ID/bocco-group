<section id="section-testimonials" class="section section-testimonials">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-1 order-md-1 order-lg-0 order-xl-0" data-animate="fade-left" data-animate-stagger="0.15">
				<p class="section-testimonials__subtitle" data-animate-child><?php the_field( 'testimonials_subtitle' ); ?></p>
				<h2 class="section-testimonials__title" data-animate-child><?php the_field( 'testimonials_title' ); ?></h2>
				<div class="swiper testimonials-swiper" data-animate-child>
					<div class="swiper-wrapper">
						<?php
						if ( have_rows( 'testimonials_customer_testimonials' ) ) :
							while ( have_rows( 'testimonials_customer_testimonials' ) ) : the_row();
								$testi_name    = get_sub_field( 'customer_name' );
								$testi_details = get_sub_field( 'customer_details' );
								$testi_quote   = get_sub_field( 'customer_quote' );
								?>
								<figure class="swiper-slide" >
									<blockquote class="testimonial_quote">
										<p><?php echo $testi_quote; ?></p>
									</blockquote>
									<figcaption><?php echo $testi_name; ?> <span><?php echo $testi_details; ?></span></figcaption>
								</figure>
								<?php
							endwhile;
						endif;
						?>
					</div>
					<div class="swiper-pagination testimonials-pagination"></div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-0 order-md-0 order-lg-1 order-xl-1 px-0 px-sm-0 px-md-0 px-lg-0 px-xl-1" data-animate="fade-right">
				<div class="swiper testimonials-swiper-thumbnails">
					<div class="swiper-wrapper">
						<?php
						if ( have_rows( 'testimonials_customer_testimonials' ) ) :
							while ( have_rows( 'testimonials_customer_testimonials' ) ) : the_row();
								$testi_image_thumb = get_sub_field( 'customer_image' );
								echo '<div class="swiper-slide text-center text-md-start text-lg-start text-xl-end">' . wp_get_attachment_image( $testi_image_thumb, 'full' ) . '</div>';
							endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
