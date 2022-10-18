<?php 

/*
Plugin Name:News Ticker
Plugin URI: https://bdprogrammers.com
Description: News Scrolling form custome post tyle
Version: 1.0.0
Author: anam
Author URI: https://anam.com
License: GPLv2 or later

*/

function Newsticker_init(){
    wp_enqueue_style( 'newst', plugins_url('css/eocjs-newsticker.css',__FILE__) );
	wp_enqueue_script( 'newst',  plugins_url('js/eocjs-newsticker.js',__FILE__) , array(), '1.0.0', false );
    wp_enqueue_script( 'newsCustom',  plugins_url('js/custome.js',__FILE__) , array(), '1.0.0', true );

    $sql = new WP_Query(array(
        'post_type' =>'news',
        'posts_per_page' => 3
    ));

    $content = '<div id="example-1">';
    if($sql->have_posts()):
        while($sql->have_posts()):$sql->the_post();
        $content .=get_the_title().'***';

        endwhile;
        endif;
        return $content .='</div>';

}


function news_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Breaking News', 'newsticker' ),
        'menu_icon' => 'dashicons-media-text',
        'supports'  => array( 'title' ),
    );
    register_post_type( 'news', $args );
}
add_action( 'init', 'news_post_type');


add_shortcode( 'mynews', 'Newsticker_init' );
// add_action('wp_enqueue_scripts','Newsticker_init')


?>
