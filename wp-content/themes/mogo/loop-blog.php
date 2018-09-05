<?php

/*
Template Name: Blog section
*/
$blogLoop = new WP_Query(
    array('post_type'=>'blog')
);
if ($blogLoop->have_posts()) :
$count=0;

?>
<div class="blog-roll">
    <div class="row margin-bottom30">
        <?php while ($blogLoop->have_posts()) :
        $blogLoop->the_post();
        $content =$post->post_content;
        $img_count = preg_match('/<img.*>/U',$content,$matches);
        $content = preg_replace('/<img.*>/U',"",$content);
        $content =strip_tags($content);
        $content = substr($content, 0, 200);
        $content = trim($content, "!,.-");
        $content = substr($content, 0, strrpos($content, ' '));

        if ($img_count!=0){
            $image = $matches[0];
            $src_count = preg_match('/src=\".*\"/U',$image,$img_src);
            $length = strlen($img_src[0])-6;
            $img_url = substr($img_src[0], 5,$length);
        }
        if(get_the_post_thumbnail_url()){
            $image_uri = get_the_post_thumbnail_url();
        }elseif ($img_count){
            $image_uri =  $img_url;
        }else{
            $image_uri = get_template_directory_uri()."/images/blog/post1.jpg";
        }

        if ($count==3):
        $count=0;
        ?>
    </div><div class="row margin-bottom30">
        <?php endif;
        ?>
        <a href="<?php echo get_permalink(); ?>" class="link_blog"><article class="blog-item">
                <header>
                    <figure style="background-image: url(<?php echo $image_uri; ?>);"></figure>
                    <div class="blog-item-date">
                        <?php echo get_the_date('j'); ?>
                        <i><?php echo get_the_date('M'); ?></i>
                    </div>
                </header>
                <section>
                    <h4><?php the_title(); ?></h4>
                    <p><?= $img_count? $content."… " : get_the_content(); ?></p>
                </section></a>
        <footer>
            <i class="icon-eye"></i>542
            <i class="icon-comments"></i> <?php comments_number( $zero, $one, $more ); ?>
        </footer>
        </article>
        <?php
        $count++;
        endwhile;
        wp_reset_postdata();
        endif;?>
    </div>
</div>