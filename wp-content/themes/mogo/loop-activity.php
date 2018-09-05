
<div class="row service-2-content">
    <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/images/man-in-jail.jpg">
    </figure>
    <div class="acc">
        <ul class="acc-container">
            <?php
            $acc_ctx = new WP_Query(
            array(
            'post_type'=>'activities')
            );
            if ($acc_ctx->have_posts()) :
            while ($acc_ctx->have_posts()) :
            $acc_ctx->the_post();
            ?>
            <li>
                <div class="acc-header">
                    <div class="acc-header-icon">
                        <div class="<?php echo get_field('service_icon'); ?>"></div>
                    </div>
                    <div class="acc-header-text">
                        <?php the_title(); ?>
                    </div>
                    <div class="acc-header-arrow">
                        <div class="icon-angle-down"></div>
                    </div>
                </div>
                <div class="acc-content">
                    <div class="acc-content-text">
                        <?php the_content();?>
                    </div>
                </div>
            </li>
                <?php

            endwhile;
                wp_reset_postdata();
            endif;?>
        </ul>
    </div>
</div>
</div>
</section>
