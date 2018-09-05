<?php
$clients = new WP_Query(
    array('post_type'=>'clients')
);
if ($clients->have_posts()) :
$count=0;
?>
<div class="clients-block-container">
    <div class="clients-block-row row">

        <?php while ($clients->have_posts()) :
        $clients->the_post();
            $count++;
            if ($count== 3):
            ?>
              </div> <div class="clients-block-row row">
        <?php endif; ?>
        <div class="clients-block">
            <div class="clients-picture" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">

            </div>
            <div class="clients-text">
                <h4><?php the_title(); ?></h4>
                <span><?php echo get_field('current_position_of_client');?></span>
                <div class="separate"></div>
                <p><?php echo get_the_content(); ?></p>
            </div>
        </div>

            <?php
        endwhile;
        wp_reset_postdata();
        endif;?>
    </div>
</div>