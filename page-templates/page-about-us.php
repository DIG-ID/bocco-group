<?php
/**
 * Template Name: About Us Page Template
 *
 * @package BoccoGroup
 */

?>

<?php get_header(); ?>
	<?php do_action( 'before_main_content' ); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-header">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col">
							<h1 class="page-title text-center"><?php echo wp_kses_post( wpautop( get_field( 'about_us_title' ) ) ); ?></h1>
						</div>
					</div>
				</div>
			</header>
			<section class="page-content about-us-content">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-12 col-lg-6 text-center text-sm-center text-md-start">
						<?php
							$image = get_field( 'about_us_content_image' );
							$size  = 'full';
							if ( $image ) :
								echo wp_get_attachment_image( $image, $size, false, array( 'data-animate' => 'fade-left' ) );
							endif;
							?>
						</div>
						<div class="col-12 col-lg-6" data-animate="fade-right" data-animate-stagger="0.15">
							<p class="section__subtitle" data-animate-child><?php the_field( 'about_us_content_subtitle' ); ?></p>
							<h2 class="section__title" data-animate-child><?php the_field( 'about_us_content_title' ); ?></h2>
							<p class="section__description" data-animate-child><?php the_field( 'about_us_content_description' ); ?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="team-section">
				<div class="team-section__heading">
					<div class="container">
						<div class="row justify-content-center align-item-center">
							<div class="col text-center" data-animate="fade-up" data-animate-stagger="0.15">
								<p class="section__subtitle" data-animate-child><?php the_field( 'team_subtitle' ); ?></p>
								<h2 class="section__title" data-animate-child><?php the_field( 'team_title' ); ?></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="team-members">
					<div class="container">
						<div class="row">
							<?php
							if ( have_rows( 'about_us_team' ) ) :
								while( have_rows( 'about_us_team' ) ) : the_row();
									$member_image    = get_sub_field( 'image' );
									$member_name     = get_sub_field( 'name' );
									$member_position = get_sub_field( 'position' );
									?>
									<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center" data-animate="fade-up" data-animate-stagger="0.25">
										<div class="team-member text-center" data-animate-child>
											<?php echo wp_get_attachment_image( $member_image, 'full' ); ?>
											<div class="team-member__details">
												<p class="team-member__name"><?php echo esc_html( $member_name ); ?></p>
												<p class="team-member__position"><?php echo esc_html( $member_position ); ?></p>
											</div>
										</div>
									</div>
									<?php
								endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</section>
		</article>
	<?php do_action( 'after_main_content' ); ?>
<?php get_footer();
