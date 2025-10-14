<section class="page-header">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col">
				<p class="page-subtitle text-center"><?php the_field( 'form_subtitle' ); ?></p>
				<h2 class="page-title text-center"><?php the_field( 'form_title' ); ?></h2>
			</div>
		</div>
	</div>
</section>
<section class="page-content demo-request-content">
	<div class="container">
		<div class="row justify-content-center align-item-center">
			<div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-7">
				<h2 class="page-title text-center mb-5">Anmeldeformular</h2>
				<p><?php echo do_shortcode( get_field( 'form_form' ) ); ?></p>
			</div>
		</div>
	</div>
</section>