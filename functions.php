<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyfifteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function anoddnumber_widget_init() {
  register_sidebar( array(
    'name' => 'anoddnumber_sidebar',
    'id' => 'sidebar_id',
    'before_widget' => '<nav class="side-nav-container">',
    'after_widget' => '</nav>',
    'before_title' => '<h3 id="mytitle">',
    'after_title' => '</h3>',
  ));
}

add_action( 'widgets_init', 'anoddnumber_widget_init');
?>