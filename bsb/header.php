<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Broad_Street_Braces
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

	<body <?php body_class(); ?>>
		<section class="site-header">
			<nav class="uk-navbar">
				<div class="uk-container uk-container-center">
					<a href="<?php echo home_url( '/' ); ?>" class="uk-navbar-brand uk-padding-remove"><img width="165" src="<?php the_field('logo','option') ?>" alt=""></a>
					<ul class="uk-navbar-nav uk-navbar-flip uk-hidden-midlarge">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1','container' => false, 'items_wrap'=> '%3$s' ) ); ?>
						<?php $text = get_field('request_header','option'); ?>
						<?php $link = get_field('request_header_link','option'); ?>

						<?php if($text & $link ):?>
						<li class="menu-button">
							<a href="<?php echo $link; ?>"><?php echo $text; ?></a>
						</li>
						<?php endif; ?>
					</ul>
					<a href="#offcanvas-push" class="uk-navbar-toggle uk-float-right uk-visible-midlarge uk-contrast" data-uk-offcanvas="{mode:'reveal'}"></a>
					<?php if($text & $link ):?>
					<div class="menu-button mobile-menu-button uk-float-right uk-visible-midlarge">
						<a href="<?php echo $link; ?>"><?php echo $text; ?></a>
					</div>
					<?php endif; ?>
					<div id="offcanvas-push" class="uk-offcanvas">
					    <div class="uk-offcanvas-bar">
					        <ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
								<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'uk-nav uk-nav-offcanva', 'container' => false ) ); ?>
					        </ul>
					    </div>
					</div>					
				</div>
			</nav>
		</section>

		<?php get_template_part( 'banner' ); ?>