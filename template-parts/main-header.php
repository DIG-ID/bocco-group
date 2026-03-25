<header id="main-header" class="main-header fixed-top" itemscope itemtype="https://schema.org/WebSite">
	<nav class="navbar navbar-expand-xl navbar-dark" role="navigation">
		<div class="container">
			<?php if ( is_front_page() && is_home() ) : ?>
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link ">
					<h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
					<?php get_template_part( 'template-parts/main-logo' ); ?>
				</a>
			<?php else : ?>
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link">
					<p class="screen-reader-text"><?php bloginfo( 'name' ); ?></p>
					<?php get_template_part( 'template-parts/main-logo' ); ?>
				</a>
			<?php endif; ?>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-nav',
					'container_class' => 'collapse navbar-collapse justify-content-xl-end',
					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav align-items-xl-center',
					'fallback_cb'     => '',
					'menu_id'         => 'main-nav',
					'walker'          => new Custom_Walker_Nav_Menu(),
				)
			);
			?>
		</div>
	</nav>
</header>
