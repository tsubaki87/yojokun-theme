document.addEventListener("DOMContentLoaded", function () {

  function resizeWindow() {
    // console.log('Resize');
    const windowWidth = window.outerWidth;
    const scroll = window.pageYOffset;
    // console.log(windowWidth);
    // console.log(scroll);
  }
  window.onresize = resizeWindow;

  const search_field = document.querySelector('.searchform');
  $('.fix-search-btn').click(function () {
    $('.searchform').toggleClass('form-set');
    $('.fix-search-glass').toggleClass('search-delete');
    $('.fix-angle-right').toggleClass('angle-right-appear');
  })

}, false);

document.addEventListener("scroll", function () {
  const windowWidth = window.outerWidth;
  const scroll = window.pageYOffset;
  const documentHeight = document.documentElement.offsetHeight;
  const clientHeight = document.documentElement.clientHeight;
  // const fixMenue = document.querySelector("#fix-menu-id");
  const fixMenue = document.querySelector(".fix-menu");
  // console.log(scroll);
  // if (scroll < 91) {
  //   if (windowWidth <= 650) {
  //   } else if (windowWidth <= 991) {
  //   }
  //   fixMenue.style.top = "-50px";
  // } else if (scroll > 90) {
  //   fixMenue.style.top = "30px";
  // } else if (checked === null) {
  //   fixMenue.style.top = "-50px";
  // }

  // page-top 
  const page_top = document.querySelector("#page_top");
  if (scroll < 91) {
    page_top.style.bottom = "-100px";
  } else {
    page_top.style.bottom = "0px";
  }

  // fixed-header 
  const masthead = document.querySelector("#masthead");
  if (scroll > 53) {
    masthead.classList.add("moved");
  } else {
    masthead.classList.remove("moved");
  }


  page_top.addEventListener('click', function () {
    const position = 0 - scroll;
    $('body,html').stop().animate({ scrollTop: position }, 600);
    return false;
  });


  // cat-story evning-color
  offsetHeight = documentHeight - clientHeight;
  documentBottom = offsetHeight - scroll;
  // console.log(documentBottom);
  if ($('article').hasClass('category-story')) {
    if (scroll > 120 && documentBottom > 60) {
      $('.site-main').addClass('evening');
      $('.site-main').removeClass('daytime');
    } else {
      $('.site-main').removeClass('evening');
      $('.site-main').addClass('daytime');
    }
  }


}, false);



// visiting marker
document.addEventListener("DOMContentLoaded", function () {
  pagenow = location.href;
  var ele = document.getElementById('primary-menu');
  // console.log(ele);
  let anchors = ele.querySelectorAll('a');
  let anchorArr = [[], []];
  let lists = ele.querySelectorAll('li');
  let listidArr = [];
  n = 0;
  for (li of lists) {
    listidArr.push(li.getAttribute('id'))
  }
  for (a of anchors) {
    anchorArr.push(a.getAttribute("href"))
    if (a.getAttribute("href") === pagenow) {
      // console.log('ok');
      let element = document.getElementById(listidArr[n]);
      element.classList.add("current");
    }
    n++;
  }
  // console.log(anchorArr);
  // console.log(listidArr);
}, false);

// Inview ===== 
// 単発ーーーーー
$(function () {
  $(".js-fadeUp, .js-fadeR, .js-fadeL").on("inview", function () {
    $(this).addClass("is-inview");
  });
});
// 複数 時間差ーーーーー
$(function () {
  $(".js-fadeUp-wrap").on("inview", function () {
    $(this).find('.js-fadeUp-child').each(function (i) {
      $(this).delay(100 * i).queue(function () {
        $(this).addClass('is-inview').dequeue();
      });
    });
  });
  // 大きく遅らせる場合
  $(".js-fadeUp-wrap-delay").on("inview", function () {
    $(this).find('.js-fadeUp-child').each(function (i) {
      $(this).delay(100 * i).queue(function () {
        $(this).addClass('is-inview-delay').dequeue();
      });
    });
  });
});
// Inview ===== end



