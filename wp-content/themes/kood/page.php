<?php
get_header();

// 准备数据
while (have_posts()) {
    the_post(); ?>
    <!-- 加html -->
    <main class="page-tienda">
        <div style="background-image: url(<?php echo get_theme_file_uri('./img/bg-kood.png') ?>);">

        </div>
        <div class="productos">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
    </main>
    <!--  -->
    <?php
}

get_footer();
?>
