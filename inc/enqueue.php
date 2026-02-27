<?php

function ulo_enqueue_assets() {
    wp_enqueue_style(
        'ulo-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'ulo-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'ulo_enqueue_assets');
