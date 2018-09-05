<?php
/* Template Name: Portfolio section */
$portfolio = new WP_Query(
    array('post_type'=>'page',
        'page_id' =>94 )
);
if ($portfolio->have_posts()) :
while ($portfolio->have_posts()) :
$portfolio->the_post();
?>

<section id="work" class="portfolio">
    <div class="container">
        <div class="header-text row-flex">
            <h2><?php echo get_field('subheader'); ?></h2>
            <h3><?php the_title(); ?></h3>
            <div class="separate"></div>
            <p><?php echo get_the_content(); ?></p>
        </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
    endif;
    get_template_part('loop','portfolio');
    ?>

</section>