<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Popperscores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'popperscores' ); ?></a>
	<?php if ( get_header_image() ) : ?>
	<header id="masthead" class="site-header" style="background-image:url( <?php header_image(); ?> )" role="banner">
		<?php else : ?>
		<header id="masthead" class="site-header" role="banner">
			<?php endif;?>
		<div class="site-logo">
			<?php $site_title = get_bloginfo('name')?>
			<a href="<?php echo esc_url(home_url('/')); ?>">
<!--				<div class="screen -reader-text">-->
<!--					--><?php //printf(esc_html__('go to the homepage of 1%$s', 'poperscores'))?>
<!--				</div>-->
				<?php if ( has_site_icon()):?>
					<?php $site_icon = esc_url(get_site_icon_url(270));?>
					<img src="<?php echo $site_icon?>" class="site-icon" alt="">
				<?php else :?>
					<div class="site-firstletter" aria-label=""aria-hidden="true">
						<?php echo substr($site_title, 0 , 1)?>


					</div>
				<?php endif;?>

			</a>
		</div>
		<div class="site-branding <?php if(is_singular()): echo 'screen-reader-text'; endif;?>">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'Primary Menu', 'popperscores' ); ?>
			</button>
			<?php wp_nav_menu( array(
				'theme_location' 	=> 'primary',
				'menu_id' 			=> 'primary-menu',
				'menu_class'     	=> 'nav-menu',
				) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
