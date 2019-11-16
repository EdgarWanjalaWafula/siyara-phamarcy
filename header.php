<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Siyara_Phamarcy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php 
		if(!is_front_page()):
			$pagetype = "inner-page"; 
		endif; 
	?>
	<header id="masthead" class="site-header <?php echo $pagetype; ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="site-branding">
						<?php siyara_custom_logo(); ?>
					</div><!-- .site-branding -->
				</div>

				<div class="col-md-9">
					<nav id="site-navigation" class="main-navigation d-flex justify-content-end">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav><!-- #site-navigation -->

					<!-- Mobile toggle  -->
					<div class="mobile-toggle-bars">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>	
		</div>
	</header><!-- #masthead -->

	<section class="mobile-menu-panel">
		<nav id="site-navigation" class="mobile-menu">
			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'menu-4',
					'menu_id'			=> 'mobile-menu',
					'menu_class'		=> 'list-unstyled',
				) );
			?>

			<p class="small text-white">
			Copyright &copy; Siyara Phamarcy
			</p>
		</nav><!-- #site-navigation -->
	</section>



	<div id="content" class="site-content">
