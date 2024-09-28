
  <?php get_header(); ?>

  <main>
    <!-- subpage-top -->
    <div class="product-head">
      <div class="shopping-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/product-head.jpg" alt="ショップ">
      </div>
      <div class="shopping-image-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SP/product-head.jpg" alt="ショップ">
      </div>
    </div>
    <!-- /subpage-top -->

    <!-- パンくずリスト -->
    <?php echo my_breadcrumbs(); ?>
    <!-- /パンくずリスト -->

    <!-- subpage-main -->
    <section id="products" class="shop">
      <div id="beauty-section" class="item-container">
        <div class="item-category">
          <h2>BEAUTY</h2>
          <h3>オーガニックコスメ</h3>
        </div>
        <div class="item-wrapper">
          <ul class="item">
            <!-- 商品リンク BEAUTY-->
             <?php
             $args = array(
                'post_type' =>  'shop',
                'posts_per_page' => 3,
             );
             $query = new WP_Query($args);
             if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); ?>
              <a href="#" class="openModalButton" data-modal="productModal<?php echo get_the_ID(); ?>">
                <li class="item-box">
                  <img src="<?php the_field('pic'); ?>">
                  <h2><?php the_field('item'); ?></h2>
                  <p>&yen; <?php the_field('price'); ?></p>
                </li>
              </a>

              <!-- モーダルウィンドウ -->
              <div id="productModal<?php echo get_the_ID(); ?>" class="modal">
                <div class="modal-content">
                  <span class="close-button" data-modal="productModal<?php echo get_the_ID(); ?>">&times;</span>
                  <section id="product-item">
                    <div class="item-container-1">
                      <div class="top-wrapper">
                        <div class="container-img">
                          <img src="<?php the_field('pic'); ?>">
                        </div>
                        <div class="item-head head-beauty">
                          <h2 class="item-title"><?php the_field('item'); ?></h2>
                          <p class="item-type"><?php the_field('category'); ?></p>
                          <p class="item-price">&yen;<?php the_field('price'); ?></p>
                        </div>
                      </div>
                      <div class="container-bottom">
                        <table class="item-detail">
                          <tbody>
                            <tr>
                              <th>特徴</th>
                              <td><?php the_field('features'); ?></td>
                            </tr>
                            <tr>
                              <th>素材・成分</th>
                              <td><?php the_field('material'); ?></td>
                            </tr>
                            <tr>
                              <th>パッケージ</th>
                              <td><?php the_field('package'); ?></td>
                            </tr>
                            <tr>
                              <th>トレーサビリティ</th>
                              <td><?php the_field('traceability'); ?></td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                              <th>フェアトレード</th>
                              <td><?php the_field('fairtrade'); ?></td>
                            </tr>
                            <tr>
                              <th>カーボンフットプリント</th>
                              <td><?php the_field('carbon'); ?></td>
                            </tr>
                            <tr>
                              <th>その他の環境配慮</th>
                              <td><?php the_field('other'); ?></td>
                            </tr>
                            <tr>
                              <th>生産地・製造地</th>
                              <td><?php the_field('origin'); ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="cart-area">
                        <div class="cart-box">
                          <button type="submit" class="cart-button">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/cart-white.png" class="cart">
                            <p>カートに入れる</p>
                          </button>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
            endif;
            ?>
          </ul>
        </div>
      </div>

      <div id="fashion-section" class="item-container">
        <div class="item-category">
          <h2>FASHION</h2>
          <h3>サステナブルファッション</h3>
        </div>
        <div class="item-wrapper">
          <ul class="item">
            <!-- 商品リンク FASHION -->
            <?php
             $args = array(
                'post_type' =>  'fashion',
                'posts_per_page' => 3,
             );
             $query = new WP_Query($args);
             if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); ?>
              <a href="#" class="openModalButton" data-modal="productModal<?php echo get_the_ID(); ?>">
                <li class="item-box">
                  <img src="<?php the_field('pic'); ?>">
                  <h2><?php the_field('item'); ?></h2>
                  <p>&yen; <?php the_field('price'); ?></p>
                </li>
              </a>

              <!-- モーダルウィンドウ -->
              <div id="productModal<?php echo get_the_ID(); ?>" class="modal">
                <div class="modal-content">
                  <span class="close-button" data-modal="productModal<?php echo get_the_ID(); ?>">&times;</span>
                  <section id="product-item">
                    <div class="item-container-1">
                      <div class="top-wrapper">
                        <div class="container-img">
                          <img src="<?php the_field('pic'); ?>">
                        </div>
                        <div class="item-head head-fashion">
                          <h2 class="item-title"><?php the_field('item'); ?></h2>
                          <p class="item-type"><?php the_field('category'); ?></p>
                          <p class="item-price">&yen;<?php the_field('price'); ?></p>
                        </div>
                      </div>
                      <div class="container-bottom">
                        <table class="item-detail">
                          <tbody>
                            <tr>
                              <th>特徴</th>
                              <td><?php the_field('features'); ?></td>
                            </tr>
                            <tr>
                              <th>素材・成分</th>
                              <td><?php the_field('material'); ?></td>
                            </tr>
                            <tr>
                              <th>パッケージ</th>
                              <td><?php the_field('package'); ?></td>
                            </tr>
                            <tr>
                              <th>トレーサビリティ</th>
                              <td><?php the_field('traceability'); ?></td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                              <th>フェアトレード</th>
                              <td><?php the_field('fairtrade'); ?></td>
                            </tr>
                            <tr>
                              <th>カーボンフットプリント</th>
                              <td><?php the_field('carbon'); ?></td>
                            </tr>
                            <tr>
                              <th>その他の環境配慮</th>
                              <td><?php the_field('other'); ?></td>
                            </tr>
                            <tr>
                              <th>生産地・製造地</th>
                              <td><?php the_field('origin'); ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="cart-area">
                        <div class="cart-box">
                          <button type="submit" class="cart-button">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/cart-white.png" class="cart">
                            <p>カートに入れる</p>
                          </button>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
            endif;
            ?>
          </ul>
        </div>
      </div>
      <div id="food-section" class="item-container">
        <div class="item-category">
          <h2>FOOD</h2>
          <h3>サステナブルフード</h3>
        </div>
        <div class="item-wrapper">
          <ul class="item">
            <!-- 商品リンク FOOD -->
            <?php
             $args = array(
                'post_type' =>  'food',
                'posts_per_page' => 3,
             );
             $query = new WP_Query($args);
             if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post(); ?>
              <a href="#" class="openModalButton" data-modal="productModal<?php echo get_the_ID(); ?>">
                <li class="item-box">
                  <img src="<?php the_field('pic'); ?>">
                  <h2><?php the_field('item'); ?></h2>
                  <p>&yen; <?php the_field('price'); ?></p>
                </li>
              </a>

              <!-- モーダルウィンドウ -->
              <div id="productModal<?php echo get_the_ID(); ?>" class="modal">
                <div class="modal-content">
                  <span class="close-button" data-modal="productModal<?php echo get_the_ID(); ?>">&times;</span>
                  <section id="product-item">
                    <div class="item-container-1">
                      <div class="top-wrapper">
                        <div class="container-img">
                          <img src="<?php the_field('pic'); ?>">
                        </div>
                        <div class="item-head head-food">
                          <h2 class="item-title"><?php the_field('item'); ?></h2>
                          <p class="item-type"><?php the_field('category'); ?></p>
                          <p class="item-price">&yen;<?php the_field('price'); ?></p>
                        </div>
                      </div>
                      <div class="container-bottom">
                        <table class="item-detail">
                          <tbody>
                            <tr>
                              <th>特徴</th>
                              <td><?php the_field('features'); ?></td>
                            </tr>
                            <tr>
                              <th>素材・成分</th>
                              <td><?php the_field('material'); ?></td>
                            </tr>
                            <tr>
                              <th>パッケージ</th>
                              <td><?php the_field('package'); ?></td>
                            </tr>
                            <tr>
                              <th>トレーサビリティ</th>
                              <td><?php the_field('traceability'); ?></td>
                            </tr>
                          </tbody>
                          <tbody>
                            <tr>
                              <th>フェアトレード</th>
                              <td><?php the_field('fairtrade'); ?></td>
                            </tr>
                            <tr>
                              <th>カーボンフットプリント</th>
                              <td><?php the_field('carbon'); ?></td>
                            </tr>
                            <tr>
                              <th>その他の環境配慮</th>
                              <td><?php the_field('other'); ?></td>
                            </tr>
                            <tr>
                              <th>生産地・製造地</th>
                              <td><?php the_field('origin'); ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="cart-area">
                        <div class="cart-box">
                          <button type="submit" class="cart-button">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/cart-white.png" class="cart">
                            <p>カートに入れる</p>
                          </button>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
            endif;
            ?>
          </ul>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
