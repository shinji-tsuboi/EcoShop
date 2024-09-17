$(document).ready(function() {
  // メニューボタンがクリックされたときの処理
  $(".openbtn").click(function () {
    $(this).toggleClass('active');
    $('.nav-sp').toggleClass('panelactive');
    $('.nav-menu-sp').toggleClass('panelactive');
  });

  // ナビメニュー内のリンクがクリックされたときの処理
  $('.nav-sp a').click(function() {
    $('.openbtn').removeClass('active');
    $('.nav-sp').removeClass('panelactive');
    $('.nav-menu-sp').removeClass('panelactive');
  });
});

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
});
$(function() {
  $('.main-visual-sp').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1500,
    fade: true,
    dots: false,
    arrows: false,
    infinite: true,
  });
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
      responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
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

$(window).on('scroll', function() {
  var scrollPosition = $(window).scrollTop(); // 現在のスクロール位置
  var windowHeight = $(window).height(); // ビューポートの高さ
  var threshold = 1.7 * windowHeight; // 200vh

  if (scrollPosition > threshold) {
    // スクロール位置がビューポートの高さを超えた場合
    $('#news').addClass('hidden');
  } else {
    // スクロール位置がビューポートの高さ以下の場合
    $('#news').removeClass('hidden');
  }
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

// モーダルを開く関数
document.querySelectorAll('.openModalButton').forEach(button => {
  button.onclick = function(event) {
    event.preventDefault(); // デフォルトのリンク動作をキャンセル
    const modalId = this.getAttribute('data-modal');
    const modal = document.getElementById(modalId);
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden'; // スクロールを無効にする
  }
});

// モーダルを閉じる関数
document.querySelectorAll('.close-button').forEach(button => {
  button.onclick = function() {
    const modalId = this.getAttribute('data-modal');
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
    document.body.style.overflow = 'auto'; // スクロールを有効に戻す
  }
});

// モーダルの外側をクリックして閉じる
window.onclick = function(event) {
  if (event.target.classList.contains('modal')) {
    const modal = event.target;
    modal.style.display = 'none';
    document.body.style.overflow = 'auto'; // スクロールを有効に戻す
  }
}
