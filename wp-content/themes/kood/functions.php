<?php 

function theme_enqueue_styles() {
    // 注册并引入样式表
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . './css/header.css');
	 // 加载 Font Awesome 样式表
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
	//加载main样式表
	wp_enqueue_style('extra_styles', get_template_directory_uri() . './css/main.css');
	//加载footer样式表
	wp_enqueue_style('footer_styles', get_template_directory_uri() . './css/footer.css');
	// 确保 WordPress 自带的 jQuery 被加载
    wp_enqueue_script('jquery');
	// 加载GSAP库
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), '3.11.5', true);
	//javascript主页加载
	wp_enqueue_script('main-js', get_theme_file_uri('/js/app.js'), array('jquery','gsap'), '3.4.1', true);
	//javascript商品加载
	wp_enqueue_script('producto-js', get_theme_file_uri('/js/customer.js'), array('jquery','gsap'), '3.4.1', true);
	//加载icon CDN
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
	//加载customer.css
	wp_enqueue_style('custom-css', get_template_directory_uri() . './css/customer.css');
}
    // 注册并引入样式表
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

//加入menu
function menu_add(){
	// 添加menu位置
	register_nav_menu('headeMenu','header menu');
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'menu_add');

//加入woo
function theme_setup() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'theme_setup');


?>




