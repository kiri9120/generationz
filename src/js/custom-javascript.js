// Add your custom JS here.

// ページ内リンク スムーススクロール
jQuery(document).ready(function(){
    jQuery('a[href^="#"]').not('#pagetop').on('click',function (e) {
        var href = jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery("html, body").animate({scrollTop:position}, 500, "swing");
        return false;
    });
});


jQuery(function(){
  var pagetop = jQuery('#pagetop');
  pagetop.hide();
  jQuery(window).scroll(function () {
     if (jQuery(this).scrollTop() > 100) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  pagetop.click(function () {
    jQuery('body, html').animate({ scrollTop: 0 }, 500);
     return false;
  });
});

// スクロールでnavbar着色
function FixedAnime() {
  var headerH = jQuery('#main-nav').outerHeight(true);
  var scroll = jQuery(window).scrollTop();
  if (scroll >= headerH) {
    jQuery('#main-nav').addClass('bg-dark');
  } else{
      jQuery('#main-nav').removeClass('bg-dark');
  }
}
jQuery(window).scroll(function () {
  FixedAnime();
});


jQuery(function () {
  jQuery(window).scroll(function () {
    jQuery(".fadein").each(function () {
      var elemPos = jQuery(this).offset().top; /* 要素の位置を取得 */
      var scroll = jQuery(window).scrollTop(); /* スクロール位置を取得 */
      var windowHeight = jQuery(window).height(); /* 画面幅を取得（画面の下側に入ったときに動作させるため） */
      if (scroll > elemPos - windowHeight) {
        /* 要素位置までスクロール出来たときに動作する */
        jQuery(this).addClass("effect-scroll");
      }
    });
  });
  jQuery(window).scroll();
});