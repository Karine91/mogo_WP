<?php
/* Template Name: Clients section */
$clients = new WP_Query(
    array('post_type'=>'page',
        'page_id' => 109,
        )
);
if ($clients->have_posts()) :
while ($clients->have_posts()) :
$clients->the_post();
?>

<section class="clients">
    <div class="shadow-bg"></div>
    <div class="container">
        <div class="header-text row-flex">
            <h2><?php echo get_field('subheader'); ?></h2>
            <h3><?php the_title(); ?></h3>
            <div class="separate"></div>
        </div>
    <?php
endwhile;
    wp_reset_postdata();

        get_template_part('loop','clients');

    endif;?>
    </div>
</section>

