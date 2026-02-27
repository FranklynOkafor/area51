<?php
  function area51_site_setting(){
    return [
      'meta_description' => 'Area 51 testing ground for mini projects.',
      'analytics_script' => "<script>console.log('Analytics Loaded');</script>",
      'footer_message'   => '© 2026 Area 51. Built from scratch and small chat.'
    ];
  }

  function area51_meta_description(){
    $settings = area51_site_setting();
    echo '<meta name="description" content="' . esc_attr($settings['meta_description']) . '">';
  }
  add_action('wp_head', 'area51_meta_description');


  function area51_analytics_script(){
    $settings = area51_site_setting();
    echo $settings['analytics_script'];
  }
  add_action('wp_footer', 'area51_analytics_script');

  function area51_custom_footer_message(){
    $settings = area51_site_setting();
    echo "<p>{$settings['footer_message']}</p>";
  }
  add_action('wp_footer', 'area51_custom_footer_message');