// // home TOP animation =====
// $(function () {
//   const CLASSNAME01 = "-visible";
//   const CLASSNAME02 = "none";
//   const CLASSNAME03 = "diasbled";
//   const CLASSNAME04 = "not-scroll";
//   const TIMEOUT01 = 2000;
//   const TIMEOUT02 = 3000;
//   const $target = $(".top-bg");
//   const $target02 = $(".top-bg-back");
//   const $target04 = $("body");
//   const $skip = $(".skip");
//   const cookie = document.cookie;
//   // console.log(cookie);
//   // document.cookie = "msg=skip; max-age=0"; // cookie削除

//   $skip.on('click', function () {
//     $target.addClass(CLASSNAME03);
//     $target02.addClass(CLASSNAME03);
//     $target04.removeClass(CLASSNAME04);
//     document.cookie = "msg=skip";
//   });

//   if (cookie == "msg=skip") {
//     $target.addClass(CLASSNAME03);
//     $target02.addClass(CLASSNAME03);
//     $target04.removeClass(CLASSNAME04);
//   } else if ($target.length == 1) {
//     $target04.addClass(CLASSNAME04);
//     setTimeout(function () {
//       $target.addClass(CLASSNAME01);
//       setTimeout(function () {
//         // console.log("これは3秒後に表示されます");
//         setTimeout(() => {
//           $target.removeClass(CLASSNAME01);
//           $target02.addClass(CLASSNAME02);
//         },
//           TIMEOUT01);
//         setTimeout(() => {
//           $target.addClass(CLASSNAME03);
//           $target02.addClass(CLASSNAME03);
//           $target04.removeClass(CLASSNAME04);
//         },
//           TIMEOUT02);
//       }, 3000);
//     }, 1500);
//   }
// });
// // home TOP animation ===== end


// // home TOP animationi-ekiken ===== クッキー使用
// $(function () {
//   const CLASSNAME01 = "-visible";
//   const CLASSNAME02 = "none";
//   const CLASSNAME03 = "diasbled";
//   const CLASSNAME04 = "not-scroll";
//   const TIMEOUT01 = 2000;
//   const TIMEOUT02 = 3000;
//   const $target = $(".top-bg");
//   const $target02 = $(".top-bg-back");
//   const $target04 = $("body");
//   const $skip = $(".skip");
//   const cookie = document.cookie;
//   // console.log(cookie);
//   // document.cookie = "msg=skip; max-age=0"; // cookie削除

//   $skip.on('click', function () {
//     $target.addClass(CLASSNAME03);
//     $target02.addClass(CLASSNAME03);
//     $target04.removeClass(CLASSNAME04);
//     document.cookie = "msg=skip";
//   });

//   if (cookie == "msg=skip") {
//     $target.addClass(CLASSNAME03);
//     $target02.addClass(CLASSNAME03);
//     $target04.removeClass(CLASSNAME04);
//   } else if ($target.length == 1) {
//     $target04.addClass(CLASSNAME04);
//     setTimeout(function () {
//       $target.addClass(CLASSNAME01);
//       setTimeout(function () {
//         // console.log("これは20秒後に表示されます");
//         setTimeout(() => {
//           $target.removeClass(CLASSNAME01);
//           $target02.addClass(CLASSNAME02);
//         },
//           TIMEOUT01);
//         setTimeout(() => {
//           $target.addClass(CLASSNAME03);
//           $target02.addClass(CLASSNAME03);
//           $target04.removeClass(CLASSNAME04);
//         },
//           TIMEOUT02);
//         // }, 22000); // 4秒間隔
//       }, 42000); // 10秒間隔
//     }, 1500);
//   }
// });
// // home TOP animation-ekiken ===== end


// // home TOP animationi-ekiken ===== jsセッション 使用
// $(function () {
//   const CLASSNAME01 = "-visible";
//   const CLASSNAME02 = "none";
//   const CLASSNAME03 = "diasbled";
//   const CLASSNAME04 = "not-scroll";
//   const TIMEOUT01 = 2000;
//   const TIMEOUT02 = 3000;
//   const $target = $(".top-bg");
//   const $target02 = $(".top-bg-back");
//   const $target04 = $("body");
//   const $skip = $(".skip");

