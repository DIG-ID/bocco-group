<section id="servicesintro" class="section section-servicesintro" >
	<div class="container-fluid">
		<div class="row" data-animate="fade-in" data-animate-eager>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicesintro__leftcol" data-animate-child>
				<div class="section-servicesintro__img-pack">
					<img class="section-cmcontent-3__img-svg" src="<?php echo wp_upload_dir()['url'] . '/01_Header.svg' ?>">
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-servicesintro__rightcol" data-animate-child>
				<div class="section-servicesintro__content-wrapper">
					<p class="section-servicesintro__subtitle"><?php echo the_field('overview_subtitle'); ?></p>
					<h1 class="section-servicesintro__title"><?php echo the_field('overview_title'); ?></h1>
					<p class="section-servicesintro__text"><?php echo the_field('overview_description'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>