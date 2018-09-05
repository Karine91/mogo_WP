<?php $works = new WP_Query(
    array('post_type' => 'portfolio')
);
if ($works->have_posts()) :
    ?>
    <div class="portfolio-content">

        <div class="portfolio-content-container">
            <?php while ($works->have_posts()) :
                $works->the_post(); ?>
                <figure
                    data-website="<?php echo get_field('website'); ?>"
                    data-facebook="<?php echo get_field('facebook'); ?>"
                    data-twitter="<?php echo get_field('twitter'); ?>"
                    data-content="<?= $post->ID ?>" <?php if (get_field('tall_main_image')): ?>class="tall"<?php endif; ?> style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
                    <figcaption>
                        <i class="icon-photo"></i>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 3, '...' ); ?></p>
                    </figcaption>
                </figure>
                <?php
            endwhile;
            wp_reset_postdata(); ?>

        </div>

        <div class="portfolio-content-popup">
            <div class="portfolio-content-popup-loader">
                <div class="ball-scale-multiple">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

            <div class="icon-left-open-big" id="popup-prev"></div>
            <div class="icon-right-open-big" id="popup-next"></div>

            <div class="portfolio-content-popup-inner container project">
                <div class="row project-image">
                    <div class="project-image-big">
                        <figure id="popup-image-big"></figure>
                    </div>
                    <ul class="project-image-small" id="popup-images">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="row project-info">
                    <div class="project-info-text">
                        <h3 id="popup-title"></h3>
                        <div class="separate"></div>
                        <div id="popup-content"></div>
                    </div>
                    <div class="project-info-links">
                        <a href="#" target="_blank" id="popup-website">
                            <i class="icon-home"></i> Website
                        </a>
                        <a href="#" target="_blank" id="popup-facebook">
                            <i class="icon-facebook"></i> Facebook
                        </a>
                        <a href="#" target="_blank" id="popup-twitter">
                            <i class="icon-twitter"></i> Twitter
                        </a>
                    </div>
                </div>

            </div>
            <button class="portfolio-content-popup-close" id="popup-close">
                <span></span>
                <span></span>
            </button>
        </div>


    </div>
    
    <?php
endif; ?>