<?php
/* Template Name: testimonials section */
$testimonials = new WP_Query(
    array('post_type'=>'testimonials')
);
if ($testimonials->have_posts()) :
?>
<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="row" id="slider2">
            <div class="slider-prev icon-left-open-big"></div>
            <div class="testimonials-picture">
                <?php while ($testimonials->have_posts()) :
                $testimonials->the_post(); ?>
                <div class="pic" style="background-image: url(<?=get_the_post_thumbnail_url();?>)"></div>
                <?php endwhile; ?>
            </div>
            <div class="testimonials-text">
                <ul>
                    <?php while ($testimonials->have_posts()) :
                    $testimonials->the_post(); ?>
                    <li>
                        <p><?php echo get_the_content(); ?></p>
                        <div class="author">
                            <div class="separate"></div>
                            <span><?php the_title(); ?></span>
                        </div>
                    </li>
                    <?php endwhile;
                    wp_reset_postdata();
                    endif;?>
                </ul>
            </div>
            <div class="slider-next icon-right-open-big"></div>

        </div>
    </div>
</section>