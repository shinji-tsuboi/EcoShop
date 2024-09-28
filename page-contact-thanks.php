
  <?php get_header(); ?>

  <main>
    <!-- subpage-top -->
    <div class="product-head">
      <div class="contact-image">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/contact-head.jpg" alt="お問い合わせ">
      </div>
      <div class="contact-image-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SP/contact-head.jpg">
      </div>
    </div>
    <!-- /subpage-top -->

    <!-- パンくずリスト -->
    <?php echo my_breadcrumbs(); ?>
    <!-- /パンくずリスト -->

    <!-- ご予約・お問い合わせ -->
    <section id="contact-thanks">
      <div class="contact-thanks-inner">
        <div class="thanks-text">
          <h3>お問い合わせ内容を送信しました</h3>
          <p>
            ありがとうございます。２営業日以内にご返信いたします。
          </p>
        </div>

        <a class="send" href="<?php echo esc_url(home_url('/')); ?>">
          トップページへ戻る
        </a>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
