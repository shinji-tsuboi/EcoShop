<!-- footer -->
<div id="footer">
    <div class="footer-contents">
      <h2>CONTENTS</h2>
    </div>
    <div class="footer">
      <div class="footer-container">
        <div class="footer-item">
          <a href="<?php echo esc_url(home_url('/product')); ?>">
            <h4>PRODUCTS</h4>
          </a>
          <ul>
            <li>BEAUTY</li>
            <li>FASHION</li>
            <li>FOOD</li>
          </ul>
        </div>
        <div class="footer-item">
          <a href="<?php echo home_url(('/about')); ?>">
            <h4>ABOUT</h4>
          </a>
          <ul>
            <li>私たちについて</li>
            <li>会社概要</li>
          </ul>
        </div>
        <div class="footer-item">
          <a href="<?php echo esc_url(home_url('/policy')); ?>">
            <h4>POLICY</h4>
          </a>
          <ul>
            <li>個人情報の取り扱い</li>
          </ul>
        </div>
        <div class="footer-item">
          <a href="<?php echo esc_url(home_url('/contact')); ?>">
            <h4>CONTACT</h4>
          </a>
          <ul>
            <li>お問い合わせ</li>
          </ul>
        </div>
        <div class="footer-item">
          <a href="#">
            <h4>SNS</h4>
          </a>
          <ul>
            <li>INSTAGRAM</li>
            <li>X</li>
            <li>FACEBOOK</li>
          </ul>
        </div>
      </div>
      <div class="footer-logo-area">
        <div class="footer-logo">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/logo.jpg" alt="ロゴ">
          </a>
        </div>
        <div class="company-container">
          <div class="company-name">
            <h3>会社概要</h3>
          </div>
          <table class="company-detail">
            <tbody>
              <tr>
                <th>会社名：</th>
                <td>株式会社Eco Shop</td>
              </tr>
              <tr>
                <th>所在地：</th>
                <td>〒000-0000 東京都港区芝公園0-0-0</td>
              </tr>
              <tr>
                <th>電話番号：</th>
                <td>03-1234-5678</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <p class="copyright">&copy; Eco Shop</p>
  </div>
  <!-- /footer -->

  <!-- SlickのJS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Main.JS -->
  <script src="<?php echo get_theme_file_uri('main.js'); ?>"></script>

  <?php wp_footer(); ?>
</body>

</html>
