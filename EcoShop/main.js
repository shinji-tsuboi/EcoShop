
// スライダー設定
$(function() {
  $('.main-visual').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1500,
    fade: true,
    dots: false,
    arrows: false,
    infinite: true,
  });
  // プログレスバー設定

  // スライドが切り替わるたびにプログレスバーをリセット
  $('.top-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    $('#js-progressBar').stop(true, true).css('width', '0%');
  });

  // スライドが開始されたらプログレスバーをアニメーション
  $('.top-carousel').on('afterChange', function(event, slick, currentSlide) {
    $('#js-progressBar').animate({ width: '100%' }, 5000, 'linear');
  });

  // 初回スライドの開始時にプログレスバーをアニメーション
  $('#js-progressBar').animate({ width: '100%'}, 5000, 'linear');
});

$(function () {
  $(".about-visual")
    // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
    .on("init", function () {
      $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
    })
    // 通常のオプション
    .slick({
      autoplay: true,
      fade: false,
      arrows: false,
      speed: 2000,
      autoplaySpeed: 4000, // 自動再生速度4000ミリ秒
      pauseOnFocus: false, // フォーカスで一時停止OFF
      pauseOnHover: false, // マウスホバーで一時停止OFF
      slidesToShow: 2,
      slidesToScroll: 2,
    })
    .on({
      // スライドが移動する前に発生するイベント
      beforeChange: function (event, slick, currentSlide, nextSlide) {
        // 表示されているスライドに"add-animation"のclassをつける
        $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
        // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
        $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
      },
      // スライドが移動した後に発生するイベント
      afterChange: function () {
        // 表示していないスライドはアニメーションのclassを外す
        $(".remove-animation", this).removeClass(
          "remove-animation add-animation"
        );
      },
    });
});

$(function () {
  $(".news").slick({
    vertical: true, // 縦スクロールを有効にする
    verticalSwiping: true, // 縦スワイプを有効にする
    slidesToShow: 1, // 一度に表示するスライドの枚数
    slidesToScroll: 1, // 一度にスクロールするスライドの枚数
    arrows: false, // 矢印を表示する
    autoplay: true, // 自動再生ON
    autoplaySpeed: 3000, // 自動再生の間隔
    speed: 1000, // スライドの速度
    pauseOnHover: true, // ホバーで一時停止
    draggable: false, // ドラッグでスクロールOFF
    swipe: true, // スワイプでスクロールON
  });
});

// タイトルfadein
document.addEventListener('scroll', function() {
  var title = document.querySelector('.title');
  var windowHeight = window.innerHeight;
  var titlePosition = title.getBoundingClientRect().top;

  // 画面の半分にタイトルが来たとき
  if (titlePosition < windowHeight / 1.3) {
    title.classList.add('visible');
  } else {
    title.classList.remove('visible');
  }
});
