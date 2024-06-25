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
				<div class="nav-menu">
					<!-- 动态加menu -->
					<?php
						wp_nav_menu(array(
							'theme_location' => 'headeMenu',
						));
					?>

					<!-- <ul>
						<li><a href="<?php echo site_url('/shop') ?>">Tienda</a></li>
					</ul> -->
				</div>
			</div>
		</div>


