// #js-slider-1 ====================

$(function () {
  var $slider1 = $('#js-slider-1');

  $slider1.slick({
    arrows: false, // 前・次のボタンを表示しない
    speed: 1500,   // 画像切り替えにかかる時間（ミリ秒）
    dots: true, // ドットナビゲーションを表示する
    appendDots: $('.dots-1'), // ドットナビゲーションの生成位置を変更
    fade: true, // スライド切り替えをフェード
    autoplay: false, //自動再生させない
    slidesToShow: 1, // 表示させるスライド数
  });

  /*--- プログレスバー設定 -----------------------*/
  var
    time = 6, // 表示時間 秒
    $bar = $('#js-progressBar'),
    isPause,
    tick,
    percentTime;
  function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 10);
  }
  function interval() {
    if (isPause === false) {
      percentTime += 1 / (time + 0.1);
      $bar.css({
        width: percentTime + "%"
      });
      if (percentTime >= 100) {
        $slider1.slick('slickNext');
        startProgressbar();
      }
    }
  }
  function resetProgressbar() {
    $bar.css({
      width: 0 + '%'
    });
    clearTimeout(tick);
  }
  startProgressbar();

  // カーソルが乗ったら止める
  $slider1.on({
    // mouseenter: function () { isPause = true; },
    mouseenter: function () { isPause = false; },
    mouseleave: function () { isPause = false; }
  });

  // ドットがクリックされたら再発火(スライド切り替え前のイベント)
  $slider1.on('beforeChange', function (slick, currentSlide, nextSlide) {
    startProgressbar();
  });

});
// #js-slider-1 ==================== end


// #js-slider-2 ====================
$(function () {
  var $slider2 = $('#js-slider-2');

  $slider2.slick({
    arrows: false, // 前・次のボタンを表示しない
    speed: 2000,   // 画像切り替えにかかる時間（ミリ秒）
    dots: true, // ドットナビゲーションを表示する
    appendDots: $('.dots-1'), // ドットナビゲーションの生成位置を変更
    fade: true, // スライド切り替えをフェード
    autoplay: false, //自動再生させない
    slidesToShow: 1, // 表示させるスライド数
  });

  /*--- プログレスバー設定 -----------------------*/
  var
    time = 3, // 表示時間 秒
    $bar = $('#js-progressBar'),
    isPause,
    tick,
    percentTime;
  function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 10);
  }
  function interval() {
    if (isPause === false) {
      percentTime += 1 / (time + 0.1);
      $bar.css({
        width: percentTime + "%"
      });
      if (percentTime >= 100) {
        $slider2.slick('slickNext');
        startProgressbar();
      }
    }
  }
  function resetProgressbar() {
    $bar.css({
      width: 0 + '%'
    });
    clearTimeout(tick);
  }
  startProgressbar();

  // カーソルが乗ったら止める
  $slider2.on({
    // mouseenter: function () { isPause = true; },
    mouseenter: function () { isPause = false; },
    mouseleave: function () { isPause = false; }
  });

  // ドットがクリックされたら再発火(スライド切り替え前のイベント)
  $slider2.on('beforeChange', function (slick, currentSlide, nextSlide) {
    startProgressbar();
  });

});
// #js-slider-2 ==================== end


