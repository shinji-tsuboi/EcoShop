<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco Shop</title>
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('image/PC/favicon.jpg')); ?> ">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?>">

  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- Header -->
  <div id="header">
    <div id="top_area" class="top_area">
      <div class="logo left-area">
        <a href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/logo2.jpg" alt="Eco Shop">
        </a>
      </div>
      <nav class="center-area">
        <ul class="nav-item">
          <li><a href="<?php echo esc_url(home_url('/product')); ?>">PRODUCT</a></li>
          <li><a href="<?php echo esc_url(home_url('/shop')); ?>">SHOP</a></li>
          <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a></li>
          <li><a href="<?php echo esc_url(home_url('/category/news')); ?>">NEWS</a></li>
        </ul>
      </nav>
      <div class="right-area">
        <div class="search" id="search-toggle">
          <a href="javascript:void(0);">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/search.png" alt="検索">
          </a>
        </div>
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-form-pc" id="search-form">
          <button type="submit" aria-label="検索"></button>
          <label>
            <input type="text" name="s" placeholder="キーワードを入力" required>
          </label>
        </form>
        <div class="cart">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/cart.png" alt="ショッピングカート">
          </a>
        </div>
      </div>
      <!-- SP用メニューボタン -->
      <div class="btn-area">
        <div class="openbtn">
          <span></span>
          <span></span>
        </div>
      </div>
      <!-- SP用メニューリスト -->
      <nav class="nav-sp">
        <ul class="nav-menu-sp">
          <li><a href="<?php echo esc_url(home_url('/product')); ?>">PRODUCT</a></li>
          <li><a href="<?php echo esc_url(home_url('/shop')); ?>">SHOP</a></li>
          <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a></li>
          <li><a href="<?php echo esc_url(home_url('/category/news')); ?>">NEWS</a></li>
          <li><a href="<?php echo esc_url(home_url('/policy')); ?>">POLICY</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a></li>
          <li class="search-sp" id="search-toggle-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/search.png" alt="検索">
          </li>
          <form action="#" class="search-form-sp" id="search-form-sp">
            <button type="submit" aria-label="検索"></button>
            <label>
              <input type="text" placeholder="キーワードを入力">
            </label>
          </form>
        </ul>
      </nav>
    </div>
  </div>
  <!-- /Header -->
