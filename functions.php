<?php

function learning_resources() {
    wp_enqueue_style('styleCSS', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learning_resources');
    
//get top ancestor

function get_top_ancestor_id(){
    
    global $post;
    
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    return $post->ID;
}

//does page have children

function has_children(){
    global $post;
    
    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}




function learning_setup(){
    //add feature image support 
    add_theme_support('post-thumbnails');
    
    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
        ));
        
    //add post format support
    add_theme_support('post-formats', array(
        'aside',
        'gallery',
        'link'
        ));
}

add_action('after_setup_theme', 'learning_setup');

?>