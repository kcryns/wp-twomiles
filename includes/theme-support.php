<?php

function twomiles_support(){
    register_nav_menus(array(
        'header__nav' => __('Header Menu','text_domain'),
        'footer_menu' => __('Footer Menu','text_domain'),
        'singlepagemenu' => __('Single Page Menu','text_domain')
    ));

    add_theme_support('menus');
    add_theme_support('post-thumbnails');
} 
add_action('after_setup_theme','twomiles_support');
add_theme_support('html5',array('search-form'));