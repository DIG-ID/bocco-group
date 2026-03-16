<section id="rmcontent-2" class="section section-rmcontent-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-rmcontent-2__leftcol">
				<div class="section-rmcontent-2__content-wrapper">
					<p class="section-rmcontent-2__subtitle" data-animate="fade-left"><?php the_field( 'functions_subtitle' ); ?></p>
					<h2 class="section-rmcontent-2__title" data-animate="fade-left"><?php the_field( 'functions_title' ); ?></h2>
					<ul class="section-rmcontent-2__list" data-animate="fade-left" data-animate-stagger="0.15">
						<?php
						if ( have_rows( 'functions_functions_list' ) ) :
							while ( have_rows( 'functions_functions_list' ) ) :
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
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-rmcontent-2__rightcol">
				<div class="section-rmcontent-2__img-pack" data-animate="fade-right" data-animate-stagger="0.15">
					<img class="section-rmcontent-2__img-abtop" src="<?php echo esc_url( wp_upload_dir()['url'] . '/RM_F_2.png' ) ?>" data-animate-child>
					<img class="section-rmcontent-2__img-abbot" src="<?php echo esc_url( wp_upload_dir()['url'] . '/RM_F_1.png' ) ?>" data-animate-child>
				</div>
			</div>
		</div>
	</div>
</section>
