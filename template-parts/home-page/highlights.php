<?php if ( have_rows( 'highlights_block' ) ) : ?>
	<section id="section-highlights" class="section section-highlights" data-animate="fade-up" data-animate-eager>
		<div class="container">
			<div class="row">
				<?php while ( have_rows( 'highlights_block' ) ) : the_row(); ?>
					<?php
					$block_icon        = get_sub_field( 'icon' );
					$block_title       = get_sub_field( 'title' );
					$block_description = get_sub_field( 'description' );
					?>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 highlights-card">
						<i class="<?php echo $block_icon; ?>"></i>
						<div class="highlights-card__content">
							<?php if ( $block_title ) : ?>
								<p class="highlights-card__title"><?php echo $block_title; ?></p>
							<?php endif; ?>
							<p class="highlights-card__description"><?php echo $block_description; ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif;