//   const $topmessage = $(".site-branding");
//   $topmessage.on('click', function () {
//     sessionStorage.removeItem('concept'); // セッション削除
//   });
//   var tomessage = sessionStorage.getItem('concept');
//   // console.log(tomessage);

//   $skip.on('click', function () {
//     $target.addClass(CLASSNAME03);
//     $target02.addClass(CLASSNAME03);
//     $target04.removeClass(CLASSNAME04);
//     sessionStorage.setItem('concept', 'skip'); // セッション開始
//   });

//   if (tomessage == "skip") {
//     $target.addClass(CLASSNAME03);
//     $target02.addClass(CLASSNAME03);
//     $target04.removeClass(CLASSNAME04);
//   } else if ($target.length == 1) {
//     $target04.addClass(CLASSNAME04);
//     setTimeout(function () {
//       $target.addClass(CLASSNAME01);
//       setTimeout(function () {
//         // console.log("これは20秒後に表示されます");
//         setTimeout(() => {
//           $target.removeClass(CLASSNAME01);
//           $target02.addClass(CLASSNAME02);
//         },
//           TIMEOUT01);
//         setTimeout(() => {
//           $target.addClass(CLASSNAME03);
//           $target02.addClass(CLASSNAME03);
//           $target04.removeClass(CLASSNAME04);
//         },
//           TIMEOUT02);
//         // }, 22000); // 4秒間隔
//       }, 42000); // 10秒間隔
//     }, 1500);
//   }
// });
// // home TOP animation-ekiken ===== end

// home TOP animationi-ekiken ===== jsセッション 使用 ===== dev skip/more/stop
$(function () {
  // $(".site-branding").on('click', function () {
  $("#menu-item-1970, .menu-item-1970").on('click', function () {
    sessionStorage.removeItem('concept'); // セッション削除 開発サイト
  });
  $("#menu-item-2226, .menu-item-2226").on('click', function () {
    sessionStorage.removeItem('concept'); // セッション削除 yojo.org 本番サイト
  });
  var tomessage = sessionStorage.getItem('concept');
  // console.log(tomessage);

  $(".skip").on('click', function () {
    $(".top-bg").addClass("diasbled");
    $(".top-bg-back").addClass("diasbled");
    $("body").removeClass("not-scroll");
    sessionStorage.setItem('concept', 'skip'); // セッション開始
  });

  if (tomessage == "skip") {
    $(".top-bg").addClass("diasbled");
    $(".top-bg-back").addClass("diasbled");
    $("body").removeClass("not-scroll");
  } else if ($(".top-bg").length == 1) {
    $("body").addClass("not-scroll");

    setTimeout(function () {
      // console.log("settime-00");

      $(".top-bg").addClass("-visible");
      setTimeout(function () {
        // console.log("settime-00-02");
        $(".skip_wrap").addClass("on");

        $(".more").on('click', function () {
          // console.log("more");
          $(".top-title span:nth-child(2), .top-title span:nth-child(3), .top-title span:nth-child(4), .top-title span:nth-child(5)").css({ 'opacity': '1', 'transform': 'translate(0, 0)' });
          $(this).addClass("available");
        });

        const wait = function (seconds) {
          return new Promise(function (resolve) {
            setTimeout(resolve, seconds * 1000);
          });
        };
        wait(0)　// 待つ秒
          .then(() => {
            $(".top-title span:nth-child(1)").css({ 'opacity': '1', 'transform': 'translate(0, 0)' });
            return wait(2.5); //待つ秒
          })
          .then(() => {
            $(".top-title span:nth-child(2)").css({ 'opacity': '1', 'transform': 'translate(0, 0)' });
            return wait(10);
          })
          .then(() => {
            $(".top-title span:nth-child(3)").css({ 'opacity': '1', 'transform': 'translate(0, 0)' });
            return wait(10);
          })
          .then(() => {
            $(".top-title span:nth-child(4)").css({ 'opacity': '1', 'transform': 'translate(0, 0)' });
            return wait(5);
          })
          .then(() => {
            $(".top-title span:nth-child(5)").css({ 'opacity': '1', 'transform': 'translate(0, 0)' });
          });

        let timerId = setTimeout(function () {
          // console.log("settime-01");
          $(".top-title, .skip_wrap").css({ 'opacity': '0', 'transition': 'all 1.5s ease 0s' });
          setTimeout(() => {
            // console.log("settime-02");
            $(".top-bg").removeClass("-visible");
            $(".top-bg-back").addClass("none");
            setTimeout(() => {
              // console.log("settime-03");
              $(".top-bg").addClass("diasbled");
              $(".top-bg-back").addClass("diasbled");
              $("body").removeClass("not-scroll");
            }, 3000);
          }, 2000);
        }, 35000);

        $(".pose").on('click', function () {
          // console.log("pose");
          clearTimeout(timerId);
          $(this).addClass("available");
        });

      }, 2000);
    }, 1500);
  }
});
// home TOP animation-ekiken ===== end
// home TOP animationi-ekiken ===== jsセッション 使用 ===== dev skip/more/stop end


