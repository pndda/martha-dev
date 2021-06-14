<?php

// Add the support 

add_theme_support( 'title-tag' ); 
add_theme_support( 'post-thumbnails'); 
add_theme_support( 'post_formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] ); 
add_theme_support( 'html5' ); 
add_theme_support( 'automatic-feed-links'); 
add_theme_support( 'custom-background'); 
add_theme_support( 'custom-header'); 
add_theme_support( 'custom-logo'); 
add_theme_support( 'customize-selective-refresh-widgets'); 
add_theme_support( 'starter-content');

function martha_scripts() {

    wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'); 
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/css/custom.css');  
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_register_script( 'Bootstrap-bundle', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('Bootstrap-bundle');
   
    wp_enqueue_script( 'main-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), true, true );
  
   
   }
   add_action( 'wp_enqueue_scripts', 'martha_scripts' );
   



// add to specific page 
function load_scripts() {
    global $post;

    if( is_page() || is_single() )
    {
        switch($post->post_name) // post_name is the post slug which is more consistent for matching to here
        {
            case 'home':
                wp_register_script('martha-rellax', '//https://unpkg.com/swiper/swiper-bundle.css');
                wp_enqueue_script('martha-rellax');
                wp_enqueue_script( 'martha-implement-rellax', get_template_directory_uri() . '/assets/js/rellax-custom.js', array(), true, true );

                break;
            case 'collection':
                wp_enqueue_style( 'martha-swiper-bundle', '//https://unpkg.com/swiper/swiper-bundle.css'); 
                wp_enqueue_style( 'martha-swiper-min-bundle', '//https://unpkg.com/swiper/swiper-bundle.min.css');
                wp_register_script( 'martha-swiper-js', '//https://unpkg.com/swiper/swiper-bundle.js');
                wp_enqueue_script('martha-swiper-js'); 
                wp_register_script( 'martha-swiper-min-js', '//https://unpkg.com/swiper/swiper-bundle.min.js');
                wp_enqueue_script('martha-swiper-min-js'); 
                break;
            case 'some-post':
                wp_enqueue_script('somepost', get_template_directory_uri() . '/js/somepost.js', array('jquery'), '1.6', true);
                break;
        }
    } 
}

add_action('wp_enqueue_scripts', 'load_scripts');   

// add favicon
function my_favicon() { ?>
    <link rel="shortcut icon" href="/wp-content/themes/oyu/martha.ico" >
    <?php }
    add_action('wp_head', 'my_favicon');
    
/*  add svg  */

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');


// Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    
    add_filter( 'body_class', 'add_slug_body_class' );
