<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<link rel="stylesheet" href="<?php get_template_directory_uri() ?> css/header.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content">
			<?php
			/* translators: Hidden accessibility text. */
			_e( 'Skip to content', 'twentysixteen' );
			?>
		</a>
		<div id="header">
			<div id="headerimg">
				<h1>
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php bloginfo('name'); ?>
					</a>
				</h1>
				<div id="navmenu">
					<?php
					// 显示导航菜单
					wp_nav_menu(array(
						'theme_location' => 'primary', // 需要在主题的 functions.php 文件中注册此菜单
						'container' => 'ul', // 不要额外的容器，直接输出 <ul> 列表
						'menu_class' => 'nav-menu', // 为 <ul> 添加类
						'fallback_cb' => 'wp_page_menu', // 如果未设置菜单，显示页面列表
						'depth' => 2 // 允许两层深度的菜单
					));
					?>
				</div>
			</div>
		</div>

		<!-- .site-header -->

		<div id="content" class="site-content">
