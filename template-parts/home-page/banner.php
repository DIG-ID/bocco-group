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
			<div class="col-8 col-lg-6 order-1 order-sm-1 order-md-1 order-lg-0 order-xl-0" data-banner-intro>
				<p class="section-banner__subtitle" data-banner-subtitle><?php the_field( 'banner_subtitle' ); ?></p>
				<h1 class="section-banner__title" data-banner-typewriter><?php the_field( 'banner_title' ); ?></h1>
				<a href="<?php the_field( 'banner_button_link' ); ?>" class="btn btn--outlined section-banner__btn" data-banner-cta><?php the_field( 'banner_button_title' ); ?></a>
			</div>
			<div class="col-10 col-lg-6 order-0 order-sm-0 order-md-0 order-lg-1 order-xl-1 mb-5 mb-lg-0" data-animate="fade-in" data-animate-eager>
				<?php
				if ( 'video' === get_field( 'banner_format' ) ) :
					$video  = get_field( 'banner_video_file' );
					$poster = get_field( 'banner_video_poster' );
					if ( $video ) :
						$poster_url = $poster ? wp_get_attachment_image_url( $poster, 'full' ) : '';
						?>
						<video
							autoplay
							loop
							muted
							playsinline
							preload="auto"
							aria-hidden="true"
							<?php if ( $poster_url ) : ?>
								poster="<?php echo esc_url( $poster_url ); ?>"
							<?php endif; ?>
						>
							<source src="<?php echo esc_url( $video ); ?>" type="video/webm">
						</video>
						<?php
					endif;
				else :
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
				endif;
				?>
			</div>
		</div>
	</div>
</section>
