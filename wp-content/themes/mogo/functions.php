<?php
add_theme_support( 'post-thumbnails' );
function head_hook(){
    ?>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300,400,500,600,700,800|Roboto:300,400,500,700"
          rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fontello.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fontello-codes.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/loaders.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
<?php
}

add_action('wp_head', 'head_hook');

function footer_hook(){
    ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnIhv1mDu1g-Kz-Jjm3Y6xv9DKzjBCCaY"></script>
<?php
}

add_action('wp_footer', 'footer_hook');

register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'footer_menu' => 'Footer Menu',
) );

function theme_prefix_setup() {

    add_theme_support( 'custom-logo', array(
        'height'      => 30,
        'width'       => 175,
        'flex-height' => true,
        'flex-width'  => true
    ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'head_slides',
        array(
            'labels' => array(
                'name' => __( 'Header Slides' ),
                'singular_name' => __( 'Slide' ),
                'add_new' =>__('Add Slide')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-images-alt',
            'supports' =>[ 'title',
                'editor',
                'thumbnail']
        )
    );
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' ),
                'add_new' =>__('Add Service')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-tools',
            'supports' =>[ 'title',
                'editor',
                'thumbnail']
        )
    );
    register_post_type( 'activities',
        array(
            'labels' => array(
                'name' => __( 'Activities' ),
                'singular_name' => __( 'Activity' ),
                'add_new' =>__('Add Activity')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-analytics',
            'supports' =>[ 'title',
                'editor']
        )
    );
    register_post_type( 'comments',
        array(
            'labels' => array(
                'name' => __( 'Comments' ),
                'singular_name' => __( 'Comment' ),
                'add_new' =>__('Add Comment')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-format-status',
            'supports' =>[ 'title',
                'editor']
        )
    );
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Member of Team' ),
                'add_new' =>__('Add Member of Team')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-users',
            'supports' =>[ 'title',
                'editor',
                'thumbnail']
        )
    );
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Work' ),
                'add_new' =>__('Add Work')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' =>[ 'title',
                'editor',
                'thumbnail']
        )
    );
    register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Review' ),
                'add_new' =>__('Add Rewiew')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-format-quote',
            'supports' =>[ 'title',
                'editor',
                'thumbnail']
        )
    );
    register_post_type( 'clients',
        array(
            'labels' => array(
                'name' => __( 'Happy Clients' ),
                'singular_name' => __( 'Client' ),
                'add_new' =>__('Add Client')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-smiley',
            'supports' =>[ 'title',
                'editor',
                'thumbnail']
        )
    );
    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Blog' ),
                'singular_name' => __( 'Post' ),
                'add_new' =>__('Add post')
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_menu' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'supports' =>[ 'title',
                'editor',
                'thumbnail',
                'comments',
                'revisions',
                'author']
        )
    );
}

add_action( 'wp_ajax_f711_get_post_content', 'f711_get_post_content_callback' );
add_action( 'wp_ajax_nopriv_f711_get_post_content', 'f711_get_post_content_callback' );

function f711_get_post_content_callback() {

    // retrieve post_id, and sanitize it to enhance security
    $post_id = intval($_POST['post_id'] );

    // Check if the input was a valid integer
    if ( $post_id == 0 ) {

        $response['error'] = 'true';
        $response['result'] = 'Invalid Input';

    } else {

        // get the post
        $thispost = get_post( $post_id );
        $images = get_post_gallery_images($thispost);

        // check if post exists
        if ( !is_object( $thispost ) ) {

            $response['error'] = 'true';
            $response['content'] =  'There is no post with the ID ' . $post_id;

        } else {
            $text = preg_replace('/\[gallery.*\]/','', $thispost->post_content);
            $response['error'] = 'false';
            $response['content'] = $text;
            $response['gallery'] = $images;
            $response['title'] = $thispost->post_title;

        }

    }

    wp_send_json( $response );

}

