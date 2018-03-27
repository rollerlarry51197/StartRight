<?php
/**
 * Header presentation
 *
 * @package startright
 */
if ( !function_exists( 'startright_branding' ) ) {

	/**
	 * Display startright Branding
	 * @since  1.0.0
	 * @return void
	 */
	function startright_branding() {
		$startright_logo = '';
		$startright_logo = get_custom_logo();

		if ( has_custom_logo() ) {
		?>
		<div class="startright-site-logo">
			<?php the_custom_logo(); ?>
		</div>

		<?php } else { ?>
			<div class="startright-site-text-logo">
				<h1 class="startright-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php if ( '' != get_bloginfo( 'description' ) ) { ?>
					<p class="startright-site-description"><?php echo bloginfo( 'description' ); ?></p>
				<?php } ?>
			</div>
			<?php
		}
	}

}

if ( !function_exists( 'startright_navigation_primary' ) ) {

	/**
	 * Display Navigation - Primary
	 * @since  1.0.0
	 * @return void
	 */
	function startright_navigation_primary() {
		?>			
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="startright-primary-nav clearfix">
						<div class="startright-primary-nav-mobile toggle-container visible-sm-block visible-xs-block clearfix">
							<div class="nav-toggle toggle">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
							<div class="search-toggle toggle">
								<div class="metal"></div>
								<div class="glass"></div>
								<div class="handle"></div>
							</div>
						</div> 
						<div class="blog-search hide">
							<?php get_search_form(); ?>
						</div>
						<ul class="blog-menu visible-md-block visible-lg-block">
							<?php
							if ( has_nav_menu( 'primary' ) ) {

								wp_nav_menu( array(
									'container'		 => '',
									'items_wrap'	 => '%3$s',
									'link_before'	 => '<span>',
									'link_after'	 => '</span>',
									'theme_location' => 'primary',
									'walker'		 => new startright_primary_nav_walker
								) );
							} else {

								wp_list_pages( array(
									'container'	 => '',
									'title_li'	 => ''
								) );
							}
							?>
						</ul>
						<ul class="mobile-menu">
							<?php
							if ( has_nav_menu( 'primary' ) ) {

								wp_nav_menu( array(
								'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 3,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new cg_wp_bootstrap_navwalker 
								) );
							} else {

								wp_list_pages( array(
									'container'	 => '',
									'title_li'	 => ''
								) );
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

}