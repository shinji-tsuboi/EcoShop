
  <?php get_header(); ?>

  <main>
    <!-- subpage-top -->
    <div class="product-head">
      <div class="news-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/news-head.jpg" alt="ニュース">
      </div>
      <div class="news-image-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SP/news-head.jpg" alt="ニュース">
      </div>
    </div>
    <!-- /subpage-top -->

    <!-- パンくずリスト -->
    <?php echo my_breadcrumbs(); ?>
    <!-- /パンくずリスト -->

    <!-- newspage-main -->

    <section id="news-list">
      <div class="news-category">
          <h2>CATEGORIES</h2>
          <ul class="category-list">
              <?php
              $categories = get_categories();
              foreach ($categories as $category) {
                  echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
              }
              ?>
          </ul>
      </div>

      <div class="news-wrapper">
          <?php
          // 現在のページを取得
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          // $args = array(
          //     'post_type' => 'post',
          //     'posts_per_page' => 5,
          //     'paged' => $paged,  // ページネーションを設定
          // );

          // $query = new WP_Query($args);

          if (have_posts()) :
              while (have_posts()) : the_post();
          ?>
          <div class="news-inner">
              <div class="news-img">
                  <?php
                  // 投稿に関連するカテゴリーを取得
                  $cats = get_the_category();
                  if (!empty($cats)) {
                      $cat = $cats[0]; // 最初のカテゴリーを使用
                      $catslug = esc_html($cat->slug);
                      $catname = esc_html($cat->name);
                  ?>
                  <h2><a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo $catname; ?></a></h2>
                  <?php } ?>
                  <?php the_post_thumbnail('full'); ?>
              </div>
              <div class="archive">
                  <div class="archive-title">
                      <h2><?php the_title(); ?></h2>
                      <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                  </div>
                  <div class="archive-text">
                      <p><?php echo wp_trim_words(get_the_content(), 100, '...'); ?></p>
                  </div>
                  <button class="news-btn">
                      <a href="<?php the_permalink(); ?>">続きを読む</a>
                  </button>
              </div>
          </div>
          <?php
              endwhile;

              // ページネーション表示
              // pagination($query->max_num_pages);
              // wp_reset_postdata();
          else :
              echo '<p>投稿がありません</p>';
          endif;
          ?>
          <?php wp_pagenavi(); ?>
      <?php //the_posts_pagination(); ?>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
