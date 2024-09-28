<?php

// CSSファイル読み込み
function my_enqueue_styles() {
  // RessのCSSを読み込む
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), null, 'all');

  // SlickのCSSを読み込む
  wp_enqueue_style('slick-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), null, 'all');
  wp_enqueue_style('slick-theme-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), null, 'all');

  // テーマのカスタムスタイルを読み込む
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array('ress'), null, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');


// JSファイル読み込み
function st_enqueue_scripts() {
  // jQueryの読み込み（必要に応じて）
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

  // SlickのCSSとJSを読み込む
  wp_enqueue_script('slick-js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '1.8.1', true);

  // 自作のスクリプトを読み込む
  wp_enqueue_script('main', get_theme_file_uri('main.js'), array('jquery', 'slick-js'), false, true);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

// パンくずリスト
function my_breadcrumbs() {
  if (function_exists('bcn_display')) {
      echo '<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">';
      bcn_display();
      echo '</div>';
  }
}

// アイキャッチ機能　有効化
add_theme_support('post-thumbnails');

// ページネーション
function pagination($max_num_pages) {
  global $wp_query;
  $current_page = max(1, get_query_var('paged'));

  if ($max_num_pages <= 1) return;

  $links = paginate_links(array(
      'total'   => $max_num_pages,
      'current' => $current_page,
      'format'  => '?paged=%#%',
      'show_all' => false,
      'type' => 'array',
      'prev_text' => __('prev'),
      'next_text' => __('next'),
  ));

  if (is_array($links)) {
      echo '<div class="pagination">';
      foreach ($links as $link) {
          echo $link;
      }
      echo '</div>';
  }
}

function create_product_post_type() {
  register_post_type('product',
      array(
          'labels' => array(
              'name' => __('Products'),
              'singular_name' => __('Product')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'products'), // スラッグを指定
      )
  );
}
add_action('init', 'create_product_post_type');

function create_shop_post_type() {
  register_post_type('shop',
      array(
          'labels' => array(
              'name' => __('Shops'),
              'singular_name' => __('Shop')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'shop'), // スラッグを指定
          'supports' => array('title', 'editor', 'thumbnail'), // サポートする機能を指定
      )
  );
}
add_action('init', 'create_shop_post_type');

function create_fashion_post_type() {
  register_post_type('fashion',
      array(
          'labels' => array(
              'name' => __('Fashions'),
              'singular_name' => __('Fashion'),
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'fashions'),
          'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
      )
  );
}
add_action('init', 'create_fashion_post_type');

function create_food_post_type() {
  register_post_type('food',
      array(
          'labels' => array(
              'name' => __('Foods'),
              'singular_name' => __('Food'),
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'foods'),
          'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
      )
  );
}
add_action('init', 'create_food_post_type');
