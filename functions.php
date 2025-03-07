<?php

function sweb_files() {
    wp_enqueue_style('sweb_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'sweb_files');

?>