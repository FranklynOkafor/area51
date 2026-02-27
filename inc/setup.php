<?php

function ulo_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'ulo-blueprint'),
    ]);
}

add_action('after_setup_theme', 'ulo_theme_setup');