// スムーズスクロール =====
$(function () {
  $('a[href^="#"]').click(function () {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});
// スムーズスクロール ===== end


// 1文字ずつ出現させる ============================== 
$(function () {
  function EachTextAnimeControl() {
    $(".eachTextAnime").on("inview", function () {
      var text_count = $(this).children("span").length;
      // console.log(text_count);
      // $(this).children('span').css({ 'animation-duration': text_count * 0.1 }); // Error
      setTimeout(() => {
        if (!$(this).hasClass('fine')) {
          $(this).addClass("appeartext");
          // console.log('hello');
          setTimeout(() => {
            if ($(this).hasClass('appeartext')) {
              $(this).removeClass("appeartext");
              $(this).addClass("fine");
              // console.log('bye');
            }
          }, text_count * 100); // 文字数*100 cssも同様
        } else {
          // $(this).removeClass("appeartext");
        }
      }, "1500");
    });
  }
  $(window).scroll(function () {
    //spanタグを追加する
    var element = $(".eachTextAnime");
    element.each(function () {
      var text = $(this).text();
      var text_count = $(this).children("span").length;
      var textbox = "";
      text.split('').forEach(function (t, i) {
        if (t !== " ") {
          if (i < 10) {
            textbox += '<span style="animation-delay:.' + i + 's;" class="text-len-' + text_count + '">' + t + '</span>';
          } else {
            var n = i / 10;
            textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
          }
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);
    });
    EachTextAnimeControl();/* アニメーション用の関数を呼ぶ*/
  });
});
// 1文字ずつ出現させる ============================== end






// trigger_pin ============================== 
document.addEventListener("DOMContentLoaded", function () {
  // if (location.href === 'https://yojo.personanews.net/') { //dev-サイト
  if (location.href === 'https://yojokun.org/') {
    // console.log('TOPページです');

    gsap.registerPlugin(ScrollTrigger);

    // Top-img 
    const topimgTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".top_img__wrap",
        start: "top top",
        end: "+=900",
        scrub: true,
        pin: true,
      },
    });

    // Top-copy 
    const topTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".top",
        start: "top top",
        end: "+=900",
        scrub: true,
        pin: true,
      },
    });
    topTl.fromTo(
      ".top_title",
      {
        opacity: 0,
        scale: 0.2,
      },
      { opacity: 1, scale: 1, ease: "Power4.out" }
    );
    topTl.to(".top_title_innerLeft", {
      x: -innerWidth / 1.5,
    });
    topTl.to(
      ".top_title_innerRight",
      {
        x: innerWidth / 1.5,
      },
      "<"
    );

    // Top-logo 
    const toplogoTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".logo",
        start: "top top",
        end: "+=10",
        scrub: true,
        pin: true,
      },
    });

    // topbtn 
    const topbtnTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".topbtn",
        start: "top top",
        end: "+=900",
        scrub: true,
        pin: true,
      },
    });

    // attraction
    const topattractionTl = gsap.timeline({
      scrollTrigger: {
        trigger: ".attraction",
        start: "top top",
        end: "+=900",
        scrub: true,
        pin: true,
      },
    });


    // // 説明コンテンツ

    // ScrollTrigger.create({
    //   trigger: ".article_image",
    //   start: "top 80",
    //   endTrigger: ".article_text",
    //   end: `center 40%`,
    //   pin: true,
    //   pinSpacing: false,
    // });

    // // カード
    // const cardTl = gsap.timeline({
    //   scrollTrigger: {
    //     trigger: ".cardSection",
    //     start: "top top",
    //     pin: true,
    //     end: `+=${innerHeight}`,
    //     scrub: 0.5,
    //   },
    // });

    // const target = document.querySelector(".cards");
    // cardTl.to(target, {
    //   delay: 0.1,
    //   x: -target.clientWidth + innerWidth - 120,
    //   ease: "none",
    // });

    // window.addEventListener("load", () => {
    //   ScrollTrigger.refresh();
    // });

  } // if TOPページならば

}, false);
// trigger_pin ============================== end

