<?php

function learning_resources() {
    wp_enqueue_style('styleCSS', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learning_resources');

//nav menus

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
    ));

?>