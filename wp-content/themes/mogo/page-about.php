<?php
/*
Template Name: About section
*/
    $about = new WP_Query(
        array('page_id' => 27,
            'post_type'=>'page')
    );
if ($about->have_posts()) :
    while ($about->have_posts()) :
        $about->the_post();
?>
<section id="about" class="about screen">
    <header>
        <div class="container">
            <div class="header-text row-flex">
                <h2><?php echo get_field('subheader'); ?></h2>
                <h3><?php the_title(); ?></h3>
                <div class="separate"></div>
                <p><?php echo get_the_content(); ?></p>
            </div>
            <div class="section-picture row-flex">
                <div class="image-placeholder" style="background-image: url(<?php echo get_field('image1'); ?>);">
                    <div class="img-shadow">
                        <div class="shadow-text"><a href="<?php echo get_field('image_1_url'); ?>"><span class="icon-eye"></span>Super services</a></div>
                    </div>
                </div>
                <div class="image-placeholder" style="background-image: url(<?php echo get_field('image2'); ?>);">
                    <div class="img-shadow">
                        <div class="shadow-text"><a href="<?php echo get_field('image_2_url'); ?>"><span class="icon-users"></span>Super team</a></div>
                    </div>
                </div>

                <div class="image-placeholder" style="background-image: url(<?php echo get_field('image3'); ?>);">
                    <div class="img-shadow">
                        <div class="shadow-text"><a href="<?php echo get_field('image_3_url'); ?>"><span class="icon-pin"></span>Super offices</a></div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <footer>
        <div class="container">
            <div class="counter">
                <div class="count">
                    <span data-number="<?php echo get_field('web_design_project'); ?>">0</span>
                    <div class="count-text"> web design projects</div>
                </div>
                <div class="count">
                    <span data-number="<?php echo get_field('happy_clients'); ?>">0</span>
                    <div class="count-text">happy clients</div>
                </div>
                <div class="count">
                    <span data-number="<?php echo get_field('award_winner'); ?>">0</span>
                    <div class="count-text">award winner</div>
                </div>
                <div class="count">
                    <span data-number="<?php echo get_field('cup_of_coffee'); ?>">0</span>
                    <div class="count-text">cup of coffee</div>
                </div>
                <div class="count">
                    <span data-number="<?php echo get_field('members'); ?>">0</span>
                    <div class="count-text">members</div>
                </div>
            </div>
        </div>
    </footer>
</section>
<?php
endwhile;
wp_reset_postdata();
    endif;
    ?>