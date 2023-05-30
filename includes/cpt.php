<?php

function twomiles_cpt() {

    $Categories_label = array(
        'name'  => __('Categories Post' , 'textdomain'),
        'singular_name'  => __('Categories Post' , 'textdomain'),
        'add_new'  => __('Add Categories Post' , 'textdomain'),
        'add_new_item'  => __('Add New Skill' , 'textdomain'),
        'edit_item'  => __('Edit Skill Post' , 'textdomain'),
        'all_item'  => __('Categories Post' , 'textdomain'),
    );

    $Categoriespost_args = array(
        'labels'    => $Categories_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('Categoriespost' , $Categoriespost_args);

    $tags_label = array(
        'name'  => __('tags' , 'textdomain'),
        'singular_name'  => __('tags' , 'textdomain'),
        'add_new'  => __('Add tags' , 'textdomain'),
        'add_new_item'  => __('Add New tags' , 'textdomain'),
        'edit_item'  => __('Edit tags' , 'textdomain'),
        'all_item'  => __('tags' , 'textdomain'),
    );

    $tags_args = array(
        'labels'    => $tags_label,
        'public'    => true,
        'capability_type'    => 'post',
        'show_ui'    => true,
        'taxonomies'    => array('post_tag' , 'category'),
        'supports'    => array('title' , 'editor' , 'thumbnail' , 'excerpt'),

    );
    register_post_type('tags' , $tags_args);
}
add_action('init' , 'twomiles_cpt');