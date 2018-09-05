<?php
/*
Template Name: Team section
*/
$team = new WP_Query(
    array('page_id' => 56,
        'post_type'=>'page')
);
if ($team->have_posts()) :
    while ($team->have_posts()) :
        $team->the_post();
        ?>
        <section id="team" class="our-team">
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
get_template_part('loop','team');
?>