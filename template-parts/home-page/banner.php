<?php
/**
 * Home page banner section — LCP candidate.
 *
 * @package    BoccoGroup
 * @subpackage Sections
 */
?>
<section id="section-banner" class="section section-banner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-8 col-lg-6 order-1 order-sm-1 order-md-1 order-lg-0 order-xl-0">
				<p class="section-banner__subtitle"><?php the_field( 'banner_subtitle' ); ?></p>
				<h1 class="section-banner__title"><?php the_field( 'banner_title' ); ?></h1>
				<a href="<?php the_field( 'banner_button_link' ); ?>" class="btn btn--outlined section-banner__btn"><?php the_field( 'banner_button_title' ); ?></a>
			</div>
			<div class="col-10 col-lg-6 order-0 order-sm-0 order-md-0 order-lg-1 order-xl-1 mb-5 mb-lg-0">
				<?php
				$image = get_field( 'banner_image' );
				if ( $image ) :
					echo wp_get_attachment_image(
						$image,
						'full',
						false,
						array(
							'fetchpriority' => 'high',
							'loading'       => 'eager',
						)
					);
				endif;
				?>
			</div>
		</div>
	</div>
</section>
