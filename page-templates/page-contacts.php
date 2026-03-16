<?php
/**
 * Template Name: Contacts Page Template
 *
 * @package BoccoGroup
 */

?>
<?php get_header(); ?>
	<?php do_action( 'before_main_content' ); ?>
		<?php
		$contacts_address = get_theme_mod( 'footer_contacts_address' );
		$contacts_tel     = get_theme_mod( 'footer_contacts_tel' );
		//$contacts_fax     = get_theme_mod( 'footer_contacts_fax' );
		$contacts_email   = get_theme_mod( 'footer_contacts_email' );
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-header">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col">
							<h1 class="page-title text-center"><?php echo wpautop( get_field( 'contact_title' ) ); ?></h1>
						</div>
					</div>
				</div>
			</header>
			<section class="page-content contact-content">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
							<div class="contact-box contact-box__location">
								<i class="bg-icons-Location"></i>
								<h2 class="contact-box__title"><?php esc_html_e( 'Adresse', 'bocco-group' ); ?></h2>
								<?php echo wpautop( $contacts_address ); ?>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
							<div class="contact-box contact-box__details">
								<i class="bg-icons-Contact"></i>
								<h2 class="contact-box__title"><?php esc_html_e( 'Kontakt', 'bocco-group' ); ?></h2>
								<ul class="box-details">
									<li><?php _e( 'Tel.', 'bocco-group' ); ?><a href="tel:<?php echo esc_attr( $contacts_tel ); ?>"> <?php echo $contacts_tel; ?></a></li>
								<!--<li><?php //_e( 'Fax', 'bocco-group' ); ?> <?php //echo esc_html( $contacts_fax ); ?></li>-->
									<li><?php _e( 'Mail:', 'bocco-group' ); ?> <a href="mailto:<?php echo esc_attr( $contacts_email ); ?>"><?php echo $contacts_email; ?></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="open-hours col text-center">
							<?php the_field( 'contact_open_hours' ); ?>
						</div>
					</div>
				</div>
			</section>
			<section class="map">
			<?php
				$location = get_field( 'contact_google_maps' );
				if ( $location ) : ?>
					<div class="acf-map map-contacts" data-zoom="12">
						<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
					</div>
			<?php endif; ?>
			</section>
		</article>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer(); ?>
