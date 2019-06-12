<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package abide
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $post;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo home_url('/wp-content/uploads/2019/06/favicon.png'); ?>" />
	<?php wp_head(); ?>
	
	<script type="text/javascript">
		

		jQuery(function ($) {
/*
			$(".dropdown, .btn-group").hover(function(){
				var dropdownMenu = $(this).children(".dropdown-menu");
				if(dropdownMenu.is(":visible")){
					dropdownMenu.parent().toggleClass("open");
				}
			});		
*/				
			// Override Bootstrap dropdown behavior
			$('#navbarNavDropdown .dropdown > a').click(function() {
				location.href = $(this).attr('href');
			});
			
			function toggleDropdown (e) {
				let _d = $(e.target).closest('.dropdown'),
				 _m = $('.dropdown-menu', _d);
				
				setTimeout(function(){
					let shouldOpen = e.type !== 'click' && _d.is(':hover');
					_m.toggleClass('show', shouldOpen);
					_d.toggleClass('show', shouldOpen);
					$('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
				}, e.type === 'mouseleave' ? 50 : 0);
			}

			$('body')
				.on('mouseenter mouseleave','.dropdown',toggleDropdown)
				.on('click', '.dropdown-menu a', toggleDropdown);
		});

	</script>

</head>

<body <?php body_class(); ?>>
<div class="site" id="page">

	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		
		<?php if ( is_user_logged_in() ): ?>
		
			<div class="position-absolute" style="z-index: 2">
			
				<?php edit_post_link('<i class="fa fa-pencil"></i> Edit Page'); ?>
				
			</div>
		
		<?php endif; ?>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-none">

			<div class="container">

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php echo home_url('wp-content/themes/abide-child/src/img/logo.png'); ?>" class="img-fluid" /></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'abide' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'          => new bs4navwalker()
					)
				); ?>
		
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->