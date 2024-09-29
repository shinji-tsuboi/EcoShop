  <?php get_header(); ?>

  <main>
    <!-- subpage-top -->
    <div class="subpage-head">
      <div class="subpage-img">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-head.jpg">
      </div>
      <div class="subpage-img-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SP/about-head.jpg">
      </div>
    </div>
    <!-- /subpage-top -->

    <!-- パンくずリスト -->

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div>
    <!-- /パンくずリスト -->

    <!-- subpage-main -->
    <section id="vision">
      <div class="vision-inner reverse">
        <div class="vision-title-sp">
          <h3>大量生産ではなく<br>手作りされた商品</h3>
        </div>
        <div class="vision-left">
          <div class="vision-img">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-img.jpg" alt="私たちについて">
          </div>
        </div>
        <div class="vision-right">
          <div class="vision-content">
            <div class="vision-title">
              <h3>大量生産ではなく<br>手作りされた商品</h3>
            </div>
            <div class="vision-text">
              <p>
                私たちのビジョンは、人や環境、社会に良い影響を与える活動を応援し、みんながもっと主体的な人生を楽しめるようにお手伝いすることです。
              </p>
              <p>
                これからも、世界中の素敵なアイテムに光を当てて、心が温まる商品をお届けしていきます。
              </p>
              <p>
                私たちが紹介するのは、環境に優しく、使い終わったら土に還るもの、人権や労働環境に配慮したアイテム、大量生産ではなく手作りされた商品、そして地域の伝統を大切にした製品です。
              </p>
              <p>
                一緒に、より良い未来を作るための一歩を踏み出しましょう。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sustainable">
      <div class="sustainable">
        <div class="sustainable-title">
          <h3>サステナブルな選択で<br>
            地球にもあなたにも優しい喜びを</h3>
        </div>
        <div class="sustainable-text">
          <P>
            私たちは、お客様との長いお付き合いを大切にし、環境に優しいサステナブルな商品を通じて、再生可能資源やリサイクル素材を活用した選択肢を提供しています。
          </P>
          <p>
            お客様の満足が私たちの励みとなり、そのご満足がさらに良いサービスを生み出すと信じています。
          </p>
          <p>
            共に持続可能な未来を築いていくために、日々新しい挑戦を続けていきます。
          </p>
        </div>
        <div class="sustainable-img">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (1).jpg">
        </div>
      </div>

      <div class="company">
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
                <th>設立：</th>
                <td>2015年12月10日</td>
              </tr>
              <tr>
                <th>代表取締役：</th>
                <td>田中 真美子</td>
              </tr>
              <tr>
                <th>事業内容：</th>
                <td>オーガニック食品の生産、サステナブル商品の開発、オーガニック食品・サステナブル商品の販売</td>
              </tr>
            </tbody>
          </table>
          <p class="other">サステナブル商品は、環境への影響を抑え、倫理的に生産されています。再生可能資源やリサイクル素材を使用し、持続可能な未来を支援します。</p>
          <p class="reception">受付時間 : 火曜日を除く 10:00〜18:00
          </p>
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.57409645012!2d139.74810705000002!3d35.65761795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbe9029c3ff%3A0x6b5cf959a2346d3f!2z44CSMTA1LTAwMTEg5p2x5Lqs6YO95riv5Yy66Iqd5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1727569856349!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </section>



  </main>

  <?php get_footer(); ?>
