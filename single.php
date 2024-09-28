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
    <? echo my_breadcrumbs(); ?>
    <!-- /パンくずリスト -->

    <!-- newspage-main -->

  </main>
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
      <div class="news-inner detail-inner">
        <div class="news-img detail-img">
          <?php
          $cat = get_the_category();
          $catslug = $cat[0]->slug;
          $catname = $cat[0]->cat_name;
          ?>
          <h2><?php echo esc_html($catname); ?></h2>
          <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="archive archive-detail">
          <div class="archive-title">
            <h2><?php the_title(); ?></h2>
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
          </div>
          <div class="archive-text">
            <p><?php the_content(); ?></p>

          </div>
          <button class="news-detail-btn">
            <a href="news.html">ニュース一覧へ</a>
          </button>
        </div>
      </div>

    </div>
  </section>

  <?php get_footer(); ?>
