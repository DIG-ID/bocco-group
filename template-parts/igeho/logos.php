<section class="section-presented-by">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col">
				<p class="page-subtitle text-center presented_by_title"><?php the_field( 'presented_by_title' ); ?></p>
			</div>
		</div>
		<div class="row">
			<?php
			$logos = get_field( 'presented_by_logos' );
			if ( $logos ) :
				foreach ( $logos as $logo_id ) : ?>
					<div class="col-12 col-md-4 mb-4 mb-md-0">
						<?php echo wp_get_attachment_image( $logo_id, 'full', false, array( 'class' => 'presented_by_logo' ) ); ?>
					</div>
				<?php endforeach;
			endif;
			?>
		</div>
	</div>
</section>