 <?php

function ugnestheme_styles() {
    wp_enqueue_style( 'bootstrap-style',  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' );
    wp_enqueue_style('cssstyle', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style( 'owl-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'fontroboto', 'https://fonts.googleapis.com/css?family=Roboto' );
    wp_enqueue_style( 'fontlora', 'https://fonts.googleapis.com/css?family=Lora' );

}
add_action( 'wp_enqueue_scripts', 'ugnestheme_styles' );



function create_carousel_post_type() {
    $labels = array(
        'name'               => 'Carousel',
        'singular_name'      => 'Carousel',
        'menu_name'          => 'Carousel',
        'name_admin_bar'     => 'Carousel',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Carousel',
        'new_item'           => 'New Carousel',
        'edit_item'          => 'Edit Carousel',
        'view_item'          => 'View Carousel',
        'all_items'          => 'All Carousel',
        'search_items'       => 'Search Carousel',
        'parent_item_colon'  => 'Parent Carousel:',
        'not_found'          => 'No carousel found.',
        'not_found_in_trash' => 'No carousel found in Trash.',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'carousel' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'carousel', $args );
}
add_action( 'init', 'create_carousel_post_type' );



function create_cards_post_type() {
    $labels = array(
        'name'               => 'Cards',
        'singular_name'      => 'Card',
        'menu_name'          => 'Cards',
        'name_admin_bar'     => 'Card',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Card',
        'new_item'           => 'New Card',
        'edit_item'          => 'Edit Card',
        'view_item'          => 'View Card',
        'all_items'          => 'All Cards',
        'search_items'       => 'Search Cards',
        'parent_item_colon'  => 'Parent Card:',
        'not_found'          => 'No cards found.',
        'not_found_in_trash' => 'No cards found in Trash.',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'cards' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'cards', $args );
}
add_action( 'init', 'create_cards_post_type' );


function create_gallery_post_type() {
    $labels = array(
        'name'               => 'Galleries',
        'singular_name'      => 'Gallery',
        'menu_name'          => 'Galleries',
        'name_admin_bar'     => 'Gallery',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Gallery',
        'new_item'           => 'New Gallery',
        'edit_item'          => 'Edit Gallery',
        'view_item'          => 'View Gallery',
        'all_items'          => 'All Galleries',
        'search_items'       => 'Search Galleries',
        'parent_item_colon'  => 'Parent Gallery:',
        'not_found'          => 'No galleries found.',
        'not_found_in_trash' => 'No galleries found in Trash.',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'gallery' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'gallery', $args );
}
add_action( 'init', 'create_gallery_post_type' );



function create_testimonials_post_type() {
    $labels = array(
        'name'               => 'Testimonials',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonials',
        'name_admin_bar'     => 'Testimonial',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Testimonial',
        'new_item'           => 'New Testimonial',
        'edit_item'          => 'Edit Testimonial',
        'view_item'          => 'View Testimonial',
        'all_items'          => 'All Testimonials',
        'search_items'       => 'Search Testimonials',
        'parent_item_colon'  => 'Parent Testimonial:',
        'not_found'          => 'No testimonials found.',
        'not_found_in_trash' => 'No testimonials found in Trash.',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'testimonials' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'create_testimonials_post_type' );


function ugnestheme_support()
{
    add_theme_support('title-tag');

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ugnestheme_support');




function ugnestheme_menus(){

    $locations = array(
'primary'=> "Desktop Menu",
'footer'=> "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'ugnestheme_menus');




function ugnestheme_widget_areas() {

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="info_social">',
            'after_widget' => '</div>',
            'name' => 'sidebar area',
            'id' =>'sidebar-1',
            'description' => 'Sidebar widget area',
        )
    );
}


add_action('widgets_init', 'ugnestheme_widget_areas');





    ?>