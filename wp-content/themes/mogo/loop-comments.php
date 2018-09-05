<?php
/*
Template Name: Comment section
*/
$comments = new WP_Query(
    array('post_type'=>'comments')
);
if ($comments->have_posts()) :
?>

<section id="comment" class="section-comment">
    <div class="container">
        <div class="row" id="slider1">
            <div class="slider-prev icon-left-open-big"></div>
            <div class="comment-icon">
                <div class="icon-chat"></div>
            </div>
            <div class="comment-text">
                <ul class="comments">
                    <?php while ($comments->have_posts()) :
                        $comments->the_post();
                        ?>
                        <li>
                            <p>&quot;<?php echo get_the_content();?>&quot;</p>
                            <div class="author">
                                <div class="separate"></div>
                                <span><?php the_title();?></span>
                            </div>
                        </li>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    endif;?>
                </ul>
            </div>
            <div class="slider-next icon-right-open-big"></div>

        </div>
    </div>
</section>