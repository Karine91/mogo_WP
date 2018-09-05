<?php
/*
Template Name: What we do section
*/
$activity = new WP_Query(
    array('page_id' => 45,
        'post_type'=>'page')
);
if ($activity->have_posts()) :
    while ($activity->have_posts()) :
        $activity->the_post();
        ?>
<section id="service2" class="service-2">
    <div class="container">
        <div class="header-text row-flex">
            <h2><?php echo get_field('subheader'); ?></h2>
            <h3><?php the_title(); ?></h3>
            <div class="separate"></div>
            <p><?php echo get_the_content(); ?></p>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
get_template_part('loop','activity');
?>