<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php

    wp_head();
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css ">
</head>
<body>
<header class="header screen">

    <?php

    $slides = new WP_Query(array('post_type' => 'head_slides',
        'orderby' => array( 'title' => 'ASC')
    )
    );

    ?>

    <div class="header-slides">

        <?php
        if ($slides->have_posts()) :
            while ($slides->have_posts()) :
                $slides->the_post();
                ?>
                <div class="header-slides-item"
                     style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
                <?php
            endwhile; endif;
        ?>
    </div>
    <div class="header-navbar">
        <div class="container">
            <nav class="row">
                <div class="header-navbar-logo">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                    $img_url = $image[0];
                    if ($img_url):
                        ?>
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php echo $img_url; ?>" alt="">
                        </a>
                        <?php
                    else:
                        ?>
                        <a href="<?php bloginfo('url'); ?>" title="MoGo"><?php bloginfo('name'); ?></a>
                        <?php
                    endif;
                    ?>
                </div>
                <div class="header-navbar-burger">
                    <div class="header-navbar-burger-icon">
                        <div class="header-navbar-burger-icon-line"></div>
                        <div class="header-navbar-burger-icon-line"></div>
                        <div class="header-navbar-burger-icon-line"></div>
                    </div>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container' => '',
                    'menu_class' => 'header-navbar-menu'
                )); ?>
            </nav>
        </div>
    </div>
    <div class="header-slides-text container">
        <?php
        if ($slides->have_posts()) :
            while ($slides->have_posts()) :
                $slides->the_post();
                ?>
                <div class="header-slides-text-item row-flex">
                    <h3><?php the_title(); ?></h3>
                    <h2><?php echo get_the_content(); ?></h2>
                    <div class="btn-container">
                            <a href="<?php echo get_field('slide_link');?>" class="btn">
                                <?php echo get_field('slide_link_text');?>
                            </a>
                        <div class="btn-out"></div>
                    </div>
                </div>
                <?php
            endwhile; endif;
        ?>
    </div>
    <div class="header-slides-nav">
        <div class="container">
            <ul class="header-slides-nav-ul row-flex">
                <?php
                if ($slides->have_posts()) :
                    $num = 1;
                while ($slides->have_posts()) :
                $slides->the_post();
                ?>
                <li class="header-slides-nav-ul-li">
                    <div class="header-slides-nav-ul-li-progress">
                        <div class="header-slides-nav-ul-li-progress-bar"></div>
                    </div>
                    <div class="header-slides-nav-ul-li-text">
                        <span>0<?php echo $num; ?></span>
                        <?php echo get_field('slide_nav_text');?>
                    </div>
                </li>
                    <?php
                $num++;
                endwhile; endif;
                ?>
            </ul>
        </div>
    </div>
</header>
