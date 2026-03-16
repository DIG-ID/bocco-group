<section id="wbecontent-2" class="section section-wbecontent-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12" data-animate="fade-up" data-animate-stagger="0.15">
				<p class="section-wbecontent-2__subtitle" data-animate-child><?php the_field( 'functions_subtitle' ); ?></p>
				<h2 class="section-wbecontent-2__title" data-animate-child><?php the_field( 'functions_title' ); ?></h2>
				<img class="section-wbecontent-2__img" src="<?php echo esc_url( wp_upload_dir()['url'] . '/WBE_F_illustration.svg' ); ?>" data-animate-child>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12 col-xl-12 section-wbecontent-2__leftcol">
				<div class="section-wbecontent-2__content-wrapper">
					<ul class="section-wbecontent-2__list" data-animate="fade-up" data-animate-stagger="0.15">
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
		</div>
	</div>
</section>
