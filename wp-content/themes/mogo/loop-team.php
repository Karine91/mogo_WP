<?php
/*
Template Name: Comment section
*/
$team = new WP_Query(
    array('post_type'=>'team')
);
if ($team->have_posts()) :
?>
<div class="team-picture row-flex">
    <?php while ($team->have_posts()) :
        $team->the_post();
        ?>
    <div class="team-member">
        <div class="team-pic" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="img-shadow">
                <div class="shadow-text social">
                    <?php
                    $f = get_field('reference_facebook');
                    $t = get_field('reference_twitter');
                    $p = get_field('reference_pinterest');
                    $inst = get_field('reference_instagram');
                    if ($f):
                    ?>
                    <a href="<?php echo $f; ?>" class="icon-social icon-facebook"></a>
                    <?php endif; if ($t): ?>
                    <a href="<?php echo $t; ?>" class="icon-social icon-twitter"></a>
                    <?php endif; if ($p): ?>
                    <a href="<?php echo $p; ?>" class="icon-social icon-pinterest"></a>
                    <?php endif; if ($inst): ?>
                    <a href="<?php echo $inst; ?>" class="icon-social icon-instagram"></a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="pic-caption">
            <h4><?php the_title(); ?></h4>
            <span><?php echo get_field('team_position'); ?></span>
        </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
    endif;?>
</div>
</div>
</section>