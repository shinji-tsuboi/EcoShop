
  <?php get_header(); ?>

  <main>
    <!-- subpage-top -->
    <div class="product-head">
      <div class="contact-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/contact-head.jpg">
      </div>
      <div class="contact-image-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SP/contact-head.jpg" alt="お問い合わせ">
      </div>
    </div>
    <!-- /subpage-top -->

    <!-- パンくずリスト -->
    <?php echo my_breadcrumbs(); ?>
    <!-- /パンくずリスト -->

    <!-- ご予約・お問い合わせ -->
    <section id="contact">
      <div class="contact-inner">
        <div class="contact-form">
          <h3>お問い合わせフォーム</h3>
          <p>※ 2営業日以内にご返信いたします。</p>
        </div>
        <?php echo apply_shortcodes( '[contact-form-7 id="2de0e30" title="コンタクトフォーム 1"]' ); ?>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
