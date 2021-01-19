<?php

function first_theme_stylesheet() {
    $version = wp_get_theme()->get('Version');
    //Theme CSS
    wp_enqueue_style( 'style',get_template_directory_uri() . "/style.css", array('bootstrap_CSS'), $version, 'all' );
    //Bootstrap CSS
    wp_enqueue_style( 'bootstrap_CSS',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all' );
    //FontAwesome CSS
    wp_enqueue_style( 'fontAwesome_CSS',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'first_theme_stylesheet' );

?>