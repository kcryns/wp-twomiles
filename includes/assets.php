<?php

function twomiles_assets() {
wp_enqueue_style('twomiles-style', get_template_directory_uri() . '/css/main.css' , microtime());
wp_enqueue_script('twomiles_script', get_template_directory_uri() . '/js/script.js', array(), microtime(), true);


}

add_action('wp_enqueue_scripts','twomiles_assets');