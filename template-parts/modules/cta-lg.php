<?php
if ( get_field( 'use_cta' ) ) :
	$cta_title = get_field( 'cta_content_title' );
	$cta_desc  = get_field( 'cta_content_description' );
	$cta_link  = get_field( 'cta_content_link' );
	?>
	<section id="section-cta--lg" class="section section-cta section-cta--lg">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-8 col-sm-6 col-md-8 col-lg-9">
					<?php if ( $cta_title ) : ?>
						<h2 class="section-cta__title"><?php echo $cta_title; ?></h2>
					<?php endif; ?>
					<?php if ( $cta_desc ) : ?>
						<p class="section-cta__description"><?php echo $cta_desc; ?></p>
					<?php endif; ?>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<?php
					if ( $cta_link ) :
						$link_url    = $cta_link['url'];
						$link_title  = $cta_link['title'];
						$link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
						?>
						<a class="btn section-cta__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;

