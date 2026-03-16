<section id="section-products" class="section section-products">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-md-12 col-lg-12 col-xl-5" data-animate="fade-left" data-animate-stagger="0.15">
				<p class="section-products__subtitle" data-animate-child><?php the_field( 'products_subtitle' ); ?></p>
				<h2 class="section-products__title" data-animate-child><?php the_field( 'products_title' ); ?></h2>
				<p class="section-products__description" data-animate-child><?php the_field( 'products_description' ); ?></p>
			</div>
			<div class="col-12 col-md-12 col-lg-12 col-xl-7">
				<div class="row product-cards-wrapper row-eq-height" data-animate="fade-right" data-animate-stagger="0.15">
					<?php
					if ( have_rows('products_repeater') ) :
						while( have_rows('products_repeater') ) : the_row();
							$product_icon        = get_sub_field('icon');
							$product_title       = get_sub_field('title');
							$product_description = get_sub_field('description');
							$product_link        = get_sub_field('link');
							?>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 product-card-wrapper" data-animate-child>
								<a href="<?php echo esc_url( $product_link ); ?>" >
									<article class="product-card">
										<i class="<?php echo esc_attr( $product_icon ); ?>"></i>
										<h3 class="product-card__title"><?php echo $product_title; ?></h3>
										<p class="product-card__description"><?php echo $product_description; ?></p>
										<span class="product-card__btn"><?php esc_html_e( 'Mehr Erfahren ➔', 'bocco-group' ); ?></span>
									</article>
								</a>
							</div>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
