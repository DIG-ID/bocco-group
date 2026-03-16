<section id="gjcontent-1" class="section section-gjcontent-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gjcontent-1__leftcol">
				<div class="section-gjcontent-1__img-pack" data-animate="fade-left" data-animate-stagger="0.15">
					<img class="section-gjcontent-1__img-abtop" src="<?php echo esc_url( wp_upload_dir()['url'] . '/vorgeschlagene.png' ); ?>" data-animate-child>
					<img class="section-gjcontent-1__img-abbot" src="<?php echo esc_url( wp_upload_dir()['url'] . '/Pre-poststay.png' ); ?>" data-animate-child>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gjcontent-1__rightcol">
				<div class="section-gjcontent-1__content-wrapper">
					<p class="section-gjcontent-1__subtitle" data-animate="fade-right"><?php the_field( 'advantages_subtitle' ); ?></p>
					<h2 class="section-gjcontent-1__title" data-animate="fade-right"><?php the_field( 'advantages_title' ); ?></h2>
					<ul class="section-gjcontent-1__list" data-animate="fade-right" data-animate-stagger="0.15">
						<?php
						if ( have_rows( 'advantages_advantages_list' ) ) :
							while ( have_rows( 'advantages_advantages_list' ) ) :
								the_row();
								?>
								<li data-animate-child>
									<?php the_sub_field( 'list_title_field' ); ?>
									<p><?php the_sub_field( 'list_description_field' ); ?></p>
								</li>
								<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
