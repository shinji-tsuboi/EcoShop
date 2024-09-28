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
          <img src="image/PC/about-slider (1).jpg">
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
        </div>
      </div>
    </section>



  </main>

  <?php get_footer(); ?>