// // trigger-scrub ============================== 
// document.addEventListener("DOMContentLoaded", function () {
// 
//   gsap.registerPlugin(ScrollTrigger);
// 
//   // 上のスクロールインジケーター
//   const barTl = gsap.timeline({
//     scrollTrigger: {
//       trigger: "body",
//       start: "top top",
//       end: "bottom bottom",
//       scrub: true,
//     },
//   });
//   barTl.fromTo(".header-line_inner", { width: 0 }, { width: "100%" });
// 
//   //トップの画像パララックス
//   const topTl = gsap.timeline({
//     scrollTrigger: {
//       trigger: ".top",
//       start: "top top",
//       end: "bottom top",
//       scrub: 1,
//     },
//   });
//   // ラベルについて https://greensock.com/docs/v3/GSAP/Timeline/addLabel()
//   // アニメーションの実行タイミングの基準点になります
//   topTl.addLabel("topLabel")
//   document.querySelectorAll(".top_title span").forEach((el, index) => {
//     console.log(el)
//     topTl.to(el, {
//       y: -50,
//       duration: 0.1
//     }, `topLabel+=${index / 20}`)
//   })
//   topTl.to(".top_image", {
//     backgroundPositionY: 50,
//     duration: 1
//   }, "topLabel");
// 
//   // 下部
//   ScrollTrigger.create({
//     trigger: ".bottom",
//     start: "top 50%",
//     toggleClass: "is-crossed",
//   });
//   const bottomTl = gsap.timeline({
//     scrollTrigger: {
//       trigger: ".bottom",
//       start: "top bottom",
//       end: "center center",
//       scrub: 1,
//     },
//   });
//   bottomTl
//     .fromTo(
//       ".js-bottom_left",
//       {
//         xPercent: -30,
//         yPercent: 0,
//         opacity: 0,
//       },
//       {
//         xPercent: 40,
//         yPercent: 100,
//         opacity: 1,
//       }
//     )
//     .fromTo(
//       ".js-bottom_right",
//       {
//         xPercent: 200,
//         yPercent: 0,
//         opacity: 0,
//       },
//       {
//         xPercent: 150,
//         yPercent: 100,
//         opacity: 1,
//       },
//       "<"
//     );
// 
//   // // カード
//   // document.querySelectorAll(".card").forEach((el) => {
//   //   const img = el.querySelector(".card_figure img");
//   //   const title = el.querySelector(".card_title");
//   //   const text = el.querySelector(".card_text");
//   //   const tl = gsap.timeline({
//   //     scrollTrigger: {
//   //       trigger: el,
//   //       start: "top 80p%",
//   //       end: `+=${window.innerHeight / 2}`,
//   //       scrub: 1,
//   //     },
//   //   });
//   //   tl.fromTo(
//   //     title,
//   //     { y: 50 },
//   //     {
//   //       y: 0,
//   //       ease: "none",
//   //       duration: 1,
//   //     },
//   //   );
//   //   tl.fromTo(
//   //     text,
//   //     { y: 50 },
//   //     {
//   //       y: 0,
//   //       ease: "none",
//   //       duration: 1,
//   //     },
//   //     "<"
//   //   );
//   //   tl.to(img, { scale: 1.2, ease: "none", duration: 2 }, "-=0.5");
//   // });
// 
// }, false);
// // trigger-scrub ============================== end



