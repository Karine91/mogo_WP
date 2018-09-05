<?php
$blog = new WP_Query(
    array('post_type'=>'page',
        'page_id' => 126
    ));
if ($blog->have_posts()) :
while ($blog->have_posts()) :
$blog->the_post();
?>

<section id="blog" class="blog">
    <div class="container">
        <div class="header-text row-flex">
            <h2><?php echo get_field('subheader'); ?></h2>
            <h3><?php the_title(); ?></h3>
            <div class="separate"></div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();

        get_template_part('loop','blog');?>
    </div>
</section>
<?php endif;?>