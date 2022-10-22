<?php 
// woocommerce 
    function basic_theme_support() {

        // add_theme_support('post-thumbnails');
        // add_theme_support( 'title-tag' );
        // add_theme_support( 'widgets' );
        // add_theme_support('custom-logo', array(
        //     'width' => 200,
        //     'height' => 26,
        //     ));
        // add_theme_support( 'custom-background' );
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'basic_theme_support' );