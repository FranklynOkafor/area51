<?php

function ulo_enqueue_assets()
{
  wp_enqueue_style(
    'ulo-main-style',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    '1.0'
  );
  // Header Style
  if (is_front_page()) {
    wp_enqueue_style(
      'ulo-header-style',
      get_template_directory_uri() . '/assets/css/header.css',

    );
  }

  // Sidebar style
  if (is_single()) {
    wp_enqueue_style(
      'ulo-sidebar-style',
      get_template_directory_uri() . '/assets/css/sidebar.css',

    );
  }

  wp_enqueue_script(
    'ulo-main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    '1.0',
    true
  );
}

add_action('wp_enqueue_scripts', 'ulo_enqueue_assets');
