<?php

function my_theme_enqueue_styles_scripts()
{
  // Google Fonts
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap',
    [],
    null
  );
  wp_enqueue_style(
    'google-fonts-noto-sans',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap',
    [],
    null
  );

  // Swiper CSS
  wp_enqueue_style(
    'swiper-css',
    'https://unpkg.com/swiper@8/swiper-bundle.min.css',
    [],
    null
  );

  // Main CSS
  wp_enqueue_style(
    'main-styles',
    get_theme_file_uri('/assets/css/styles.css'),
    [],
    filemtime(get_theme_file_path('/assets/css/styles.css')) // キャッシュバスター
  );

  // jQuery (外部)
  wp_enqueue_script(
    'jquery-cdn',
    'https://code.jquery.com/jquery-3.6.0.js',
    [],
    '3.6.0',
    true
  );

  // Swiper JavaScript
  wp_enqueue_script(
    'swiper-js',
    'https://unpkg.com/swiper@8/swiper-bundle.min.js',
    [],
    null,
    true
  );

  // Custom JavaScript
  wp_enqueue_script(
    'custom-script',
    get_theme_file_uri('/assets/js/script.js'),
    [],
    filemtime(get_theme_file_path('/assets/js/script.js')), // キャッシュバスター
    true
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles_scripts');
