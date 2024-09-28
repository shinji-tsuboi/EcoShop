
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
        <ul class="category-list">
            <h2>CATEGORIES</h2>
            <?php
            // カテゴリーを取得
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

        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5,
          'paged' => $paged,  //ページネーションを設定
        );

        $query = new WP_query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="news-inner">
          <div class="news-img">
            <?php
              $cat = get_the_category();
              $catslug = $cat[0] ->slug;
              $catname = $cat[0] ->cat_name;
            ?>
            <h2><?php echo esc_html($catname); ?></h2>
            <?php the_post_thumbnail('full'); ?>
          </div>
          <div class="archive">
            <div class="archive-title">
              <h2><?php the_title(); ?></h2>
              <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
            </div>
            <div class="archive-text">
              <p><?php echo wp_trim_words( get_the_content() , 100, '...'); ?></p>
            </div>
            <button class="news-btn">
              <a href="<?php the_permalink(); ?>">続きを読む</a>
            </button>
          </div>
        </div>
        <?php
          endwhile;

          //ページネーション表示
          pagination($query->max_num_pages);

            wp_reset_postdata();
          else :
            echo '<p>投稿がありません</p>';
        endif;
        ?>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
