<?php
get_template_part('header');
get_template_part('page', 'about');
get_template_part('loop', 'services');
?>
<section id="unique-design" class="unique-design screen">
    <div class="shadow-bg"></div>
    <div class="container">
        <div class="header-text row-flex">
            <h2>For all devices</h2>
            <h3>unique design</h3>
            <div class="separate"></div>
        </div>
        <div class="tablet"><img src="<?php echo get_template_directory_uri(); ?>/images/tablet.png" alt="" id="tablet"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="" id="phone">
    </div>
</section>
<?php
get_template_part('page', 'activity');
get_template_part('loop', 'comments');
get_template_part('page', 'team');
get_template_part('loop', 'brands');
get_template_part('page', 'portfolio');
get_template_part('page', 'testimonials');
get_template_part('page', 'clients');
get_template_part('page', 'blog');
get_template_part('page', 'map');
?>
    <script>  var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";</script>
<?php
get_template_part('footer');
?>