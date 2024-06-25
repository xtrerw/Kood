<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

		   <!-- introducción principal -->
		   <div class="introduccion1" >
				<div class="intro">
					<h1 id="titulo">La mejor tienda de regalos DIY en el mercado</h1>
					<ul>
						<li>Materiales de alta calidad para tus proyectos personalizados</li>
						<li>Instrucciones detalladas y fáciles de seguir</li>
						<li>+1000 ideas creativas y kits exclusivos a tu disposición</li>
					</ul>
					<button onclick="location.href='<?php echo site_url('/shop') ?>'">Comprar ahora</button>
				</div>
    		</div>

			<main class="introduccion2">
				<section>
					<div class="act1 act">
							<a href="">
								<h1>descubre tu regalo perfecto</h1>
							</a>
					</div>
					<div class="act2 act">
						<a href="">
							<h1>promoción de verano</h1>
						</a>
					</div>
					<div class="act3 act">
						<a href="">
							<h1>descubre nuestros nuevos tesoros</h1>
						</a>
					</div>
				</section>
				<div class="productos-theme">
					<?php
						// WooCommerce产品部分
						if (class_exists('WooCommerce')) {
							// 设置查询参数
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 8
							);

							$loop = new WP_Query($args);

							if ($loop->have_posts()) {
								echo '<ul class="products columns-4">';

								while ($loop->have_posts()) : $loop->the_post();
									wc_get_template_part('content', 'product');
								endwhile;

								echo '</ul>';
							} else {
								echo __('No products found');
							}

							wp_reset_postdata();
						}
					?>
				</div>
			</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
