  <?php get_header(); ?>

  <main>
    <!-- main-visual -->
    <section id="main-visual">
      <!-- PCメインビジュアル -->
      <div class="main-visual">
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img01.jpg" alt="メインビジュアル">
        </div>
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img02.jpg" alt="メインビジュアル">
        </div>
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img03.jpg" alt="メインビジュアル">
        </div>
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img04.jpg" alt="メインビジュアル">
        </div>
      </div>
      <!-- SPメインビジュアル -->
      <div class="main-visual-sp">
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/SP/FV-img01.jpg" alt="メインビジュアル">
        </div>
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/SP/FV-img02.jpg" alt="メインビジュアル">
        </div>
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/SP/FV-img03.jpg" alt="メインビジュアル">
        </div>
        <div class="fv">
          <img src="<?php echo get_template_directory_uri(); ?>/image/SP/FV-img04.jpg" alt="メインビジュアル">
        </div>
      </div>
      <!-- News -->
      <div id="news" class="news">
        <?php
          $args = array(
            'post_type'  => 'post',
            'category_name' => 'news',
            'posts_per_page' => 3,
          );
          $posts = get_posts($args);
        ?>
        <!-- ループ -->
        <?php if ($posts): ?>
          <?php foreach ($posts as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="news-title">
              <time><?php echo get_the_date(); ?></time>
              <div class="news-text">
                <a href="<?php echo get_permalink(); ?>">
                  <p><?php the_title(); ?></p>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>ニュースがありません。</p>
        <?php endif; ?>
      </div> <!-- /News -->

      <div class="mask"></div>

      <!-- title -->
      <div class="title">
        <h1>
          未来のためにサステナブルに<br>
          Eco for the future
        </h1>
      </div> <!-- /title -->
    </section> <!-- main-visual -->

    <!-- Product -->
    <section id="product">
      <div class="section-title">
        <h2>PRODUCT</h2>
        <h4>お客様の理想のサステナブルライフに寄り添います</h4>
      </div>
      <div class="product-container">
        <ul class="product-item">
          <li class="product-1">
            <a href="<?php echo esc_url(home_url('category/product')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/beauty.jpg" alt="美容製品">
            </a>
          </li>
          <li class="product-2">
            <a href="<?php echo esc_url(home_url('category/product')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/fashion.jpg" alt="衣類製品">
            </a>
          </li>
          <li class="product-3">
            <a href="<?php echo esc_url(home_url('category/product')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/food.jpg" alt="食品">
            </a>
          </li>
        </ul>
      </div>
    </section> <!-- /Product -->

    <!-- shopping -->
    <section id="shopping">
      <div class="section-title">
        <h2>SHOP</h2>
        <h4>環境にやさしいサステナブル商品</h4>
      </div>
      <div class="container">
        <div class="category-title-sp">
          <h2>BEAUTY</h2>
        </div>
        <div class="container-left">
          <div class="container-img">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product(1).jpg" alt="化粧品">
          </div>
        </div>
        <div class="container-right">
          <div class="category">
            <div class="category-title">
              <h2>BEAUTY</h2>
            </div>
            <ul class="category-item">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (1).jpg">
                <p>ピュアリーフスムースミルク</p>
                <p>&yen; 2,000</p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (2).jpg">
                <p>グリーンレーヴフェイスクリーム</p>
                <p>&yen; 2,000</p>
              </li>
            </ul>
            <div class="button">
              <a class="btn" href="<?php echo esc_url(home_url('/product')); ?>">詳しく</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container reverse">
        <div class="category-title-sp">
          <h2>FASHION</h2>
        </div>
        <div class="container-left">
          <div class="container-img">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product(2).jpg" alt="衣服">
          </div>
        </div>
        <div class="container-right">
          <div class="category">
            <div class="category-title">
              <h2>FASHION</h2>
            </div>
            <ul class="category-item">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (4).jpg" alt="衣類">
                <p>ナチュラルカーディガン</p>
                <p>&yen; 2,000</p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (5).jpg" alt="衣類">
                <p>エコリーフ ハット</p>
                <p>&yen; 2,000</p>
              </li>
            </ul>
            <div class="button">
              <a class="btn" href="<?php echo esc_url(home_url('/product')); ?>">詳しく</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="category-title-sp">
          <h2>FOOD</h2>
        </div>
        <div class="container-left">
          <div class="container-img">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product(3).jpg" alt="食品">
          </div>
        </div>
        <div class="container-right">
          <div class="category">
            <div class="category-title">
              <h2>FOOD</h2>
            </div>
            <ul class="category-item">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (7).jpg" alt="食品">
                <p>エコスイート クッキー</p>
                <p>&yen; 1,000</p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (8).jpg" alt="食品">
                <p>ナチュラルカカオ チョコレート</p>
                <p>&yen; 1,000</p>
              </li>
            </ul>
            <div class="button">
              <a class="btn" href="<?php echo esc_url(home_url('/product')); ?>">詳しく</a>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- /shopping -->

    <!-- About -->
    <section id="about">
      <div class="section-title">
        <h2>ABOUT</h2>
        <h4>サステナブルな選択で 地球にもあなたにも優しい喜びを</h4>
      </div>
      <div class="about-container">
        <div class="about-image">
          <div class="about-visual">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (1).jpg" alt="スライダー">
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (2).jpg" alt="スライダー">
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (3).jpg" alt="スライダー">
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (4).jpg" alt="スライダー">
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (5).jpg" alt="スライダー">
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (6).jpg" alt="スライダー">
            </div>
          </div>
        </div>
        <div class="about-text">
          <p>
            私たちのビジョンは
            人や環境、社会に良い影響を与える活動を応援し、
            みんながもっと主体的な人生を楽しめるようにお手伝いすることです。
            これからも世界中の素敵なアイテムに光を当てて、
            心が温まる商品をお届けしていきます。
          </p>
        </div>
      </div>
    </section> <!-- /About -->
  </main>

  <?php get_footer(); ?>
