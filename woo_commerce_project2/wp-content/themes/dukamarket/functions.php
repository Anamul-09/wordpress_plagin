<?php  

   

    // woocommerce 
    function basic_theme_support() {

        add_theme_support('post-thumbnails');
        add_theme_support( 'title-tag' );
        add_theme_support( 'widgets' );
        add_theme_support('custom-logo', array(
            'width' => 200,
            'height' => 26,
            ));
        add_theme_support( 'custom-background' );
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'basic_theme_support' );
    
    /**  Add your scripts and styles*/

    function wooTheme_load_scripts() {
        
    // css File

    wp_enqueue_style( 'preloader-dukamarket', get_template_directory_uri(). 'assets/css/preloader.css');
    wp_enqueue_style( 'bootstrap-dukamarket', get_template_directory_uri(). '/assets/css/bootstrap.css');
    wp_enqueue_style( 'meanmenu-dukamarket', get_template_directory_uri(). '/assets/css/meanmenu.css');
    wp_enqueue_style( 'animate-dukamarket', get_template_directory_uri(). '/assets/css/animate.css');
    wp_enqueue_style( 'carousel-dukamarket', get_template_directory_uri(). '/assets/css/owl-carousel.css');
    wp_enqueue_style( 'swiper-dukamarket', get_template_directory_uri(). '/assets/css/swiper-bundle.css');
    wp_enqueue_style( 'backtotop-dukamarket', get_template_directory_uri(). '/assets/css/backtotop.css');
    wp_enqueue_style( 'slider-dukamarket', get_template_directory_uri(). '/assets/css/ui-range-slider.css');
    wp_enqueue_style( 'magnific-dukamarket', get_template_directory_uri(). '/assets/css/magnific-popup.css');
    wp_enqueue_style( 'nice-dukamarket', get_template_directory_uri(). '/assets/css/nice-select.css');
    wp_enqueue_style( 'flaticon-dukamarket', get_template_directory_uri(). '/assets/flaticon/flaticon.css');
    wp_enqueue_style( 'awesome-dukamarket', get_template_directory_uri(). '/assets/css/font-awesome-pro.css');
    wp_enqueue_style( 'default-dukamarket', get_template_directory_uri(). '/assets/css/default.css');
    wp_enqueue_style( 'assets/css/style.css-dukamarket', get_template_directory_uri(). '/assets/css/style.css');
    wp_enqueue_style( 'mystyle', get_stylesheet_uri() );


    // JS file
    
    wp_enqueue_script( 'jquery-dukamarket', get_template_directory_uri() . '/assets/js/vendor/jquery.js', array(), '', true);
    wp_enqueue_script( 'waypoints-dukamarket', get_template_directory_uri() . '/assets/js/vendor/waypoints.js', array(), '', true);
    wp_enqueue_script( 'bootstrap-dukamarket', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array(), '', true);
    wp_enqueue_script( 'meanmenu-dukamarket', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '', true);
    wp_enqueue_script( 'meanmenu-dukamarket', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '', true);
    wp_enqueue_script( 'swiper-dukamarket', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), '', true);
    wp_enqueue_script( 'tweenmax-dukamarket', get_template_directory_uri() . '/assets/js/tweenmax.js', array(), '', true);
    wp_enqueue_script( 'carousel-dukamarket', get_template_directory_uri() . '/assets/js/owl-carousel.js', array(), '', true);
    wp_enqueue_script( 'magnific-dukamarket', get_template_directory_uri() . '/assets/js/magnific-popup.js', array(), '', true);
    wp_enqueue_script( 'parallax-dukamarket', get_template_directory_uri() . '/assets/js/parallax.js', array(), '', true);
    wp_enqueue_script( 'backtotop-dukamarket', get_template_directory_uri() . '/assets/js/backtotop.js', array(), '', true);
    wp_enqueue_script( 'nice-dukamarket', get_template_directory_uri() . '/assets/js/nice-select.js', array(), '', true);
    wp_enqueue_script( 'countdown-dukamarket', get_template_directory_uri() . '/assets/js/countdown.min.js', array(), '', true);
    wp_enqueue_script( 'counterup-dukamarket', get_template_directory_uri() . '/assets/js/counterup.js', array(), '', true);
    wp_enqueue_script( 'range-dukamarket', get_template_directory_uri() . '/assets/js/ui-slider-range.js', array(), '', true);
    wp_enqueue_script( 'wow-dukamarket', get_template_directory_uri() . '/assets/js/wow.js', array(), '', true);
    wp_enqueue_script( 'isotope-dukamarket', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array(), '', true);
    wp_enqueue_script( 'imagesloaded-dukamarket', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array(), '', true);
    wp_enqueue_script( 'ajax-dukamarket', get_template_directory_uri() . '/assets/js/ajax-form.js', array(), '', true);
    wp_enqueue_script( 'main-dukamarket', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
    
        
    }
    add_action('wp_enqueue_scripts', 'wooTheme_load_scripts');

    // Woocomerce
    // add_filter( 'woocommerce_enqueue_styles', '__return_false' );



?>