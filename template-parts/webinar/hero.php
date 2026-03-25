<section class="section-webinar-hero" style="background: url( <?php echo get_template_directory_uri(); ?>/src/images/boccowebinar-hero-bg-2.svg ); background-position: center center; background-size: cover; background-repeat: no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-12 webinar-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/boccowebinar.svg" alt="bocco-webinar logo">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
				<h1><?php the_field( 'hero_title' ); ?></h1>
				<h2><?php the_field( 'hero_subtitle' ); ?></h2>
				<p><?php the_field( 'hero_description' ); ?></p>
				<?php
				$hero_link = get_field( 'hero_link' );
				if ( $hero_link ) :
					$link_url    = $hero_link['url'];
					$link_title  = $hero_link['title'];
					$link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
					?>
					<a class="section-webinar-hero__button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
							<path d="M7.29289 12.7071C7.68342 13.0976 8.31658 13.0976 8.70711 12.7071L15.0711 6.34315C15.4616 5.95262 15.4616 5.31946 15.0711 4.92893C14.6805 4.53841 14.0474 4.53841 13.6569 4.92893L8 10.5858L2.34315 4.92893C1.95262 4.53841 1.31946 4.53841 0.928932 4.92893C0.538408 5.31946 0.538408 5.95262 0.928932 6.34315L7.29289 12.7071ZM7 4.37114e-08L7 12L9 12L9 -4.37114e-08L7 4.37114e-08Z" fill="#EDF1FD"/>
						</svg>
					</a>
					<?php
				endif;
				?>
			</div>
			<div class="col-12 col-lg-6">
				<div class="section-webinar-hero__image">
					<?php
					$hero_img    = get_field( 'hero_image' );
					$hero_img_xl = get_field( 'hero_image_xl' );
					if ( $hero_img || $hero_img_xl ) :
						echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'section-webinar-hero__image--sm', 'fetchpriority' => 'high', 'loading' => 'eager' ) );
						echo wp_get_attachment_image( $hero_img_xl, 'full', false, array( 'class' => 'section-webinar-hero__image--xl', 'fetchpriority' => 'high', 'loading' => 'eager' ) );
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
