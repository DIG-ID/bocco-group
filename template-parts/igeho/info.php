<?php if ( have_rows( 'info' ) ) : ?>
	<section id="section-info" class="section section-info">
		<div class="container">
			<div class="row">
				<?php while ( have_rows( 'info' ) ) : the_row(); ?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
						<div class="info-card">
							<?php
							$icon = get_sub_field( 'icon' );
							if ( $icon ) {
								echo wp_get_attachment_image( $icon, 'full', false, array( 'class' => 'info-card__icon' ) );
							}
							?>
							<p class="info-card__title"><?php echo get_sub_field( 'text' ); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif;
