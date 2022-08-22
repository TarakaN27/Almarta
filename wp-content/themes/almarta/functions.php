<?php

function init_assets() {

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );

    wp_enqueue_style( 'accordion', get_template_directory_uri() . '/assets/css/accordion.css' );

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css' );

    #wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js' );

    wp_enqueue_script( 'accordion', get_template_directory_uri() . '/assets/js/accordion.js' );
    
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/custom.js' );
}

add_action( 'wp_enqueue_scripts', 'init_assets' );