<?php
require_once get_stylesheet_directory() . '/functions.php';

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'swipper',"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" );
   
}

// options de personnalisation du thème parent
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // empêcher la mise à jour des mods de thème enfant
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function theme_enqueue_scripts() {
    wp_enqueue_script( "jquery", "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js");
    wp_enqueue_script('child-customizer', get_stylesheet_directory_uri() . '/customizer.js', array('jquery'), '6.4.2', true);
    wp_enqueue_script( "swipper", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js");
    wp_register_script('app-js', get_stylesheet_directory_uri() . '/app.js', array(), '1.0', true);
    wp_enqueue_script('app-js');
    wp_enqueue_script( "ScrollMagic", "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js");
    
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

