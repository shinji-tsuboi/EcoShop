
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

        <form>
          <!-- 氏名 -->
          <div class="form-area">
            <div class="contact-heading">
              <label class="contact-label">氏名（必須）</label>
            </div>
            <div class="input-area">
              <input class="input" type="text" name="name" placeholder="侍 太郎">
            </div>
          </div>
          <!-- フリガナ -->
          <div class="form-area">
            <div class="contact-heading">
              <label class="contact-label">フリガナ（必須）</label class="contact-label">
            </div>
            <div class="input-area">
              <input class="input" type="text" name="hurigana" placeholder="サムライ タロウ">
            </div>
          </div>
          <!-- 電話番号 -->
          <div class="form-area">
            <div class="contact-heading">
              <label class="contact-label">電話番号（必須） 半角</label>
            </div>
            <div class="input-area">
              <input class="input" type="text" name="tel" placeholder="0312345678">
            </div>
          </div>
          <!-- メールアドレス -->
          <div class="form-area">
            <div class="contact-heading">
              <label class="contact-label">メールアドレス（必須） 半角英数字</label>
            </div>
            <div class="input-area">
              <input class="input" type="text" name="email" placeholder="samurai-chiropractic@example.com">
            </div>
          </div>
          <!-- お問い合わせ内容 -->
          <div class="form-area">
            <div class="contact-heading">
              <label class="contact-label">お問い合わせ内容</label>
            </div>
            <div>
              <textarea class="contact-textarea" name="message" placeholder="できるだけ詳しいお問い合わせ内容を記入してください"></textarea>
            </div>
          </div>
          <form class="send" action="contact-thanks.html" method="get">
            <input class="send" type="submit" name="send-btn" value="送信">
          </form>

        </form>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
