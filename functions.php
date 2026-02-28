<?php

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include core files
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/mini-projects/settings-injector.php';
require get_template_directory() . '/mini-projects/smart_layout.php';
