<section id="gdscontent-1" class="section section-gdscontent-1">
    <img class="section-gdscontent-1__img-banner" src="<?php echo wp_upload_dir()['url'] . '/GDS_A_1.svg' ?>">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gdscontent-1__leftcol">
                <div class="section-gdscontent-1__img-pack">
                    <img class="section-gdscontent-1__img-logo1" src="<?php echo wp_upload_dir()['url'] . '/Logo_Sabre.svg' ?>">
                    <img class="section-gdscontent-1__img-logo2" src="<?php echo wp_upload_dir()['url'] . '/Logo_Dhisco.png' ?>">
                    <img class="section-gdscontent-1__img-logo1" src="<?php echo wp_upload_dir()['url'] . '/Logo_Amadeus.svg' ?>">
                    <img class="section-gdscontent-1__img-logo1" src="<?php echo wp_upload_dir()['url'] . '/Logo_Travelport.svg' ?>">
                </div>
			</div>
			<div class="col-12 col-md-12 col-lg-6 col-xl-6 section-gdscontent-1__rightcol">
                <div class="section-gdscontent-1__content-wrapper">
                    <p class="section-gdscontent-1__subtitle"><?php echo the_field('advantages_subtitle'); ?></p>
                    <h1 class="section-gdscontent-1__title"><?php echo the_field('advantages_title'); ?></h1>
                    <ul class="section-gdscontent-1__list">
                    <?php
                        if( have_rows('advantages_advantages_list') ):
                            while( have_rows('advantages_advantages_list') ) : the_row(); ?>
                                <li><?php echo the_sub_field('list_title_field'); ?></li>
                                <p><?php echo the_sub_field('list_description_field'); ?></p>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
			</div>
		</div>
	</div>
</section>