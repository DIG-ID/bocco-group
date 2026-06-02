<section id="gdscontent-3" class="section section-gdscontent-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gdscontent-3__leftcol">
			<img class="section-gdscontent-3__img-svg" src="<?php echo esc_url( wp_upload_dir()['url'] . '/Support_illustration.svg' ); ?>" data-animate="fade-left">
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gdscontent-3__rightcol">
				<div class="section-gdscontent-3__content-wrapper" data-animate="fade-right" data-animate-stagger="0.15">
					<p class="section-gdscontent-3__subtitle" data-animate-child><?php the_field( 'our_promise_subtitle' ); ?></p>
					<h1 class="section-gdscontent-3__title" data-animate-child><?php the_field( 'our_promise_title' ); ?></h1>
					<div class="section-gdscontent-3__list" data-animate-child>
						<p><?php the_field( 'our_promise_description' ); ?></p>
						<ul class="section-gdscontent-1__list" data-animate="fade-right" data-animate-stagger="0.15">
							<?php
							if ( have_rows( 'our_promise_list' ) ) :
								while ( have_rows( 'our_promise_list' ) ) :
									the_row(); ?>
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
	</div>
</section>