// // gogle_map_click_event ==============================
// // <div class="map_wrapper"><iframe src="https:***" width="640" height="480"></iframe></div> // "map_wrapper"が必要
// document.addEventListener("DOMContentLoaded", function () {
//   $(function () {
//     var map = $('iframe');
//     //あらかじめiframeにpointer-events:noneを掛け、マウスイベントを無効にしておく
//     map.css('pointer-events', 'none');
//     //一度クリックされたらマウスイベントを有効にする
//     $('.map_wrapper').click(function () {
//       map.css('pointer-events', 'auto');
//     });
//     //iframeからマウスが離れたら再度pointer-events:noneを効かせる
//     map.mouseout(function () {
//       map.css('pointer-events', 'none');
//     });
//   })
// }, false);
// // gogle_map_click_event ============================== end


// スムーズスクロール ============================== 
document.addEventListener("DOMContentLoaded", function () {
  $(function () {

    $('a[href^="#"]').click(function () {
      var speed = 800,
        href = $(this).attr("href"),
        target = $(href === "#" || href === "" ? 'html' : href),
        position = target.offset().top;
      $("html, body").animate({ scrollTop: position }, speed, "swing");
      return false;
    });

    // 別ページに飛んでも特定の位置まで正しくスクロールさせる ====================
    // $(function () {
    //   let pageHash = window.location.hash;
    //   if (pageHash) {
    //     let scrollToElement = $('[data-id="' + pageHash + '"]');
    //     if (!scrollToElement.length) return;
    //     $(window).on('load', function () {
    //       history.replaceState('', '', './');
    //       let locationOffset = scrollToElement.offset().top;
    //       let navigationBarHeight = $('.header').innerHeight();
    //       locationOffset = locationOffset - navigationBarHeight - 65;
    //       $('html, body').animate({
    //         scrollTop: locationOffset
    //       }, 300, 'swing');
    //     });
    //   }
    // });
    // $(function () {
    //   $('a[href*="#"]').on('click', function () {
    //     const scrollSpeed = 400;
    //     const navigationHeight = $(".header").innerHeight();
    //     const scrollToTarget = $(this.hash === '#' || '' ? 'html' : this.hash)
    //     if (!scrollToTarget.length) return;
    //     const scrollPosition = scrollToTarget.offset().top - navigationHeight - 105;
    //     $('html, body').animate({
    //       scrollTop: scrollPosition
    //     }, scrollSpeed, 'swing');
    //     return false;
    //   });
    // });
    // 別ページに飛んでも特定の位置まで正しくスクロールさせる ==================== end

  });
}, false);
// スムーズスクロール ============================== end


// site-navigation-fixed    Control checkbox for hamburger-btn-check on TOP-page ==============================
document.addEventListener("DOMContentLoaded", function () {
  let saveCheckbox = document.getElementById('hamburger-btn-check');

  // function valueChange(event) {
  //   if (saveCheckbox.checked) {
  //     console.log('選択されました');
  //   } else {
  //     console.log('解除');
  //   }
  // }
  // saveCheckbox.addEventListener('change', valueChange);

  const menuButtons = document.getElementsByClassName('current_page_item');
  Array.from(menuButtons).forEach((menuButton) => {
    menuButton.addEventListener('click', () => {
      console.log('クリック');
      saveCheckbox.checked = false;
    })
  });
}, false);
// site-navigation-fixed    Control checkbox for hamburger-btn-check on TOP-page ============================== end