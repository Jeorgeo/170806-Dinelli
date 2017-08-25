<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dinelli
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header left-panel">
		<div class="site-branding">
		<?php	the_custom_logo(); ?>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dinelli' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
		<div class="sidebar-delim"></div><!-- #линия-разделитель -->
		<div class="left-panel__contacts">
			<ul class="sidebar-contacts">
				<li><?php dynamic_sidebar( 'mail' ); ?></li>
				<li><?php dynamic_sidebar( 'phone' ); ?></li>
				<li><?php dynamic_sidebar( 'phone_b' ); ?></li>
				<li>
					<a href="#" id="js_modal" class="show_modal">
						<span class="color-text">[ </span>
						Заказать звонок
						<span class="color-text"> ]</span>
					</a>
				</li>
			</ul>
			<ul class="sidebar-social">
				<li><?php dynamic_sidebar( 'social_vk' ); ?></a></li>
				<li><?php dynamic_sidebar( 'social_f' ); ?></a></li>
				<li><?php dynamic_sidebar( 'social_youtube' ); ?></a></li>
				<li><?php dynamic_sidebar( 'social_instagram' ); ?></a></li>
			</ul>
		</div>

		<div class="sidebar-delim"></div><!-- #линия-разделитель -->

		<div class="left-panel__certification">
			<ul class="sidebar_list">
				<li><p>Сертифицировано</p></li>
				<li><img src="<?php bloginfo('template_url'); ?>/i/yandex.png" alt="Яндекс"></li>
			</ul>
		</div>

		<div class="sidebar-delim"></div><!-- #линия-разделитель -->

		<div class="left-panel__events">
			<?php dynamic_sidebar( 'events' ); ?>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
