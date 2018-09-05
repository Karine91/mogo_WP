<?php
/*
Template Name: About section
*/
$services = new WP_Query(
array('page_id' => 43,
'post_type'=>'page')
);
if ($services->have_posts()) :
while ($services->have_posts()) :
$services->the_post();
?>
<section id="services" class="services">
    <div class="container">
        <div class="header-text row-flex">
            <h2><?php echo get_field('subheader');?></h2>
            <h3><?php the_title(); ?></h3>
            <div class="separate"></div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        endif;
        $services_ctx = new WP_Query(
            array(
                'post_type'=>'services')
        );

        $count=0;
        ?>


        <div class="services-block-container">
            <div class="services-block-row">
                <?php
                if ($services_ctx->have_posts()) :
                while ($services_ctx->have_posts()) :
                $services_ctx->the_post();
                $count++;
                if ($count==4){
                ?>
            </div>
            <div class="services-block-row">
                <?php
                $count=0;
                }
                ?>

                <div class="services-block">
                    <div class="services-icon">
                        <div class="<?php echo get_field('service_icon'); ?>"></div>
                    </div>
                    <div class="services-text">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo get_the_content();?></p>
                    </div>
                </div>

            <?php

        endwhile;
            wp_reset_postdata();
        endif;?>
            </div>
        </div>
    </div>
</section>