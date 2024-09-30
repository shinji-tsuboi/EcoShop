

  <?php get_header(); ?>

  <main>
    <!-- subpage-top -->
    <div class="product-head">
      <div class="product-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product-head.jpg" alt="商品種類">
      </div>
      <div class="product-image-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SP/product-head.jpg" alt="商品種類">
      </div>
    </div>
    <!-- /subpage-top -->

    <!-- パンくずリスト -->
    <?php my_breadcrumbs(); ?>
    <!-- /パンくずリスト -->

    <!-- subpage-main -->
    <section id="products">
      <div class="products-title">
        <h3>お客様の理想の<br>
          サステナブルライフに寄り添います
        </h3>
      </div>
      <div class="product-container">
        <ul class="product-item">
          <li class="product-1" data-target="beauty-group">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/beauty.jpg" alt="美容製品">
          </li>
          <li class="product-2" data-target="fashion-group">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/fashion.jpg" alt="衣類製品">
          </li>
          <li class="product-3" data-target="food-group">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/food.jpg" alt="食品">
          </li>
        </ul>
      </div>
      <div class="products-text">
        <p>
          環境に優しいサステナブルな商品をカテゴリー別にご紹介します。
        </p>
        <p>
          コスメから洋服、食べ物まで、自然由来の素材やリサイクル資源を使用した、<br>地球にもお肌にも優しいアイテムを厳選しました。
        </p>
        <p>
          各カテゴリーごとに、それぞれの商品が持つ特徴などを解説しています。
        </p>
        <p>
          あなたの日常に、持続可能な選択を取り入れてみませんか？
        </p>
      </div>

      <!-- Beauty -->
      <div id="beauty-group" class="category-container beauty-container">
        <div class="group-title">
          <h3>BEAUTY</h3>
          <div class="concept">
            <h4>自然由来のオーガニック成分を活用し、お肌に優しいケアを提供しながら、地球にも優しい選択をお届けします。</h4>
          </div>
        </div>
        <div class="products-inner">
          <div class="products-left">
            <div class="products-img">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product-1.jpg" alt="化粧品">
            </div>
          </div>
          <div class="products-right">
            <div class="products-content">
              <div class="features">
                <h3>FEATURES</h3>
                <h4>特徴</h4>
              </div>
              <div class="products-text features-text">
                <p>
                  オーガニックコスメは、天然由来の成分を使用しているため、肌に優しく、特に敏感肌の方にも適した製品です。
                </p>
                <p>
                  これらのコスメは、環境に配慮した栽培方法と製造プロセスを採用しており、農薬や化学肥料を使用せず、持続可能な方法で育てられた植物を原料としています。
                </p>
              </div>
            </div>
            <div class="button">
              <a class="btn  products-button" href="<?php echo esc_url(home_url('/shop#beauty-section')); ?>">SHOP</a>
            </div>
          </div>
        </div>
      </div> <!-- /Beauty -->

      <!-- Fashion -->
      <div id="fashion-group" class="category-container">
        <div class="group-title">
          <h3>FASHION</h3>
          <div class="concept">
            <h4>オーガニックコットンやリサイクル素材を使用し、環境に優しい衣類で持続可能なライフスタイルを実現します。</h4>
          </div>
        </div>
        <div class="products-inner reverse">
          <div class="products-left">
            <div class="products-img">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product-2.jpg" alt="化粧品">
            </div>
          </div>
          <div class="products-right">
            <div class="products-content">
              <div class="features">
                <h3>FEATURES</h3>
                <h4>特徴</h4>
              </div>
              <div class="products-text features-text">
                <p>
                  サステナブルファッションの特徴としては、オーガニックコットンをはじめ素材の質がよくて長く愛用できるもの、廃棄物をリサイクルしたものなどが挙げられます。
                </p>
                <p>
                  持続可能性に配慮し、サステナブルファッションでは化学肥料や農薬を使わず手間暇をかけて栽培するオーガニックコットンが多く取り入れられています。
                </p>
              </div>
            </div>
            <div class="button">
              <a class="btn  products-button" href="<?php echo esc_url(home_url('/shop#fashion-section')); ?>">SHOP</a>
            </div>
          </div>
        </div>
      </div> <!-- /Fashion -->

      <!-- Food -->
      <div id="food-group" class="category-container">
        <div class="group-title">
          <h3>FOOD</h3>
          <div class="concept">
            <h4>オーガニックやフェアトレードの食材を通じて、環境に優しいライフスタイルをサポート。エコフレンドリーな暮らしをお手伝いします。</h4>
          </div>
        </div>
        <div class="products-inner">
          <div class="products-left">
            <div class="products-img">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product-3.jpg" alt="化粧品">
            </div>
          </div>
          <div class="products-right">
            <div class="products-content">
              <div class="features">
                <h3>FEATURES</h3>
                <h4>特徴</h4>
              </div>
              <div class="products-text features-text">
                <p>
                  サステナブルフードは持続可能を目標とし、自然環境や労働環境など、私たちの暮らしへと関わることに配慮した食品のことです。
                </p>
                <p>
                  さまざまな食品産業において、自然環境や社会にできるだけ負担をかけない取り組みがおこなわれています。
                </p>
              </div>
            </div>
            <div class="button">
              <a class="btn products-button" href="<?php echo esc_url(home_url('/shop#food-section')); ?>">SHOP</a>
            </div>
          </div>
        </div>
      </div> <!-- /Food -->

    </section>
  </main>

  <?php get_footer(); ?>
