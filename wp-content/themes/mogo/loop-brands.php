<?php
$brands = new WP_Query(
    array(
        'post_id'=>67)
);
if ($brands->have_posts()) :

while ($brands->have_posts()) :
    $brands->the_post();
    $imgArray = get_post_gallery_images($post);
endwhile;
endif;
if(count($imgArray)>0):
?>
<section class="section-brands">
    <div class="container">
        <div class="brands owl-carousel owl-theme" id="brands-carousel">
            <?php
            foreach ($imgArray as $img):
            ?>
            <div class="brand owl-item" style="background-image: url(<?php echo $img; ?>)"></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif;
wp_reset_postdata();